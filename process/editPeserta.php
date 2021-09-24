<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
            
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
		$id = $_GET['id'];
		
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];


        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
        "UPDATE users SET username='$username', password='$password', name='$name', npm='$npm', prodi='$prodi'
            WHERE id='$id'")
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo
            '<script> 
                alert("Edit Data Success "); window.location = "../page/listMahasiswaPage.php"
            </script>';

        } else{
            echo
            '<script>
                alert("Edit Data Failed");
            </script>';
        }
    }
?>




