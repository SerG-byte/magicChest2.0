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
    <link rel="stylesheet" href="css/katalogSelect.css">
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

                <div class="katalog__search__burgher">Меню поиска</div>
            </div>
            <div class="katalog__content">
                <div class="katalog__search">
                    <div class="title__katalog__search">Филтры <span class="exit__katalog__search">Выход</span></div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/katalogJS/katalogSort.js"></script>
<script src="js/katalogJS/katalogSelect.js"></script>
</html>