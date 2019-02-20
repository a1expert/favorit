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
<?if(empty($arResult["DISPLAY_PROPERTIES"]["FIRST_BG_WEBP"]["FILE_VALUE"]["SRC"]))
{?>
	<style>
		.firstBlock{
			background-image: url(<?=$arResult["DISPLAY_PROPERTIES"]["FIRST_BG"]["FILE_VALUE"]["SRC"];?>);
		}
	</style><?
}
else
{?>
	<style>
		.no-webp .firstBlock{
			background-image: url(<?=$arResult["DISPLAY_PROPERTIES"]["FIRST_BG"]["FILE_VALUE"]["SRC"];?>);
		}
		.webp .firstBlock{
			background-image: url(<?=$arResult["DISPLAY_PROPERTIES"]["FIRST_BG_WEBP"]["FILE_VALUE"]["SRC"];?>);
		}
	</style><?
}?>
<section class="firstBlock">
    <div class="firstBlock__content container">
        <h1 class="firstBlock__mainPageHeader"><?=htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["FIRST_BLOCK_HEADER"]["DISPLAY_VALUE"])?></h1>
        <div class="firstBlock__text"><?=htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["FIRST_BLOCK_SUBHEADER"]["DISPLAY_VALUE"])?></div>
        <a href="/catalog/" class="btn firstBlock__btn btn_blue">Перейти в каталог<span class="btn__arrow btn__arrow_white btn__arrow_horizontal"></span></a>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row about__row">
            <div class="col-xs-12 col-lg-6 aboutContent">
                <h2 class="h2 aboutContent__header"><?=htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["ABOUT_HEADER"]["DISPLAY_VALUE"])?></h2>
                <p class="aboutContent__subHeader"><?=htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["ABOUT_SUBHEADER"]["DISPLAY_VALUE"])?></p>
                <ul class="textList textList__about">
				<?foreach($arResult["DISPLAY_PROPERTIES"]["ABOUT_LIST"]["DISPLAY_VALUE"] as $value)
				{?>
					<li class="textList__item"><?=htmlspecialchars_decode($value);?></li><?
				}?>                    
                </ul>
                <a href="/about/" class="btn aboutContent__btn btn_blue">Узнать больше<span class="btn__arrow btn__arrow_white btn__arrow_horizontal"></span></a>
            </div>
            <div class="col-xs-12 col-lg-6 about__slider">
			<?foreach($arResult["DISPLAY_PROPERTIES"]["SLIDER"]["FILE_VALUE"] as $value)
			{?>
                <img src="<?=$value["SRC"];?>" alt="" style="width: 100%; height:100%;"><?
			}?>                
            </div>
        </div>
    </div>
</section>