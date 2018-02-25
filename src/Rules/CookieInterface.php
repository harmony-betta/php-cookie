<?php

namespace Harmony\Rules;

interface CookieInterface {

	public function StoreCookie($name, $value, $expire);
	public function GetCookie($name);
	public function ClearCookie($name);

}