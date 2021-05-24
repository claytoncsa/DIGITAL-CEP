<?php

namespace Csa\DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFrom Zipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/jason");

        print_r($get);
    }
}