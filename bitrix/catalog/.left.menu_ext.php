<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
if(!empty($_SERVER["REDIRECT_URL"]))
{
    $aMenuLinks = $APPLICATION->IncludeComponent(
        "favorit:menu.sections",
        "",
        Array(
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DEPTH_LEVEL" => "2",
            "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
            "IBLOCK_ID" => "13",
            "IBLOCK_TYPE" => "content",
            "ID" => $_REQUEST["ID"],
            "IS_SEF" => "Y",
            "SECTION_PAGE_URL" => "#SECTION_CODE#/",
            "SECTION_URL" => "",
            "SEF_BASE_URL" => "/catalog/",
            "WIDTH_SECTIONS" => "Y"
        )
    );
}
else {
    $aMenuLinks = Array();   
}
?>