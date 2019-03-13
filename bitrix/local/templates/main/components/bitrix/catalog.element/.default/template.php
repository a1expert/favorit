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
 * @var string $templateFolder
 */

$this->setFrameMode(true);

?>
<div class="text detailDesc">
	<?if (is_array($arResult["DETAIL_PICTURE"]))
	{?>
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" class="detailImage"><?
	}?>
	<?=$arResult["DETAIL_TEXT"]?>
</div>
<div class="priceBlock">
	<div class="col-xs-12 col-sm-4 priceBlock__item priceBlock__phone">
		<div class="priceBlock__text">По всем вопросам звоните:</div>
		<div class="priceBlock__value">+7 (3462) 45-92-01</div>
	</div>
	<div class="col-xs-12 col-sm-4 priceBlock__item priceBlock__price">
		<div class="priceBlock__text">Стоимость:</div>
		<div class="priceBlock__value"><?=$arResult["PROPERTIES"]["COST"]["~VALUE"];?></div>
	</div>
	<div class="col-xs-12 col-sm-4 priceBlock__item priceBlock__btn">
		<a href="#popupForm" class="btn priceBlock__btn btn_white">Узнать точную цену<span class="btn__arrow btn__arrow_blue btn__arrow_horizontal"></span></a>
	</div>
</div>
<h2 class="h2 catalogSectionH2"><?=$arResult["PROPERTIES"]["HEADER_ADD_TEXT"]["~VALUE"];?></h2>
<div class="text detailDesc">
	<?=$arResult["PROPERTIES"]["ADD_TEXT"]["~VALUE"]["TEXT"];?>
</div>
<p class="aboveUListheader">Несколько фактов:</p>
<ul class="textList textList__service">
	<?foreach ($arResult["PROPERTIES"]["TEXT_LIST"]["~VALUE"] as $key => $value)
	{?>
		<li class="textList__item"><?=$value;?></li><?
	}?>
</ul>