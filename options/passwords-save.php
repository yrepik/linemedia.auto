<?php

$LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN = (string) $_POST['LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN'];
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN', $LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN);

$LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD = (string) $_POST['LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD'];
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD', $LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD);

$LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH = $_POST['LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH'] == 'Y' ? 'Y' : 'N';
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH', $LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH);
