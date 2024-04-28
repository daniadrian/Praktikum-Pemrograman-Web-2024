<html>

<head>
    <title>Edit Proker BEM</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <h2> Edit Program Kerja BEM </h2>
                    <form method="post" action="#">
                        <input type="hidden" name="nomor" value="<?php echo
                                                                    $proker['nomorProgram'] ?>">
                        <table>
                            <tr>
                                <td><label>Nama Program
                                        Kerja</label></td>
                                <td><input type="text" name="nama" value="<?php echo
                                                                            $proker['namaProgram'] ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Surat
                                        Keterangan</label></td>
                                <td><input type="text" name="surat" value="<?php echo
                                                                            $proker['suratKeterangan'] ?>">
                                </td>
                            </tr>
                        </table><br>
                        <input type="submit" name="edit" value="Submit">
                    </form>
                </td>
            </tr>
    </table>
</body>

</html>
<?php
if (isset($_POST['edit'])) {
    $control = new c_programKerja();
    $control->update();
}
?>