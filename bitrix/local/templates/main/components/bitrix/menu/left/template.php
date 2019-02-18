<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult))throw new Exception("\$arResult пустой");
// ShowRes($arResult);?>

<ul class="hidden-xs hidden-sm hidden-md leftMenu"><?
$previousLevel = 0;
foreach($arResult as $arItem)
{
	if($arItem["SELECTED"])
	{
		$curItemClass = "leftMenu__item_current";
		$curLinkClass = "leftMenu__link_current";
		$curSubLinkClass = "leftSubMenu__link_current";
	}
	else
	{
		$curItemClass = $curLinkClass = $curSubLinkClass = "";
	}
	if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel)
		echo str_repeat("</ul>
		</li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
	if ($arItem["IS_PARENT"])
	{?>
		
		<li class="leftMenu__item <?=$curItemClass?>">
			<a href="<?=$arItem["LINK"]?>" class="leftMenu__link <?=$curLinkClass;?>"><?=$arItem["TEXT"]?></a>
				<ul class="leftSubMenu"><?
	}
	else
	{
		if ($arItem["DEPTH_LEVEL"] == 1)
		{?>
			<li class="leftMenu__item <?=$curItemClass?>"><a href="<?=$arItem["LINK"]?>" class="leftMenu__link <?=$curLinkClass;?>"><?=$arItem["TEXT"]?></a></li><?
		}
		else
		{?>
			<li class="leftSubMenu__item"><a href="<?=$arItem["LINK"]?>" class="leftSubMenu__link <?=$curSubLinkClass?>"><?=$arItem["TEXT"]?></a></li><?			
		}
	}
	$previousLevel = $arItem["DEPTH_LEVEL"];
}
if ($previousLevel > 1)
	echo str_repeat("</ul></li>", ($previousLevel-1));
?>
</ul>