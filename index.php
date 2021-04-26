<h2> List Mahasiswa</h2>
<table border="1"> <!-- untuk membuat table-->
  <tr><th> NO </th><th> NIM </th><th> NAMA </th><th> GENDER </th><th> JURUSAN </th><th> ALAMAT </th>
  <?php
  include 'koneksi.php'; //memasukkan file koneski.php
  $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); //membuat variabel mahasiswa
  $no = 1; //membuat variabel no
  foreach ($mahasiswa as $row) {
    $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-laki';
    echo
    "<tr>
    <td> $no </td>
    <td>".$row['nim']."</td>
    <td>".$row['nama']."</td>
    <td>".$jenis_kelamin."</td>
    <td>".$row['JURUSAN']."</td>
    <td>".$row['alamat']."</td>
      </tr>
    $no++;

  }
   ?>

</table>
