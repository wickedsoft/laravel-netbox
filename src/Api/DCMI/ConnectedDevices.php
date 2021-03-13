<?php

namespace wickedsoft\NetBox\Api\DCMI;

class ConnectedDevices extends AbstractApi
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
