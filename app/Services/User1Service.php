<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service {
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;
    public function __construct() {
        $this->baseUri = config('USERS1_SERVICE_BASE_URL');
    }

    /**
    * Create one user using the User1 service
    * @return string
    */
    public function createUser1($data){
    return $this->performRequest('POST', '/users1', $data);
    }

    /**
    * Obtain the full list of Users from User1 Site
    * @return string
    */
    public function obtainUsers1() {
        return $this->performRequest('GET','/users1'); //<—this code will call the GET localhost:8001/users (our site1)
    }

    /**
    * Update an instance of user1 using the User1 service
    * @return string
    */
    public function editUser1($data, $id) {
        return $this->performRequest('PUT', "/users1/{$id}", $data);
    }

    /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function delete($id) {
        return $this->performRequest('DELETE', "/users1/{$id}");
    }
}