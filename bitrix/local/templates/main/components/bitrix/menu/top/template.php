<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult))throw new Exception("\$arResult пустой");
foreach($arResult as $arItem)
{?>
	<li class="topMenu__item"><a href="<?=$arItem["LINK"]?>" class="topMenu__link"><?=$arItem["TEXT"]?></a></li><?	
}?>