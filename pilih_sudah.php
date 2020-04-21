<?php
$var = $db->get_var("SELECT tanda_terima FROM tb_pilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<div >
	<div class="col-md-offset-3 col-md-7">
		<div>
			<h2>Pemilihan Sukses<hr></h2>
</div>
<p>Hasil suara yang telah Anda masukkan telah tercatat pada sistem <B>KPUK FT-Universitas Hamzanwadi</B></p>
<a href="index.php" class="btn btn-warning">Kembali</a>
		</div>
	</div>
    