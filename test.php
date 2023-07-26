<?php
require 'vendor/autoload.php';

use \Createlinux\Routing\RouterModule;
use \Createlinux\Routing\Router;
use \Createlinux\Routing\PermissionType;


$routerCategory = new \Createlinux\Routing\RouterModule("System");
$routerCategory->registerResource("微信公众号登录二维码", "WeChatMPQrCode", [], function (Router $router) {

    $router->setControllerName('WechatQrcodeLogController');
    $router->store("生成二维码", "wechat_qrcode_logs", PermissionType::public);
    $router->show("查询二维码", 'wechat_qrcode_logs/{id}', PermissionType::public);
});


$routerCategory->registerResource("访问令牌", "AccessToken", [], function (Router $router) {
    $router->setControllerName('TokenController');
    $router->store("生成访问令牌", "access_tokens", PermissionType::public);
});

print_r($routerCategory->getAllRouters());