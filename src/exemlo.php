<?php

use Csa\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('70650131');

print_r($resultado);