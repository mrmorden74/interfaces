<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'interface.php';

?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$ignaz = new Orc();
$ignaz->fight();
$ignaz->move();
$gimli = new Dwarf();
$gimli->fight();
$gimli->move();
?>
</body>
</html>
