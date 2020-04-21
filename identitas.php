<?php
$row = $db->get_row("SELECT * FROM tb_pemilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<div class="container"><BR><BR><BR><BR><BR>
    <div class="panel panel-primary ">
        <div class="panel-heading">
             <h1>Data Identitas Pemilih KPUK</h1>
        </div>
            <div class="page-header">
   
</div>
<table class="table table-bordered">
    <tr>
        <td>Nama Pemilih</td>
        <td><?= $row->nama_pemilih ?></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td><?= $row->nim ?></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><?= $row->prodi ?></td>
    </tr>
    <tr>
        <td>Semester</td>
        <td><?= $row->semester ?></td>
    </tr>
    <tr>
        <td>Kata Sandi</td>
        <td><?= $row->pass ?></td>
    </tr>
</table>
<?php
$sekarang = time();
$batas = mktime(24, 0, 0);

if ($sekarang > $batas) : ?>
    <p>Maaf pemilihan berakhir pukul <?= date('H-i-s', $batas) ?> WIB</p>
<?php else : ?>
    <a class="btn btn-primary form-control" href="?m=tanda_terima&act=pilih">Lanjutkan <span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif; ?><BR>
        </div>
    </div>
</div>
