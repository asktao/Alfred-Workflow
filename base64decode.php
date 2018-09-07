<?php
/**
 *  base64decode.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow base64decode字符串
 *
 */

$iconUrl = 'icon.png';
if(isset($argv[1])) {
    $query = $argv[1];
}

if(!empty($query)) {
    $outputs = [
        'items' => [
            [
                'arg' => base64_decode($query),
                'title' => base64_decode($query), 
                'subtitle' => 'base64_decode', 
                'icon' => [
                    'path' => $iconUrl,
                ], 
                'valid' => true,
            ],
        ],
    ];


    echo json_encode($outputs);
    exit;
}
