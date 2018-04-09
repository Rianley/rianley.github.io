---
title: python笔记(流程语句入门及while循环)
categories: python
tags:
 - python
 
---
##流程控制之if...else 和 while 的运用！
{% highlight python linenos %}

    #既然我们编程的目的是为了控制计算机能够像人脑一样工作，那么人脑能做什么，就需要程序中有相应的机制去模拟。人脑无非是数学运算和逻辑运算，对于数学运算在上一节我们已经说过了。对于逻辑运算，即人根据外部条件的变化而做出不同的反映，比如

    #如果：女人的年龄>30岁，那么：叫阿姨

age_of_girl=31
if age_of_girl > 30:
    print('阿姨好')
    2 如果：女人的年龄>30岁，那么：叫阿姨，否则：叫小姐

age_of_girl=18
if age_of_girl > 30:
    print('阿姨好')
else:
    print('小姐好')
    3 如果：女人的年龄>=18并且<22岁并且身高>170并且体重<100并且是漂亮的，那么：表白，否则：叫阿姨


age_of_girl=18
height=171
weight=99
is_pretty=True
if age_of_girl >= 18 and age_of_girl < 22 and height > 170 and weight < 100 and is_pretty == True:
    print('表白...')else:
    print('阿姨好')

 if套if
    4 如果：成绩>=90，那么：优秀

       如果成绩>=80且<90,那么：良好

       如果成绩>=70且<80,那么：普通

       其他情况：很差

 View Code

　　if 条件1:

　　　　缩进的代码块

　　elif 条件2:

　　　　缩进的代码块

　　elif 条件3:

　　　　缩进的代码块

　　......

　　else:　　

　　　　缩进的代码块

 



#!/usr/bin/env python

name=input('请输入用户名字：')
password=input('请输入密码：')

if name == 'egon' and password == '123':
    print('egon login success')
else:
    print('用户名或密码错误')



#!/usr/bin/env python
#根据用户输入内容打印其权限

'''
egon --> 超级管理员
tom  --> 普通管理员
jack,rain --> 业务主管
其他 --> 普通用户
'''
name=input('请输入用户名字：')

if name == 'egon':
    print('超级管理员')
elif name == 'tom':
    print('普通管理员')
elif name == 'jack' or name == 'rain':
    print('业务主管')
else:
    print('普通用户')



# 如果:今天是Monday,那么:上班
# 如果:今天是Tuesday,那么:上班
# 如果:今天是Wednesday,那么:上班
# 如果:今天是Thursday,那么:上班
# 如果:今天是Friday,那么:上班
# 如果:今天是Saturday,那么:出去浪
# 如果:今天是Sunday,那么:出去浪


#方式一：
today=input('>>: ')
if today == 'Monday':
    print('上班')
elif today == 'Tuesday':
    print('上班')
elif today == 'Wednesday':
    print('上班')
elif today == 'Thursday':
    print('上班')
elif today == 'Friday':
    print('上班')
elif today == 'Saturday':
    print('出去浪')
elif today == 'Sunday':
    print('出去浪')
else:
    print('''必须输入其中一种:
    Monday
    Tuesday
    Wednesday
    Thursday
    Friday
    Saturday
    Sunday
    ''')

#方式二：
today=input('>>: ')
if today == 'Saturday' or today == 'Sunday':
    print('出去浪')

elif today == 'Monday' or today == 'Tuesday' or today == 'Wednesday' \
    or today == 'Thursday' or today == 'Friday':
    print('上班')

else:
    print('''必须输入其中一种:
    Monday
    Tuesday
    Wednesday
    Thursday
    Friday
    Saturday
    Sunday
    ''')


#方式三：
today=input('>>: ')
if today in ['Saturday','Sunday']:
    print('出去浪')
elif today in ['Monday','Tuesday','Wednesday','Thursday','Friday']:
    print('上班')
else:
    print('''必须输入其中一种:
    Monday
    Tuesday
    Wednesday
    Thursday
    Friday
    Saturday
    Sunday
    ''')

十三 流程控制之while循环

    1 为何要用循环


#上节课我们已经学会用if .. else 来猜年龄的游戏啦，但是只能猜一次就中的机率太小了，如果我想给玩家3次机会呢？就是程序启动后，玩家最多可以试3次，这个怎么弄呢？你总不会想着把代码复制3次吧。。。。

age_of_oldboy = 48

guess = int(input(">>:"))

if guess > age_of_oldboy :
    print("猜的太大了，往小里试试...")

elif guess < age_of_oldboy :
    print("猜的太小了，往大里试试...")

else:
    print("恭喜你，猜对了...")

#第2次
guess = int(input(">>:"))

if guess > age_of_oldboy :
    print("猜的太大了，往小里试试...")

elif guess < age_of_oldboy :
    print("猜的太小了，往大里试试...")

else:
    print("恭喜你，猜对了...")

#第3次
guess = int(input(">>:"))

if guess > age_of_oldboy :
    print("猜的太大了，往小里试试...")

elif guess < age_of_oldboy :
    print("猜的太小了，往大里试试...")

else:
    print("恭喜你，猜对了...")

#即使是小白的你，也觉得的太low了是不是，以后要修改功能还得修改3次，因此记住，写重复的代码是程序员最不耻的行为。
那么如何做到不用写重复代码又能让程序重复一段代码多次呢？ 循环语句就派上用场啦

    2 条件循环：while，语法如下

while 条件:    
    # 循环体
 
    # 如果条件为真，那么循环体则执行，执行完毕后再次循环，重新判断条件。。。
    # 如果条件为假，那么循环体不执行,循环终止

#打印0-10
count=0
while count <= 10:
    print('loop',count)
    count+=1

#打印0-10之间的偶数
count=0
while count <= 10:
    if count%2 == 0:
        print('loop',count)
    count+=1

#打印0-10之间的奇数
count=0
while count <= 10:
    if count%2 == 1:
        print('loop',count)
    count+=1

    3 死循环

import time
num=0
while True:
    print('count',num)
    time.sleep(1)
    num+=1　　 
    4 循环嵌套与tag


　　tag=True 

　　while tag:

　　　　......

　　　　while tag:

　　　　　　........

　　　　　　while tag:

　　　　　　　　tag=False

#练习，要求如下：
    1 循环验证用户输入的用户名与密码
    2 认证通过后，运行用户重复执行命令
    3 当用户输入命令为quit时，则退出整个程序 


#实现一：
name='egon'
password='123'

while True:
    inp_name=input('用户名: ')
    inp_pwd=input('密码: ')
    if inp_name == name and inp_pwd == password:
        while True:
            cmd=input('>>: ')
            if not cmd:continue
            if cmd == 'quit':
                break
            print('run <%s>' %cmd)
    else:
        print('用户名或密码错误')
        continue
    break

#实现二：使用tag
name='egon'
password='123'

tag=True
while tag:
    inp_name=input('用户名: ')
    inp_pwd=input('密码: ')
    if inp_name == name and inp_pwd == password:
        while tag:
            cmd=input('>>: ')
            if not cmd:continue
            if cmd == 'quit':
                tag=False
                continue
            print('run <%s>' %cmd)
    else:
        print('用户名或密码错误')

    4 break与continue



#break用于退出本层循环
while True:
    print "123"
    break
    print "456"

#continue用于退出本次循环，继续下一次循环
while True:
    print "123"
    continue
    print "456"

    5 while+else



#与其它语言else 一般只与if 搭配不同，在Python 中还有个while ...else 语句，while 后面的else 作用是指，当while 循环正常执行完，中间没有被break 中止的话，就会执行else后面的语句
count = 0
while count <= 5 :
    count += 1
    print("Loop",count)

else:
    print("循环正常执行完啦")
print("-----out of while loop ------")
输出
Loop 1
Loop 2
Loop 3
Loop 4
Loop 5
Loop 6
循环正常执行完啦
-----out of while loop ------

#如果执行过程中被break啦，就不会执行else的语句啦
count = 0
while count <= 5 :
    count += 1
    if count == 3:break
    print("Loop",count)

else:
    print("循环正常执行完啦")
print("-----out of while loop ------")
输出

Loop 1
Loop 2
-----out of while loop ------

    6 while循环练习题


#1. 使用while循环输出1 2 3 4 5 6     8 9 10
#2. 求1-100的所有数的和
#3. 输出 1-100 内的所有奇数
#4. 输出 1-100 内的所有偶数
#5. 求1-2+3-4+5 ... 99的所有数的和
#6. 用户登陆（三次机会重试）
#7：猜年龄游戏
要求：
    允许用户最多尝试3次，3次都没猜对的话，就直接退出，如果猜对了，打印恭喜信息并退出
#8：猜年龄游戏升级版 
要求：
    允许用户最多尝试3次
    每尝试3次后，如果还没猜对，就问用户是否还想继续玩，如果回答Y或y, 就继续让其猜3次，以此往复，如果回答N或n，就退出程序
    如何猜对了，就直接退出 



#题一
count=1
while count <= 10:
    if count == 7:
        count+=1
        continue
    print(count)
    count+=1
    

count=1
while count <= 10:
    if count != 7:
        print(count)
    count+=1
    

#题目二
res=0
count=1
while count <= 100:
    res+=count
    count+=1
print(res)

#题目三
count=1
while count <= 100:
    if count%2 != 0:
        print(count)
    count+=1
    
#题目四
count=1
while count <= 100:
    if count%2 == 0:
        print(count)
    count+=1
    
    
    
#题目五
res=0
count=1
while count <= 5:
    if count%2 == 0:
        res-=count
    else:
        res+=count
    count+=1
print(res)
    

#题目六
count=0
while count < 3:
    name=input('请输入用户名：')
    password=input('请输入密码：')
    if name == 'egon' and password == '123':
        print('login success')
        break
    else:
        print('用户名或者密码错误')
        count+=1

#题目七
age_of_oldboy=73

count=0
while count < 3:
    guess=int(input('>>: '))
    if guess == age_of_oldboy:
        print('you got it')
        break
    count+=1

#题目八
age_of_oldboy=73

count=0
while True:
    if count == 3:
        choice=input('继续(Y/N?)>>: ')
        if choice == 'Y' or choice == 'y':
            count=0
        else:
            break

    guess=int(input('>>: '))
    if guess == age_of_oldboy:
        print('you got it')
        break
    count+=1

{% endhighlight %}

##十四 流程控制之for循环
{% highlight python linenos %}

1 迭代式循环：for，语法如下

　　for i in range(10):

　　　　缩进的代码块

2 break与continue（同上）

3 循环嵌套
//九九乘法表
for i in range(1,10):
    for j in range(1,i+1):
        print('%s*%s=%s' %(i,j,i*j),end=' ')
    print()


#分析
'''

             #max_level=5
    *        #current_level=1，空格数=4，*号数=1
   ***       #current_level=2,空格数=3,*号数=3
  *****      #current_level=3,空格数=2,*号数=5
 *******     #current_level=4,空格数=1,*号数=7
*********    #current_level=5,空格数=0,*号数=9

下一期blog 阐述： 如何用其他的方法搞定这个 金字塔！！！

#数学表达式
空格数=max_level-current_level
*号数=2*current_level-1

'''

#实现
max_level=5
for current_level in range(1,max_level+1):
    for i in range(max_level-current_level):
        print(' ',end='') #在一行中连续打印多个空格
    for j in range(2*current_level-1):
        print('*',end='') #在一行中连续打印多个空格
    print()

{% endhighlight %}
