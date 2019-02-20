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
<div class="row companyNumbers__inner center-xs middle-xs">
<?foreach($arResult["ITEMS"] as $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
	<div class="col-xs-12 col-sm-6 col-lg-3 companyNumbers__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="companyNumbers__number"><?=$arItem["DISPLAY_PROPERTIES"]["NUMBER"]["DISPLAY_VALUE"];?></div>
		<div class="companyNumbers__text"><?=htmlspecialchars_decode($arItem["DISPLAY_PROPERTIES"]["TEXT"]["DISPLAY_VALUE"]);?></div>
	</div><?
}?>
</div>
