<?php
        //import config
        require('config.php');

        //fungsi untuk mengambil data dari database
        function query($query){
            global $mysqli;
            $data = mysqli_query($mysqli, $query);
            $mahasiswas = [];
            while( $mahasiswa = mysqli_fetch_assoc($data) ) {
                $mahasiswas[] = $mahasiswa;
            }
            return $mahasiswas;
        }

        //fungsi untuk menambah data
        function tambah($data){
            global $mysqli;

            //name, email, address, gender, position, status

            $name = $data["name"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];

            $query = "INSERT INTO karyawan(name, email, address, gender, position, status)
                    VALUES
                    ('$name', '$email', '$address', '$gender', '$position', '$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($mysqli, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($mysqli);
        }

        //fungsi untuk menghapus data
        function hapus($id){
            global $mysqli;
            mysqli_query($mysqli, "DELETE FROM karyawan WHERE id = $id");
            
            return mysqli_affected_rows($mysqli);
        }
?>