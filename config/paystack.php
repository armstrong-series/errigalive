<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    // 'publicKey' => getenv('PAYSTACK_PUBLIC_KEY'),
    'publicKey' => 'pk_test_02e3ac11338854971a23e5837650be4bb21c05d5',

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => 'sk_test_185e37f2d508f41a85ee621c51fd8d8d56641c32',
    // 'secretKey' => getenv('PAYSTACK_SECRET_KEY'),
    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => 'https://api.paystack.co',
    // 'paymentUrl' => getenv('PAYSTACK_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => 'enefearmstrong@gmail.com',
    // 'merchantEmail' => getenv('MERCHANT_EMAIL'),

];
