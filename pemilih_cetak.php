<h1>Data Mahasiswa Pemilih </h1>
<table>
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="150">NIM</th>
            <th width="300">Nama Pemilih</th>
            <th width="200">PRODI</th>
            <th>Semester</th>
            <th>Password</th>
        </tr>
    </thead>
    <?php
    $q = esc_field($_GET['q']);
    $rows = $db->get_results("SELECT * FROM tb_pemilih WHERE nama_pemilih LIKE '%$q%' ORDER BY id_pemilih");
    $no = 0;
    foreach ($rows as $row) : ?>
        <tr>
            <td align="center"><B><?= ++$no ?></B></td>
            <td><?= $row->nim ?></td>
            <td><?= $row->nama_pemilih ?></td>
            <td><?= $row->prodi ?></td>
             <td><?= $row->semester ?></td>
            <td><B><?= $row->pass ?></B></td>
        </tr>
    <?php endforeach;
    ?>
</table>