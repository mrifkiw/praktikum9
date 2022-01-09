<?php
require 'crud.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
        </script>";
    }
}

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

    <nav class="bg-white border-gray-200 px-6 sm:px-4 py-4 shadow">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Karyawanku</span>

            <div class="w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="/" class="nav-item target:bg-blue-600" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="tambah.php" class="nav-item target:bg-blue-600">Tambah Karyawan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <h1 class="flex justify-center py-10 font-sans font-medium text-2xl ">Tambah Karyawan</h1>


    <form class="w-1/4 mx-auto mb-20" action="" method="POST">
        <div class="mb-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-input" placeholder="Fulan" required="">
        </div>
        <div class="mb-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-input" placeholder="email@email.com" required="">
        </div>
        <div class="mb-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-input" placeholder="Jl.Nama jalan" required="">
        </div>
        <div class="mb-6">
            <label for="gender" class="form-label">Select your gender</label>
            <select name="gender" id="gender" class="form-input pb-4">
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="position" class="form-label">Select your position</label>
            <select name="position" id="position" class="form-input pb-4">
                <option>Frontend Web Dev</option>
                <option>Backend Web Dev</option>
                <option>Fullstack Web Dev</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="status" class="form-label">Select your status</label>
            <select name="status" id="status" class="form-input pb-4">
                <option>Fulltime</option>
                <option>Parttime</option>
            </select>
        </div>
        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 px-5 py-2.5 text-center rounded-lg">Submit</button>
    </form>




</body>

</html>