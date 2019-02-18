<?php

//utils
$container->setSingletons(
    [
        \common\utils\Getter::class => [
            ['class' => \common\utils\Getter::class],
        ],
    ]
);