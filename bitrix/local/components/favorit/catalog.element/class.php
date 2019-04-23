<?
use Bitrix\Main,
	Bitrix\Main\Loader,
	Bitrix\Iblock\Component\Element,
	Bitrix\Main\Localization\Loc,
	Bitrix\Catalog,
	\A1expert\Fixer;


if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Loc::loadMessages(__FILE__);

if (!\Bitrix\Main\Loader::includeModule('iblock'))
{
	ShowError(Loc::getMessage('IBLOCK_MODULE_NOT_INSTALLED'));
	return;
}

class CatalogElementComponent extends Element
{
	public function __construct($component = null)
	{
		parent::__construct($component);
		$this->setExtendedMode(false);
		
	}

	/**
	 * Processing parameters unique to catalog.element component.
	 *
	 * @param array $params		Component parameters.
	 * @return array
	 */
	public function onPrepareComponentParams($params)
	{
		$params = parent::onPrepareComponentParams($params);

		$params['COMPATIBLE_MODE'] = (isset($params['COMPATIBLE_MODE']) && $params['COMPATIBLE_MODE'] === 'N' ? 'N' : 'Y');
		if ($params['COMPATIBLE_MODE'] === 'N')
		{
			$params['SET_VIEWED_IN_COMPONENT'] = 'N';
			$params['DISABLE_INIT_JS_IN_COMPONENT'] = 'Y';
			$params['OFFERS_LIMIT'] = 0;
		}

		$this->setCompatibleMode($params['COMPATIBLE_MODE'] === 'Y');

		$params['SET_VIEWED_IN_COMPONENT'] = isset($params['SET_VIEWED_IN_COMPONENT']) && $params['SET_VIEWED_IN_COMPONENT'] === 'Y' ? 'Y' : 'N';

		

		return $params;
	}
	
	/**
	 * Fill additional keys for component cache.
	 *
	 * @param array &$resultCacheKeys		Cached result keys.
	 * @return void
	 */
	protected function initAdditionalCacheKeys(&$resultCacheKeys)
	{
		parent::initAdditionalCacheKeys($resultCacheKeys);

		
			$element =& $this->elements[0];
			$fixer = new Fixer();
			$selectElements = $fixer->GetElements(array(), array('IBLOCK_ID'=>$element['IBLOCK_ID'], 'SECTION_ID'=>$element['SECTION']['ID'], 'ACTIVE'=>'Y'), false, false, array('IBLOCK_ID','ID','NAME'), false);
			foreach ($selectElements as $value)
				$this->arResult['SELECT_FORM_OPTIONS'][] = $value['NAME'];
			$resultCacheKeys[] = 'SELECT_FORM_OPTIONS';			
			unset($element);
		
	}
}