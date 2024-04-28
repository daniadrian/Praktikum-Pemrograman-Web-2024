<html>

<head>
    <title>Add Proker BEM</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <h2>Tambah Program Kerja BEM</h2>
                    <form method="post" action="">
                        <table>
                            <tr>
                                <td><label>Nomor Program Kerja</label></td>
                                <td><input type="text" name="nomor" value=""></td>
                            </tr>
                            <tr>
                                <td><label>Nama Program Kerja</label></td>
                                <td><input type="text" name="nama" value="">
                            </tr>
                            <tr>
                                <td><label>Surat Keterangan</label></td>
                                <td><input type="text" name="surat" value=""></td>
                            </tr>
                        </table>
                        <input type="submit" name="ins" value="Tambah">
                    </form>
                </td>
            </tr>
    </table>
</body>

</html>
<?php
if (isset($_POST['ins'])) {
    $control = new c_programKerja();
    $control->insert();
}
?>