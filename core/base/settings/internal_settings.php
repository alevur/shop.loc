<?php

defined('VG_ACCESS') or die('Доступ запрещен');//запрет загрузки файла без предварительного обращения к index.php

const TEMPLATE = 'templates/default'; //шаблоны пользовательской части сайта
const ADMIN_TEMPLATE = 'core/admin/views'; //путь к административной панели сайта

const COOKIE_VERSION = '1.0.0';//константа безопасности
const CRYPT_KEY = ''; //ключ шифрования
const COOKIE_TIME = 60; //время бездействия(для админа)
const BLOCK_TIME = 3; //время блокировки пользователя

const QTY = 8;//постраничная навигация (кол-во товаров)
const QTY_LINKS = 3;//кол/во ссылок постраничной навигации

const ADMIN_CSS_JS = [ //пути к css и js файлам в админ панели
    'styles' => [],
    'scripts' => []
];

const USER_CSS_JS = [ //пути к css и js файлам к пользовательской панели
    'styles' => [],
    'scripts' => []
];