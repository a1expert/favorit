<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult))
{?>
	
		<ul class="leftMenu menu404">
		<?foreach($arResult as $arItem)
		{
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
				continue;?>
			<li class="leftMenu__item "><a href="<?=$arItem["LINK"]?>" class="leftMenu__link menu404__link"><?=$arItem["TEXT"]?></a></li><?
		}?>

		</ul>
	<?
}?>