<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<div class="container-fluid">

<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-6">        
        <div class="thumbnail">
        <h1 class="text-center">No.<?=$row->kode_pencalon?></h1>
            <img src="gambar/<?=$row->gambar?>" />
        </div>
        <h4 class="text-center"><?=$row->nama_pencalon?></h4>
        <a class="btn btn-primary form-control" href="aksi.php?act=pilih&ID=<?=$row->id_pencalon?>" onclick="return confirm('<?="Yakin memilih $row->nama_pencalon"?>')"><span class="glyphicon glyphicon-check"></span> Pilih</a>
            <h3>Visi</h3>
            <td><?=$row->visi?></td>
            <h3>Misi</h3>
            <td><?=$row->misi?></td>
    </div>
    <?php endforeach?>            
</div>
</div>

</div>
