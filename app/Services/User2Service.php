<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service {
    use ConsumesExternalService;
    /**
    * The base uri to consume the User2 Service
    * @var string
    */
    public $baseUri;

    public function __construct() {
        $this->baseUri =config('USERS2_SERVICE_BASE_URL');
    }

    /**
    * Obtain the full list of Users from User1 Site
    * @return string
    */
    public function obtainUsers2() {
        return $this->performRequest('GET','/users2'); //<—this code will call the GET localhost:8001/users (our site1)
    }
}