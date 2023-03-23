<?

IncludeModuleLangFile(__FILE__);
use \Bitrix\Main\ModuleManager;

Class ru51a4_contact extends CModule
{

    var $MODULE_ID = "ru51a4.contact";
    
  
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $errors;

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