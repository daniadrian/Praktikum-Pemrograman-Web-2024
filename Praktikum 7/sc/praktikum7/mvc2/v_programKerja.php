<html>

<head>
  <title>List Proker BEM</title>
</head>

<body>
  <h2>Daftar Program Kerja BEM</h2>
  <table border="1" cellpadding='10' cellspacing='0'>
    <tbody>
      <tr>
        <th>No.</th>
        <th>Nama Program Kerja</th>
        <th>Surat Keterangan</th>
        <th colspan="2">Aksi</th>
      </tr>
    </tbody>
    <?php
    foreach ($proker as $row) {
      echo " <tr>
<td> $row[nomorProgram]</td>
<td> $row[namaProgram]</td>
<td> $row[suratKeterangan]</td>
<td><a href='?u=$row[nomorProgram]'>Edit </a></td>
<td><a href='?d=$row[nomorProgram]'>Hapus </a></td>
</tr> ";
    }
    ?>
  </table>
  <h3><input type="button" value="Tambah Proker" onclick="window.location.href='?i=1'"></h3>
</body>

</html>