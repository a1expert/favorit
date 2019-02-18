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


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<section class="catalog catalogInner">
	<div class="container">
		<div class="row darkenedTile catalogList">
		<?foreach ($arResult['SECTIONS'] as &$arSection)
		{
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>
			<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="col-xs-12 col-sm-4 col-lg-3 darkenedTile__item catalog__item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
				<div class="darkenedTile__wraper">
					<div class="darkenedTile__hoverElement catalog__hoverElement"></div>
					<img src="<?=$arSection['PICTURE']['SRC'];?>" class="darkenedTile__img catalog__img" alt="<?=$arSection['PICTURE']['ALT'];?>">
					<div class="darkenedTile__name catalog__name"><?=$arSection["NAME"];?></div>
				</div>
			</a><?
		}?>
		</div>
	</div>
</section>