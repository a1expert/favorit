<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult))throw new Exception("\$arResult пустой");
?>
<ul class="footer__menu">
<?$previousLevel = 0;
foreach($arResult as $arItem)
{
	if($arItem["LINK"] == "/services/")
		$addClass = "services";
	elseif($arItem["LINK"] == "/about/")
		$addClass = "about";
	else
		$addClass = "";
	if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel)
		echo str_repeat("</ul>
		</li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
	if ($arItem["IS_PARENT"])
	{?>
		
		<li class="footer__menu-item footer__menu-item_<?=$addClass?>">
			<a href="<?=$arItem["LINK"]?>" class="footer__menu-link"><?=$arItem["TEXT"]?></a>
				<ul class="footer__submenu footer__submenu_<?=$addClass?>"><?
	}
	else
	{
		if ($arItem["DEPTH_LEVEL"] == 1)
		{?>
			<li class="footer__menu-item"><a href="<?=$arItem["LINK"]?>" class="footer__menu-link"><?=$arItem["TEXT"]?></a></li><?
		}
		else
		{?>
			<li class="footer__submenu-item"><a href="<?=$arItem["LINK"]?>" class="footer__submenu-link"><?=$arItem["TEXT"]?></a></li><?			
		}
	}
	$previousLevel = $arItem["DEPTH_LEVEL"];
}
if ($previousLevel > 1)
	echo str_repeat("</ul></li>", ($previousLevel-1));
?>
</ul>