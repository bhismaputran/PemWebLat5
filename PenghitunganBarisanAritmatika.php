<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barisan Aritmatika</title>
    <link rel="stylesheet" type="text/css" href="../belajar-php/stylephp.css">
</head>
<body>
    <h1>Aplikasi <br/>Perhitungan Deret Aritmatika</h1>
    <div class="kotak_input">
        <p class="tulisan_input"><b>Silahkan Inputkan Bilangan</b></p>
    <form action="" method="post">

        <label>Barisan Aritmatika</label>
        <input type="text" name="ba" class="form_input" autocomplete="off" placeholder="Masukkan Baris Aritmatika">

        <label>Suku Pertama (a)</label>
        <input type="number" name="a" class="form_input" autocomplete="off" placeholder="Masukkan Suku Pertama (a)">

        <label>Nilai Beda (b)</label>
        <input type="number" name="b" class="form_input" autocomplete="off" placeholder="Masukkan Nilai Beda (b)">

        <label>Jumlah N</label>
        <input type="number" name="un" class="form_input" autocomplete="off" placeholder="Masukkan Jumlah N">

        <input type="submit" name="submit" class="tombol_submit" value="Hasil">

<?php 
if (isset($_POST['submit'])){
    $baris = $_POST['ba'];
    $suku1 = $_POST['a'];
    $suku2 = $_POST['b'];
    $suku_n = $_POST['un'];  

   $hasil1 = $suku_n - 1;
   $hasil2 = $hasil1 * $suku2;
   $hasil = $suku1 + $hasil2;
   echo '<br>';
   echo "<br/><center>Suku Ke- ".$_POST['un'] ;
   echo " dari Baris Aritmatika  " .$_POST["ba"] ;
   echo "  adalah  ";
   echo $hasil;
    
}
?>
        <br/>
        <br/>
        <center>
            <input type="reset" class="tombol_reset" value="Kosongkan Inputan">
        </center>
    </form>
    </div>
</body>
</html>