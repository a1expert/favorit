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
<div class="row clientsList">
<?foreach($arResult["ITEMS"] as $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
	<div class="middle-xs col-xs-12 col-sm-4 clientsList__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="//<?=$arItem["DISPLAY_PROPERTIES"]["CLIENTS_LINK"]["DISPLAY_VALUE"]?>" class="clientsList__link" target="_blank">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="clientsList__prewImg" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
		</a>
		<div class="clientName"><?=$arItem["NAME"]?></div>
		<a href="//<?=$arItem["DISPLAY_PROPERTIES"]["CLIENTS_LINK"]["DISPLAY_VALUE"]?>" class="clientLink" target="_blank"><?=$arItem["DISPLAY_PROPERTIES"]["CLIENTS_LINK"]["DISPLAY_VALUE"]?></a>
	</div><?
}?>
</div>
