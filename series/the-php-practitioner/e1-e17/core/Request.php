<?php
/**
 * Core Request class
 */
class Request
{

  public static function uri()
  {
    return trim($_SERVER['REQUEST_URI'], '/');
  }
}
