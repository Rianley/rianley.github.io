---
title: "windows 10 下 apache 80 端口被占用问题"
excerpt: "wamp集成开发环境从win7升级到win10,80端口无端被占用,找了很多方案,这个是最方便可行的"
categories: php
tags:
 - PHP
 - http
 - apache
 - web服务器
author: Rianley
---

wamp在win7下完全正常，但是升级win10后就被占用了，找了很多解决方案，最后好不容易解决了，方案如下：

一，使用命令 netstat -ano，可以看到80端口被PID为4的System进程占用，此时不能将进程杀掉。

二，一步步来

- 在cmd下输入：regedit

- 找到：HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\services\HTTP
 
- 在右边找到Start这一项，将其改为0

三，重启，快来test吧
