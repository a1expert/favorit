<?
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent("favorit:menu.elements", "", Array(
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
	"SEF_BASE_URL" => "/services/",
	"FOR_BOTTOM_MENU" => "Y"
));
foreach($aMenuLinksExt as $key => $item)
	$aMenuLinksExt[$key]["DEPTH_LEVEL"] = 2;

$aMenuLinks = Array(
	Array(
		"О компании", 
		"/about/", 
		Array(), 
		Array("IS_PARENT"=>1), 
		"" 
	),
	Array(
		"Отзывы", 
		"/reviews/", 
		Array(), 
		Array("DEPTH_LEVEL"=>2), 
		"" 
	),
	Array(
		"Заказчики", 
		"/clients/", 
		Array(), 
		Array("DEPTH_LEVEL"=>2), 
		"" 
	),
	Array(
		"Документы", 
		"/documents/", 
		Array(), 
		Array("DEPTH_LEVEL"=>2), 
		"" 
	),
	Array(
		"Вакансии", 
		"/jobs/", 
		Array(), 
		Array("DEPTH_LEVEL"=>2), 
		"" 
	),
	Array(
		"Услуги", 
		"/services/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Каталог продукции", 
		"/catalog/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Наши работы", 
		"/our_work/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"География поставок", 
		"/deliveries/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Контакты", 
		"/contacts/", 
		Array(), 
		Array(), 
		"" 
	)
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>