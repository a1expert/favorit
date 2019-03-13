<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;

if(empty($arResult))
	return "";
$strReturn = '';
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$strReturn .= '<li class="breadcrumbs__item">
						<a href="'.$arResult[$index]["LINK"].'" class="breadcrumbs_link">'.$title.'</a>
					</li>';
}

return $strReturn;