<?php

// https://documentation.mailgun.com/api_reference.html

abstract class XXX_MailGunAPIHelpers
{
	public static function doPOSTRequest ($uri = '', $data = array())
	{
		$result = false;
		
		$response = XXX_HTTP_Request::execute($uri, 'body', $data, 30);
		
		if ($response != false)
		{
			$result = $response;
		}
		
		return $result;
	}

	public static function doGETRequest ($uri = '', $data = array())
	{
		$result = false;
		
		$response = XXX_HTTP_Request::execute($uri, 'uri', $data, 30);
		
		if ($response != false)
		{
			$result = $response;
		}
		
		return $result;
	}
}

?>