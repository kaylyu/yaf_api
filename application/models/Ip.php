<?php

/**
 * Ip.php.
 * User: Administrator
 * Date: 2017/9/18 0018
 * Time: 14:38
 */
class IpModel
{
    public $errno=0;
    public $errmsg='';

    /**
     * 获取ID对应的地域信息
     * @param $ip
     * @return array|string
     */
    public function get($ip){
        return ThirdParty_Ip::find($ip);
    }
}