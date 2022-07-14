<?php

namespace YOOtheme\MySpace;

include_once __DIR__ . '/src/SourceListener.php';

return [

    'events' => [

        'source.init' => [
            SourceListener::class => ['initSource']
        ]

    ]

];