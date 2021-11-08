<?php
require dirname(__DIR__, 1) . '/vendor/autoload.php';
require dirname(__DIR__, 1) . '/vendor/erusev/parsedown/Parsedown.php';
// get from file
// echo dirname(__DIR__, 1)."/pages/page.md";
$fp = fopen(dirname(__DIR__, 1)."/pages/page.md", "r") or die("Unable to open file!");
$file = fread($fp, filesize(dirname(__DIR__, 1)."/pages/page.md"));
fclose($fp);

$finalString = "";
// pre-parse
foreach(preg_split("/((\r?\n)|(\r\n?))/", $file) as $line){
    $name = str_replace("- ", "", $line);
    $finalString .= "<input type='checkbox' name='$name' value='$name' class='big-checkbox'><label for='$name'> ".$name."</label></input><br>";
} 

$Parsedown = new Parsedown();
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
    <!-- <link rel="stylesheet" href="../css/index.css" type="text/css"> -->
    <style>
        body {
            background-color: #282c34!important
        }
        label {
            padding: 10px;
        }
        .big-checkbox {
            width: 30px; 
            height: 30px;
        }
        .container {
            padding: 20px
        }
        p {
            font-size: 36px;
            color: #fff
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
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
        <div class="container">
            <?php 
                echo $Parsedown->text($finalString);
            ?>
        </div>
    </main>

</body>
</html>