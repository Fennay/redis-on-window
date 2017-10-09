<?php
/**
 * Created by PhpStorm.
 * Author: Fengguangyong
 * Date: 2017/9/26 - 14:34
 */

namespace App\Service;

use Redis;

class RedisService
{
    protected $redisObj;

    public function __construct($option = [])
    {
        $this->option = empty($option) ? config('database.redis.default') : $option;

        $this->connect();
    }


    public function connect()
    {
        $this->redisObj = new Redis();
        $this->redisObj->connect($this->option['host'], $this->option['port']);
        $this->redisObj->auth($this->option['password']);

        return $this->redisObj;
    }


    public function getAllKeys()
    {
        return $this->redisObj->keys('*');
    }

    /**
     * 获取所有的键和类型
     * @return array|string
     * @author: Fengguangyong
     */
    public function getAllKeysAndType()
    {
        $key = $this->getAllKeys();
        if (empty($key)) {
            return '';
        }

        $returnData = [];
        foreach ($key as $k => $v) {
            $tmp['type'] = $this->type($v);
            $tmp['key'] = $v;
            $returnData[] = $tmp;
        }

        return $returnData;
    }

    public function type($key)
    {
        $type = $this->redisObj->type($key);
        return redisTypeSwitch($type);
    }

    public function set($key, $value, $exp)
    {
        return $this->redisObj->set($key, $value, $exp);
    }

    public function get($key)
    {
        return $this->redisObj->get($key);
    }
}