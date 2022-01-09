<?php
require('crud.php');

$karywawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
</head>

<body>
    <h1>Daftar Karyawan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($karywawan as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["position"] ?></td>
                <td><?= $item["status"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
            </tr>
        <?php endforeach ?>
</body>

</html>