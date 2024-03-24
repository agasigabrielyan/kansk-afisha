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
		<div class="col-sm-12 with_box_shadow" id="all_our_works" style="max-height: 300px; overflow: hidden;">
            <?php foreach($arResult['DISPLAY_PROPERTIES']['PICTURES']['VALUE'] as $arItem): ?>
                <a href="<?= CFile::GetPath($arItem); ?>" data-fancybox="gallery" class="single_picture">
                    <img src="<?=CFile::GetPath($arItem);?>" />
                </a>
            <?endforeach?>
        </div>
    </div>
</div>
<? $APPLICATION->SetTitle($arResult['NAME']) ?>

