<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach($arResult['PROPERTIES']['BANNERSONMAIN']['VALUE'] as $single_picture) {
    $changed_picture = CFile::ResizeImageGet(intval($single_picture),array("width"=>'300',"height"=>'300'),BX_RESIZE_IMAGE_PROPORTIONAL);
    $arResult['CHANGED_PICTURES'][] = $changed_picture;
}