<?php

/* 
 * cubase-patch-script-generator-for-php
 * 
 * EX: for Technics WSA-1
 * 
 * Drum User 1 Bank: 640 = MSB 5 LSB 0
 * Drum User 2 Bank: 656 = MSB 5 LSB 16
 * 
 * Cal:
 * 7 Bits = max val 127
 * 656 >> 7 = MSB 5
 * 656 & 127 = LSB 16 
 * 
 */


// Setup for WSA-1
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


$output = '[cubase parse file]<br>
[parser version 0001]<br>

[comment] Technics WSA-1 Instrument created by www.akaju.de<br>
[comment] copyright Pierre Babeck. All Rights reserved<br>
<br>
[creators first name]Pierre Babeck<br>
[creators last name]Pierre Babeck<br>
[device manufacturer]Technics<br>
[device name]WSA-1<br>
[script name]Technics WSA-1 Instrument<br>
[script version]version 1.00<br>
<br>
[define patchnames]<br>';


foreach ($configs as $bankname => $settings)
{
    $output .= '[g1] ' . $bankname .'<br>';
       
    for($i = 0; $i< $settings['sounds']; $i++)
    {
        $msb = $settings['bankselect'] >> 7;
        $lsb = $settings['bankselect'] & 127;
        
        $output .= '[p2, '.$i.', '.$msb.', '.$lsb.'] ' . $bankname . ' - ' . ($i+1) . '<br>';
    }    
    $output .= '<br>';    
}
$output .= '[end]';

echo $output;