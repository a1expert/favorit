<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use \Bitrix\Main\Context,
\Bitrix\Main\Type\DateTime,
\Bitrix\Main\Loader,
\Bitrix\Main\Application,
\Bitrix\Iblock,
\A1expert\Fixer;
$cache = Application::getInstance()->getManagedCache();
$fixer = new Fixer();
$realPage = $fixer->GetRealPage();
$arOrder = $fixer->SetOrder();
$arFilter = $fixer->SetFilter(array("IBLOCK_ID"=>7, "ID"=>"1"));
$arSelect = $fixer->SetSelect(array("PROPERTY_LOGO", "PROPERTY_FOOTER_PHONE", "PROPERTY_FOOTER_ADDRESS", "PROPERTY_FOOTER_TIME", "PROPERTY_FOOTER_COPYRIGHT", "PROPERTY_PDPP", "PROPERTY_DEV_LOGO"));
if ($cache->read(36000000, "commoninfo"))
{
    $commonInfo = $cache->get("commoninfo");
}
else
{
    $arResult = $fixer->GetElements($arOrder, $arFilter, false, false, $arSelect);
    $cachedVars["headerLogo"] = $arResult[0]["PROPERTY_LOGO_VALUE"]["SRC"];
    $cachedVars["footerPhone"] = $arResult[0]["PROPERTY_FOOTER_PHONE_VALUE"];
    $cachedVars["footerAddress"] = $arResult[0]["PROPERTY_FOOTER_ADDRESS_VALUE"];
    $cachedVars["footerTime"] = $arResult[0]["PROPERTY_FOOTER_TIME_VALUE"];
    $cachedVars["footerCopyright"] = $arResult[0]["PROPERTY_FOOTER_COPYRIGHT_VALUE"];
    $cachedVars["PDPP"] = $arResult[0]["PROPERTY_PDPP_VALUE"]["SRC"];
    $cachedVars["devLogo"] = $arResult[0]["PROPERTY_DEV_LOGO_VALUE"]["SRC"];
    $cache->set("commoninfo", $cachedVars);
    $commonInfo = $cachedVars;
}
