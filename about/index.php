<?php include "../env.php" ?>
<?php include "../config.php" ?>
<?php include "../profile.php" ?>
<?php include "../auth.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../head.php" ?>
</head>

<body>
    <?php include "../navbar.php" ?>
    <div class="container h-100">
        <h2 class="text-center">About</h2>
        <?php foreach ($data as $a) { ?>
            <div class="row h-100 justify-content-center align-items-center">
                <img class="w-25" src="../images/avatar.png" alt="avatar generic image" class="profile-photo">
            </div>
            <div class="row h-100 justify-content-center align-items-center">
                <table>
                    <tr>
                        <td><b>Nama</b></td>
                        <td>: </td>
                        <td><?php echo $a['nama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>: </td>
                        <td><?php echo $a['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Lahir</b></td>
                        <td>: </td>
                        <td><?php echo $a['tanggal_lahir'] ?></td>
                    </tr>
                    <tr>
                        <td><b>Umur</b></td>
                        <td>: </td>
                        <td><?php echo hitungUmur($a['tanggal_lahir']) ?></td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <div class="row justify-content-center align-items-center pt-2">
            <a class="btn btn-danger" href="../logout.php">Logout</a>
        </div>

    </div>
</body>

</html>