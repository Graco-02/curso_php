<?php 

/**
 * programa php para detectar datos del navegador
 * 
*/


$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];


echo "le ip es :".$ip."<br>";

if(strstr($browser,"Firefox")==true){
    echo " es firezox";
}else{
    echo "".$browser;
}


?>