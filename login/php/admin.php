<?php

$couser=$_POST['userlog'];
$copass=$_POST['pswlog'];
$adminacc="admin";
$adminpass="xVU59Pr9u53YWdXv3eDY3996FXa4qB5rDz93s3tUreitK39GzQQkzPuHmZy894DKwLhy2X2ArE8NtC8jmq77U54B2mJyX35689Cw";

if($couser==$adminacc){
    if($copass==$adminpass){
        $contenu_du_fichier= file_get_contents("login.txt");
        echo "Voici les personnes qui ont remplis le formulaire : <br> $contenu_du_fichier";
    }else{
        echo "Wrong password !";
    }
}else{
    echo "Tu ne peux pas te connecter.";
}

?>