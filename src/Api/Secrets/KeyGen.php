<?php

namespace wickedsoft\NetBox\Api\Secrets;

class KeyGen extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/secrets/generate-rsa-key-pair/", $params);
    }
}
