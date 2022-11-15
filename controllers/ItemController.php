<?php
include $_INNER_PATH."./models/Item.php";
include $_INNER_PATH."/helperClasses/Validator.php";

class ItemController{

    public static function index(){
        $items = Item::all();
        return $items;
    }


    public static function store(){
        if(Validator::validate()){
            header("Location: "."http://".$_SERVER['SERVER_NAME']."/25MultiIkea/views/item/add.php");
            die;
        }
        Item::create();
    }

    public static function show(){
        $item = Item::find($_GET['id']);
        return $item;
    }

    public static function update(){

        if(Validator::validate()){
            header("Location: "."http://".$_SERVER['SERVER_NAME']."/25MultiIkea/views/item/edit.php?edit=&id=".$_GET['id']);
            die;
        }

       $item = new Item();
       $item->id = $_POST['id'];
       $item->name = $_POST['name'];
       $item->category = $_POST['category'];
       $item->price = $_POST['price'];
       $item->about = $_POST['about'];
       $item->update();
    }

    public static function destroy(){
       Item::destroy($_POST['id']);
    }

    public static function getfilterParams(){
        return Item::getfilterParams();
     }


    public static function filter(){
        return Item::filter();
     }

     public static function search(){
        return Item::search();
     }

}
?>
