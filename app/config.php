<?php

return [
    's3' => [
        'key' => 'THEKEYISVERYVERYGOOD',
        'secret' => 'AlOngRAnDoMsTRinGoFChRAcTeRsF0lLoWEdbYTe',
        'bucket' => 'samplebucket'
    ],
    'cloudfront'=>[
        'url' => 'https://sampl3d0ma1nx0.cloudfront.net', 
        'private_key' => 'files/pk-ABCDEFGHIJKLMNOPQRST.pem',    // path to private key
        'key_pair_id' => 'ABCDEFGHIJKLMNOPQRST'     // from aws console
    ]
];
