<?php
/**
 * Plugin Name: Chao's WP Plugin
 * Description: 针对站点 Xingchaovv.com 设计。
 */
require __DIR__ . '/ChaoWpPlugin/Read.php';
require __DIR__ . '/ChaoWpPlugin/PostQrCodeFilter.php';
use ChaoWpPlugin\PostQrCodeFilter;

new PostQrCodeFilter();
