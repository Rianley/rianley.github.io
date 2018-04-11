---
title: "macos 10.12 安装php7 "
categories: php
tags:
 - PHP
---

macos 10.12 安装php7 参考链接【https://my.oschina.net/kakoi/blog/638436】

1.brew install libmcrypt  //解决依赖


2. 
 sudo ./configure --prefix=/usr/local/php --with-config-file-path=/etc/php --enable-fpm --enable-pcntl --enable-mysqlnd --enable-opcache --enable-sockets --enable-sysvmsg --enable-sysvsem  --enable-sysvshm --enable-shmop --enable-zip --enable-ftp --enable-soap --enable-xml --enable-mbstring --disable-rpath --disable-debug --disable-fileinfo --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd --with-pcre-regex --with-iconv --with-zlib --with-mcrypt --with-gd  --with-mhash --with-xmlrpc --with-curl --with-imap-ssl

3. sudo make 


4 sudo make install 

5 sudo cp php.ini-development /usr/local/php/php.ini
  sudo cp /usr/local/php/etc/php-fpm.conf.default /usr/local/etc/php-fpm.conf
  sudo cp sapi/fpm/php-fpm /usr/local/bin


  使用brew 安装nginx 

  brew install nginx

  nginx.config 配置文件在/usr/local/etc/nginx

  
  ####启动nginx 命令 sudo nginx 关闭 sudo nginx -s stop 重启 sudo nginx -s reload
  ####启动php-fpm 命令 /usr/local/php/sbin/php-fpm || /usr/local/php/bin/php-fpm
  ####关闭php-fpm  sudo killall php-fpm



  
  #启动php-fpm 报错
  #
  failed to open configuration file '/usr/local/php7/etc/php-fpm.conf': No such file or directory (2)
  #
  #解决办法:
  把/usr/local/php/etc/php-fpm.conf.default复制到/usr/local/php7/etc/目录下 改名为 php-fpm.conf

  #failed to open  error_log(/usr/local/php7/var/log/php-fpm.log)
  #解决办法:
  #进入到/usr/local/php7 创建var 目录 在在进入 创建log 目录
  # 载touch php-fpm.log 即可

  





