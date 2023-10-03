<?php
    function nameLenghtIsValid ($nameToValid) {
        $length = strlen($nameToValid); // strlen est une foncton predefinie de php qui sert a compter les caracteres
        $responses = [ 'isValid' => true,
        'msg' => ''
        ];

        if ($length < 2) {
            $responses = [ 'isValid' => false,
            'msg' => 'Nom trop court'
            ];
        }
        elseif ($length > 10) {
            $responses = [ 'isValid' => false,
            'msg' => 'Nom trop long'
            ];       
        }
        
        return $responses;
    }

?>