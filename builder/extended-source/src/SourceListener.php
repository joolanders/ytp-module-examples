<?php

namespace YOOtheme\MySpace;

class SourceListener
{
    public function initSource($source)
    {
        $source->objectType('Article', [

            'fields' => [

                'my_field' => [

                    'type' => 'String',

                    'metadata' => [
                        'label' => 'My Field',
                    ],

                    'extensions' => [
                        'call' => self::resolveMyField,
                    ],

                ]

            ]

        ]);
    }

    public static function resolveMyField($article)
    {
        // return ...
    }
}
