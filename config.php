<?php
    Kirby::plugin('jenstornell/robots-writer', [
        'options' => [
            /* NOTE: route will not work until issue is resolved:
                https://github.com/k-next/kirby/issues/659
                but can use string to test
            */
            'robots.txt' => null,
        ],
        'routes' => [
            [
                'pattern' => 'robots.txt',
                'action' => function() {
                    if($txt = option('jenstornell.robots-writer.robots.txt')) {
                        return new \Kirby\Http\Response(trim($txt), 'text/plain', 200);
                    }
                    return kirby()->site()->visit(
                        kirby()->site()->errorPage()
                    );
                }
            ]
        ]
    ]);
