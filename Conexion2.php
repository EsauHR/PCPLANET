<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
function Conectarse()
{
    if(!($link = mysql_connect("localhost","root","12345678")))
    {
        echo "Error conectando a la base de datos";
        echo $link;
    
    exit();
    }
    
    if(!mysql_select_db("proyecto",$link))
    {
        echo "Error seleccionando la base de datos.$link";
        exit();
    }
    
    return $link;
}
$link=Conectarse();
?>
