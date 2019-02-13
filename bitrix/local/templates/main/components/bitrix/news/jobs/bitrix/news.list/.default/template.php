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
<div class="row vacanciesList">
<?foreach($arResult["ITEMS"] as $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="col-xs-12 col-sm-4 col-md-4 vacanciesItem" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="vacanciesList__element">
			<div class="vacanciesItem__name"><?=$arItem["NAME"]?></div>
			<div class="vacanciesInfo">
				<div class="vacanciesInfo__name">Зарплата:</div>
				<div class="vacanciesInfo__value">от <?=$arItem["DISPLAY_PROPERTIES"]["SALARY"]["DISPLAY_VALUE"];?> ₽</div>
			</div>
			<div class="vacanciesInfo">
				<div class="vacanciesInfo__name">Опыт работы:</div>
				<div class="vacanciesInfo__value">от <?=$arItem["DISPLAY_PROPERTIES"]["EXPA"]["DISPLAY_VALUE"];?></div>
			</div>
		</div>
	</a><?
}?>
</div>