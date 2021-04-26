<h2> List Kontak</h2>
<table border="1">
	<!--Membuat tabel-->
	<tr> <th> NO </th> <th> ID </th> <th> NAMA </th> <th> GENDER </th> <th> EMAIL </th> <th> ALAMAT </th> <th> KOTA </th> <th> PESAN </th> </tr>
	<?php
	include 'koneksi.php'; //koneksi.php
	$kontak = mysqli_query($koneksi, "SELECT * from kontak");
	//membuat variabel kontak
	$no = 1;
	foreach ($kontak as $row) {
		//perulangan
		echo //menampilkan data-data dari database
		"<tr>
		<td> $no </td>
		<td>".$row['id']." </td>
		<td>".$row['nama']." </td>
		<td>".$row['jkel']." </td>
		<td>".$row['email']." </td>
		<td>".$row['alamat']." </td>
		<td>".$row['kota']." </td>
		<td>".$row['pesan']." </td>
			</tr>";
		$no++;
	}
	?>

</table>
