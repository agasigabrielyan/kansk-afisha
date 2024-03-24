<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach($arResult['ITEMS'] as $key=>$arItem){
    $changed_picture = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'],array("width"=>"300","height"=>"300"),BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['CHANGED_PICTURE'] = $changed_picture;
}
