<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td colspan="7"> Tidak ada data </td>
                </tr>
            <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td></td>
                        <td><?= $a['nim']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="action">
                            <a href="#"><button class="btn-delete">Delete</button></a>
                            <a href="edit/<?= $a['nim']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
                <?php }
            } ?>
        </table>
    </div>
</main>
<?= $this->endSection(); ?>