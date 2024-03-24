<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
\CJSCore::Init('sidepanel');
?>
<?php if( \Bitrix\Main\Engine\CurrentUser::get()->isAdmin() ): ?>
    <?php $editLink = "/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=12&type=products&lang=ru&ID=" . $arResult['ID']; ?>
    <h3><span onclick="BX.SidePanel.Instance.open('<?= $editLink; ?>')">Редактировать этот раздел</span></h3>
<?php endif; ?>
<div>
    <div class="container" style="background-color: #fff; padding-bottom: 30px;">


        <div id="all_our_works" style="max-height: 300px; overflow: hidden;">
            <?php foreach($arResult['IMAGES_PATHES'] as $arItem): ?>
                <a href="<?= $arItem['FILE_PATH'] ?>" data-fancybox="gallery" class="single_picture">
                    <img src="<?= $arItem['FILE_PATH'] ?>" />
                </a>
            <?php endforeach?>
        </div>


        <hr/>
        <div class="col-sm-12 with_box_shadow">
            <?php if( !empty($arResult['DESCRIPTION'])  ): ?>
                <?= $arResult['DESCRIPTION'] ?>
            <?php endif; ?>
        </div>
    </div>
</div>

