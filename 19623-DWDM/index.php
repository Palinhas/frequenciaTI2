<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        require_once('resources/assets/css/css.php');
    ?>

    <title>ESTG Portalegre</title>
</head>
<body>
<?php
    require_once('layout/navbars/navbar.php');
?>
<div class="container">
    <?php
    if(isset($_GET['page'])){
        require_once('contents/pages/' . $_GET['page'] . '.php');

    }else{
        require_once('contents/pages/main.php');
    }
    
     require_once('layout/footer/footer.php');
    ?>
</div>

<?php
    require_once('resources/assets/js/js.php');
?>
</body>
</html>