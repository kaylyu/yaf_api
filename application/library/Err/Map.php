<?php

/**
 * Map.php.
 * User: Administrator
 * Date: 2017/9/20 0020
 * Time: 10:09
 * Desc:
 */
class Err_Map
{
    const ERRMAP = array(
        0 => '接口访问成功',
        1001 => '请通过正确渠道提交',
        1002 => '用户名与密码必须传递',
        1003 => '用户查找失败',
        1004 => '密码错误',
        1005 => '用户名已经存在',
        1006 => '密码太短',
        1007 => '注册失败，写入数据失败',

        2000 => '需要管理员权限才可以操作',
        2001 => '请通过正确渠道提交',
        2002 => '标题、内容、作者、分类信息为空',
        2003 => '缺少必要的文章ID参数',
        2004 => '找不到你要编辑的文章!',
        2005 => '找不到对应ID的分类信息!',
        2006 => '操作文章数据失败',
        2007 => '文章删除失败',
        2008 => '文章更新失败',
        2009 => '查询失败',
        2010 => '获取分类信息失败',
        2011 => '获取文章列表失败',
        2012 => '获取文章信息失败',

        3001 => '请通过正确渠道提交',
        3002 => '用户ID、标题、内容为空',
        3003 => '用户邮箱信息查找失败',
        3004 => '用户邮箱信息不符合表中',

        4001 => '请通过正确渠道提交',
        4002 => '用户ID、短信内容为空',
        4003 => '用户手机号信息查找失败',
        4004 => '用户手机信息不符合标准',
        4005 => '发送失败',

        5001 => '请传输正确的IP地址',

        6001 => '请传递正确的商品ID',
        6002 => '请先登录后操作',
        6003 => '找不到这件商品',
        6004 => '商品已经过期，不能购买',
        6005 => '商品库存不够，不能购买',
        6006 => '创建账单失败',
        6007 => '更新库存失败',
        6008 => '账单ID必须传递',
        6009 => '找不到账单信息',

        7001 => '需要管理员权限才可以操作',
        7002 => '请输入推送用户别名和推送消息标题、内容',
        7003 => '推送失败'
    );

    /**
     * 根据错误码获取错误信息
     * @param $code 错误码
     * @return array    错误信息集合
     */
    public static function get($code){
        $errmsg = Err_Map::ERRMAP[ $code ];
        if(isset($errmsg)){
            return array('errno'=>(0-$code), 'errmsg'=>$errmsg);
        }

        return array('errno'=>(0-$code), 'errmsg'=>'undefined this error number');
    }
}