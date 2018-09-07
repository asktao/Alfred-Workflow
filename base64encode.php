<?php
/**
 *  base64encode.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow base64encode字符串
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
                'arg' => base64_encode($query),
                'title' => base64_encode($query), 
                'subtitle' => 'base64_encode', 
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
