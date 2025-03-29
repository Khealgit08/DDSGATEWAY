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
    * Create one user using the User1 service
    * @return string
    */
    public function createUser2($data){
        return $this->performRequest('POST', '/users2', $data);
    }

    /**
    * Obtain the full list of Users from User1 Site
    * @return string
    */
    public function obtainUsers2() {
        return $this->performRequest('GET','/users2'); //<—this code will call the GET localhost:8001/users (our site1)
    }

    /**
    * Update an instance of user1 using the User1 service
    * @return string
    */
    public function editUser2($data, $id) {
        return $this->performRequest('PUT', "/users2/{$id}", $data);
    }

        /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function delete($id) {
        return $this->performRequest('DELETE', "/users1/{$id}");
    }
}