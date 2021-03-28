<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=PT+Sans+Narrow&family=Train+One&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Input</title>

  <style>
    body {
      display: flex;
      justify-content: center;
      align-content:center;
      margin-top: 7em;
      background:  #c3cfe2;
    }
    legend {
      font-family: 'PT Sans Narrow', sans-serif;
      display:flex;
      justify-content: center;
    }
    .kotak {
      border : 2px solid;
      padding: 20px;
      border-color: black;
      border-radius: 10px;
      background: linear-gradient(45deg, #f5f7fa  50%, #c3cfe2 50%);
  
     }
    .mb-3 {
      display : flex;
      flex-direction : row;
      justify-content: space-between;
    }
    .form-control {
      width: 13em;
      height : 2em;
    }
    .form-label {
      font-family: 'Hind', sans-serif;
    }
    .btn {
      background-color: transparent;
      border: 2px solid #e74c3c;
      border-radius: 0.6em;
      color: #e74c3c;
      cursor: pointer;
      display: flex;
      align-self: center;
      line-height: 1;
      text-decoration: none;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      margin-top: 7px;
    }
    .radio {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
<div class="kotak">
<legend>Forum Isian Indeks Massa Tubuh (BMI)</legend>
<hr/>
<form class="form-horizontal" method="GET" action="hal_bmipasien.php">
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Berat Badan</label>
    <input type="text" class="form-control" name="berat" >  
  </div>
  <div class="mb-3">
    <label  class="form-label">Tinggi Badan</label>
    <input type="text" class="form-control" name="tinggi" >
  </div>
  <div class="mb-3">
    <label class="form-label">Umur</label>
    <input type="text" class="form-control" name="umur" >
  </div>
  <div class="radio">
    <label  class="form-label">Jenis Kelamin</label>   
    <div class="radio1">
    <input type="radio" name="jenis_kelamin" value="laki-laki" /> 
    Laki - Laki
    <input type="radio" name="jenis_kelamin" value="perempuan" /> 
    Perempuan<br>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">submit</button>
</form>
<?php
$kirim = $_GET['kirim'];
$tinggi = $_GET['tinggi'];
$convert_t = $tinggi * 0.01;
?>
</body>
</html>