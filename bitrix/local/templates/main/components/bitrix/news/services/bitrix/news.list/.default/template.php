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
$i = 0;
?>
<section class="servicesList">
	<div class="container">
		<div class="row darkenedTile servicesTile">
		<?foreach($arResult["ITEMS"] as $arItem)
		{
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="col-xs-12 col-sm-6 col-lg-<?=($i>=4)?"4":"6";?> darkenedTile__item servicesTile__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="darkenedTile__wraper servicesTile__wraper">
					<div class="darkenedTile__hoverElement"></div>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="darkenedTile__img servicesTile__img" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
					<div class="darkenedTile__name servicesTile__name"><?=$arItem["NAME"];?></div>
				</div>
			</a><?
			$i++;
		}?>
	</div>
</div>