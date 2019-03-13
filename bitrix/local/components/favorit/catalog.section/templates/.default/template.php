<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));
// ShowRes($arResult);
?>
<div class="text detailDesc">
<?if (is_array($arResult["DETAIL_PICTURE"]))
{?>
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" class="detailImage"><?
}?>
	<?=$arResult["DESCRIPTION"];?>
</div>
<div class="priceBlock">
	<div class="col-xs-12 priceBlock__item priceBlock__phone">
		<div class="priceBlock__text">По всем вопросам звоните:</div>
		<div class="priceBlock__value">+7 (3462) 45-92-01</div>
	</div>
	<div class="col-xs-12 priceBlock__item priceBlock__price">
		<div class="priceBlock__text">Стоимость:</div>
		<div class="priceBlock__value"><?=$arResult["commonContent"][0]["PROPERTY_COST_VALUE"];?></div>
	</div>
	<div class="col-xs-12 priceBlock__item priceBlock__btn">
		<a href="catalog.html" class="btn priceBlock__btn btn_white">Узнать точную цену<span class="btn__arrow btn__arrow_blue btn__arrow_horizontal"></span></a>
	</div>
</div>
<?if (!empty($arResult["ITEMS"]))
{?>
	<h2 class="h1 catalogSectionH2"><?=$arResult["commonContent"][0]["~PROPERTY_ITEMS_HEADER_VALUE"];?></h2>
	<div class="row productsList catalogProductList">
	<?foreach ($arResult["ITEMS"] as $key => $arItem)
	{
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $elementEdit);
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);?>
		
		<div class="col-xs-12 col-sm-4 productsList__item catalogProductList__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="productsList__link">
				<div class="productList__hoverElement">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="459px" height="459px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
                	<path fill="#fff" d="M459,216.75L280.5,38.25v102c-178.5,25.5-255,153-280.5,280.5C63.75,331.5,153,290.7,280.5,290.7v104.55L459,216.75z"></path>
                </svg>
				</div>
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" class="productsList__img">
			</a>
			<div class="productsList__name"><?=$arItem["NAME"];?></div>
		</div><?
	}?>
	</div><?
}?>
<h2 class="h2 catalogSectionH2"><?=$arResult["commonContent"][0]["PROPERTY_HEADER_ADD_TEXT_VALUE"];?></h2>
<div class="text detailDesc">
<?=$arResult["commonContent"][0]["~PROPERTY_ADD_TEXT_VALUE"]["TEXT"];?>
</div>
<p class="aboveUListheader">Несколько фактов:</p>
<ul class="textList textList__service">
	<?foreach ($arResult["commonContent"][0]["PROPERTY_TEXT_LIST_VALUE"] as $key => $value)
	{?>
		<li class="textList__item"><?=$value;?></li><?
	}?>
</ul>