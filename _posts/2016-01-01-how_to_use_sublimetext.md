---

title: "Sublime Text介绍、快捷键、插件分享"
excerpt: "早就听说Sublime Text是最近非常火的一款神器，我选择他的第一印象确实非常轻便！同时强大的功能绝对让你爱不释手！还没上手体验的从这篇博客开始吧。"
categories: php
tags:
 - SublimeText
 - 编辑器
 - science
author: Rianley

---

#### 介绍
Sublime Text 是一套跨平台的文本编辑器，支持基于Python的插件。Sublime Text 是专有软件，可通过包（Package）扩充本身的功能。大多数的包使用自由软件授权发布，并由社区建置维护。

##### 特色
* “Go to anything”功能：可快速跳至文件、符号或行数。
* “Command palette”功能：弹性快捷键功能。
* 多行选择功能：同时修改多内联容。
* 基于 Python 语言的外挂 API。
* 针对个别项目使用不同的编辑器设置。
* 通过 JSON 文件自定义设置值。
* 跨平台（Windows、Linux 和 Mac OS X）。
* 兼容 TextMate 的语言标记语法。

##### 功能
* 多行编辑：用户可一次选择多行并进行同步编辑。
* 自动完成：根据目前的编程语言自动提示字符串让用户输入。
* 代码上色与高对比显示：使用暗色背景和亮色文字提高对比。
* 编辑器内编译：在特定编程语言时可以直接在编辑器内进行背景编译。
* 代码摘要：用户可替常用的代码片段指定关键字快速插入。
* Go to anything：快速在文件间移动的导览工具。
* 其他功能：自动存储、自定义快捷键、拼写检查与修正、宏、重复编辑动作等。

##### 下载使用
Sublime Text有Dev版本，推荐使用，下载[地址](http://www.sublimetext.com/dev){:target='_blank'}，一般推荐下载便携版本（Portable version）。

#### 快捷键

* Ctrl+Shift+P：打开命令面板
* Ctrl+P：搜索项目中的文件
* Ctrl+G：跳转到第几行
* Ctrl+W：关闭当前打开文件
* Ctrl+Shift+W：关闭所有打开文件
* Ctrl+Shift+V：粘贴并格式化
* Ctrl+D：选择单词，重复可增加选择下一个相同的单词
* Ctrl+L：选择行，重复可依次增加选择下一行
* Ctrl+Shift+L：选择多行
* Ctrl+Shift+Enter：在当前行前插入新行
* Ctrl+X：删除当前行
* Ctrl+M：跳转到对应括号
* Ctrl+U：软撤销，撤销光标位置
* Ctrl+J：选择标签内容
* Ctrl+F：查找内容
* Ctrl+Shift+F：查找并替换
* Ctrl+H：替换
* Ctrl+R：前往 method
* Ctrl+N：新建窗口
* Ctrl+K+B：开关侧栏
* Ctrl+Shift+M：选中当前括号内容，重复可选着括号本身
* Ctrl+F2：设置/删除标记
* Ctrl+/：注释当前行
* Ctrl+Shift+/：当前位置插入注释
* Ctrl+Alt+/：块注释，并Focus到首行，写注释说明用的
* Ctrl+Shift+A：选择当前标签前后，修改标签用的
* F11：全屏
* Shift+F11：全屏免打扰模式，只编辑当前文件
* Alt+F3：选择所有相同的词
* Alt+.：闭合标签
* Alt+Shift+数字：分屏显示
* Alt+数字：切换打开第N个文件
* Shift+右键拖动：光标多不，用来更改或插入列内容
* 鼠标的前进后退键可切换Tab文件
* 按Ctrl，依次点击或选取，可需要编辑的多个位置
* 按Ctrl+Shift+上下键，可替换行

#### 插件

##### 安装方法：

1，先启用Package Control，作用是安装插件时很方便，启用方法：菜单栏 – View – Show Console，复制下列代码粘贴到控制台并回车  
<pre><code>
import urllib2,os;pf='Package Control.sublime-package';ipp=sublime.installed_packages_path();  
os.makedirs(ipp) if not os.path.exists(ipp) else None;open(os.path.join(ipp,pf),'wb').write  
(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read())
</code></pre>

2，开始安装，Ctrl+Shift+P（菜单 – Tools – Command Paletter），输入 install 选中Install Package并回车，输入或选择你需要的插件回车就安装了（注意左下角的小文字变化，会提示安装成功）。  

##### 插件列表：
* ZenCoding  
不得不用的一款前端开发方面的插件，Write less , show more.安装后可直接使用，Tab键触发，Alt+Shift+W是个代码机器。
* Alignment  
代码对齐，如写几个变量，选中这几行，Ctrl+Alt+A，哇，齐了。
* Prefixr  
写 CSS可自动添加 -webkit 等私有词缀，Ctrl+Alt+X触发。
* Tag  
Html格式化，右键Auto-Format Tags on Ducument。
* Clipboard History  
剪贴板历史记录，显示更多历史复制，Ctrl+Shift+V触发。
* SideBarEnhancements  
侧栏右键功能增强，非常实用
* Theme – Soda  
完美的编码主题，用过的都说好，Setting user里面添加”theme”: “Soda Dark.sublime-theme”
* GBK to UTF8  
将文件编码从GBK转黄成UTF8，菜单 – File里面找
* SFTP  
直接编辑 FTP 或 SFTP 服务器上的文件，绝对FTP浮云
* WordPress  
集成一些WordPress的函数，对于像我这种经常要写WP模版和插件的人特别有用
* PHPTidy  
整理排版PHP代码
* YUI Compressor  
压缩JS和CSS文件




参考资料：

* [大前端-Sublime Text介绍快捷键与插件](http://www.daqianduan.com/4820.html/){:target='_blank'}
* [Sublime_Text-wikipedia](https://zh.wikipedia.org/wiki/Sublime_Text/){:target='_blank'}
