<?php

/**
 * Created by PhpStorm.
 * User: Fennay
 * Date: 2017/7/25
 * Time: 16:03
 */

namespace App\Http\Controllers\Home;

use App\Traits\CommonResponse;
use Redis;
use Exception;
use App\Service\RedisService;

class IndexController extends BaseController
{
    use CommonResponse;

    public function __construct() {

    }



    public function index()
    {
        $redisList = config('redis')['redis'];
        unset($redisList['client']);


        return view('home.index', [
             'redisList' => $redisList,
        ]);
    }

    /**
     * 切换Redis库
     * @param $redisName
     * @return \Illuminate\Http\JsonResponse
     * @author: Fengguangyong
     */
    public function selectRedis($redisName)
    {
        $redisList = config('redis')['redis'];
        $redisOption = $redisList[$redisName];

        $redis = new RedisService($redisOption);
        $keys = $redis->getAllKeysAndType();

        return $this->ajaxSuccess('获取成功',$keys);
    }



    public function getRedisValueByKey($key)
    {
        return $this->ajaxSuccess('获取成功');
    }


    /**
     * 选择数据库
     *
     * @param $dbIndex
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function selectDB($dbIndex)
    {
        return view('home.db', [
            'keys' => $this->getAllKeysAndValue()
        ]);
    }


    /**
     * 通过redisKey删除数据
     *
     * @param $redisKey
     * @return \Illuminate\Http\JsonResponse
     */
    //public function deleteKey($redisKey)
    //{
    //    $msg = '删除成功';
    //    try {
    //        Redis::del($redisKey);
    //        $status = 'success';
    //    } catch (Exception $exe) {
    //        $msg = '删除失败';
    //        $status = 'error';
    //    }
    //
    //    return response()->json([
    //        'data'   => [ 'redisKey' => $redisKey ],
    //        'status' => $status,
    //        'info'   => $msg
    //    ]);
    //}


    /**
     * 获取所有的key和值
     *
     * @return array
     */
    //protected function getAllKeysAndValue()
    //{
    //    $keys = Redis::keys('*');
    //
    //    //$redis = new Redis();
    //
    //    $returnData = [];
    //    foreach ($keys as $k => $v) {
    //
    //
    //        $returnData[$v] = $this->getValueByKey($v);
    //    }
    //
    //    return $returnData;
    //}


    /**
     * 通过redisKey获取值
     *
     * @param $key
     * @return bool|string
     */
    //protected function getValueByKey($key)
    //{
    //    $type = Redis::type($key);
    //
    //    switch ($type) {
    //        case 'string' :
    //            $value = Redis::get($key);
    //            break;
    //        case 'zset' :
    //            $arr = Redis::zScan($key, null);
    //            $value = implode(',', $arr[1]);
    //            break;
    //        default :
    //            $value = '';
    //    }
    //
    //    return $value;
    //}

    /**
     * 清除数据库
     *
     * @param $dbNum
     * @return \Illuminate\Http\JsonResponse
     */
    public function flushDB($dbNum)
    {
        try {
            Redis::select($dbNum);
            Redis::flushDB();
        } catch (Exception $exe) {
            return response()->json([
                'data'   => [],
                'status' => 'error',
                'info'   => '清除失败'
            ]);
        }

        return response()->json([
            'data'   => [],
            'status' => 'success',
            'info'   => '清除成功'
        ]);
    }

    /**
     * 清除整个redis
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function flushAll()
    {
        try {
            Redis::flushAll();
        } catch (Exception $exe) {
            return response()->json([
                'data'   => [],
                'status' => 'error',
                'info'   => '清除失败'
            ]);
        }

        return response()->json([
            'data'   => [],
            'status' => 'success',
            'info'   => '清除成功'
        ]);
    }


    public function test()
    {
        // $info = Redis::info();
        //
        // $keys = $this->getAllKeysAndValue();
        // // $keys = Redis::type('key');
        //
        // dump($info);
        // dump($keys);


        $arr = [
            'username' => 'feng',
            'age'      => 13,
            'email'    => 'feng@fennay.com'
        ];

        $str = json_encode($arr);

        $rs = Redis::set('username', $str);
        dump($rs);
        dd($str);
    }
}