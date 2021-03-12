<?php

namespace wickedsoft\NetBox\Api;

class Cables extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/dcim/connected-device/", $params);
    }
}
