<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
if(!empty($_SERVER["REDIRECT_URL"]))
{
    $aMenuLinks = $APPLICATION->IncludeComponent(
        "favorit:menu.elements",
        "",
        Array(
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DEPTH_LEVEL" => "2",
            "DETAIL_PAGE_URL" => "#ELEMENT_CODE#/",
            "IBLOCK_ID" => "12",
            "IBLOCK_TYPE" => "content",
            "ID" => $_REQUEST["ID"],
            "IS_SEF" => "Y",
            "SECTION_PAGE_URL" => "#SECTION_ID#/",
            "SECTION_URL" => "",
            "SEF_BASE_URL" => "/services/"
        )
    );
}
else {
    $aMenuLinks = Array();   
}
?>