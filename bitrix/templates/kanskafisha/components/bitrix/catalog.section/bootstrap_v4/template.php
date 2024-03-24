<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
\CJSCore::Init('sidepanel');
?>
<?php if( \Bitrix\Main\Engine\CurrentUser::get()->isAdmin() ): ?>
    <div class="container" style="background-color: #fff;">
        <?php $editLink = "/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=12&type=products&lang=ru&ID=" . $arResult['ID']; ?>
        <h3><span onclick="BX.SidePanel.Instance.open('<?= $editLink; ?>')">Редактировать этот раздел</span></h3>
    </div>
<?php endif; ?>
<div>
    <div class="container" style="background-color: #fff; padding-bottom: 30px; padding-top: 30px;">
        <div class="gallery">
            <?php foreach( $arResult['IMAGES_PATHES'] as $arImage ): ?>
                <div class="image">
                    <img src="<?= $arImage['FILE_PATH']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container" style="background-color: #fff; padding-bottom: 30px; padding-top: 30px;">
        <div class="col-sm-12 with_box_shadow">
            <?php if( !empty($arResult['DESCRIPTION'])  ): ?>
                <?= $arResult['DESCRIPTION'] ?>
            <?php endif; ?>
        </div>
    </div>
</div>

