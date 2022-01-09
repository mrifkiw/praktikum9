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
    <link rel="stylesheet" href="output.css">
    <title>Praktikum 9</title>
</head>

<body>

    <nav class="bg-white border-gray-200 px-6 py-4 shadow">
        <div class="flex justify-between items-center">
            <span class="text-lg font-semibold">Karyawanku</span>
            <ul class="flex gap-4">
                <li>
                    <a href="/" class="nav-item target:bg-blue-600" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/tambah.php" class="nav-item target:bg-blue-600">Tambah Karyawan</a>
                </li>
            </ul>

        </div>
    </nav>


    <h1 class="flex justify-center py-10 font-sans font-medium text-2xl ">Daftar Karyawan</h1>

    <table class="mx-auto rounded-lg shadow">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="table-head-cell">
                    #
                </th>
                <th class="table-head-cell">
                    Name
                </th>
                <th class="table-head-cell">
                    Email
                </th>
                <th class="table-head-cell">
                    Address
                </th>
                <th class="table-head-cell ">
                    Gender
                </th>
                <th class="table-head-cell ">
                    Position
                </th>
                <th class="table-head-cell ">
                    Status
                </th>
                <th class="table-head-cell ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($karywawan as $item) : ?>
                <tr class="bg-white border-b">
                    <td class="table-row-cell"><?= $item["id"] ?></td>
                    <td class="table-row-cell"><?= $item["name"] ?></td>
                    <td class="table-row-cell"><?= $item["email"] ?></td>
                    <td class="table-row-cell"><?= $item["address"] ?></td>
                    <td class="table-row-cell"><?= $item["gender"] ?></td>
                    <td class="table-row-cell"><?= $item["position"] ?></td>
                    <td class="table-row-cell"><?= $item["status"] ?></td>
                    <td class="table-row-cell">
                        <a class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>



</body>

</html>