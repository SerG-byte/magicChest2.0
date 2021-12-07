<div class="product__content">
    <img src="./img/product/product.svg" class="product__img">
    <div class="title__product">Альбом “Русские сказки”</div>
    <div class="description__product">Описание товара в ограниченое количество символов, а заним троеточие . . .</div>
    <div class="price">
        <div class="price__product active">2000 руб</div>
        <div class="discount__price__product active">1600 руб<span class="percent__discount active">Скидка 20%</span></div>
    </div>
    <button onclick="">В корзину</button>
</div>


<div class="product__content">
    <img src="./img/product/product.svg" class="product__img">
    <div class="title__product">Альбом “Русские сказки”</div>
    <div class="description__product">Описание товара в ограниченое количество символов, а заним троеточие . . .</div>
    <div class="price">
        <div class="price__product">2000 руб</div>
        <div class="discount__price__product">1600 руб<span class="percent__discount">Скидка 20%</span></div>
    </div>
    <button onclick="">В корзину</button>
</div>



<?php

for ($i=0; $i < 9; $i++) { 
    echo "
    <div class=\"product__content\">
        <img src=\"./img/product/product.svg\" class=\"product__img\">
        <div class=\"title__product\">Альбом “Русские сказки”</div>
        <div class=\"description__product\">Описание товара в ограниченое количество символов, а заним троеточие . . .</div>
        <div class=\"price\">
            <div class=\"price__product active\">2000 руб</div>
            <div class=\"discount__price__product active\">1600 руб<span class=\"percent__discount active\">Скидка 20%</span></div>
        </div>
        <button onclick=\"\">В корзину</button>
    </div>
    ";
}


?>