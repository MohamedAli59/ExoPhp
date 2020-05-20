<?php
//             ----  une fonction qui prend en parametre un nombre et qui et qui affiche
//     les nombres de 0 jusqu'a ce nombre    --


function number($x)
{

    for ($i = 0; $i <= $x; $i++) {
        echo $i;
    }

}

function input($x)
{
    for ($i = 0; $i <= $x; $i++) {
        echo $i . '<input>' . '<br>';
    }
}


function createForm($array)
{
    var_dump($array);
    foreach ($array as $key => $val) {

        echo '<input name="' . $val['name'] . '" type="' . $val['type'] . '" class="' . $val['class'] . '" placeholder="' . $val['name'] . '"></<input>' . '<br>';
    }
}


?>
