<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Finonacci</title>
    <link rel="stylesheet" type="text/css" href="../belajar-php/stylephp.css">
</head>
<body>
    <h1>Aplikasi <br/>Perhitungan Deret Fibonacci</h1>
    <div class="kotak_input">
        <p class="tulisan_input"><b>Silahkan Inputkan Bilangan</b></p>
    <form action="" method="get">
        <label>Bilangan Deret Ke-1</label>
        <input type="number" name="bilanganke1" class="form_input" placeholder="Masukkan Bilangan Pertama">

        <label>Bilangan Deret Ke-2</label>
        <input type="number" name="bilanganke2" class="form_input" placeholder="Masukkan Bilangan Kedua">

        <label>Jumlah Deret Berikutnya</label>
        <input type="number" name="deret" class="form_input" placeholder="Masukkan Jumlah Deret Berikutnya">

        <input type="submit" class="tombol_submit" value="Hasil">

<?php
    $angka_sebelumnya = isset ($_GET['bilanganke1']) ? $_GET['bilanganke1']:'';
    $angka_sekarang = isset ($_GET['bilanganke2']) ? $_GET['bilanganke2']:'';
    $deret = isset ($_GET['deret']) ? $_GET['deret']:'';

    
    echo "<br/> <center>Hasilnya Adalah : <br/>$angka_sebelumnya $angka_sekarang";

    for ($i = 1; $i <= $deret; $i++) {
        $output = $angka_sekarang + $angka_sebelumnya;
        echo " $output";

        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
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

