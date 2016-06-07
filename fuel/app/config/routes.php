<?php

return array(
    '_root_' => 'hello/index', // The default route
    '_404_' => 'hello/404', // The main 404 route
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
