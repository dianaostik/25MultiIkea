
<?php 
include "./views/components/head.php";
include $_INNER_PATH ."/routes.php"; 
?>

<body style="background-color: #F2F4F7">
    <?php 
    include $_INNER_PATH. "./views/components/navigation.php";
    ?>

    <!-- Filtravimas -->      
<?php include  $_INNER_PATH. "./views/components/filter.php" ?>

<!-- Sarasas prekiu -->
<?php include  $_INNER_PATH. "./views/components/table.php" ?>


</body>
</html>