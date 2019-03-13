<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="contacts container">
	<div class="row contacts__tiles">
		<div class="col-xs-12 col-sm-6 contacts__tile contactsAddress">
			<h3 class="contacts__h3">Адрес:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["ADDRESS"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsPhones">
			<h3 class="contacts__h3">Каналы связи:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["PHONE_1"]["DISPLAY_VALUE"];?><br>
				<?=$arResult["DISPLAY_PROPERTIES"]["PHONE_2"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsWorkTime">
			<h3 class="contacts__h3">Время работы:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["WORK_TIME"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsRequis">
			<h3 class="contacts__h3">Реквизиты компании:</h3>
			<div class="contacts__content">
				<a href="<?=$arResult["DISPLAY_PROPERTIES"]["REQUISITE"]["FILE_VALUE"]["SRC"];?>" class="contactsRequis__link" download="Реквизиты компании">
					<span class="contactsRequis__icon">
						<img src="/local/assets/img/downloadicon.png" alt="">
					</span>
					Скачать реквизиты
				</a>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A33c17fcf2e804b2c4e5bf66ef6f81bf84d66a9566c72529397811b1e78de2270&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=false"></script>
<?if(!empty($arResult["DETAIL_TEXT"]))
{?>
<div class="text">
	<?=$arResult["DETAIL_TEXT"];?>
</div><?
}?>
<?if($arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"] && $arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"])
{?>
	<p class="aboutContent__subHeader"><?=$arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"];?></p>
	<ul class="textList textList__about">
		<?foreach ($arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"] as $key => $value)
		{?>
			<li class="textList__item"><?=$value?></li><?
		}?>
	</ul><?
}?>
<?if($arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"])
{?>
	<div class="text">
		<?=$arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"];?>
	</div><?
}?>