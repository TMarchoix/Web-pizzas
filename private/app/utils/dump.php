<?php

/*
*Dump permet d'afficher une donnée entre les balises <pre>
*/


/**
 * Undocumented function
 *
 * @param [type] $data
 * @return void
 */
function dump($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
git remote add origin https://github.com/TMarchoix/Web-pizzas.git
git push -u origin master