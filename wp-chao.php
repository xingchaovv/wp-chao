<?php
/**
 * Plugin Name: WP Chao
 * Description: WP Chao 是一款 WordPress 的插件。目前主要用于笔者个人博客，欢迎参考、使用。
 * Version: 1.0
 * Plugin URI: https://github.com/xingchaovv/wp-chao
 * Author: Xingchao Zhang
 * Author URI: http://xingchaovv.com
 */

require __DIR__ . '/util/Read.php';
require __DIR__ . '/hooks/PostQrCodeFilter.php';

use com\xingchaovv\wp\chao\hooks\PostQrCodeFilter;

new PostQrCodeFilter();
