<?php
    session_start();
    $Time = $_SESSION['Time'];
    $Usr = $_SESSION['Usr'];
    $Active = 0;
    $BodyHtml = "
        <div class='my-3'>
            <div class='card text-center'>
                <h1> Bienvenido $Usr </h1>
            </div>
        </div>
        ";
    include('shared/navbar/navbar.html');
    include('shared/navbar/navbar-2.html');
?>