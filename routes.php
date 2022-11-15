<?php

include  $_INNER_PATH."/controllers/ItemController.php";

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    

    if(isset($_POST['update'])){

        $item = ItemController::update();
        header("Location: ".$_OUTER_PATH."/index.php");
        die;
    }
    if(isset($_POST['save'])){
        ItemController::store();
        header("Location: ".$_OUTER_PATH."/index.php");
        die;
    }      



    if(isset($_POST['destroy'])){
        ItemController::destroy();
        header("Location: ".$_OUTER_PATH."/index.php");
        die;
    }

}

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET['filter'])){
            $items = ItemController::filter();
        }
        
        if(isset($_GET['search'])){
            $items = ItemController::search();
        }

        if(isset($_GET['edit'])){
            $item = ItemController::show();
            $edit = true;
            
        }  
        
        if (count($_GET) == 0){
            $items = ItemController::index();
        }
        }  
    
        
    
    $params = ItemController::getfilterParams();
    ?>