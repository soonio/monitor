<?php

return [
    // 项目名称
    "pname" => [
        "watch"=> [
            // 监控的目标目录
            "dir"       => "/var/dir/",
            // 监控的文件内容
            "ext"       => ["env", "php"],
            // 不监控变化的内容
            "exclude"   => ["vendor"],
            // 刷新间隔时长
            "rate"      => 2000
        ],
        "task"=> "/usr/bin/rsync -rzvt /var/dir/* root@192.168.1.5:/home/test"
    ],
];
