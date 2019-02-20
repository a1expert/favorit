<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <?if ($boolSectionMenu)
    {?>
                </div>
            </div>
        </div><?
    }?>
    </div> <!--end main-->
    <?if ($APPLICATION->GetPageProperty("showIntro") == "Y")
    {?>
    <div class="intro">
        <section class="companyNumbers">
            <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "numbers", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "common_info",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0 => "NUMBER", 1 => "TEXT"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "",
                "STRICT_SECTION_CHECK" => "N",
            ), false);?>
            </div>
        </section>
        <section class="gallery">
            <div class="container">
                <h2 class="h2 gallery__h2">Производство</h2>
                <?$APPLICATION->IncludeComponent("bitrix:news.detail", "gallery", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "BROWSER_TITLE" => "-",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => $galleryID, // из файла /local/inc_files/ commoninfo.php
                    "FIELD_CODE" => array(),
                    "IBLOCK_ID" => "6",
                    "IBLOCK_TYPE" => "common_info",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Страница",
                    "PROPERTY_CODE" => array(0 => "IMAGES"),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_SHARE" => "N",
                ), false);?>
            </div>
        </section>
    </div><?
    }?>
    <footer class="footer">
        <div class="container">
            <div class="footer__layout">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "0",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "360000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "bottom",
                    "USE_EXT" => "Y"
                ), false /*array("HIDE_ICONS"=>"Y")*/);?>
                              
                <address class="footer__contacts">
                    <p class="footer__phone"><?=$commonInfo["footerPhone"];?></p>
                    <p class="footer__address"><?=$commonInfo["footerAddress"];?></p>
                    <p class="footer__time"><?=$commonInfo["footerTime"];?></p>
                </address>
                <p class="footer__develop">
                    <a href="//a1-reklama.ru" target="_blank">
                        <small>Разработка и продвижение</small>
                        <img src="<?=$commonInfo["devLogo"];?>" alt="a1 huyspert">
                    </a>
                </p>
                <p class="footer__policy">
                    <a href="<?=$commonInfo["PDPP"];?>" target="_blank">Политика в отношении обработки персональных данных</a>
                </p>
                <p class="footer__copyrights">
                    <small>© <?=$commonInfo["footerCopyright"];?></small>
                </p>
            </div>
        </div>
    </footer>
    <div class="white-popup mfp-hide">
        <div class="callback" id="popupForm">
            <div class="callback__wraper" id="callbackWraper">
                
            </div>
        </div>
    </div>
    <template id="popupFormTpl">
        <form action="assets/scripts/form.js" name="callback" method="POST" enctype="multipart/form-data" class="callback__form">
            <h3 class="callback__header">Заполните форму и получите бесплатную консультацию</h3>
            <div class="callback__Input">
                <input type="phone" name="phone" value="" required pattern="\+{0,1}\d{5,11}" class="callback__phone" onblur="if(this.value !== '')this.classList.add('filledInput');else this.classList.remove('filledInput');">
                <label for="phone" class="callback__phoneLabel">Ваш номер телефона</label>
            </div>
            <div class="callback__Input">
                <button type="submit" value="" class="btn callback__btn btn_blue">Заказать звонок</button>
            </div>
            <div class="callback__note">Заполняя настоящую форму вы даете свое согласие на обработку своих <a href="/local/assets/img/bluprintdev.png" class="callback__pndLink" target="_blank">персональных данных</a></div>
        </form>
    </template>
    <div class="hide">
        <div class="successMessage" id="successMessage">
            <h3 class="callback__header">Спасибо за вашу заявку!</h3>
            <div class="text successText">Наши менеджеры свяжутся с вами в ближайшее время для обсуждения деталей.</div>
        </div>
    </div>
</body>
</html>