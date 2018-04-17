<?php
/**
 * Iziroam Configuration
 */
class Iziroam_Config {

  /**
   * Your travel's Secret key
   * @static
   */
  public static $secretKey;
  /**
   * Your travel's mID
   * @static
   */
  public static $mID;
  /**
   * true for production mode
   * false for sandbox mode
   * @static
   */
  public static $isProduction_mode = true;

  /**
   * Options for every request
   * @static
   */
  public static $curlOptions = array();

  const SANDBOX_BASE_URL = 'https://sandbox.iziroam.com/';
  const PRODUCTION_BASE_URL = 'https://iziroam.com/';

  public static function getBaseUrl()
  {
    return Iziroam_Config::$isProduction_mode ?
        Iziroam_Config::PRODUCTION_BASE_URL : Iziroam_Config::SANDBOX_BASE_URL;
  }
}
