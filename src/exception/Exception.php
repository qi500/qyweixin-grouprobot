<?php

// +----------------------------------------------------------------------
// | ThinkPHP6企业微信群通知 for ThinkLibrary 6.0
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://www.dtapp.net
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | 国内仓库地址 ：https://gitee.com/liguangchun/qyweixin-grouprobo
// | 国外仓库地址 ：https://github.com/GC0202/qyweixin-grouprobo
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qyweixin-grouprobo
// +----------------------------------------------------------------------

namespace DtApp\Notice\QyWeiXin\exception;

/**
 * 错误处理
 * Class Exception
 * @package DtApp\Notice\QyWeiXin\exception
 */
class Exception extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
