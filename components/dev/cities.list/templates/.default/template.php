<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $component
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

if ($arResult["ITEMS"])
{
	?>
	<div class="list">
	<?
	foreach ($arResult["ITEMS"] as $arItem) {
		// print_r($arItem);
		?>
			<div class="item">
				<?=$arItem['NAME']?> &nbsp; <a href='<?=$arItem['DEL_URL']?>' style='color:red'>удалить</a>
			</div>
		<?

	}
	?>
	</div>
	<?

	if ($arResult["NAV_STRING"]){
		?>

		<div class="nav">
			<?=$arResult["NAV_STRING"]?>
		</div>		
		<?
	}

}