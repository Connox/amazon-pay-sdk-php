<?php

namespace AmazonPay;

/**
 * Class Regions
 * Defines all Region specific properties
 */
class Regions
{
    public $mwsServiceUrls = [
        'eu' => 'mws-eu.amazonservices.com',
        'na' => 'mws.amazonservices.com',
        'jp' => 'mws.amazonservices.jp',
    ];

    public $profileEndpointUrls = [
        'uk' => 'amazon.co.uk',
        'us' => 'amazon.com',
        'de' => 'amazon.de',
        'jp' => 'amazon.co.jp',
    ];

    public $regionMappings = [
        'de' => 'eu',
        'uk' => 'eu',
        'us' => 'na',
        'jp' => 'jp',
    ];
}
