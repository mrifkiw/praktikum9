<?php

require 'crud.php';
$id = $_GET["id"];

//membuat alert menggunakan javascript
if( hapus($id) > 0) {
    //jika id ada pada database maka if ini jalan
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>