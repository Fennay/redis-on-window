<?php
/**
 * Created by PhpStorm.
 * User: Fennay
 * Date: 2017/7/26
 * Time: 22:34
 */


if (!function_exists('redisTypeSwitchWithCss')) {
    /**
     * 数字转换成字符串
     * @param $type
     * @return string
     * @author: Fengguangyong
     */
    function redisTypeSwitchWithCss($type)
    {
        switch ($type) {
            case '1' :
                $str = '<span class="label label-sm label-success label-mini"> String </span>';
                break;
            case '2' :
                $str = '<span class="label label-sm label-warning label-mini"> Set </span>';
                break;
            case '3' :
                $str = '<span class="label label-sm label-warning label-mini"> List </span>';
                break;
            case '4' :
                $str = '<span class="label label-sm label-warning label-mini"> Zset </span>';
                break;
            case '5' :
                $str = '<span class="label label-sm label-warning label-mini"> Hash </span>';
                break;
            default :
                $str = '<span class="label label-sm label-success label-mini"> Other </span>';
        }

        return $str;
    }
}

if (!function_exists('redisTypeSwitch')) {
    /**
     * 数字转换成字符串
     * @param $type
     * @return string
     * @author: Fengguangyong
     */
    function redisTypeSwitch($type)
    {
        $arr = [
            1 => 'string',
            2 => 'set',
            3 => 'list',
            4 => 'zset',
            5 => 'hash',
            6 => 'other',
        ];

        return $arr[$type];
    }
}


if (!function_exists('getRedisTtlByKey')) {
    /**
     * 获得key的过期时间
     * @param $key
     * @return string
     */
    function getRedisTtlByKey($key)
    {
        $ttl = Redis::ttl($key);
        switch ($ttl) {
            case -1 :
                $info = '永不过期';
                break;
            default :
                $info = $ttl . ' 秒';
        }

        return $info;
    }
}