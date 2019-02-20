<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application,
    Bitrix\Main\Page\Asset,
    Bitrix\Main\Loader,
    Bitrix\Main\Localization\Loc;    
Loc::loadMessages(__FILE__);
$dir = $APPLICATION->GetCurDir();
$page = $APPLICATION->GetCurPage(true);
$assets = Asset::getInstance();
$docRoot = Application::getDocumentRoot();
$boolSectionMenu = isSectionMenu("left", true);
$mainPage = ($page == "/index.php") ? true : false;
require($_SERVER["DOCUMENT_ROOT"] . "/local/inc_files/commoninfo.php");
$adminIndaHouse = $USER->isAdmin();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
        <?
        $APPLICATION->ShowHead();
        //strings
        $assets->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">');
        $assets->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        //CSS
        $assets->addCss('/local/assets/styles/main.css');
        $assets->addCss('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
		//SCRIPTS
		$assets->addJS('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		$assets->addJS('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
		$assets->addJS('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js');
        $assets->addJS('/local/assets/scripts/main.js');
        ?>
        <?//<link href="/local/assets/images/icon.png" rel="icon" type="image/png">?>
		<title><?$APPLICATION->ShowTitle();?></title>
	</head>

	<body class="page">
    <?$APPLICATION->showPanel();?>
        <svg class="allSvgCont" xmlns="http://www.w3.org/2000/svg">
            <symbol id="phone_svg" viewBox="0 0 49 49">
                <path id="_phone_svg" data-name="_phone_svg" class="cls-1" d="M 39.03125 47 C 39.015625 47 39 47 38.984375 47 C 31.46875 46.753906 22.664063 39.46875 16.597656 33.398438 C 10.523438 27.328125 3.238281 18.519531 3.003906 11.039063 C 2.917969 8.414063 9.359375 3.746094 9.425781 3.699219 C 11.097656 2.535156 12.953125 2.949219 13.714844 4.003906 C 14.230469 4.71875 19.113281 12.117188 19.644531 12.957031 C 20.195313 13.828125 20.113281 15.125 19.425781 16.425781 C 19.046875 17.148438 17.789063 19.359375 17.199219 20.390625 C 17.835938 21.296875 19.519531 23.519531 22.996094 26.996094 C 26.476563 30.472656 28.695313 32.160156 29.605469 32.796875 C 30.636719 32.207031 32.847656 30.949219 33.570313 30.570313 C 34.851563 29.890625 36.140625 29.804688 37.019531 30.34375 C 37.917969 30.894531 45.296875 35.800781 45.976563 36.273438 C 46.546875 36.675781 46.914063 37.363281 46.988281 38.164063 C 47.058594 38.972656 46.808594 39.828125 46.289063 40.574219 C 46.246094 40.636719 41.632813 47 39.03125 47 Z "/>
            </symbol>
            <symbol id="mBtn_svg" viewBox="0 0 20 20">
                <rect fill="#ffffff" height="3" width="20" x="0" y="1.5"/>
                <rect fill="#ffffff" height="3" width="20" x="0" y="8.5"/>
                <rect fill="#ffffff" height="3" width="20" x="0" y="15.5"/>
            </symbol>
        </svg>
        <header class="header<?if($mainPage){echo " header_mainPage"; if($adminIndaHouse){echo " header_admin";}}?>" id="header">
            <div class="container hidden-lg">
                <div class="row">
                    <div class="col-xs-4 header__mMenuOpenBtn" id="mMenuOpenBtn">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#mBtn_svg"></use></svg>
                        <span class="hidden-xs hidden-md hidden-lg menuBtn_lable">Меню</span>
                    </div>
                    <a href="/" class="col-xs-4 logoLink header__logoLink">
                        <img src="<?=$commonInfo["headerLogo"];?>" alt="Логотип" title="Hа главную" class="header__logoImg">
                    </a>
                    <a href="#popupForm" class="col-xs-4 header__callback">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#phone_svg"></use></svg>
                        <span class="hidden-xs hidden-md hidden-lg header__callback__lable">Заказать звонок</span>
                    </a>
                </div>
            </div>
            <div class="container hidden-sm hidden-xs hidden-md">
                <div class="row header__row">
                    <a href="/" class="logoLink header__logoLink header__item">
                        <img src="<?=$commonInfo["headerLogo"];?>" alt="Логотип" title="Hа главную" class="header__logoImg">
                    </a>
                    <nav class="coltopMenu header__item">
                        <ul class="topMenu__list row">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "top",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "0",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "360000",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N"
                                ), false, array("HIDE_ICONS"=>"Y")
                            );?>
                        </ul>
                    </nav>
                    <a href="#popupForm" class="header__callback header__item">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="header__callbackIcon"><use xlink:href="#phone_svg"></use></svg>
                        Заказать звонок
                    </a>
                </div>
            </div>
        </header>
        <nav class="mobileMenu visualHide" id="mobileMenu">
            <div href="index.html" class="col-xs-12 logoLink mobileMenu__logoLink">
                <img src="<?=$commonInfo["headerLogo"];?>" alt="Логотип" title="Hа главную" class="header__logoImg">
            </div>
            <ul class="mobileMenu__list">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "0",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "360000",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    ), false, array("HIDE_ICONS"=>"Y")
                );?>
                <li class="mobileMenu__closeBtn" id="mobileMenuCloseBtn"><span class="closeBtn__arrow closeBtn__arrowRight"></span><span class="closeBtn__arrow closeBtn__arrowLeft"></span></li>
            </ul>
        </nav>
        <div class="main<?=($mainPage) ? "__mainPage" : "";?>" id="main">
        <?if ($mainPage === false)
        {?>
            <div class="hidden-xs breadcrumbs">
                <div class="container">
                    <div class="row">
                        <ul class="breadcrums__list col-sm-12 col-md-12 <?=($boolSectionMenu)?"col-lg-9 col-lg-offset-3" : "";?> "> <!-- здесь надо будет ставить классы (col-lg-9 col-lg-offset-3) только если есть боковое меню, компонент начинать с li-->
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "crumbs", Array("PATH" => "", "SITE_ID" => "s1", "START_FROM" => "0"));?>
                        </ul>
                    </div>
                </div>
            </div>
            <?if ($boolSectionMenu)
            {?>
                <div class="container container_aside">
                    <div class="row">
                        <nav class="col-xs-12 col-lg-3 aside">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "left",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "4",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "360000",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y"
                                ), false, array("HIDE_ICONS"=>"Y")
                            );?>
                        </nav>
                        <div class="col-xs-12 col-lg-9 content content_aside">
                            <h1 class="h1"><?$APPLICATION->ShowTitle(true);?></h1><?
            }
            else
            {?>
                <div class="container">
                    <h1 class="h1"><?$APPLICATION->ShowTitle(true);?></h1>
                </div><?
            }
        }?>
