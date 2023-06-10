<?php
session_start();

if(!isset($_SESSION["login"])){
  header("location: index.php");
  exit;
}


include 'backend/function.php';
$db = new database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
    <title>Tampilan 1</title>
</head>
<body>


<center>
    <br><br><table border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th class="mainJudul" colspan="10"><h2>Data Nilai Siswa</h2></th>
        </tr>
        <tr>
            <th class="kolomJudul">Nis</th>
            <th class="kolomJudul">Inggris</th>
            <th class="kolomJudul">Ngoding</th>
            <th class="kolomJudul">Matematika</th>
            <th class="kolomJudul">Agama</th>
            <th class="kolomJudul">Sejarah</th>
            <th class="kolomJudul">Indonesia</th>
            <th class="kolomJudul">Total</th>
            <th class="kolomJudul">Rata</th>
            <th class="kolomJudul">Aksi</th>
        </tr>
        <?php foreach($db->tampil_data() as $a):?>
            <?php
                $total = $a["Inggris"] + $a["Ngoding"] + $a["Matematika"] + $a["Agama"] + $a["Sejarah"] + $a["Indonesia"];
                $rata = $total / 6;
            ?>
            <tr>
                <td class="tableWahid"><?= $a["nis"]?></td>
                <td class="tableisnain"><?= $a["Inggris"]?></td>
                <td class="tableWahid"><?= $a["Ngoding"]?></td>
                <td class="tableisnain"><?= $a["Matematika"]?></td>
                <td class="tableWahid"><?= $a["Agama"]?></td>
                <td class="tableisnain"><?= $a["Sejarah"]?></td>
                <td class="tableWahid"><?= $a["Indonesia"]?></td>
                <td class="tableisnain"><?= $total?></td>
                <td class="tableWahid"><?= number_format($rata, 2)?></td>
                <td class="tableHapus">
                    <a href="backend/proses.php?nis=<?php echo $a['nis']; ?>&opsi=hapus" onclick="return confirm('yakin mau menghapus data?')">Hapus</a> 
                </td>
            </tr>
        <?php endforeach;?>
            <tr>
                <td class="kolomJudul" colspan="10"><center><a href="main.php">Input</a></td></center> 
            </tr>
    </table>
</center>
</body>
</html>
