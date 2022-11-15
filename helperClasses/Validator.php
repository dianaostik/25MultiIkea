<?php

class Validator{


public static function validate()
{
    $hasErrors = false;    
    if($_POST['name'] == ""){
        $_SESSION['errors'][] = "Pavadinimas privalo būti nurodytas";
        $hasErrors = true;
    }
    if($_POST['category'] == ""){
        $_SESSION['errors'][] = "Nurodykite kategorija";
        $hasErrors = true;
    }
    if(!is_numeric($_POST['price'])){
        $_SESSION['errors'][] = "Nurodykite kaina";
        $hasErrors = true;
    }
    if($_POST['about'] == ""){
        $_SESSION['errors'][] = "Parasykite prekes aprasyma";
        $hasErrors = true;
    }


    if($hasErrors){
        foreach ($_POST as $key => $value) {
            $_SESSION['POST'][$key] = $value;
        }
    }

    return $hasErrors;
}

}

?>