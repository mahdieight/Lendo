<?php

use App\Enums\General\GenderEnum;
use App\Enums\General\LangEnum;

return [

    /*
    |--------------------------------------------------------------------------
    | General Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */


    'enums'       => [],
    'messages'    => [
        'operation_was_successful' => 'The operation was successful'
    ],
    'validations' => [],
    'errors'      => [
        'something_wrong'                 => 'Sorry, an error occurred, please try again',
        'too_many_request'                => 'Too many request.',
        'method_not_allowed'              => 'Method not allowed',
        'resource_not_found'              => 'Resource not found',
        'the_sent_parameters_are_invalid' => 'The sent parameters are invalid',
        'url_not_found'                   => 'The url is invalid',
        'forbidden_access'                => 'Forbidden Access!',
        'unauthorized'                    => 'Unauthorized'
    ],
];
