<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-file"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <span><b>Filter Raport</b></span>
    <form action="<?= base_url('raport/cari'); ?>" method="post">
        <table class="table">
            <tr>
                <td><label for="tahun_akademik_id">Tahun Akademik (Semester)</label></td>
                <td>
                    <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                        <?php foreach ($tahun_akademik as $rowAkademik) : ?>
                            <?php if ($rowAkademik->status == "Aktif") : ?>
                                <option value="<?= $rowAkademik->id ?>"><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="rombel_id">Nama Rombel</label></td>
                <td>
                    <select name="rombel_id" id="rombel_id" class="custom-select">
                        <?php
                        foreach ($rombel as $rowRombel) : ?>
                            <option value="<?= $rowRombel->id_rombel ?>"><?= $rowRombel->nama_rombel ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-sm btn-info mb-5"><i class="fas fa-search fa-sm"></i> Cari Data</button>
    </form>
</div>