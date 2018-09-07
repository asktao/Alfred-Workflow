<?php
/**
 *  urlencode.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow urlencode字符串
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
                'arg' => urlencode($query),
                'title' => urlencode($query), 
                'subtitle' => 'urldecode', 
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
