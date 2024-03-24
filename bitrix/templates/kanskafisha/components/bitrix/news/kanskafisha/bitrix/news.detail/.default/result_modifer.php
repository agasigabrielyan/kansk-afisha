<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */

$imagesPathes = [];
foreach($arResult['DISPLAY_PROPERTIES']['PICTURES']['VALUE'] as $imageId) {
    $im = CFile::GetPath((int)$imageId);
    $imagesPathes[] = $im;
}

$arResult['IMAGES_PATHES'] = $imagesPathes;