<?php
/**
 * Routes configuration
 *
 * string rule => string|array routes
 * if route first symbol is ! - this is controller (!class:method)
 */
return array(
    '/' => 'homepage',
    '/test' => '!common:test',
    '/admin/?([^/]+)?/?([^/]+)?/?' => array('!common:session', '!admin:control'),
);