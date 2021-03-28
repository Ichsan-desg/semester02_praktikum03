<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Daftar BMI</title>
    <style>
    thead {
        background: seashell;
    }
    tbody {
        background: skyblue;
    }
    </style>
</head>
<body>
<?php
require_once "class_bmipasien.php";
$kirim = $_GET['kirim'];
$nama = $_GET['nama'];
$berat = $_GET['berat']; // Berat
$tinggi = $_GET['tinggi']; // Tinggi
$umur = $_GET['umur'];
if (isset($_GET['jenis_kelamin'])) {
    $jenis_kelamin=$_GET['jenis_kelamin'];   // Type Radio
}
$convert_t = $tinggi * 0.01;
$BmiPasien = new BmiPasien($berat, $convert_t );
$Hasil_Bmi = round($BmiPasien->hasil_mbi(),1); // Hasil_Bmi
$status = ($BmiPasien->status_mbi()); // Hasil_Status
?>

<table class="table table-bordered">
<div class="posisi">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Umur</th>
            <th>Berat(Kg)</th>
            <th>Tinggi(Cm)</th>
            <th>BMI/th></th>
            <th>Hasil</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $jenis_kelamin; ?></td>
			<td><?php echo $umur; ?></td>
            <td><?php echo $berat; ?></td>
            <td><?php echo $tinggi; ?></td>
            <td><?php echo $Hasil_Bmi; ?></td>
            <td><?php echo $status; ?></td>
		</tr>
	</tbody>
    </div>
</table>

</body>
</html>
