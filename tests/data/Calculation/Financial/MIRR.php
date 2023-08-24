<?php

// values, finance_rate, reinvestment_rate, Result

return [
    [
        0.12609413036591,
        [
            -120000,
            [
                39000,
                30000,
                21000,
                37000,
                46000,
            ],
        ],
        0.10,
        0.12,
    ],
    [
        -0.048044655249981,
        [
            -120000,
            [
                39000,
                30000,
                21000,
            ],
        ],
        0.10,
        0.12,
    ],
    [
        0.13475911082830999,
        [
            -120000,
            [
                39000,
                30000,
                21000,
                37000,
                46000,
            ],
        ],
        0.10,
        0.14,
    ],
    [
        0.74021752686287001,
        [
            -100,
            [
                12,
                14,
                11,
            ],
        ],
        5.5,
        5,
    ],
    [
        1.8579321744785,
        [
            -100,
            [
                12,
                14,
                11,
                13,
                16,
            ],
        ],
        5.5,
        5,
    ],
    'first argument must be array' => [
        '#DIV/0!',
        999,
        1.23,
        2.34,
    ],
    'all values are positive' => [
        '#DIV/0!',
        [0.12, 0.13, 0.125],
        1.23,
        2.34,
    ],
    'all values are negative' => [
        '#DIV/0!',
        [-0.12, -0.13, -0.125],
        1.23,
        2.34,
    ],
    'result is NaN' => [
        '#NUM!',
        [-0.12, 0.13, 0.125],
        1.23,
        -2.34,
    ],
    'valid result even when reinvest rate < -1' => [
        -0.205225399,
        [-0.12, 0.13, 0.25],
        1.23,
        -2.34,
    ],
    'exception for 2 arguments or fewer' => [
        'exception',
        [-0.12, 0.13, 0.25],
        1.23,
    ],
];
