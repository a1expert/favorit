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
<div class="row gallery__list">
	<?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGES"]["FILE_VALUE"] as $key => $arImage)
	{?>
	<div class="col-xs-12 col-sm-4 gallery__item">
		<a href="<?=$arImage["SRC"]?>" class="gallery__link">
			<div class="productList__hoverElement">
				<img src="/local/assets/img/roundplus.png" alt="">
			</div>
			<img src="<?=$arImage["SRC"]?>" class="gallery__prewImg" alt="">
		</a>
	</div><?
	}?>
</div>