# mysql-proxy 
简介：mysqlproxy 通过c扩展实现了mysql协议，应用层逻辑用php+swoole编写，业务代码只需要将配置文件的ip和端口改成proxy的ip和端口即可。

## 特性列表

* MySQL连接池
* 自动读写分离
* 从库负载均衡（加权轮询算法）
* 慢SQL/超大结果集监控和报警
* 自动分库分表（正在开发中）

## 编译安装（linux）

**1. 系统环境要求**

- Cmake 3.5 or later
- GCC 4.8  or later
- PHP 7.0  or later
- Swoole 1.9.17  or later

**2. 安装PHP-X**

- 首先clone下来本项目，然后执行`git submodule update --init --recursive` 拉取子项目。
- cd ./cpp_module/PHP-X
- cmake . -DPHP_CONFIG_DIR = [php-config路径] （例如：/usr/local/php/bin 后面不要带/）
- make -j 4
- sudo make install

> 注意把/usr/local/lib加入ld.conf配置中，编译成功后记得运行ldconfig

**3. 安装Swoole**

下面phpize、php-config根据自己安装路径来配置

- /usr/local/php/bin/phpize
- ./configure --with-php-config=/usr/local/php/bin/php-config
- sudo make && make install

**4. 安装mysql-proxy**

- cd ./mysql-proxy/cpp_module
- vim Makefile (看下里面php-config路径是否是你当前系统安装路径)

> - PHP_INCLUDE = `/usr/local/php/bin/php-config --includes`
> - PHP_INCLUDE_DIR = `/usr/local/php/bin/php-config --include-dir`
> - PHP_EXTENSION_DIR = `/usr/local/php/bin/php-config --extension-dir`

- make && make install
- 配置 php.ini extension = mysql-proxy.so

> 注意 extension = mysql-proxy.so 要在 extension = swoole.so 后面加载

**5.  配置 config.toml**

**6.  启动 php proxystart.php**

## 说明
* parser基于 `https://github.com/hyrise/sql-parser` 项目中的代码二次修改，特此感谢原作者。
