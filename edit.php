<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h2>Edit Data</h2>
    <br>
    <br>

    <?php
    
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from games where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>

        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="name" value="<?php echo $d['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>
                        <input type="text" name="genre" value="<?php echo $d['genre'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Developer</td>
                    <td>
                        <input type="text" name="developer" value="<?php echo $d['developer'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Rilis</td>
                    <td>
                        <input type="date" name="date" value="<?php echo $d['release_date'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>
            </table>
        </form>

        <?php
    }
    ?>
</body>
</html>