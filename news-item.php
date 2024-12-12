<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss('/css/style.css');
?>

    <a href="#">
        <div class="item">
            <div class="title">
                <h1>Название</h1>
            </div>
            <div class="description">
                <h3>Описание</h2>
            </div>
        </div>
    </a>
