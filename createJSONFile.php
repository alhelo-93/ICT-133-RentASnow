<?php
/**
 * Created BY PhpStorm.
 * Title: ICT-133-RentASnow
 * USER: Marwan.ALHELO
 * DATE: 17.01.2020
 * Time: 16:33
 */

$myArray =
    [
        [
            'firstname' => 'Joe',
            'lastname' => 'Dalton'
        ],
        [
            'firstname' => 'Jack',
            'lastname' => 'Dalton'
        ],
        [
            'firstname' => 'William',
            'lastname' => 'Dalton'
        ],
        [
            'firstname' => 'Averell',
            'lastname' => 'Dalton'
        ]
    ];

file_put_contents('LesDaltons.json', json_encode($myArray));

var_dump($myArray);