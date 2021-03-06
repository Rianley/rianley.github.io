---
title: python学习笔记
categories: python
tags:
 - python
 
---

## 编程与编程语言

   python是一门编程语言，作为学习python的开始，需要事先搞明白：编程的目的是什么？什么是编程语言？什么是编程？

```
    编程的目的：
    
计算机的发明，是为了用机器取代/解放人力，而编程的目的则是将人类的思想流程按照某种能够被计算机识别的表达方式传递给计算机，从而达到让计算机能够像人脑/电脑一样自动执行的效果。    
    
    什么是编程语言？

上面提及的能够被计算机所识别的表达方式即编程语言，语言是沟通的介质，而编程语言是程序员与计算机沟通的介质。在编程的世界里，计算机更像是人的奴隶，人类编程的目的就命令奴隶去工作。
    
    什么是编程？

编程即程序员根据需求把自己的思想流程按照某种编程语言的语法风格编写下来，产出的结果就是包含一堆字符的文件。

强调：程序在未运行前跟普通文件无异，只有程序在运行时，文件内所写的字符才有特定的语法意义　　 
```

机器语言
优点是最底层，执行速度最快
缺点是最复杂，开发效率最低

汇编语言
优点是比较底层，执行速度最快
缺点是复杂，开发效率最低

高级语言
编译型语言执行速度快，不依赖语言环境运行，跨平台差
解释型跨平台好，一份代码，到处使用，缺点是执行速度慢，依赖解释器运行(但是我们是进行网络编程，势必受限网络延迟！所以你执行再快也受限网络)

## python介绍
 python的创始人为吉多·范罗苏姆（Guido van Rossum）。1989年的圣诞节期间，Guido开始写能够解释Python语言语法的解释器。Python这个名字，来自Guido所挚爱的电视剧Monty Python’s Flying Circus。他希望这个新的叫做Python的语言，能符合他的理想：创造一种C和shell之间，功能全面，易学易用，可拓展的语言。

 最新的TIOBE排行榜，Python赶超PHP占据第4， Python崇尚优美、清晰、简单，是一个优秀并广泛使用的语言。

 Python可以应用于众多领域，如：数据分析、组件集成、网络服务、图像处理、数值计算和科学计算等众多领域。目前业内几乎所有大中型互联网企业都在使用Python，如：Youtube、Dropbox、BT、Quora（中国知乎）、豆瓣、知乎、Google、Yahoo!、Facebook、NASA、百度、腾讯、汽车之家、美团等。

## python的变量

{% highlight python linenos %}
    // 批量添加用户数据(备注:)
      
   // 什么是变量
   
         变量即变化的量，核心是“变”与“量”二字，变即变化，量即衡量状态。
   // 为什么要有变量
         程序执行的本质就是一系列状态的变化，变是程序执行的直接体现，所以我们需要有一种机制能够反映或者说是保存下来程序执行时状态以及状态的变化。
   
   // 比如：
        英雄的等级为1，打怪升级(变)为10
        僵尸的存活状态True，被植物打死了，于是变为False
        人的名字为egon，也可以修改为Egon 
        如何定义变量（图解）
   
   // 变量名(相当于门牌号，指向值所在的空间)，等号，变量值
        name='Egon'
        sex='male'
        age=18
        level=10
   // 变量的定义规范
   
        1. 变量名只能是 字母、数字或下划线的任意组合
        2. 变量名的第一个字符不能是数字
        3. 关键字不能声明为变量名['and', 'as', 'assert', 'break', 'class', 'continue', 'def', 'del', 'elif', 'else', 'except', 'exec', 'finally', 'for', 'from', 'global', 'if', 'import', 'in', 'is', 'lambda', 'not', 'or', 'pass', 'print', 'raise', 'return', 'try', 'while', 'with', 'yield']
   // 定义方式：
   
   // 驼峰体
        AgeOfOldboy = 56 
        NumberOfStudents = 80
   // 下划线(推荐使用)
        age_of_oldboy = 56 
        number_of_students = 80
   // 定义变量名不好的方式
   
       1. 变量名为中文、拼音
       2. 变量名过长
       3. 变量名词不达意
       定义变量会有：id，type，value
   
   // 复制代码
        1 等号比较的是value，
        2 is比较的是id
   
   强调：
   
       1. id相同，意味着type和value必定相同
       2. value相同type肯定相同，但id可能不同,如下
       >>> x='Info Egon:18'
       >>> y='Info Egon:18'
       >>> id(x)
       4376607152
       >>> id(y)
       4376607408
       >>> 
       >>> x == y
       True
       >>> x is y
       False
       复制代码
           变量的修改与内存管理（引用计数与垃圾回收机制）
       
   
   // 常量
   
       常量即指不变的量，如pai 3.141592653..., 或在程序运行过程中不会改变的量
       举例，假如老男孩老师的年龄会变，那这就是个变量，但在一些情况下，他的年龄不会变了，那就是常量。在Python中没有一个专门的语法代表常量，程序员约定俗成用变量名全部大写代表常量
       AGE_OF_OLDBOY = 56
       
       ps:在c语言中有专门的常量定义语法，const int count = 60;一旦定义为常量，更改即会报错 
{% endhighlight %}
## 用户与程序交互
   ```
    在python3中
    input：用户输入任何值，都存成字符串类型
    
    在python2中
    input：用户输入什么类型，就存成什么类型
    raw_input：等于python3的input
   ```

## 注释
```
    随着学习的深入，用不了多久，你就可以写复杂的上千甚至上万行的代码啦，有些代码你花了很久写出来，过了些天再回去看，发现竟然看不懂了，这太正常了。 另外，你以后在工作中会发现，一个项目多是由几个甚至几十个开发人员一起做，你要调用别人写的代码，别人也要用你的，如果代码不加注释，你自己都看不懂，更别说别人了，这产会挨打的。所以为了避免这种尴尬的事情发生，一定要增加你代码的可读性。

    代码注释分单行和多行注释， 单行注释用#，多行注释可以用三对双引号""" """
```
## 代码注释的原则：

```
1. 不用全部加注释，只需要在自己觉得重要或不好理解的部分加注释即可
2. 注释可以用中文或英文，但不要用拼音
```

## 文件头
```
!/usr/bin/env python
 -*- coding: utf-8 -*- 
 ```
## 基本数据类型
 ```
 什么是数据？为何要有多种类型的数据？
 
 数据即变量的值，如age=18，18则是我们保存的数据。
 变量的是用来反映/保持状态以及状态变化的，毫无疑问针对不同的状态就应该用不同类型的数据去标识
  ```
 {% highlight python linenos %}

 ## int整型
 定义：age=10 #age=int(10)
 用于标识：年龄，等级，身份证号，qq号，个数
 
 ## float浮点型
 定义：salary=3.1 #salary=float(3.1)
 用于标识：工资，身高，体重，
 
 # int（整型）
 在32位机器上，整数的位数为32位，取值范围为-2**31～2**31-1，即-2147483648～2147483647
 在64位系统上，整数的位数为64位，取值范围为-2**63～2**63-1，即-9223372036854775808～9223372036854775807
 # long（长整型）
 跟C语言不同，Python的长整数没有指定位宽，即：Python没有限制长整数数值的大小，但实际上由于机器内存有限，我们使用的长整数数值不可能无限大。
 注意，自从Python2.2起，如果整数发生溢出，Python会自动将整数数据转换为长整数，所以如今在长整数数据后面不加字母L也不会导致严重后果了。
 注意：在Python3里不再有long类型了，全都是int
 >>> a= 2**64
 >>> type(a)  #type()是查看数据类型的方法
 <type 'long'>
 >>> b = 2**60
 >>> type(b)
 <type 'int'>
 
 # complex复数型
 >>> x=1-2j
 >>> x.imag
 -2.0
 >>> x.real
 1.0
 复制代码
  
 
     字符串
 
 ## 在python中，加了引号的字符就是字符串类型，python并没有字符类型。
 定义：name='egon' #name=str('egon') 
 用于标识：描述性的内容，如姓名，性别，国籍，种族

 ## 那单引号、双引号、多引号有什么区别呢？ 让我大声告诉你，单双引号木有任何区别，只有下面这种情况 你需要考虑单双的配合
 msg = "My name is Egon , I'm 18 years old!"
 
 ## 多引号什么作用呢？作用就是多行字符串必须用多引号
 msg = '''
 今天我想写首小诗，
 歌颂我的同桌，
 你看他那乌黑的短发，
 好像一只炸毛鸡。
 '''
 print(msg)
 ###数字可以进行加减乘除等运算，字符串呢？让我大声告诉你，也能？what ?是的，但只能进行"相加"和"相乘"运算。
 >>> name='egon'
 >>> age='18'
 >>> name+age #相加其实就是简单拼接
 'egon18'
 >>> name*5 
 'egonegonegonegonegon'
 
 
 ###注意1：字符串相加的效率不高
 字符串1+字符串3，并不会在字符串1的基础上加字符串2，而是申请一个全新的内存空间存入字符串1和字符串3，相当字符串1与字符串3的空间被复制了一次，
 
 ###注意2：只能字符串加字符串，不能字符串加其他类型
 复制代码
  
 
     列表
 
 ###在[]内用逗号分隔，可以存放n个任意类型的值
 定义：students=['egon','alex','wupeiqi',] #students=list(['egon','alex','wupeiqi',]) 
 用于标识：存储多个值的情况，比如一个人有多个爱好
 
 ###存放多个学生的信息：姓名，年龄，爱好
 >>> students_info=[['egon',18,['play',]],['alex',18,['play','sleep']]]
 >>> students_info[0][2][0] #取出第一个学生的第一个爱好
 'play'

 ### 为何还要用字典？
 存放一个人的信息：姓名，性别，年龄，很明显是多个值，既然是存多个值，我们完全可以基于刚刚学习的列表去存放，如下
 >>> info=['egon','male',18]
 定义列表的目的不单单是为了存，还要考虑取值，如果我想取出这个人的年龄，可以用
 >>> info[2]
 18
 但这是基于我们已经知道在第3个位置存放的是年龄的前提下，我们才知道索引2对应的是年龄
 即：
         #name, sex, age
 info=['egon','male',18]
 而这完全只是一种假设，并没有真正意义上规定第三个位置存放的是年龄，于是我们需要寻求一种，即可以存放多个任意类型的值，又可以硬性规定值的映射关系的类型，比如key=value，这就用到了字典
 复制代码
 ### 在{}内用逗号分隔，可以存放多个key:value的值，value可以是任意类型
 定义：info={'name':'egon','age':18,'sex':18} #info=dict({'name':'egon','age':18,'sex':18})
 用于标识：存储多个值的情况，每个值都有唯一一个对应的key，可以更为方便高效地取值
 

 info={
     'name':'egon',
     'hobbies':['play','sleep'],
     'company_info':{
         'name':'Oldboy',
         'type':'education',
         'emp_num':40,
     }
 }
 print(info['company_info']['name']) #取公司名
 
 
 students=[
     {'name':'alex','age':38,'hobbies':['play','sleep']},
     {'name':'egon','age':18,'hobbies':['read','sleep']},
     {'name':'wupeiqi','age':58,'hobbies':['music','read','sleep']},
 ]
 print(students[1]['hobbies'][1]) #取第二个学生的第二个爱好
 

 ### 布尔值，一个True一个False
 ###计算机俗称电脑，即我们编写程序让计算机运行时，应该是让计算机无限接近人脑，或者说人脑能干什么，计算机就应该能干什么，人脑的主要作用是数据运行与逻辑运算，此处的布尔类型就模拟人的逻辑运行，即判断一个条件成立时，用True标识，不成立则用False标识
 >>> a=3
 >>> b=5
 >>> 
 >>> a > b #不成立就是False,即假
 False
 >>> 
 >>> a < b #成立就是True, 即真
 True
 
 接下来就可以根据条件结果来干不同的事情了：
 if a > b 
    print(a is bigger than b )
 
 else 
    print(a is smaller than b )
 上面是伪代码，但意味着， 计算机已经可以像人脑一样根据判断结果不同，来执行不同的动作。 
 复制代码
     布尔类型的重点知识！！！：
 
 ### 所有数据类型都自带布尔值
 1、None，0，空（空字符串，空列表，空字典等）三种情况下布尔值为False
 2、其余均为真 
  
 
// 重点：
 
 ###1.可变类型：在id不变的情况下，value可以变，则称为可变类型，如列表，字典
 
 ###2. 不可变类型：value一旦改变，id也改变，则称为不可变类型（id变，意味着创建了新的内存空间） 
 
 {% endhighlight %}