<?php
require('bolt.php');

$mesh = new bolt\Node();

for (; ;) {
  $mesh->emit('loop', array(
    'lol' => 'wut'
  ));
}
