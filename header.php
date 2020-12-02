<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treehouse</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
</head>
<body>

<?php require_once './pagesData.php' ?>

<header class="header">
    <div class="container">
        <div class="header_wraper">

            <div class="logo">
                <div class="logo_img"></div>
                <a href="/" class="logo_text">Treehouse</a>
            </div>

            <div class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <?php foreach($pagesData as $key => $page) {
                        echo '<li><a href="/page.php?id=' . $key . '">' . $key . '</a></li>';
                    }; ?>
                </ul>
            </div>

        </div>
    </div>
</header>