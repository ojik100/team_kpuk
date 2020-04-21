
<h1>Hasil Suara Data Calon BEM Fakultas Teknik Universitas Hamzanwadi</h1>
<table>
<thead>
    <tr>
        <th width="100">Kode</th>
        <th width="300" >Gambar</th>
        <th width="300">Nama Pencalon</th>

        <th width="200">Prodi</th>
        <th>semester</th>
        <th width="100"><b>Hasil Suara</b></th>
    </tr>
</thead>
<?php

        $q = esc_field($_GET['q']);
        $rows = $db->get_results("SELECT c.*, COUNT(p.ID) AS total FROM tb_pencalon c LEFT JOIN tb_pilih p ON p.id_pencalon=c.id_pencalon
        WHERE c.kode_pencalon LIKE '%$q%' 
            OR c.nama_pencalon LIKE '%$q%'
            OR c.prodi LIKE '%$q%'
            OR c.semester LIKE '%$q%'
        GROUP BY c.id_pencalon
        ORDER BY c.kode_pencalon");
        foreach ($rows as $row) :?>
           

<tr>
    <td align="center"><B><?=$row->kode_pencalon?></B></td>
    <td align="center"><img src="gambar/<?=$row->gambar?>" style="height: 100px;" /></td>
    <td><?=$row->nama_pencalon?></td>
    <td><?=$row->prodi?></td>
    <td><?=$row->semester?></td>
  <td align="center"><B><?= number_format($row->total) ?><B></td>
    
</tr>

<?php endforeach;
?>
</table>
<h4>Keterangan :</h4>