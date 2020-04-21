<div class="page-header">
    <h1>Tambah Pemilih</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post" action="?m=pemilih_tambah">
            <div class="form-group">
                <label>NIM <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nim" value="<?= $_POST['nim'] ?>" />
            </div>
            <div class="form-group">
                <label>Nama Pemilih <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_pemilih" value="<?= $_POST['nama_pemilih'] ?>" />
            </div>
            <div class="form-group">
                <label> Prodi</label>
                <input class="form-control" name="prodi"><?= $_POST['prodi'] ?></input>
            </div>
               <div class="form-group">
                <label> Semester</label>
                <input class="form-control" name="semester"><?= $_POST['semester'] ?></input>
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass" value="<?= $_POST['pass'] ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-info" href="?m=pemilih"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>