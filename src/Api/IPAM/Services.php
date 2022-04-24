<?php

namespace wickedsoft\NetBox\Api\IPAM;

use wickedsoft\NetBox\Api\AbstractApi;

class Services extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/ipam/services/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function remove($id, $params=[])
    {
        return $this->delete("/ipam/services/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($id, $params=[])
    {
        return $this->put("/ipam/services/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/ipam/services/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/ipam/services/".$id."/", $params);
    }
}
