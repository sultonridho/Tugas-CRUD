<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nama'];
	$umur=$_POST['umur'];
	$pengalaman_pengemudi=$_POST['pengalaman_pengemudi'];
	$nomor_sim_aktif=$_POST['nomor_sim_aktif'];
	$kontak=$_POST['kontak'];

		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET nama='$name',umur='$umur',pengalaman_pengemudi='$pengalaman_pengemudi',nomor_sim_aktif='$nomor_sim_aktif',kontak='$kontak' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['nama'];
	$umur = $user_data['umur'];
	$pengalaman_pengemudi = $user_data['pengalaman_pengemudi'];
	$nomor_sim_aktif = $user_data['nomor_sim_aktif'];
	$kontak = $user_data['kontak'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php" class="btn-Home">Kembali ke Beranda</a>
	<link rel="stylesheet" href="style.css">
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Umur</td>
				<td><input type="text" name="umur" value=<?php echo $umur;?>></td>
			</tr>
			<tr> 
				<td>Pengalaman Pengemudi</td>
				<td><input type="text" name="pengalaman_pengemudi" value=<?php echo $pengalaman_pengemudi;?>></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type="text" name="kontak" value=<?php echo $kontak;?>></td>
			</tr>
			<tr> 
				<td>Nomor SIM Aktif</td>
				<td><input type="text" name="nomor_sim_aktif" value=<?php echo $nomor_sim_aktif;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>