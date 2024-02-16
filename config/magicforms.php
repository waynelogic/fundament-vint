<?php

return [
    'main' => [
        'validation' => [
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ],
        'success' => 'Your message has been sent successfully.',
        'error' => 'An error occurred while sending your message.',
        'mails' => [
            'info@albus-it.ru'
        ]
    ]
];
