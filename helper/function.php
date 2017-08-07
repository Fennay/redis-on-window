<?php
/**
 * Created by PhpStorm.
 * User: Fennay
 * Date: 2017/7/26
 * Time: 22:34
 */


if(!function_exists('getRedisTypeAndLabelByKey')) {
    /**
     *
     * 通过key获取type以及label
     *
     * @param $key
     * @return string
     */
    function getRedisTypeByKey($key)
    {
        $type = Redis::type($key);
        switch ($type) {
            case 'string' :
                $str = '<span class="label label-sm label-success label-mini"> String </span>';
                break;
            case 'zset' :
                $str = '<span class="label label-sm label-warning label-mini"> Zset </span>';
                break;
            default :
                $str = '<span class="label label-sm label-success label-mini"> Pending </span>';
        }

        return $str;
    }
}


if(!function_exists('getRedisTtlByKey')) {
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