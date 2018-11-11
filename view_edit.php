<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Genre</td>
					<td>:</td>
					<td><input type="checkbox" name="film" value="Horror<?=$row[5]?>" size="45"/>Horror</td>
					<td><input type="checkbox" name="film" value="Action<?=$row[5]?>" size="45"/>Action</td>
					<td><input type="checkbox" name="film" value="Anime<?=$row[5]?>" size="45"/>Anime</td>
					<td><input type="checkbox" name="film" value="Thriller<?=$row[5]?>" size="45"/>Thriller</td>
					<td><input type="checkbox" name="film" value="Animasi<?=$row[5]?>" size="45"/>Animasi</td>
				</tr>
				<tr align="center">
					<td>Travelling</td>
					<td>:</td>
					<td><input type="checkbox" name="travelling" value="Bali<?=$row[6]?>" size="45"/>Bali</td>
					<td><input type="checkbox" name="travelling" value="Raja Ampat<?=$row[6]?>" size="45"/>Raja Ampat</td>
					<td><input type="checkbox" name="travelling" value="Pulau Derawan<?=$row[6]?>" size="45"/>Pulau Derawan</td>
					<td><input type="checkbox" name="travelling" value="Bangka Belitung<?=$row[6]?>" size="45"/>Bangka Belitung</td>
					<td><input type="checkbox" name="travelling" value="Labuan Bajo<?=$row[6]?>" size="45"/>Labuan Bajo</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update($nim);
		//panggil controller update
	}
?>