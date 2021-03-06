<?php

use Payum\Core\Storage\FilesystemStorage;

$detailsClass = 'Payum\Core\Model\ArrayObject';
$tokenClass = 'Payum\Core\Model\Token';

return array(
    // You can pass on object or a service id from container.
    'token_storage' => new FilesystemStorage(__DIR__.'/../../../../storage/payments', $tokenClass, 'hash'),
    'payments' => array(
        // Put here any payment you want too, omnipay, payex, paypa, be2bill or any other. Here's example of paypal and stripe:
    ),
    'storages' => array(
        $detailsClass => new FilesystemStorage(__DIR__.'/../../../../storage/payments', $detailsClass),
    )
);