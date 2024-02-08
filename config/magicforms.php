<?php

return [
    'validators' => [
        'main' => [
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ]
    ]
];
