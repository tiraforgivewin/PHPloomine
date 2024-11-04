<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>PHP tunnitööd</h1>
</header>
<?php
//navigeremismenüü
include('nav.php')
?>
<section>
    <?php
    if(isset($_GET["leht"])){
        include ('content/'.$_GET["leht"]);
    } else{
        echo "Tere tulemast";
    }
    ?>
</section>
<?php
echo '<br>';
echo '<br>';
echo "Aleksandr Nadvornoi &copy;";
echo date("Y");
?>

</body>
</html>
