<?php
// get from file
$test = "Hi\n";
echo $test;
?>

<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping List 🛒</title>

    <meta name="author" content="Andrew Li">
    <meta name="description" content="A shopping list website">
    <meta name="keywords" content="shopping list, shopping">
    <meta property="og:image" content="">

    <!-- Mini icon on tab -->
    <link rel="icon" href="img/ico.svg" type="image/ico">

    <!-- css libraries -->
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--[if lt IE 7]>
        <div class="alert alert-warning alert-dismissible show fixed-top" role="alert">
            You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.
            <button type="button" class="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <![endif]-->

    <!-- Main -->
    <main>
        <div>
            <?php 
                echo $test;
            ?>
        </div>
    </main>

</body>
</html>