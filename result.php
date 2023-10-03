<?php
require_once ("functions.php");
var_dump($_POST);
if ($_POST) {
    $name = $_POST ['fname'];
    if (empty($name)) {
        echo "</br> Nom vide";
    }
    else {
        echo "</br> Mon nom est : " . $name;
    }

    $nameLenghtIsValid = nameLenghtIsValid($_POST ['fname']);

echo '</br>';
var_dump ($nameLenghtIsValid);
if (!$nameLenghtIsValid ['isValid']) {

}
}
