<?

IncludeModuleLangFile(__FILE__);
use \Bitrix\Main\ModuleManager;

Class ru51a4_contact extends CModule
{

    var $MODULE_ID = "ru51a4.contact";
    
  public $MODULE_VERSION = '1.0';
  public $MODULE_VERSION_DATE = '2011-09-06';

    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $errors;

    function modulename() {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
            $this->MODULE_NAME = $arModuleVersion["MODULE_NAME"];
            $this->MODULE_DESCRIPTION = $arModuleVersion["MODULE_DESCRIPTION"];
        } else {
            //укажите собственные значения
            $this->MODULE_VERSION = 0;
            $this->MODULE_VERSION_DATE = 0;
            $this->MODULE_NAME = 0;
            $this->MODULE_DESCRIPTION = 0;
        }
    }

    function __construct()
    {
        //$arModuleVersion = array();
        $this->MODULE_VERSION = "1.0.0";
        $this->MODULE_VERSION_DATE = "20.03.2016";
        $this->MODULE_NAME = "Пример модуля D7";
        $this->MODULE_DESCRIPTION = "Тестовый модуль для разработчиков, можно использовать как основу для разработки новых модулей для 1С:Битрикс";
    }

    function DoInstall()
    {
        $this->InstallDB();
        $this->InstallEvents();
        $this->InstallFiles();
        \Bitrix\Main\ModuleManager::RegisterModule("ru51a4.contact");
        return true;
    }

    function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
        \Bitrix\Main\ModuleManager::UnRegisterModule("ru51a4.contact");
        return true;
    }

    function InstallDB()
    {
       return true;
    }

    function UnInstallDB()
    {
        return true;
    }

    function InstallEvents()
    {
        return true;
    }

    function UnInstallEvents()
    {
        return true;
    }

    function InstallFiles()
    {
        return true;
    }

    function UnInstallFiles()
    {
        return true;
    }
}