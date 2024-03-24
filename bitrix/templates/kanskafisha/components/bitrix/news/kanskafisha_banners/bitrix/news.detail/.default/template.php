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
<div class="container detail_banner">
    <h1><?=$arResult['NAME']?></h1>
    <br/>
    <div class="row">
        <a class="col-sm-6" href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" data-fancybox="gallery">
            <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>" title="<?=$arResult['NAME']?>" />
        </a>
        <div class="col-sm-6">
            <div id="street-view" style="width:100%; height:420px; "></div>

            <script>
				/*
                var panorama;
                var longtitude = <?=$arResult['PROPERTIES']['LONGTITUDE']['VALUE']?>;
                var latitude = <?=$arResult['PROPERTIES']['LATITUDE']['VALUE']?>;
                if(longtitude && latitude) {
                    function initialize() {
                        panorama = new google.maps.StreetViewPanorama(
                            document.getElementById('street-view'),
                            {
                                position: {lat: latitude, lng: longtitude},
                                pov: {heading: <?=$arResult['PROPERTIES']['ANGLE']['VALUE']>0?"{$arResult['PROPERTIES']['ANGLE']['VALUE']}":'0'?>, pitch: 0},
                                zoom: 2
                            });
                    }
} */
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7Z806T8oBOaaJgdSD2KuDJtiVY_KqWqA&callback=initialize"></script>
        </div>
    </div>
</div>