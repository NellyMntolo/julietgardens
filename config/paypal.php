<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
        'app_id'            => 'APP-80W284485P519543T',
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        'app_id'            => env('PAYPAL_LIVE_APP_ID', ''),
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];

$config = [
    'mode'    => 'live',
    'live' => [
        'client_id'         => 'some-client-id',
        'client_secret'     => 'some-client-secret',
        'app_id'            => 'APP-80W284485P519543T',
    ],

    'payment_action' => 'Sale',
    'currency'       => 'USD',
    'notify_url'     => 'https://your-app.com/paypal/notify',
    'locale'         => 'en_US',
    'validate_ssl'   => true,
];

// $provider->setApiCredentials($config);

// Default is USD
// $provider->setCurrency('EUR');

$provider->getAccessToken();


$response = $provider->addProduct('Demo Product', 'Demo Product', 'SERVICE', 'SOFTWARE')
                    ->addPlanTrialPricing('DAY', 7)
                    ->addDailyPlan('Demo Plan', 'Demo Plan', 1.50)
                    ->setReturnAndCancelUrl('https://example.com/paypal-success', 'https://example.com/paypal-cancel')
                    ->setupSubscription('John Doe', 'john@example.com', '2021-12-10');
