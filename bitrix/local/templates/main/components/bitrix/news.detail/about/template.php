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
<div class="text">
	<?=$arResult["DETAIL_TEXT"];?>
</div>
<?if($arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"] && $arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"])
{?>
	<p class="aboutContent__subHeader"><?=$arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"];?></p>
	<ul class="textList textList__about">
		<?foreach ($arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"] as $key => $value)
		{?>
			<li class="textList__item"><?=$value?></li><?
		}?>
	</ul><?
}?>
<?if($arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"])
{?>
	<div class="text">
		<?=$arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"];?>
	</div><?
}?>