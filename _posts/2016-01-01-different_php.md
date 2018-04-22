---

title: "关于PHP版本的几个问题"
excerpt: "php版本选择与差异，什么是VC6与VC9，还有TS和NTS"
categories: php
tags:
 - http
 - 网络
 - http协议
author: rianley
---


##### 关于PHP4/PHP5/PHP6/PHP7

PHP版本主要分三支：PHP4/PHP5/PHP7
其中，PHP4由于太古老、对OO支持不力已基本被淘汰，就不在详述。
其实还有PHP6只不过都没在生产线上用过，可以忽略。PHP7是在2015年才发布，按照鸟哥(惠新宸)的评价：“作为PHP10年来最大的版本升级, 最大的性能升级, PHP7在多放的测试中都表现出很明显的性能提升”。官方也强调了“尽管PHP7.0是一个新的大版本，我们仍将致力于使迁移变得平缓。 这个版本主要消除在之前版本中不推荐使用的内容，使得语言变得更加通用一致。”

##### 关于PHP5.x

PHP5的版本主要分三支：PHP5.2之前的版本、PHP5.2.X和PHP5.3。那我们应该如何选择适用自己项目的版本呢？
PHP5.2之前的版本不值得考虑，因为某些功能缺陷或者BUG。
主流PHP程序对PHP5.2.X的兼容性最好，而每次版本号的升级带来的都是安全性和稳定性的改善，所以宜挑选最新的版本。目前PHP5.2系列最新的是PHP5.2.17
而如果产品是自己开发自己使用，PHP5.3在某些方面更具优势，在稳定性上更胜一筹，增加了很多PHP5.2所不具有的功能，比如内置php-fpm、更完善的垃圾回收算法、命名空间的引入、sqlite3的支持等等，是部署项目值得考虑的版本。

##### 关于PHP7
现在距离php7正式版的发布不过一个多月的时间，但是网上的讨论早就不绝于耳，鸟哥在发布之际还专门写了一篇[文章](http://www.laruence.com/2015/12/04/3083.html){:target='_blank'}专门为php7正式版发布造势细述php7开发的故事。有人说“php7更新后号称性能直追facebook的HHVM”，“PHP7在运行原理上与PHP5相比并没有变化，这与hhvm不同。主要是基于perf性能分析工具进行了常规性能优化。减少内存分配次数，多使用栈内存，缓存数组hash值，字符串解析成参数改为宏展开，使用大块连续内存代替小块内存等等。”该版本的新特性可以参考[PHP官网](http://php.net/manual/zh/migration70.new-features.php){:target='_blank'}

##### 关于VC6与VC9

对于VC6还是VC9版本的选择，PHP官方网站有详细的描述，原文如下：
Which version do I choose?
If you are using PHP with Apache 1 or Apache2 from apache.org you need to use the VC6 versions of PHP
If you are using PHP with IIS you should use the VC9 versions of PHP
VC6 Versions are compiled with the legacy Visual Studio 6 compiler
VC9 Versions are compiled with the Visual Studio 2008 compiler and have improvements in performance and stability. The VC9 versions require you to have the Microsoft 2008 C++ Runtime (x86) or the Microsoft 2008 C++ Runtime (x64) installed
Do NOT use VC9 version with apache.org binaries

我该选择哪个版本？
如果你在apache1或者apache2下使用PHP，你应该选择VC6的版本
如果你在IIS下使用PHP应该选择VC9的版本
VC6的版本使用visual studio6编译
VC9使用Visual Studio 2008编译，并且改进了性能和稳定性。VC9版本的PHP需要你安装Microsoft 2008 C++ Runtime
不要在apache下使用VC9的版本

##### 关于TS（线程安全）和NTS（非线程安全）

TS指Thread Safety，即线程安全，一般在IIS以ISAPI方式加载的时候选择这个版本。
NTS即None-Thread Safe，一般以fast cgi方式运行的时候选择这个版本，具有更好的性能。
下面给点资料，来源于 http://koda.javaeye.com/blog/662034
从2000年10月20日发布的第一个Windows版的PHP3.0.17开始的都是线程安全的版本，这是由于与Linux/Unix系统是采用多进程的工作方式不同的是Windows系统是采用多线程的工作方式。如果在IIS下以CGI方式运行PHP会非常慢，这是由于CGI模式是建立在多进程的基础之上的，而非多线程。一般我们会把PHP配置成以ISAPI的方式来运行，ISAPI是多线程的方式，这样就快多了。但存在一个问题，很多常用的PHP扩展是以Linux/Unix的多进程思想来开发的，这些扩展在ISAPI的方式运行时就会出错搞垮IIS。因此在IIS下CGI模式才是 PHP运行的最安全方式，但CGI模式对于每个HTTP请求都需要重新加载和卸载整个PHP环境，其消耗是巨大的。
为了兼顾IIS下PHP的效率和安全，微软给出了FastCGI的解决方案。FastCGI可以让PHP的进程重复利用而不是每一个新的请求就重开一个进程。同时FastCGI也可以允许几个进程同时执行。这样既解决了CGI进程模式消耗太大的问题，又利用上了CGI进程模式不存在线程安全问题的优势。
因此，如果是使用ISAPI的方式来运行PHP就必须用Thread Safe(线程安全)的版本；而用FastCGI模式运行PHP的话就没有必要用线程安全检查了，用None Thread Safe(NTS，非线程安全)的版本能够更好的提高效率。

##### 查看当前运行的PHP版本

如何查看当前运行的PHP的版本？一个很简单的办法就是phpinfo();
Thread Safety disabled是NTS，enabled是TS
Configure Command看到VC98字样的是VC6，Compiler标明 MSVC9 (Visual C++ 2008) 的是VC9

##### 配置IIS支持PHP

另外，顺带讲讲windows下比较简洁方便的PHP配置方法，网上教的什么复制php.ini到windows目录、复制xxxxx.dll到system32下，太丑陋了  
  
1、下载zip版本的PHP  
2、下载好相应的扩展，修改好php.ini，添加模块映射  
3、环境变量里PATH加上PHP存放的目录。只要一个就够了，/bin和/ext不需要加  
4、环境变量里定义一个PHPRC变量，内容为PHP.INI的存放路径  
完毕。很多文章提及需要重启系统，可是从我遇上的情况来看，并无必要，最多重启web服务

（持续更新中…）

###### 参考资料
* http://www.splaybow.com/post/php-version-difference.html
* [让PHP7达到最高性能的几个Tips](http://www.laruence.com/2015/12/04/3086.html/){:target="_blank"}
* [PHP7与Swoole-韩天峰](http://rango.swoole.com/archives/440/){:target='_blank'}
