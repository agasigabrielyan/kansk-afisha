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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Рекламные щиты</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 with_box_shadow" id="banners_on_main">
            <?foreach($arResult['CHANGED_PICTURES'] as $key=>$picture):?>
                <a href="<?=CFile::GetPath(intval($arResult['PROPERTIES']['BANNERSONMAIN']['VALUE'][$key]))?>" data-fancybox="gallery" class="single_picture">
                    <img src="<?=$picture['src']?>" />
                </a>
            <?endforeach?>
        </div>
    </div>
</div>