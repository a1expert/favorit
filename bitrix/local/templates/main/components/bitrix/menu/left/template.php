<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult))throw new Exception("\$arResult пустой");?>
<ul class="hidden-xs hidden-sm hidden-md leftMenu">
<?foreach($arResult as $arItem)
{
	if($arItem["SELECTED"])
	{
		$curPageName = $arItem["TEXT"];?>
		<li class="leftMenu__item leftMenu__item_current">
			<a href="<?=$arItem["LINK"];?>" class="leftMenu__link leftMenu__link_current"><?=$arItem["TEXT"];?></a>
		</li><?
	}
	else
	{?>
		<li class="leftMenu__item"><a href="<?=$arItem["LINK"];?>" class="leftMenu__link"><?=$arItem["TEXT"];?></a></li><?
	}
}?>
</ul>
<div class="hidden-lg btn btn_white mobileLeftMenuCurrent" id="mobileLeftMenuBtn">
	<span class="mobileLeftMenuCurrent__name" id="mobileLeftMenuCurrentName"><?=$arItem["TEXT"];?></span>
	<span class="btn__arrow btn__arrow_vertical"></span>
</div>
<ul class="mobileLeftMenu" id="mobileLeftMenu">
<?foreach($arResult as $arItem)
{?>
	<li class="leftMenu__item <?=($arItem["SELECTED"]) ? "leftMenu__item_current" : "";?> ">
		<a href="<?=$arItem["LINK"];?>" class="leftMenu__link <?=($arItem["SELECTED"]) ? "leftMenu__link_current" : "";?>"><?=$arItem["TEXT"];?></a>
	</li><?
}?>
</ul>