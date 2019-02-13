<?
if(!empty($_SERVER["REDIRECT_URL"]))
{
    $aMenuLinks = $APPLICATION->IncludeComponent(
        "bitrix:menu.sections",
        "",
        Array(
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DEPTH_LEVEL" => "2",
            "IBLOCK_ID" => "12",
            "IBLOCK_TYPE" => "content",
            "ID" => $_REQUEST["ID"],
            "IS_SEF" => "N",
            "SECTION_URL" => ""
        )
    );
}
else {
    $aMenuLinks = Array();   
}
?>