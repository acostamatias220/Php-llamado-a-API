<?php
$name = "miguel";
$isDev = true; 
$age = 50;

define("LOGO_URL", 'https://img.freepik.com/vector-gratis/vector-degradado-logotipo-colorido-pajaro_343694-1365.jpg');

$output = "Hola $name, con una edad de $age años";
$outputAge = match (true){
    $age < 2 => "Eres un bebe, $name ",
    $age < 12 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age > 21 => "Eres un adulto, $name",
    $age > 60 => "Eres un adulto mayor, $name",
    default => "Eres un adulto, $name"
};

$bestLanguages = ["PHP", "JavaScript", "Python", "Java", "C#"];
$bestLanguages[] = "Java";

?>


