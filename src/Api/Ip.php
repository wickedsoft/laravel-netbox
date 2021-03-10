<?php

namespace wickedsoft\NetBox\Api;

class Ip extends AbstractApi
{
    /**
     * @see https://netboxdemo.com/api/ipam/ip-addresses
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'add'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'create'], $params));
    }

    /**
     * @see
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'delete'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'edit'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDomainList($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'getdomainlist'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'list'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function removeFromServer($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'removefromserver'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendAccountInfoByEmail($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'sendaccountinfobyemail'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'show'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function suspend($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'suspend'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function terminate($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'terminate'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function unsuspend($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'unsuspend'], $params));
    }

    /**
     * @see 
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function upDownGrade($params)
    {
        return $this->post(array_merge(['controller' => 'ip', 'action' => 'updowngrade'], $params));
    }
}
