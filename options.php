<?php

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;

if (!$USER->isAdmin()) {
    $APPLICATION->authForm('Nope');
}
$app = Application::getInstance();
$context = $app->getContext();
$request = $context->getRequest();
$curModuleName = "ru51a4.contact";
//Loc::loadMessages($context->getServer()->getDocumentRoot()."/bitrix/modules/main/options.php");
Loc::loadMessages(__FILE__);
\Bitrix\Main\Loader::includeModule($curModuleName);

$aTabs = [
    [
        "DIV" => "edit1",
        "TAB" => Loc::getMessage("MAIN_TAB_SET"),
        "ICON" => "main_settings",
        "TITLE" => Loc::getMessage("MAIN_TAB_TITLE_SET"),
    ]
];

$tabControl = new CAdminTabControl("tabControl", $aTabs);
if ($request->isPost()) {
    $arFields = $request->getPost('options');
    foreach ($arFields as $k => $arField) {
        Option::set($curModuleName, $k, $arField);
    }
    LocalRedirect($APPLICATION->GetCurUri());
}

$tabControl->begin();
?>

<form method="POST"
    action="<?= sprintf('%s?mid=%s&lang=%s', $request->getRequestedPage(), urlencode($mid), LANGUAGE_ID) ?>&<?= $tabControl->ActiveTabParam() ?>"
    enctype="multipart/form-data" name="editform" class="editform">
    <?php
    echo bitrix_sessid_post();
    $tabControl->beginNextTab();
    ?>

    <tr>
        <td width="40%">
            <label for="options[telegram]">
                telegram:
            </label>
        </td>
        <td width="60%">
            <?php
            $telegram = Option::get($curModuleName, 'telegram');
            ?>
            <input type="text"  name="options[telegram]" value="<?= $telegram ?>">
        </td>
    </tr>

    <tr>
        <td width="40%">
            <label for="options[whatsup]">
                whatsup:
            </label>
        </td>
        <td width="60%">
            <?php
            $whatsup = Option::get($curModuleName, 'whatsup');
            ?>
            <input type="text" name="options[whatsup]" value="<?= $whatsup ?>">
        </td>
    </tr>


    <?php
    $tabControl->Buttons([
        "btnApply" => true,
       // "back_url" => $APPLICATION->GetCurUri(),
    ]);
    $tabControl->End();
    ?>
</form>