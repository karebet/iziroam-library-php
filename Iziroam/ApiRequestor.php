<?php

class Iziroam_ApiRequestor {

  /**
   * Send GET request
   * @param string  $url
   * @param string  $secret_key
   * @param string  $mid
   * @param mixed[] $data_hash
  */
  public static function get($url, $secret_key,$mid, $data_hash)
  {
    return self::remoteCall($url, $secret_key,$mid, $data_hash, false);
  }

  /**
   * Send POST request
   * @param string  $url
   * @param string  $secret_key
   * @param string  $mid
   * @param mixed[] $data_hash
  */
  public static function post($url, $secret_key,$mid, $data_hash)
  {
    return self::remoteCall($url, $secret_key,$mid, $data_hash, true);
  }

  /**
   * Actually send request to API server
   * @param string  $url
   * @param string  $secret_key
   * @param string  $mid
   * @param mixed[] $data_hash
   * @param bool    $post
   */
  public static function remoteCall($url, $secret_key,$mid, $data_hash, $post = true)
  {
    $ch = curl_init();
    $url = $url.'?time='.md5(date('YmdHis'));
    $curl_options = array(
      CURLOPT_URL => $url,
      CURLOPT_HEADER => 0,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json',
        "key: " . $secret_key."",
        'mid: ' . $mid
      ),
      CURLOPT_RETURNTRANSFER => true,
    );
    if (count(Iziroam_Config::$curlOptions)) {
      if (Iziroam_Config::$curlOptions[CURLOPT_HTTPHEADER]) {
        $mergedHeders = array_merge($curl_options[CURLOPT_HTTPHEADER], Iziroam_Config::$curlOptions[CURLOPT_HTTPHEADER]);
        $headerOptions = array( CURLOPT_HTTPHEADER => $mergedHeders );
      } else {
        $mergedHeders = array();
      }
      $curl_options = array_replace_recursive($curl_options, Iziroam_Config::$curlOptions, $headerOptions);
    }

    if ($post) {
      $curl_options[CURLOPT_POST] = 1;
      if ($data_hash) {
        $body = json_encode($data_hash);
        $curl_options[CURLOPT_POSTFIELDS] = $body;
      } else {
        $curl_options[CURLOPT_POSTFIELDS] = '';
      }
    }else{
      if ($data_hash) {
        $curl_options[CURLOPT_URL] = $url.'&';
      }
    }

    curl_setopt_array($ch, $curl_options);
    $result = curl_exec($ch);
    curl_close($ch); 
    return $result;
  }

}
