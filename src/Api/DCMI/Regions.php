<?php

namespace wickedsoft\NetBox\Api\DCMI;

use wickedsoft\NetBox\Api\AbstractApi;

class Regions extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/dcim/regions/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function remove($id, $params=[])
    {
        return $this->delete("/dcim/regions/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($id, $params=[])
    {
        return $this->put("/dcim/regions/".$id."/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/dcim/regions/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/dcim/regions/".$id."/", $params);
    }
}
