<?php
require('bolt.php');

$mesh = new bolt\Node();

$mesh->emit('eventName', array(
  'key' => 'value',
  'php' => array(
    'arraySyntax' => 'sucks'
  )
));
