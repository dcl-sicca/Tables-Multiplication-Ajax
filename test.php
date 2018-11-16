<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <BODY> 
        <?PHP // Récupération de la date 
            // et stockage dans une variable 
        $MaDate = date("Y"); echo "Nous sommes en $MaDate";
        ?>
        <br>
        <?PHP echo "Chaine de caracteres"; echo (1+2)*87; ?> 
        <br>
        <?PHP print("Chaine de caracteres"); print ((1+2)*87); ?>
        <br>
        <?PHP ?>
        <?PHP $Pi = 3.1415927; $R = 24.546; $Perimetre = 2 * $Pi * $R; printf ("Le périmètre du cercle est %d",$Perimetre); ?>

        <?php echo '<script>console.log("Bonjour le monde")</script>';?>
        <script>console.log(<?php echo $MaDate;?>);</script>
        <br>
        <?PHP printf ("Le périmètre du cercle est %f",$Perimetre);?>
    </BODY> 
</HTML>