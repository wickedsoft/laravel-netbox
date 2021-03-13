<?php

namespace wickedsoft\NetBox\Api\Secrets;

class Session extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->post("/secrets/get-session-key/", $params);
    }
}
