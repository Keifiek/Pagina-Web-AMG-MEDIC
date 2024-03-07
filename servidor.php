<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $edad = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alergia = $_POST['alergia'];
    $afeccion = $_POST['afeccion'];
    $antecedentes = $_POST['antecedentes'];
    $consultorio = $_POST['consultorio'];
    
    echo "REGISTRO COMPLETADO";
}
else {
    echo "EL REGISTRO NO PUDO COMPLETARSE";
}
?>