<?php

namespace wickedsoft\NetBox\Api;

class InterfaceConnections extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/dcim/interface-connections/", $params);
    }
}
