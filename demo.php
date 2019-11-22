<?php

    /**
     * Define autoloader
     * @param string $class_name
     */
    function __autoload($class_name) {
        include 'class.' . $class_name . '.inc';
    }

    echo '<h2>Instantiating AddressResidence</h2>';
    $address_residence = Address::getInstance(Address::ADDRESS_TYPE_RESIDENCE);

    echo '<h2>Setting Properties</h2>';
    $address_residence->street_address_1 = '9201 West Broadway Ave';
    $address_residence->city_name = 'Minneapolis';
    $address_residence->subdivision_name = 'MN';
    $address_residence->country_name = 'United States of America';
    echo $address_residence;
    var_dump($address_residence);

    echo '<h2>Testing Address __construct with an array</h2>';
    $address_business = new AddressBusiness(array(
        'street_address_1' => '123 Phony Ave',
        'city_name' => 'Villageland',
        'subdivision_name' => 'Region',
        'country_name' => 'Canada',
        ));
    echo $address_business;
    var_dump($address_business);

    echo '<h2>Instantiating AddressPark</h2>';
    $address_park = new AddressPark(array(
        'street_address_1' => '789 Missing Circle',
        'street_address_2' => 'Suite 0',
        'city_name' => 'Hamlet',
        'subdivision_name' => 'Territory',
        'country_name' => 'Australia',
    ));
    echo $address_park;
    var_dump($address_park);

    echo '<h2>Loading from Database</h2>';
    try {
      $address_db = Address::load(0);
      var_dump($address_db);
    }
    catch (Exception $e) {
        echo $e;
    }


