<?php
/**
 *  Determine les langues de l'utiliseur
 * 
 */
if (!function_exists('getUserLanguages'))
{
    function getUserLanguages($all_languages=false){
        // On récupère la liste des langues depuis la super global $_server
        $languages_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

        // On converti la chaine en tableau
        $languages_arr = explode("," , $languages_str);

        $carToDelimite = ";";



        // On boucle sur la liste des langues
        foreach( $languages_arr as $key => $value ) 
    {
        if(strpos($value, ';')){
        echo substr($value,0, strpos($value,$carToDelimite))."<br>";
        }
        else{
            echo $value."<br>";
        }
    }
    if ($all_languages){
        return $all_languages[0];
    }
    }
}
var_dump (getUserLanguages());

