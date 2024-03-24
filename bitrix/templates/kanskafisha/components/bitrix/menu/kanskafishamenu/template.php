<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var $arResult
 */
?>
<nav>
    <ul class="nav navbar-nav">
        <?php foreach( $arResult['ITEMS'] as $arItem ): ?>
            <li style='color:#fff; font-weight:bold;'>
                <a class="navigation_link" href="/katalog/<?= $arItem['CODE']; ?>/"><?= $arItem['NAME']; ?></a>
                <?php if( is_array($arItem['CHILDREN']) && count($arItem['CHILDREN'])>0 ): ?>
                    <ul>
                        <?php foreach( $arItem['CHILDREN'] as $arChild ): ?>
                            <li><a href="/katalog/<?= $arItem['CODE'] ?>/<?= $arChild['CODE'] ?>/"><?= $arChild['NAME'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>