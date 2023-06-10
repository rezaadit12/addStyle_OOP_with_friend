<?php
session_start();

if(!isset($_SESSION["login"])){
  header("location: index.php");
  exit;
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Mapel</title>
  <link rel="stylesheet" href="style/style3.css">
</head>
<body>
  <div class="container">
    <div class="wrapper">
      <form action="backend/proses.php?opsi=tambah" method="post">
      <table  cellpadding="9" cellspacing="9">
      <h1 align="center">Input Nilai</h1>

        <tr>
          <td><b>NIS</b></td>
          <td><input type = "number" name = "nis"> </input></td>
        </tr>
        <tr>
          <td><label for="mapel1">Inggris </label></td>
          <td><input type="number" name="mapel1" id="mapel1" required></td>
        </tr>
        <tr>
          <td><label for="mapel2">Ngoding </label></td>
          <td><input type="number" name="mapel2" id="mapel2" required></td>
        </tr>
        <tr>
          <td><label for="mapel3">Matematika </label></td>
          <td><input type="number" name="mapel3" id="mapel3" required></td>
        </tr>
        <tr>
          <td><label for="mapel4">Agama </label></td>
          <td><input type="number" name="mapel4" id="mapel4" required></td>
        </tr>
        <tr>
          <td><label for="mapel5">Sejarah </label></td>
          <td><input type="number" name="mapel5" id="mapel5" required></td>
        </tr>
        <tr>
          <td><label for="mapel6">Indonesia </label></td>
          <td><input type="number" name="mapel6" id="mapel6" required></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Simpan">
            <a class="viewData" href="tampil2.php">Lihat Data</a>
            <a class="logout" href="backend/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </form>
    </div>
  </div>

</body>
</html>
