<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
$this->setFrameMode(false);
ShowRes($arResult);
?>
<form action="<?=POST_FORM_ACTION_URI?>" name="callback" method="POST" enctype="multipart/form-data" class="callback__form">
	<?=bitrix_sessid_post()?>
	<h3 class="callback__header">Заполните форму и получите бесплатную консультацию</h3>
	<div class="callback__Input">
		<input type="phone" name="PROPERTY[NAME][0]" value="" required pattern="\+{0,1}\d{5,11}" class="callback__phone jsFloatInput">
		<label for="phone" class="callback__phoneLabel">Ваш номер телефона</label>
	</div>
	<div class="callback__Input">
		<input type="hidden" name="iblock_submit" value="Y"/>
		<button type="submit" class="btn callback__btn btn_blue">Заказать звонок</button>
	</div>
	<div class="callback__note">Заполняя настоящую форму вы даете свое согласие на обработку своих <a href="/local/assets/img/bluprintdev.png" class="callback__pndLink" target="_blank">персональных данных</a></div>
</form>