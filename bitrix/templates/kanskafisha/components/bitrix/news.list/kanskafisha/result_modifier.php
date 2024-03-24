<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
foreach($arResult['ITEMS'] as $key => $arItem) {
    $arResult['ITEMS'][$key]['THUMBNAIL'] = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE'],
        ['width' => 360, 'height' => 390],
        BX_RESIZE_IMAGE_PROPORTIONAL
	);
}
