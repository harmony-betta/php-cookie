<?php

namespace Harmony;

use Harmony\Rules\CookieInterface;

class HarmonyCookie implements CookieInterface
{

	public function StoreCookie( $name, $value, $expire = null )
	{
		setcookie( $name, $value, $expire );
	}

	public function GetCookie( $name )
	{
		return $_COOKIE[$name];
	}

	public function UpdateCookie( $name, $value, $expire = null )
	{
		setcookie( $name, $value, $expire );
	}

	public function ClearCookie( $name )
	{
		setcookie($name, '', time()-3600);
	}

}