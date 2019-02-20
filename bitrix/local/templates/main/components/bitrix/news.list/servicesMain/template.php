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

<div class="row darkenedTile">
<?foreach($arResult["ITEMS"] as $i => $arItem)
{?>
	<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="col-xs-12 col-sm-6 col-md-6 darkenedTile__item">
		<div class="darkenedTile__wraper">
			<div class="darkenedTile__hoverElement"></div>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="darkenedTile__img" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
			<div class="darkenedTile__name"><?=$arItem["NAME"]?></div>
		</div>
	</a><?
}?>
</div>