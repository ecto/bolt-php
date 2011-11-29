<?php
require('bolt.php');

$mesh = new bolt\Node(array(
  'host' => 'http://myserver.com/',
  'port' => '4321', // non-standard
  'auth' => 'redisPassword'
));

$mesh->emit('yay', array(
  'we' => 'authenticated!'
));
