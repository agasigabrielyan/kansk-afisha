<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
use Bitrix\Main\Loader;
Loader::includeModule('iblock');

$dbElements = \Bitrix\Iblock\Elements\ElementCatalogTable::getList([
    'select' => [
        'ID',
        'NAME',
        'CODE',
        'IBLOCK_SECTION_ID',
        'PREVIEW_TEXT',
        'FILE_PATH',
        'SECTION_CODE' => 'sectiontable.CODE',
        'SECTION_ID' => 'sectiontable.ID',
        'SECTION_NAME' => 'sectiontable.NAME'
    ],
    'runtime' => [
        'filetable' => [
            'data_type' => \Bitrix\Main\FileTable::getEntity(),
            'reference' => [
                '=this.IMAGES.VALUE' => 'ref.ID'
            ]
        ],
        'sectiontable' => [
            'data_type' => \Bitrix\Iblock\SectionTable::getEntity(),
            'reference' => [
                '=this.IBLOCK_SECTION_ID' => 'ref.ID'
            ]
        ],
        new \Bitrix\Main\Entity\ExpressionField('FILE_PATH', 'CONCAT(\'/upload/\',%s,\'/\',%s)', ['filetable.SUBDIR', 'filetable.FILE_NAME']),
    ]
])->fetchAll();

$elements = [];
foreach( $dbElements as $arElement ) {
    if( !isset($elements[$arElement['ID']]) ) {
        $elements[$arElement['ID']] = $arElement;
    }
    $elements[$arElement['ID']]['IMAGES'][] = $arElement['FILE_PATH'];
}

$sections = [];
foreach( $elements as $element ) {
    if( !isset( $sections[$element['IBLOCK_SECTION_ID']] ) ) {
        $sections[$element['IBLOCK_SECTION_ID']] = [ 'ID' => $element['SECTION_ID'], 'CODE' => $element['SECTION_CODE'], 'NAME' => $element['SECTION_NAME'] ];
    }
    $sections[$element['IBLOCK_SECTION_ID']]['ELEMENTS'][] = $element;
}

$arResult['ITEMS'] = $sections;

