<?php
$conn= mysqli_connect("localhost","root","","ensak_events");
if(!$conn)
{
    die("echec de la connexion:".mysqli_connect_error());
}?>