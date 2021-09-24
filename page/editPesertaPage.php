<?php
	include '../component/sidebar.php';
	$id = $_GET['id'];
	$ambilData = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
	$data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >EDIT PESERTA</h4>
<hr>
<form action="" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name</label>
<input class="form-control" value="<?php echo $data['name'] ?>" id="name" name="name"  aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">NPM</label>
<input class="form-control" value="<?php echo $data['npm'] ?>" id="npm" name="npm"  aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Prodi</label>
<select class="form-select" value="<?php echo $data['prodi'] ?>" name="prodi" id="prodi">
<option value="Informatika">Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option>
<option value="Industri">Industri</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Username</label>
<input class="form-control" value="<?php echo $data['username'] ?>" id="username" name="username"  aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control"  name="password">
</div>

<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="register">Tambah Mahasiswa</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
        if(isset($_POST['register']))
        {
            $username = $_POST['username'];
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$name = $_POST['name'];
			$npm = $_POST['npm'];
			$prodi = $_POST['prodi'];

            $query = mysqli_query($con, "UPDATE users SET username='$username', password='$password', name='$name', npm='$npm', prodi='$prodi'
            WHERE id='$id'") or die(mysqli_error($koneksi));

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