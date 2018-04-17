<?php
/**
 * API methods to get result
 */
class Iziroam_Method {

  /**
   * Profile Travel's Akun
   * @return mixed[]
   */
  public static function my_profile()
  {
    return Iziroam_ApiRequestor::get(
        Iziroam_Config::getBaseUrl() . 'api-profile',
        Iziroam_Config::$secretKey,Iziroam_Config::$mID,
        false);
  }
}
