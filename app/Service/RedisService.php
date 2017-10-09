<?php
/**
 * Created by PhpStorm.
 * Author: Fengguangyong
 * Date: 2017/9/26 - 14:34
 */

namespace App\Service;

use Redis;
use Exception;
use RedisException;

class RedisService
{
    protected $redisObj;

    public function __construct($option = [])
    {
        $this->option = empty($option) ? config('redis.redis.companyDevRedis') : $option;
        $this->connect();
    }


    public function connect()
    {
        if (empty($this->option)) {
            throw new Exception('config/redis缺少Redis配置');
        }
        $this->redisObj = new Redis();
        $this->redisObj->connect($this->option['host'], $this->option['port']);
        $this->redisObj->auth($this->option['password']);

        try {
            $this->redisObj->info();
        } catch (RedisException $redisException) {
            throw new Exception($redisException->getMessage());
        }

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
            $tmp['type'] = $this->getTypeWithCss($v);
            $tmp['key'] = $v;
            $returnData[] = $tmp;
        }

        return $returnData;
    }

    /**
     * 获取key类型
     * @param $key
     * @return string
     * @author: Fengguangyong
     */
    public function type($key)
    {
        $type = $this->redisObj->type($key);

        return redisTypeSwitch($type);
    }

    /**
     * 获取key类型，带样式
     * @param $key
     * @return string
     * @author: Fengguangyong
     */
    public function getTypeWithCss($key)
    {
        $type = $this->redisObj->type($key);

        return redisTypeSwitchWithCss($type);
    }

    public function set($key, $value, $exp)
    {
        return $this->redisObj->set($key, $value, $exp);
    }

    public function get($key)
    {
        return $this->redisObj->get($key);
    }

    /**
     * 通过key获取value
     * @param $key
     * @return string
     * @author: Fengguangyong
     */
    public function getValueByKey($key)
    {
        $type = $this->type($key);
        $type = trim(strtolower($type));

        switch ($type) {
            case 'string' :
                $value = $this->get($key);
                break;
            case 'set';
                $value = '';
                break;
            case 'list';
                $value = '';
                break;
            case 'zset';
                $value = '';
                break;
            case 'hash';
                $value = '';
                break;
            case 'other';
                $value = '';
                break;
            default :
                $value = '';
        }

        return $value;
    }
}