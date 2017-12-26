<?php 
session_start();
?>

<form action="" method="get" name="teste">
    <input type="number" name="numero">
    <input type="submit" name="enviar" value="Enviar">
</form>



<?php

$variavel1 =  rand(0, 9);
$variave2 =   rand(0, 9);

echo "$variavel1 + $variave2 = X";
$soma=$variavel1+$variave2;
echo'<br>';
echo"$soma"; //8

if($_GET){
     

$_SESSION['soma']=$soma; //8
echo'<br>';
echo " GET: ".$_GET["numero"];

if($_GET["numero"]== $_SESSION['soma']){
    echo'<br>';    
    echo" ACERTOU";
  //  session_destroy();
    
}ELSE{
    echo'<br>';    
    echo 'ERROU';
    echo'<br>';
    echo"SESSÃO: ". $_SESSION['soma'];
   // session_destroy();
}

 
}
 
