<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'Password wajib diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('auth/login');
            $this->load->view('templates_admin/footer');
        } else {
            // validasi sukses
            $this->_login();
        }

        if (isset($this->session->userdata['username'])) {
            redirect('dashboard');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // jika user ada
        if ($user) {
            // jika user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'name' => $user['name'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id']) {
                        redirect('dashboard');
                    } else {
                        echo show_404();
                    }
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Akun Belum aktif!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('auth');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('name', 'name', 'trim|required', [
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'trim|required|min_length[3]|matches[password2]', [
            'required' => 'Password wajib diisi!',
            'min_length' => 'Password terlalu pendek',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'trim|required|matches[password1]', [
            'required' => 'Password wajib diisi!',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('nis', 'nis', 'required', [
            'required' => 'NIS wajib diisi!'
        ]);
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun akademik', 'required', [
            'required' => 'Tahun Akademik wajib diisi!'
        ]);
    }

    public function registration()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('auth/register');
            $this->load->view('templates_admin/footer');
        } else {
            $post = $this->input->post();
            $data = array(
                "username" => $post['username'],
                "password" => password_hash($post['password1'], PASSWORD_DEFAULT),
                "name" => $post['name'],
                "role_id" => 2,
                "is_active" => 1,
                "date_created" => time()
            );

            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Akun berhasil dibuat, Silahkan login!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function cari()
    {
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();

        $this->_rules();

        $this->load->view('templates_admin/header');
        $this->load->view('siswa/cari', $data);
        $this->load->view('templates_admin/footer');
    }

    public function list()
    {
        $post = $this->input->post();
        $nis = $post['nis'];
        $tahun_akademik = $post['tahun_akademik_id'];

        $siswa = $this->Model_siswa->getByNis($nis);

        $data['siswa'] = $siswa;
        $data['tahun_akademik'] = $this->Model_tahunakademik->getById($tahun_akademik);
        $data['rombel'] = $this->Model_rombel->getById($siswa->rombel_id);
        $data['report_siswa'] = $this->Model_nilai->getReportSiswa($siswa->id_siswa, $tahun_akademik);

        $this->load->view('siswa/list', $data);
    }
}
