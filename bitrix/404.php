<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
CHTTP::SetStatus('404 Not Found');
@define('ERROR_404','Y');
$APPLICATION->SetTitle("Страница не найдена");?>
            <div class="container">
                <div class="text">
                    <p>Похоже страница, которую вы ищите, больше не существует или у неё изменился адрес.</p>
                    <p>Не переживайте такое иногда случается.</p>
                    <p>Посмотрите на ссылки указанные ниже, возможно там есть то, что вы ищите</p>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu404",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(0=>"",),
                        "MENU_CACHE_TIME" => "360000",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "menu404",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>