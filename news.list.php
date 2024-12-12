<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Новости');
?>


<div class="news">
    <?php for($i = 0; $i < 5; $i++): ?>
        <?php include 'news-item.php' ?>
    <?php endfor?>
</div>
