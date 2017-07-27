# mysql-proxy 
简介：mysqlproxy 通过c扩展实现了mysql协议，应用层逻辑用php+swoole编写，业务代码只需要将配置文件的ip和端口改成proxy的ip和端口即可。

## 特性列表

* MySQL连接池
* 自动读写分离
* 从库负载均衡（加权轮询算法）
* 慢SQL/超大结果集监控和报警
* 自动分库分表（正在开发中）

## 安装
* 首先clone下来，然后cd到cpp_module/PHP-X，安装phpx，参考`https://github.com/swoole/PHP-X`
* 安装最新版本的 `swoole-src` 的1.9分支代码(>=1.9.16)
* 安装 mysql-proxy 扩展，cd到cpp_module，`make && make install`
* 配置 php.ini 载入mysql-proxy.so
* 配置 config.toml
* 启动 php proxystart.php 
