<?php
    // require braintree
    require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';
    // configure braintree
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('444s7mg9tmz62x24');
    Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
    Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');
?>
