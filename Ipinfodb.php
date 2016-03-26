<?php

namespace imanilchaudhari\ipinfodb;

/**
 * This is just an example.
 */
class Ipinfodb
{
  static $api = 'http://api.ipinfodb.com/v3/ip-city/?key={{api_key}}&ip={{ip}}&format=json';

  public function __construct(){
    
  }
  public function run()
    {
        return "Hello!";
    }
}
