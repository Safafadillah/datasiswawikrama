<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<button type="submit" name="kirim" value="kirim"><a href="session1.php">BACK</a></button>


    <?php 
session_start();
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>NAMA</th>';
    echo '<th>NIS</th>';
    echo '<th>RAYON</th>';
    echo '<th>AKSI</th>';
    echo '</tr>';

foreach($_SESSION['dataSiswa']  as $index => $value){
    echo '<tr>';
    echo '<td>' . $value['nama'] . '</td>';
    echo '<td>' . $value['nis'] . '</td>';  
    echo '<td>' . $value['rayon'] .'</td>';
    echo '<td>
    <a href="?hapus='.$index.'" class="btn btn-danger btn-sm">hapus</a></td>';
    echo '</tr>';
}

echo '</table>';

if(isset($_GET['hapus'])) {
    $index = $_GET['hapus'];
    unset($_SESSION['dataSiswa'][$index]);
    header('https://datasiswawikrama.000webhostapp.com/session1.php');
    exit;
}
    ?>
</body>
</html>