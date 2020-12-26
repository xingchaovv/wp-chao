<?php
namespace com\xingchaovv\wp\chao\util;

class Read
{
	/**
	 * 获取二维码图片 URL
	 */
	public static function obtainQrcodeImageUrl($text)
	{
		$queryStr = http_build_query([
			'data' => $text,
			'margin' => 0,
			'size' => '120x120',
		]);
		return "http://api.qrserver.com/v1/create-qr-code/?{$queryStr}";
	}
}
