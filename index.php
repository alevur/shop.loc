<?php

define('VG_ACCESS', true); //запрет загрузки файла без предварительного обращения к index.php

header('Content-Type:text/html; charset=utf-8'); //настройки для браузера
session_start(); //старт сессии

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';
