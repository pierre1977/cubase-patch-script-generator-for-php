# cubase-patch-script-generator-for-php
cubase patch script generator for php

This Php script generated a patch file (browser) for Cubase midi devices.

This script is setting for the Technics WSA-1 Synthesiser:

$configs = array(
    // Banks
    'User1' =>          array( 'bankselect' => '128',       'sounds' => '128' ),
    'User2' =>          array( 'bankselect' => '144',       'sounds' => '128' ),
    'Rom1' =>           array( 'bankselect' => '0',         'sounds' => '128' ),
    'Rom2' =>           array( 'bankselect' => '16',        'sounds' => '128' ),
    'Drum User 1' =>    array( 'bankselect' => '640',       'sounds' => '2' ),
    'Drum User 2' =>    array( 'bankselect' => '656',       'sounds' => '2' ),
    'Drum Rom' =>       array( 'bankselect' => '512',       'sounds' => '8' ),
);

Feel free for other devices.
