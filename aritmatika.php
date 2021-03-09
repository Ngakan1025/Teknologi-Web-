<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barisan Aritmatika</title>
    <link rel="stylesheet" href="./PHP/stylephp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h3 style="margin: 15px;">Perhitungan Barisan Aritmatika<h3>
    <form method="POST" action="">
        <table style="width: 25%; margin: 15px;">
            <tr>
                <td>Bilangan Ke-1</td>
                <td>:</td>
                <td><input type="text" name="na" placeholder="Masukkan Bilangan Pertama" value="<?=isset($_POST['na']) ? $_POST['na']: ''?>"></td>
            </tr>
            <tr>
                <td>Bilangan Ke-2</td>
                <td>:</td>
                <td><input type="text" name="nb" placeholder="Masukkan Bilangan Kedua" value="<?=isset($_POST['nb']) ? $_POST['nb']: ''?>"></td>
            </tr>
            <tr>
                <td>Bilangan Ke-3</td>
                <td>:</td>
                <td><input type="text" name="nc" placeholder="Masukkan Bilangan Ke-N" value="<?=isset($_POST['nc']) ? $_POST['nc']: ''?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" style="margin-left: 15px;" value="Hasil"></input>
    </form>
    <?php
        if (isset ($_POST['submit'])) {
            $na = $_POST['na'];
            $nb = $_POST['nb'];
            $nc = $_POST['nc'];
            for ($i=1 ; $i<=$nc; $i++) {
                $hasil = $na + (($i-1) * $nb);
                echo "<br>".$hasil;
            }
            $hasilsuku = $na + ($nc-1) * $nb;
            echo "<br> <br> Nilai Suku ke- ". $nc;
            echo "<br>".$hasilsuku;
        }
    ?>
</body>
</html>