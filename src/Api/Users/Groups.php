<?php

namespace wickedsoft\NetBox\Api\Users;

use wickedsoft\NetBox\Api\AbstractApi;

class Groups extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/users/groups/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($id, $params=[])
    {
        return $this->delete("/users/groups/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($id, $params=[])
    {
        return $this->put("/users/groups/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/users/groups/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/users/groups/".$id."/", $params);
    }
}
