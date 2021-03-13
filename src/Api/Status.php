<?php

namespace wickedsoft\NetBox\Api;

class Status extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($params=[])
    {
        return $this->get("/status/", $params);
    }
}
