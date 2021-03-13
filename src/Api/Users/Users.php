<?php

namespace wickedsoft\NetBox\Api\Users;

use wickedsoft\NetBox\Api\AbstractApi;

class Users extends AbstractApi
{
    /**
    * @param $params
    * @return mixed
    * @throws \GuzzleHttp\Exception\GuzzleException
    */
    public function checkLogin($params)
    {
        return $this->get("/users/users/".$id."/", $params);
        //return $this->post(array_merge(['controller' => 'debtor', 'action' => 'checkLogin'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/users/users/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($id, $params=[])
    {
        return $this->delete("/users/users/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($id, $params=[])
    {
        return $this->put("/users/users/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/users/users/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/users/users/".$id."/", $params);
    }
}
