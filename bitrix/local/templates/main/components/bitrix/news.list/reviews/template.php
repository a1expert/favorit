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
<div class="row reviewsList">
<?foreach($arResult["ITEMS"] as $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
	<div class="col-xs-12 col-sm-4 reviewList__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="review__img">
			<div class="productList__hoverElement">
				<img src="/local/assets/img/roundplus.png" alt="">
			</div>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="review__prewImg" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
		</a>
		<div class="reviewerName"><?=$arItem["NAME"]?></div>
		<div class="reviewerPosition"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"];?></div>
		<div class="reviewerCompany"><?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"];?></div>
	</div><?
}?>
</div>
