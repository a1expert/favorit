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
<div class="text vacancy__text">
	<?if (!empty($arResult["DETAIL_TEXT"]))
		echo $arResult["DETAIL_TEXT"];
	else
		echo $arResult["GENERAL_INFO"]["~PROPERTY_GENERAL_REQ_DETAIL_VALUE"]["TEXT"];?>
</div>
<p class="vacancy__subHeader">Требования</p>
<ul class="textList textList__vacancy">
<?foreach ($arResult["DISPLAY_PROPERTIES"]["REQUIR"]["DISPLAY_VALUE"] as $key => $value)
{?>
	<li class="textList__item"><?=$value?></li><?
}?>
</ul>
<p class="vacancy__subHeader">Обязанности</p>
<ul class="textList textList__vacancy">
<?foreach ($arResult["DISPLAY_PROPERTIES"]["RESPONS"]["DISPLAY_VALUE"] as $key => $value)
{?>
	<li class="textList__item"><?=$value?></li><?
}?>
</ul>
<p class="vacancy__subHeader">Условия</p>
<ul class="textList textList__vacancy">
<?foreach ($arResult["DISPLAY_PROPERTIES"]["CONDITIONS"]["DISPLAY_VALUE"] as $key => $value)
{?>
	<li class="textList__item"><?=$value?></li><?
}?>
</ul>
<h2 class="vacancy__subHeader vacancy__subHeader_lesspadding">Как к нам попасть?</h2>
<div class="row vacancyBottom">
	<div class="col-xs-12 col-lg-8 vacancyBottom__text">
		<div class="text vacancy__text">
			<?=$arResult["GENERAL_INFO"]["~PROPERTY_HOW_GET_VALUE"]["TEXT"]?>
		</div>
	</div>
	<div class="col-xs-12 col-lg-4">
		<div class="vacancyBottom__email">
			<div class="vacancyEmailWrapper vacancyBottom__emailIcon">
				<img src="/local/assets/img/email.png" alt="email" class="vacancyBottom__emailIconImg">
			</div>
			<div class="vacancyEmailWrapper">
				<div class="vacancyEmailText">Почтовый ящик для резюме:</div>
				<a href="mailto:email@a1-reklama.ru" class="vacancyEmailAddress"><?=$arResult["GENERAL_INFO"]["PROPERTY_EMAIL_VALUE"]?></a>
			</div>
		</div>
	</div>
</div>