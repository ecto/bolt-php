# bolt-php

bolt emissions via PHP

![hugemistake](http://i.imgur.com/89zHS.gif)

# install

    git clone git://github.com/ecto/bolt-php.git

# usage

````php
<?php
require('bolt.php');

$mesh = new bolt\Node();

$mesh->emit('PHP', array(
  'lol' => 'wut'
));
````

# methods

Because PHP runtime is syncronous, bolt\Node deconstructs at the end of the script. Because of this, emission listeners are not implementable - only emissions themselves.

##$mesh = new bolt\Node($options);

`options` is an array that may contain the following:

````php
$mesh = new bolt\Node(array(
  'host' => 'localhost',
  'port' => '6379',
  'auth' => 'redisPassword',
  'channel' => 'bolt::main'
));
````

##$mesh->emit($hook, $data);

`$hook` must be a string

`$data` must be an array

````php
$mesh->emit('eventName', array(
  'key' => 'value',
  'php' => array(
    'arraySyntax' => 'sucks'
  )
));
````

#license

(The MIT License)

Copyright (c) 2011 Cam Pedersen <cam@onswipe.com>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

