<?php
/**
 *  urldecode.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow urldecode字符串
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
                'arg' => urldecode($query),
                'title' => urldecode($query), 
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
