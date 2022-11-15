<?php 
include $_INNER_PATH ."/routes.php";
$old = false;
if(isset($_SESSION['POST'])){
    if(count($_SESSION['POST']) != 0){
        $old = true;
    }
}
?>

<body style="background-color: #F2F4F7">
<form action="" method="post" class="col-10 border border-primary rounded">

<div class="form-group">
    <label for="f1">Prekės pavadinimas:</label>
    <input type="text"  style="background-color: #F9FBFC" name="name" id="f1" class="form-control" value="<?=($old)? $_SESSION['POST']['name'] : ""?>">
</div>
<div class="form-group">
    <label for="f2">Kategorija:</label>
    <input type="text" style="background-color: #F9FBFC" name="category" id="f2" class="form-control"  value="<?=($old)? $_SESSION['POST']['category'] : ""?>">
</div>
<div class="form-group">
    <label for="f3">Kaina:</label>
    <input type="number" step=".01" style="background-color: #F9FBFC" name="price" id="f3" class="form-control"  value="<?=($old)? $_SESSION['POST']['price'] : ""?>">
</div>
<div class="form-group">
    <label for="f4">Prekės aprašymas:</label>
    <textarea name="about" cols="40" rows="3" id="f4" class="form-control" > <?=($old)? $_SESSION['POST']['about'] : ""?> </textarea>
</div>
    <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">Išsaugoti</button>
</body>
</html>

<?php
    $_SESSION['POST'] = [];
?>
