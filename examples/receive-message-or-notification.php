<?php

use Borla\Chikka\Chikka;

// Require autoload
require('../vendor/autoload.php');

// Set config
$config = [
  'shortcode' => '292904672',
  'client_id' => '0579c55ce0a2f3df7ae4bdfb666f51c65cc1742f67ed263b049c4b18923fd3e0',
  'secret_key'=> '1a2eb09af64d89908068daf93fdc44502d2b044a1c83f6d8a1cb30c2107dc967',
];

echo (new Chikka($config))
  // Receive POST
  ->receive($_POST)
  // Receive message
  ->message(function($message) {

  })
  ->notification(function($notification) {

  });