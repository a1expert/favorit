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
<div class="row ourWork__list">
<?foreach($arResult["ITEMS"] as $i => $arItem)
{?>
	<div class="<?=($i>1) ? "hidden-xs hidden-sm" : "col-xs-12 col-sm-6";?> col-md-4 ourWork__item">
		<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" class="ourWork__link">
			<div class="productList__hoverElement">
				<img src="/local/assets/img/roundplus.png" alt="">
			</div>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" class="ourWork__img">
		</a>
		<div class="ourWork__name"><?=$arItem["NAME"]?></div>
		<div class="ourWork__clientName">Заказчик <?=$arItem["DISPLAY_PROPERTIES"]["CLIENT"]["DISPLAY_VALUE"];?></div>
		<div class="ourWork__clientName">Период стоительства: <?=$arItem["DISPLAY_PROPERTIES"]["CONTSRACTION_PERIOD"]["DISPLAY_VALUE"]?></div>
		<?foreach($arItem["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $img)
		{?>
			<a href="<?=$img["SRC"];?>" class="hide"></a><?
		}?>
		<div class="ourWork__desc hide"><?=$arItem["DISPLAY_PROPERTIES"]["GALLERY_TEXT"]["DISPLAY_VALUE"];?></div>
	</div><?
}?>
</div>