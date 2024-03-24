<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arOrder = array(
    "SORT"=>"ASC"
);
$arFilter = array(
    "IBLOCK_ID"=>"12"
);

$images = [];
$ar_result=CIBlockSection::GetList($arOrder, $arFilter, false, array('UF_IMAGES'));
if($res=$ar_result->GetNext()){
    $images = $res['UF_IMAGES'];
};

$imagesPathes = \Bitrix\Main\FileTable::getList([
    'select' => ['FILE_NAME','SUBDIR', 'FILE_PATH'],
    'filter' => [
        'ID' => $images
    ],
    'runtime' => [
        new \Bitrix\Main\Entity\ExpressionField('FILE_PATH', 'CONCAT(\'/upload/\',%s,\'/\',%s)', ['SUBDIR', 'FILE_NAME'])
    ]
])->fetchAll();

$arResult['IMAGES_PATHES'] = $imagesPathes;