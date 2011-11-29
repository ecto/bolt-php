<?php
/**
 * bolt-php
 * <cam@onswipe.com>
 */

namespace bolt;

require 'lib/redisent.php';

class Node {

  /*
   * Holds Redis client
   */
  private $_client;

  /*
   * Redis host
   */
  public $host = 'localhost';

  /*
   * Redis port
   */
  public $port = '6379';

  /*
   * Redis password
   */
  public $auth;

  /*
   * Bolt channel for emissions
   */
  public $channel = 'bolt::main';

  /*
   * Allow multiple Nodes with different configurations
   * Process options, connect to Redis
   */
  public function __construct ($options = array()) {
    $accept = array('host', 'port', 'auth', 'channel');
    foreach ($options as $key => $value) {
      if (in_array($option, $accept)) {
        $this[$key] = $value;
      }
    }

    $this->_client = new \redisent\Redis(
      $this->host,
      $this->port
    );

    if ($this->auth) {
      $this->_client->auth(
        $this->auth
      );
    }
  }

  /*
   * Emit an event on the config-specified channel
   */
  public function emit ($hook, $data) {
    $m = array(
      'hook' => $hook,
      'data' => $data
    );

    $this->_client->publish($this->channel, json_encode($m));
  }
  
}


