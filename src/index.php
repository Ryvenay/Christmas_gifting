<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>

<?php require_once PROTECTED_DIR."huzasManager.php"; ?>
<?php

//session_unset();
//session_destroy();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Huzogatós</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Questrial&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">

    <!--- Bootrstrap javascript --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <content><?php require_once PROTECTED_DIR."content.php"; ?></content>
    <footer><?php require_once PROTECTED_DIR."footer.php"; ?></footer>
    
</body>
</html>
