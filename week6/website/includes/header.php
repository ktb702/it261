<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<meta name="referrer" content="origin">

<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/form.css" />
<title><?php echo $title; ?></title>

</head>

<body class="<?php echo $body; ?>">
<header>
<div class="inner-header">
<img id="logo" src="images/logo.png" alt="logo">
    <nav>
        <ul> <?php echo makeLinks($nav); ?> </ul>
    </nav> 
</div>  <!--end inner header-->
</header>