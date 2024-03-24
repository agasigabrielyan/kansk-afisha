<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var $arResult
 */
?>
<nav>
    <ul class="nav navbar-nav">
        <?php foreach( $arResult['ITEMS'] as $arSection ): ?>
            <li style='color:#fff; font-weight:bold;'>
                <a class="navigation_link"><?= $arSection['NAME']; ?></a>
                <?php if( is_array($arSection['ELEMENTS']) && count($arSection['ELEMENTS'])>0 ): ?>
                    <ul>
                        <?php foreach( $arSection['ELEMENTS'] as $arChild ): ?>
                            <li><a href="/katalog/<?= $arSection['CODE'] ?>/<?= $arChild['CODE'] ?>/"><?= $arChild['NAME'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>