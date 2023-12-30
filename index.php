<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'variables\variables.php';?>
    <title><?php echo $page_title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\Style.css">
    <link rel="stylesheet" href="css\header_style.css">
    <link rel="stylesheet" href="css\footer_style.css">
</head>
<body>
    <?php require('header.php'); ?>
    <?php require('main.php'); ?>
    <?php require('footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script src=".\js\main_style.js"></script>
</body>
</html> 