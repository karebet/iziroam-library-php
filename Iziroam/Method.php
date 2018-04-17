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
      Iziroam_Config::getBaseUrl().'api-profile',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,false);
  }
  /**
   * Product List Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function product_list($data=false)
  {
    return Iziroam_ApiRequestor::get(
      Iziroam_Config::getBaseUrl().'api-product/list-product',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }
  /**
   * Product Detail Iziroam by PID
   * @param string pid
   * @return mixed[]
   */
  public static function product_detail($pid='')
  {
    if ($pid=='') {
      echo 'not found PID for detail product'; die();
    }
    $data = array('pid'=>$pid);
    return Iziroam_ApiRequestor::get(
      Iziroam_Config::getBaseUrl().'api-product/detail',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }
  /**
   * Check Stock Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function check_stock($data)
  {
    return Iziroam_ApiRequestor::post(
      Iziroam_Config::getBaseUrl().'api-order/check-stock',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }
  /**
   * Create Order Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function order_create($data)
  {
    return Iziroam_ApiRequestor::post(
      Iziroam_Config::getBaseUrl().'api-order/create',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }

  /**
   * List Order Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function order_list($data=false)
  {
    return Iziroam_ApiRequestor::get(
      Iziroam_Config::getBaseUrl().'api-order/list-orders',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }

  /**
   * Cencel Order Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function order_cencle($data)
  {
    return Iziroam_ApiRequestor::post(
      Iziroam_Config::getBaseUrl().'api-order/cencel',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }


  /**
   * Status Payment Order Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function order_status_payment($data)
  {
    return Iziroam_ApiRequestor::get(
      Iziroam_Config::getBaseUrl().'api-order/status-payment',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }

  /**
   * Approve Payment Order Iziroam
   * @param data[]
   * @return mixed[]
   */
  public static function order_approve_payment($data)
  {
    return Iziroam_ApiRequestor::post(
      Iziroam_Config::getBaseUrl().'api-order/approve-payment',
      Iziroam_Config::$secretKey,Iziroam_Config::$mID,$data);
  }
}
