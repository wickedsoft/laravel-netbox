<?php

namespace wickedsoft\NetBox\Api\Secrets;

class KeyGen extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params=[])
    {
        return $this->post("/secrets/get-session-key/", $params);
    }
}
