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
<div class="site-section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-7">
                <h2 class="heading-39291 mb-0">&nbsp;</h2>
            </div>
            <div class="col-md-5 text-right">
                <p class="mb-0"><a href="#" class="more-39291"></a></p>
            </div>
        </div>
		<div class="row">
            <?php foreach($arResult['ITEMS'] as $arItem): ?>
                <div class="col-lg-4">
                    <div class="media-02819">
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="img-link">
                            <h2><?= $arItem['NAME'] ?></h2>
                            <img src="<?= $arItem['THUMBNAIL']['src'] ?>" style="width: 100%; height: auto;" alt="<?= $arItem['NAME'] ?>" class="img-fluid">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
