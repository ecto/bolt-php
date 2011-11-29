<?php
/*
 * bolt-php
 * <cam@onswipe.com>
 */

namespace bolt;

require 'lib/redisent.php';

class Node {

  private $_client;

  public $host = 'localhost';

  public $port = '6379';

  public $auth;

  public $channel = 'bolt::main';

  public function __construct ($options = array()) {
    // process options
    $accept = array('host', 'port', 'auth', 'channel');
    foreach ($options as $key => $value) {
      if (in_array($option, $accept)) {
        $this[$key] = $value;
      }
    }

    // fire up client
    $this->_client = new \redisent\Redis(
      $this->host,
      $this->port
    );

    // authenticate
    if ($this->auth) {
      $this->_client->auth(
        $this->auth
      );
    }
  }

  public function emit ($hook, $data) {
    $m = array(
      'hook' => $hook,
      'data' => $data
    );

    $this->_client->publish($this->channel, json_encode($m));
  }
  
}


