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
            <h2>Наши работы</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 with_box_shadow" id="all_our_works">
            <?foreach($arResult['ITEMS'] as $item):?>
                <?foreach($item['PROPERTIES']['OURWORKSPICTURES']['VALUE'] as $value):?>
                    <div class="col-sm-12 with_box_shadow" id="all_our_works">
                        <?foreach($arResult['CHANGED_PICTURES'] as $key=>$picture):?>
                            <a href="<?=CFile::GetPath(intval($value))?>" data-fancybox="gallery" class="single_picture">
                                <img src="<?=$picture['src']?>" />
                            </a>
                        <?endforeach?>
                    </div>
                <?endforeach?>
            <?endforeach?>
        </div>
    </div>
</div>