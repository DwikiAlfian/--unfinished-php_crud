<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Games</title>
</head>
<body>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr>
                <td>Developer</td>
                <td><input type="text" name="developer"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>