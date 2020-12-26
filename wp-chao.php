<?php
/**
 * Plugin Name: WP Chao
 * Description: WP Chao 是一款 WordPress 的插件。目前主要用于笔者个人博客，欢迎参考。
 */

require __DIR__ . '/util/Read.php';
require __DIR__ . '/hooks/PostQrCodeFilter.php';

use com\xingchaovv\wp\chao\hooks\PostQrCodeFilter;

new PostQrCodeFilter();
