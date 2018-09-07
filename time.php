<?php
/**
 *  time.php
 *
 *  Author asktao 
 *
 *  Title  alfred-workflow 时间戳转换
 *
 */

exec('date +%z', $outputs);
$timezone = $outputs[0];

date_default_timezone_set(sprintf('Etc/GMT-%s', rtrim(abs($timezone), 0)));

$clockPngUrl = 'clock.png';
if(isset($argv[1])) {
    $query = $argv[1];
}

if(empty($query)) {
    $timestamp = time();
    $microtime = microtime(true);
    $datetime = date('Y-m-d H:i:s', $timestamp);
    $date = date('Y-m-d', $timestamp);
    $sdatetime = date('Y-m-d\TH:i:s', $timestamp);

    $outputs = [
        'items' => [
            [
                'arg' => $datetime, 
                'title' => $datetime, 
                'subtitle' => '本机时间，时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timestamp, 
                'title' => $timestamp, 
                'subtitle' => '本机时间，时间戳（秒）', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $microtime, 
                'title' => $microtime, 
                'subtitle' => '本机时间，时间戳（毫秒）', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $date, 
                'title' => $date, 
                'subtitle' => '本机日期', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timezone, 
                'title' => $timezone, 
                'subtitle' => '本机时区', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $sdatetime, 
                'title' => $sdatetime, 
                'subtitle' => 'ISO8610 UTC时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
        ]
    ];

    echo json_encode($outputs);
    exit;
}
if (date('Y-m-d H:i:s', strtotime($query)) == $query) {
    $timestamp = strtotime($query);
    $datetime = date('Y-m-d H:i:s', $timestamp);
    $date = date('Y-m-d', $timestamp);
    $sdatetime = date('Y-m-d\TH:i:s', $timestamp);

    $outputs = [
        'items' => [
            [
                'arg' => $datetime, 
                'title' => $datetime, 
                'subtitle' => '本机时间，时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timestamp, 
                'title' => $timestamp, 
                'subtitle' => '本机时间，时间戳（秒）', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $date, 
                'title' => $date, 
                'subtitle' => '本机日期', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timezone, 
                'title' => $timezone, 
                'subtitle' => '本机时区', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $sdatetime, 
                'title' => $sdatetime, 
                'subtitle' => 'ISO8610 UTC时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
        ]
    ];

    echo json_encode($outputs);
    exit;

} else if (strtotime(date('Y-m-d H:i:s', $query)) == $query) {
    $timestamp = $query;
    $datetime = date('Y-m-d H:i:s', $timestamp);
    $date = date('Y-m-d', $timestamp);
    $sdatetime = date('Y-m-d\TH:i:s', $timestamp);

    $outputs = [
        'items' => [
            [
                'arg' => $datetime, 
                'title' => $datetime, 
                'subtitle' => '本机时间，时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timestamp, 
                'title' => $timestamp, 
                'subtitle' => '本机时间，时间戳（秒）', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $date, 
                'title' => $date, 
                'subtitle' => '本机日期', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $timezone, 
                'title' => $timezone, 
                'subtitle' => '本机时区', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
            [
                'arg' => $sdatetime, 
                'title' => $sdatetime, 
                'subtitle' => 'ISO8610 UTC时间', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => true,
            ],
        ]
    ];

    echo json_encode($outputs);
    exit;

} else {
    $outputs = [
        'items' => [
            [
                'uid' => '时间格式输入有误', 
                'arg' => '', 
                'title' => '请输入时间戳或日期格式', 
                'subtitle' => '日期/时间字符串 - Power by PHP strtotime Date/Time 函数.', 
                'icon' => [
                    'path' => $clockPngUrl,
                ], 
                'valid' => false
            ]
        ]
    ];

    echo json_encode($outputs);
    exit;
} 
