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
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 width="459px" height="459px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
                	<path fill="#fff" d="M459,216.75L280.5,38.25v102c-178.5,25.5-255,153-280.5,280.5C63.75,331.5,153,290.7,280.5,290.7v104.55L459,216.75z"/>
                </svg>
			</div>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="productsList__img">
		</a>
		<div class="productsList__name"><?=$arItem["NAME"]?></div>
	</div><?
}?>
</div>
