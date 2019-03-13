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


if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
		$arOrder = array("order"=>"asc");
		$arSelect = array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "NAME");
		$arFilter = array("ACTIVE" => "Y", "IBLOCK_ID" => $arParams["IBLOCK_ID"]);

		$rsElements = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
		
		while($arElement = $rsElements->GetNext())
		{
			$arResult[] = $arElement;
		}
		$this->EndResultCache();
	}
}
foreach ($arResult as $key => $arItem)
{
	$aMenuLinksNew[$key] = array(
		$arItem["NAME"],
		$arItem["DETAIL_PAGE_URL"],
		"",
		array(
			"FROM_IBLOCK" => true,
			"IS_PARENT" => false,
			"DEPTH_LEVEL" => 1,
		),
	);
}
return $aMenuLinksNew;
?>
