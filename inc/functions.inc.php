<?php
function e(string $value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

}


function render($view, $params)
{

    $alphabet = gen_alphabet();

    extract($params);


    ob_start();
    require __DIR__ . '/../views/pages/' . $view . '.php';
    $contents = ob_get_clean();

    require __DIR__ . '/../views/layouts/main.view.php';
}


/*
 * This function will generate all the letters of the alphabet as an array:
 * ['A', 'B', 'C' ... , 'X','Y','Z']
 * */
function gen_alphabet()
{
    $A = ord('A');
    $Z = ord('Z');

    $letters = [];

    for ($i = $A; $i <= $Z; $i++) {
        $letters[] = chr($i);
    }

    return $letters;
}


gen_alphabet();

