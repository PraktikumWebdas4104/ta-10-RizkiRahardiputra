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
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Genre</td>
					<td>:</td>
					<td><input type="checkbox" name="film" value="Horror" size="45"/>Horror</td>
					<td><input type="checkbox" name="film" value="Action" size="45"/>Action</td>
					<td><input type="checkbox" name="film" value="Anime" size="45"/>Anime</td>
					<td><input type="checkbox" name="film" value="Thriller" size="45"/>Thriller</td>
					<td><input type="checkbox" name="film" value="Animasi" size="45"/>Animasi</td>
				</tr>
					<tr align="center">
					<td>Travelling</td>
					<td>:</td>
					<td><input type="checkbox" name="travelling" value="Bali" size="45"/>Bali</td>
					<td><input type="checkbox" name="travelling" value="Raja Ampat" size="45"/>Raja Ampat</td>
					<td><input type="checkbox" name="travelling" value="Pulau Derawan" size="45"/>Pulau Derawan</td>
					<td><input type="checkbox" name="travelling" value="Bangka Belitung" size="45"/>Bangka Belitung</td>
					<td><input type="checkbox" name="travelling" value="Labuan Bajo" size="45"/>Labuan Bajo</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
		//panggil controller insert
	}
?>