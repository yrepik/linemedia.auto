<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?
if (empty($arResult)) {
    return;
}
?>
<ul>
    <? foreach ($arResult as $itemIdex => $arItem) { ?>
        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
    <? } ?>
</ul>