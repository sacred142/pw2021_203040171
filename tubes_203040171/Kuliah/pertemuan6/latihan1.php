<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai array multidimensi dan cara pemanggilannhya
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }

        
    </style>
</head>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]]

?>





<?php foreach($angka as $a ) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>    
<?php endforeach; ?>



</body>
</html>