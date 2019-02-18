<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
use A1expert\Fixer;
$fixer = new Fixer();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
$widthSections = ($arParams["WIDTH_SECTIONS"] == "Y") ? true : false;
if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
		$arResult = $fixer->GetMenu($arParams["IBLOCK_ID"], $widthSections);
		$this->EndResultCache();
	}
}
$aMenuLinksNew = $arResult;
return $aMenuLinksNew;
?>
