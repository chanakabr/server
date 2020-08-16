<?php
/**
 * @package server-infra
 * @subpackage request
 */
class kNetworkUtils
{
	const KALTURA_AUTH_HEADER = 'HTTP_X_KALTURA_AUTH';
	const DEFAULT_AUTH_HEADER_VERSION = 1;
	const MAX_TIMESTAMP_DIFF_ALLOWED = 60; //we allow 60 seconds diff in authentication time stamp value to overcome any clock sync issues
	
	/**
	 * @return bool
	 * @throws Exception
	 */
	public static function isAuthenticatedURI()
	{
		if (!isset($_SERVER[self::KALTURA_AUTH_HEADER]))
		{
			KalturaLog::warning("Missing Header Parameter - ". self::KALTURA_AUTH_HEADER);
			return false;
		}
		$xKalturaAuth = $_SERVER[self::KALTURA_AUTH_HEADER];
		$parts = explode(',', $xKalturaAuth);
		if (count($parts) != 3)
		{
			KalturaLog::warning('Invalid Fromat for ' . self::KALTURA_AUTH_HEADER);
			return false;
		}

		$version = $parts[0];
		$timestamp = $parts[1];
		$expectedSignature = $parts[2];
		
		$currentTimestamp = time();
		if( !$timestamp || ($timestamp < $currentTimestamp - self::MAX_TIMESTAMP_DIFF_ALLOWED) || ($timestamp > $currentTimestamp + self::MAX_TIMESTAMP_DIFF_ALLOWED ) )
		{
			KalturaLog::warning("Failed to validate signature time stamp timestamp [$timestamp] currentTimestamp [$currentTimestamp]");
			return false;
		}
		
		$url = ltrim(substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')), '/');

		$actualSignature = self::calculateSignature($version, $timestamp, $url);
		if(!$actualSignature)
		{
			return false;
		}
		KalturaLog::debug("Actual Signature [$actualSignature] - Expected Signature [$expectedSignature]" );
		if ( $actualSignature !== $expectedSignature)
		{
			KalturaLog::warning("Could not authenticate X-Kaltura-Auth");
			return false;
		}

		return true;
	}

	public static function calculateSignature($version, $timestamp, $url)
	{
		$secret = kConf::get('vod_packager_authentication_secret','local', null);
		if (!$secret)
		{
			KalturaLog::warning("Missing authentication_secret in configuration");
			return '';
		}

		KalturaLog::debug("Calculating signature for version [$version], time [$timestamp], url [$url]");
		return base64_encode(hash_hmac('sha256', "$version,$timestamp,$url", $secret, true));
	}
}
