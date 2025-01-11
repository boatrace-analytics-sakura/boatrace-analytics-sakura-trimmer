<?php

declare(strict_types=1);

return [
    'Trimmer' => \DI\create('\Boatrace\Venture\Project\Trimmer')->constructor(
        \DI\get('MainTrimmer')
    ),
    'MainTrimmer' => function ($container) {
        return $container->get('\Boatrace\Venture\Project\MainTrimmer');
    },
];
