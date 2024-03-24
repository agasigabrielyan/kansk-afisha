<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
use Bitrix\Main\Loader;
Loader::includeModule('iblock');

$sections = \Bitrix\Iblock\SectionTable::getList([
    'select' => [
        'ID',
        'NAME',
        'DEPTH_LEVEL',
        'CODE',
        'IBLOCK_SECTION_ID',
        'IBLOCK_ID',
        'IBLOCK_TABLE_CODE' => 'iblocktable.CODE',
    ],
    'filter' => [
        '=IBLOCK_TABLE_CODE' => 'catalog'
    ],
    'runtime' => [
        'iblocktable' => [
            'data_type' => \Bitrix\Iblock\IblockTable::getEntity(),
            'reference' => [
                '=this.IBLOCK_ID' => 'ref.ID'
            ]
        ]
    ]
])->fetchAll();

$menuItems = [];
foreach( $sections as $key => $value ) {
    if( $value['DEPTH_LEVEL'] === "1" ) {
        $menuItems[$value['ID']] = $value;
    } else {
        $menuItems[$value['IBLOCK_SECTION_ID']]['CHILDREN'][] = $value;
    }
}

$arResult['ITEMS'] = $menuItems;
