<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult as $key => $arItem)
{
    if($arItem["PARAMS"]["DEPTH_LEVEL"] == 2)
        $arResult[$key]["DEPTH_LEVEL"] = 2;
    if($arItem["PARAMS"]["IS_PARENT"] == 1)
        $arResult[$key]["IS_PARENT"] = 1;
    if($arItem["PARAMS"]["FROM_IBLOCK"] == 1)
    {
        $arItem["DEPTH_LEVEL"] = 2;
        $servicesLinks[] = $arItem;
        unset($arResult[$key]);
    }
}
$flag = false;
foreach ($arResult as $key => $arItem)
{
    if($arItem["LINK"] == "/services/")
    {
        $arResult[$key]["IS_PARENT"] = 1;
        foreach ($servicesLinks as $item)
        {
            if(!$flag)
            {
                $key++;
                $mergeArray = array_slice($arResult, $key);
                array_splice($arResult, $key);
                $flag = true;
            }
            $arResult[] = $item;   
        }
        break;
    }
}
$arResult = array_merge($arResult, $mergeArray);