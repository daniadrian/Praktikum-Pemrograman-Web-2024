<html>

<head></head>

<body>
  <h2>Daftar Program Kerja BEM</h2>
  <table border="1" cellpadding='10' cellspacing='0'>
    <tbody>
      <tr>
        <th>No.</th>
        <th>Nama Program Kerja</th>
        <th>Surat Keterangan</th>
      </tr>
    </tbody>
    <?php
    foreach ($proker as $row) {
      echo "<tr>
<td> $row[nomorProgram]</td>
<td> $row[namaProgram]</td>
<td> $row[suratKeterangan]</td>
</tr> ";
    }
    ?>
  </table>
</body>

</html>