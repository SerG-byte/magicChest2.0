<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleSite.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">
    <link rel="stylesheet" href="css/footer.css">
    

    <link rel="stylesheet" href="css/katalog.css">
    <title>Magic-Chest</title>
</head>

<body>


<div class="main__container">
    <?php require "header.php " ?>
    <div class="container">
        <div class="main__content">
            <div class="katalog__title">
                Католог
                <div>?? товара</div>
            </div>
            <div class="katalog__content">
                <div class="katalog__search">
                    <?php require "./katalog/katalogSearch.php" ?>
                </div>
                <div class="katalog__goods">
                    <div class="sort">
                        <span>Сортировать по:</span>
                        <a onclick="sortBy('Popularity')" class="active">Популярности</ф>
                        <a onclick="sortBy('Price')">Цене</a>
                        <a onclick="sortBy('Discount')">Скидке</a>
                        <a onclick="sortBy('Date')">Дате</a>
                    </div>
                    <div class="goods">
                        <?php require "./katalog/katalogGoods.php"?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php " ?>
</div>
</body>
<script src="js/katalogSort.js"></script>
</html>