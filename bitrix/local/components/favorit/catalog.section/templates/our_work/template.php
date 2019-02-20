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
?>
<section class="ourWorkSection container">
	<div class="row ourWork__list">
	<?foreach ($arResult["MY_ITEMS"] as $key => $arItem)
	{
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $elementEdit);
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);?>
		
		<div class="col-xs-12 col-sm-6 col-md-4 ourWork__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" class="ourWork__link">
				<div class="productList__hoverElement">
					<img src="/local/assets/img/roundplus.png" alt="">
				</div>
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" class="ourWork__img">
			</a>
			<div class="ourWork__name"><?=$arItem["NAME"]?></div>
			<div class="ourWork__clientName">Заказчик <?=$arItem["PROPERTY_CLIENT_VALUE"]?></div>
			<div class="ourWork__clientName">Период стоительства: <?=$arItem["PROPERTY_CONTSRACTION_PERIOD_VALUE"]?></div>
			<?foreach($arItem["PROPERTY_GALLERY_VALUE"] as $img)
			{?>
				<a href="<?=$img;?>" class="hide"></a><?
			}?>
			<div class="ourWork__desc hide"><?=$arItem["~PROPERTY_GALLERY_TEXT_VALUE"]["TEXT"];?></div>
		</div><?
	}?>
	</div>
</section>