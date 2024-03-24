<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
\CJSCore::Init('sidepanel');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 with_box_shadow" id="all_our_works" style="max-height: 300px; overflow: hidden;">
            <?php foreach($arResult['PROPERTIES']['IMAGES']['VALUE'] as $arItem): ?>
                <a href="<?= CFile::GetPath($arItem); ?>" data-fancybox="gallery" class="single_picture">
                    <img src="<?=CFile::GetPath($arItem);?>" />
                </a>
            <?endforeach?>
        </div>
    </div>
</div>

<div class="container" style="padding: 30px 15px">
    <?php if( !empty($arResult['PREVIEW_TEXT']) ): ?>
        <?= $arResult['PREVIEW_TEXT']; ?>
    <?php endif; ?>
</div>

<?php if(\Bitrix\Main\Engine\CurrentUser::get()->isAdmin()): ?>
    <div class="container" style="padding: 30px 15px;">
        <?php
            $editLink = "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=12&type=products&ID=" . $arResult['ID'] . "&find_section_section=" . $arResult['IBLOCK_SECTION_ID'];
            $addLink = "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=12&type=products&lang=ru&find_section_section=" . $arResult['IBLOCK_SECTION_ID'] . "&IBLOCK_SECTION_ID=" . $arResult['IBLOCK_SECTION_ID'] . "&from=iblock_list_admin";
        ?>
        <a style="cursor: pointer;" onclick="BX.SidePanel.Instance.open('<?= $editLink; ?>')">Редактировать этот элемент</a>
        <br/>
        <a style="cursor: pointer;" onclick="BX.SidePanel.Instance.open('<?= $addLink; ?>')">Добавить элемент в этот раздел</a>
    </div>
<?php endif; ?>