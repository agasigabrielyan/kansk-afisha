<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container" id="all_catalog_banners">
    <div class="row">
        <?foreach($arResult['ITEMS'] as $arItem):?>
            <!-- EDIT LINKS -->
            <?
                $arButtons = CIBlock::GetPanelButtons(
                    $arItem['IBLOCK_ID'],
                    $arItem['ID'],
                    0,
                    array('SECTION_BUTTONS'=>false,'SESSID'=>false)
                );

                $arItem['EDIT_LINK'] = $arButtons['edit']['edit_element']['ACTION_URL'];
                $arItem['DELETE_LINK'] = $arButtons['edit']['delete_element']['ACTION_URL'];

                //добавляем действия (экшены) для управления элементом
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <!-- end: edit links -->
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="col-sm-4 col-xs-6 banner_wrapper" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="inner_banner_wrapper" style="box-shadow:1px 1px 4px #ccc">
                    <?if(empty($arItem['PROPERTIES']['LONGTITUDE']['VALUE']) && empty($arItem['PROPERTIES']['LATITUDE']['VALUE'])):?>
                        <div class="watch_more">Подробнее</div>
                    <?endif?>
                    <div class="title"><?=$arItem['NAME']?></div>
                    <div class="single_banner" style="background-image:url(<?=$arItem['CHANGED_PICTURE']['src']?>)">
                    </div>
                </div>
            </a>
        <?endforeach?>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 navstring_area">
            <?=$arResult["NAV_STRING"]?>
        </div>
    </div>
</div>