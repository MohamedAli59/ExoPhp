<?php
require('fonction.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

number(25);
input(5);



 $array = array(
                  array('name' => 'nom', 'type' => 'text', 'class' => 'modal' ),
array('name' => 'prenom', 'type' => 'text', 'class' =>'modal' ),
array('name' => 'valider', 'type' => 'submit', 'class' =>'btn')
);
?>
<form>
    <?php
  createForm($array);
 ?>

</form>


</body>
</html>