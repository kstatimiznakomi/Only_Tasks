<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?
    $asset->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
    $asset->addCss(SITE_TEMPLATE_PATH."/css/common.css");
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
    ?>
</head>  
<body>  
<?$APPLICATION->ShowPanel();?>
<title><?$APPLICATION->ShowTitle()?></title>