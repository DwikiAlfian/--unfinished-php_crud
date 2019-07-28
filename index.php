<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Games List</title>
</head>
<body>
    <h2>List</h2>
    <br>
    <a href="tambah.php">Tambahkan Games</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Developer</th>
            <th>Release Date</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from games");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['genre']; ?></td>
                <td><?php echo $d['developer']; ?></td>
                <td><?php echo $d['release_date']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>