<h2> List Mahasiswa</h2>
<table border="1">
	<!--Membuat tabel -->
	<tr> <th> NO </th> <th> NIM </th> <th> NAMA </th> <th> GENDER </th> <th> JURUSAN </th> <th> ALAMAT </th>
	<?php
	include 'koneksi.php';
	// koneksi.php
	$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
	$no = 1;
	foreach ($mahasiswa as $row) {
		// perulangan
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki Laki';
		//variabel jenis kelamin
		echo
		//menampilkan data-data dari database
		"<tr>
		<td> $no </td>
		<td>".$row['nim']." </td>
		<td>".$row['nama']." </td>
		<td>".$jenis_kelamin." </td>
		<td>".$row['jurusan']." </td>
		<td>".$row['alamat']." </td>
			</tr>";
		$no++;
	}
	?>

</table>
