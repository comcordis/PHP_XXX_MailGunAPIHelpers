<?php

class XXX_MailGunAPI_SendEmailService
{
	public static $user = 'api';
	public static $apiKey = '';
	public static $publicAPIKey = '';
		
	public static $error = false;
	
	public static function sendEmail ($customDomain = 'mg.domain.com', $data = array())
	{
		$result = false;

		self::$error = false;

		$protocol = 'https://';

		$domain = 'api.mailgun.net';
		$path = '/v3';

		$mimeExtension = '';
		if ($data['message'] != '')
		{
			$mimeExtension = '.mime';
		}

		$uri = $protocol . self::$user . ':' . self::$apiKey . '@' . $domain . $path . '/' . $customDomain . '/messages' . $mimeExtension;
		//$uri = 'http://bin.mailgun.net/d9242822';
		echo $uri;
		$response = XXX_MailGunAPIHelpers::doPOSTRequest($uri, $data);
		
		if ($response != false)
		{
			$result = $response;
		}
		else
		{
			self::$error = 'Failed POST request';
		}

		return $result;
	}
}

?>