<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51KZKG2BnxOS0mjIIqCW5IMBy6FZAu0DZbPsIxCr8Uco05BMdMEvxCYo5NTZSFiUrmHDW0xPF9A4sHS8OcLNZJ8xz00FAb71sQo",
        "publishableKey" => "pk_test_51KZKG2BnxOS0mjIItoISbr5ivBlYTkbGByOeTfe1rCNTsK1TVOF2ge3GZVrnQQA3dnu27jrl3KfzAjDbUOeArAtQ00TLozA9vz"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>