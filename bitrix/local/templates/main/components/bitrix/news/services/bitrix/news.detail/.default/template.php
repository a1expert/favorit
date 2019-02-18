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
		<div class="priceBlock__value"><?=$arResult["DISPLAY_PROPERTIES"]["COST"]["DISPLAY_VALUE"];?></div>
	</div>
	<div class="col-xs-12 col-sm-4 priceBlock__item priceBlock__btn">
		<a href="#popupForm" class="btn priceBlock__btn btn_white">Узнать точную цену<span class="btn__arrow btn__arrow_blue btn__arrow_horizontal"></span></a>
	</div>
</div>
<h2 class="h2 serviceH2"><?=$arResult["DISPLAY_PROPERTIES"]["HEADER_ADD_TEXT"]["DISPLAY_VALUE"];?></h2>
<div class="text detailDesc">
	<?=$arResult["DISPLAY_PROPERTIES"]["ADD_TEXT"]["DISPLAY_VALUE"];?>
</div>
<p class="aboveUListheader">Несколько фактов:</p>
<ul class="textList textList__service">
	<?foreach ($arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"] as $key => $value)
	{?>
		<li class="textList__item"><?=$value;?></li><?
	}?>
</ul>