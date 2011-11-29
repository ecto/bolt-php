<?php
require('bolt.php');

$mesh = new bolt\Node();

$mesh->emit('PHP', array(
  'lol' => 'wut'
));

$mesh->channel = 'bolt::alternate';

$mesh->emit('PHP', array(
  'alternate' => 'channel'
));
