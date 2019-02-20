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
<div class="row productsList">
<?foreach($arResult["ITEMS"] as $i => $arItem)
{?>
	<div class="<?=($i>1) ? "hidden-xs hidden-sm" : "col-xs-12 col-sm-6";?> col-md-4 productsList__item">
		<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="productsList__link">
			<div class="productList__hoverElement">
				<img src="/local/assets/img/roundarrow.png" alt="">
			</div>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="productsList__img">
		</a>
		<div class="productsList__name"><?=$arItem["NAME"]?></div>
	</div><?
}?>
</div>