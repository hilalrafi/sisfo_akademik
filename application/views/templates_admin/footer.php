<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Menampilkan dataTable pada semua Menu
        $('#mytable').DataTable();

        //focusin ketika cursor berada di dalam textbox modal langsung aktif
        $(".pencarian").focusin(function() {
            $("#myModal").modal('show'); // fungsi untuk menampilkan modal
        });
        $('#dataSiswa').DataTable(); // fungsi ini untuk memanggil datatable
    });

    // fungsi untuk memindahkan data kolom yang di klik menuju text box
    function masuk(txt, id, nis, name) {
        document.getElementById('siswa_id').value = id; // berfungsi mengisi value  yang ber id siswa_id
        document.getElementById('detail_siswa').value = nis + " - " + name; // berfungsi mengisi value yang ber id detail_siswa
        $("#myModal").modal('hide'); // berfungsi untuk menyembunyikan modal
    }

    // fungsi untuk menghitung nilai akhir
    function nilai() {
        var nilai_tugas = document.getElementById('nilai_tugas').value;
        var nilai_uts = document.getElementById('nilai_uts').value;
        var nilai_uas = document.getElementById('nilai_uas').value;
        var result = parseInt((nilai_tugas * 0.3) + (nilai_uts * 0.35) + (nilai_uas * 0.35));
        if (!isNaN(result)) {
            document.getElementById('nilai_akhir').value = result;
        }
    }
</script>

</body>

</html>