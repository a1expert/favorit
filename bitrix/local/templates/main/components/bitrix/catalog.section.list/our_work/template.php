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
<section class="works">
	<div class="container">
		<div class="row productsList works__list">
		<?foreach ($arResult['SECTIONS'] as &$arSection)
		{
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>
			<div class="col-xs-12 col-sm-4 col-md-3 productsList__item works__item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
				<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="productsList__link works__link">
					<div class="productList__hoverElement">
						<img src="/local/assets/img/roundarrow.png" alt="">
					</div>
					<img src="<?=$arSection['PICTURE']['SRC'];?>" class="productsList__img works__img" alt="<?=$arSection['PICTURE']['ALT'];?>">
					<div class="productsList__name works__name"><?=$arSection["NAME"];?></div>
				</a>
			</div><?
		}?>
		</div>
	</div>
</section>