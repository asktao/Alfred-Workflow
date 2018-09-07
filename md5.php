<?php
/**
 *  md5.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow md5字符串
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
                'arg' => md5($query),
                'title' => md5($query), 
                'subtitle' => 'md5值小写', 
                'icon' => [
                    'path' => $iconUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => strtoupper(md5($query)),
                'title' => strtoupper(md5($query)), 
                'subtitle' => 'md5值大写', 
                'icon' => [
                    'path' => $iconUrl,
                ], 
                'valid' => true,
            ],
        ]
    ];

    echo json_encode($outputs);
    exit;
}
