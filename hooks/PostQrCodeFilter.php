<?php
namespace com\xingchaovv\wp\chao\hooks;

use com\xingchaovv\wp\chao\util\Read;

class PostQrCodeFilter
{
	public function __construct()
	{
		$this->register();
	}

	public function register()
	{
		add_filter('the_content', [$this, 'run']);
	}

	public function run()
	{
		$args = func_get_args();
		$post = $args[0];
		$link = get_permalink();
		if (!$link) {
			return $post;
		}
		$imgUrl = Read::obtainQrcodeImageUrl($link);
		$block = <<<HEREDOC
<div class="wp-block-image size-full">
  <figure>
	<img src="{$imgUrl}" />
    <figcaption>扫码阅读和分享</figcaption>
  </figure>
</div>
HEREDOC;
		return $post . $block;
	}
}
