<?php

namespace wickedsoft\NetBox\Api\IPAM;

use wickedsoft\NetBox\Api\AbstractApi;

class Prefixes extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/ipam/prefixes/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function remove($id, $params=[])
    {
        return $this->delete("/ipam/prefixes/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($id, $params=[])
    {
        return $this->put("/ipam/prefixes/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/ipam/prefixes/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/ipam/prefixes/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showAvailableIps($id, $params=[])
    {
        return $this->get("/ipam/prefixes/".$id."/available-ips/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addAvailableIps($id, $params=[])
    {
        return $this->post("/ipam/prefixes/".$id."/available-ips/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showAvailable($id, $params=[])
    {
        return $this->get("/ipam/prefixes/".$id."/available-prefixes/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addAvailable($id, $params=[])
    {
        return $this->post("/ipam/prefixes/".$id."/available-prefixes/", $params);
    }
}
