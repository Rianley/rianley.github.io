---
title: python数据类型
categories: python
tags:
 - python
 
---

## 整型与浮点型

{% highlight python linenos %}
    #整型int
    　　作用：年纪，等级，身份证号，qq号等整型数字相关
    　　定义：
    　　　　age=10 #本质age=int(10)
    
    #浮点型float
    　　作用：薪资，身高，体重，体质参数等浮点数相关
    
        salary=3000.3 #本质salary=float(3000.3)
    
    #二进制，十进制，八进制，十六进制 
    
    其他数字类型（了解）
    
    
    #长整形（了解）
        在python2中（python3中没有长整形的概念）：　　　　　　
        >>> num=2L
        >>> type(num)
        <type 'long'>
    
    #复数（了解）　　
        >>> x=1-2j
        >>> x.real
        1.0
        >>> x.imag
        -2.0　　
{% endhighlight %}
## 字符串
   ```
    #作用：名字，性别，国籍，地址等描述信息
    
    #定义：在单引号\双引号\三引号内，由一串字符组成
    name='egon'
    
    #优先掌握的操作：
    #1、按索引取值(正向取+反向取) ：只能取
    #2、切片(顾头不顾尾，步长)
    #3、长度len
    #4、成员运算in和not in
    
    #5、移除空白strip
    #6、切分split
    #7、循环
    
    　　需要掌握的操作
    
    
    #1、strip,lstrip,rstrip
    #2、lower,upper
    #3、startswith,endswith
    #4、format的三种玩法
    #5、split,rsplit
    #6、join
    #7、replace
    #8、isdigit
    
    
    
    #strip
    name='*egon**'
    print(name.strip('*'))
    print(name.lstrip('*'))
    print(name.rstrip('*'))
    
    #lower,upper
    name='egon'
    print(name.lower())
    print(name.upper())
    
    #startswith,endswith
    name='alex_SB'
    print(name.endswith('SB'))
    print(name.startswith('alex'))
    
    #format的三种玩法
    res='{} {} {}'.format('egon',18,'male')
    res='{1} {0} {1}'.format('egon',18,'male')
    res='{name} {age} {sex}'.format(sex='male',name='egon',age=18)
    
    #split
    name='root:x:0:0::/root:/bin/bash'
    print(name.split(':')) #默认分隔符为空格
    name='C:/a/b/c/d.txt' #只想拿到顶级目录
    print(name.split('/',1))
    
    name='a|b|c'
    print(name.rsplit('|',1)) #从右开始切分
    
    #join
    tag=' '
    print(tag.join(['egon','say','hello','world'])) #可迭代对象必须都是字符串
    
    #replace
    name='alex say :i have one tesla,my name is alex'
    print(name.replace('alex','SB',1))
    
    #isdigit：可以判断bytes和unicode类型,是最常用的用于于判断字符是否为"数字"的方法
    age=input('>>: ')
    print(age.isdigit())
    
    　其他操作（了解即可）
    
    #1、find,rfind,index,rindex,count
    #2、center,ljust,rjust,zfill
    #3、expandtabs
    #4、captalize,swapcase,title
    #5、is数字系列
    #6、is其他
    
    
    #find,rfind,index,rindex,count
    name='egon say hello'
    print(name.find('o',1,3)) #顾头不顾尾,找不到则返回-1不会报错,找到了则显示索引
    # print(name.index('e',2,4)) #同上,但是找不到会报错
    print(name.count('e',1,3)) #顾头不顾尾,如果不指定范围则查找所有
    
    #center,ljust,rjust,zfill
    name='egon'
    print(name.center(30,'-'))
    print(name.ljust(30,'*'))
    print(name.rjust(30,'*'))
    print(name.zfill(50)) #用0填充
    
    #expandtabs
    name='egon\thello'
    print(name)
    print(name.expandtabs(1))
    
    #captalize,swapcase,title
    print(name.capitalize()) #首字母大写
    print(name.swapcase()) #大小写翻转
    msg='egon say hi'
    print(msg.title()) #每个单词的首字母大写
    
    #is数字系列
    #在python3中
    num1=b'4' #bytes
    num2=u'4' #unicode,python3中无需加u就是unicode
    num3='四' #中文数字
    num4='Ⅳ' #罗马数字
    
    #isdigt:bytes,unicode
    print(num1.isdigit()) #True
    print(num2.isdigit()) #True
    print(num3.isdigit()) #False
    print(num4.isdigit()) #False
    
    #isdecimal:uncicode
    #bytes类型无isdecimal方法
    print(num2.isdecimal()) #True
    print(num3.isdecimal()) #False
    print(num4.isdecimal()) #False
    
    #isnumberic:unicode,中文数字,罗马数字
    #bytes类型无isnumberic方法
    print(num2.isnumeric()) #True
    print(num3.isnumeric()) #True
    print(num4.isnumeric()) #True
    
    #三者不能判断浮点数
    num5='4.3'
    print(num5.isdigit())
    print(num5.isdecimal())
    print(num5.isnumeric())
    '''
    总结:
        最常用的是isdigit,可以判断bytes和unicode类型,这也是最常见的数字应用场景
        如果要判断中文数字或罗马数字,则需要用到isnumeric
    '''
    
    #is其他
    print('===>')
    name='egon123'
    print(name.isalnum()) #字符串由字母或数字组成
    print(name.isalpha()) #字符串只由字母组成
    
    print(name.isidentifier())
    print(name.islower())
    print(name.isupper())
    print(name.isspace())
    print(name.istitle())

   ```

## 列表
```
   #作用：多个装备，多个爱好，多门课程，多个女朋友等
   
   #定义：[]内可以有多个任意类型的值，逗号分隔
   my_girl_friends=['alex','wupeiqi','yuanhao',4,5] #本质my_girl_friends=list([...])
   或
   l=list('abc')
   
   #优先掌握的操作：
   #1、按索引存取值(正向存取+反向存取)：即可存也可以取      
   #2、切片(顾头不顾尾，步长)
   #3、长度
   #4、成员运算in和not in
   
   #5、追加
   #6、删除
   #7、循环
   
   
   #ps:反向步长
   l=[1,2,3,4,5,6]
   
   #正向步长
   l[0:3:1] #[1, 2, 3]
   #反向步长
   l[2::-1] #[3, 2, 1]
   #列表翻转
   l[::-1] #[6, 5, 4, 3, 2, 1]
```
## 元组：

```
#作用：存多个值，对比列表来说，元组不可变（是可以当做字典的key的），主要是用来读

#定义：与列表类型比，只不过[]换成()
age=(11,22,33,44,55)本质age=tuple((11,22,33,44,55))

#优先掌握的操作：
#1、按索引取值(正向取+反向取)：只能取   
#2、切片(顾头不顾尾，步长)
#3、长度
#4、成员运算in和not in

#5、循环
```

## 字典
```
#作用：存多个值,key-value存取，取值速度快

#定义：key必须是不可变类型，value可以是任意类型
info={'name':'egon','age':18,'sex':'male'} #本质info=dict({....})
或
info=dict(name='egon',age=18,sex='male')
或
info=dict([['name','egon'],('age',18)])
或
{}.fromkeys(('name','age','sex'),None)

#优先掌握的操作：
#1、按key存取值：可存可取
#2、长度len
#3、成员运算in和not in

#4、删除
#5、键keys()，值values()，键值对items()
#6、循环
 ```
## 字典练习
 ```
　练习

1 有如下值集合 [11,22,33,44,55,66,77,88,99,90...]，将所有大于 66 的值保存至字典的第一个key中，将小于 66 的值保存至第二个key的值中

即： {'k1': 大于66的所有值, 'k2': 小于66的所有值}


a={'k1':[],'k2':[]}
c=[11,22,33,44,55,66,77,88,99,90]
for i in c:
    if i>66:
        a['k1'].append(i)
    else:
        a['k2'].append(i)
print(a)

2 统计s='hello alex alex say hello sb sb'中每个单词的个数

结果如：{'hello': 2, 'alex': 2, 'say': 1, 'sb': 2}


s='hello alex alex say hello sb sb'

l=s.split()
dic={}
for item in l:
    if item in dic:
        dic[item]+=1
    else:
        dic[item]=1
print(dic)



s='hello alex alex say hello sb sb'
dic={}
words=s.split()
print(words)
for word in words: #word='alex'
    dic[word]=s.count(word)
    print(dic)


#利用setdefault解决重复赋值
'''
setdefault的功能
1：key存在，则不赋值，key不存在则设置默认值
2：key存在，返回的是key对应的已有的值，key不存在，返回的则是要设置的默认值
d={}
print(d.setdefault('a',1)) #返回1

d={'a':2222}
print(d.setdefault('a',1)) #返回2222
'''
s='hello alex alex say hello sb sb'
dic={}
words=s.split()
for word in words: #word='alex'
    dic.setdefault(word,s.count(word))
    print(dic)



#利用集合，去掉重复，减少循环次数
s='hello alex alex say hello sb sb'
dic={}
words=s.split()
words_set=set(words)
for word in words_set:
    dic[word]=s.count(word)
    print(dic)
  ```
  
## 集合
 
 ```angular2html

#作用：去重，关系运算，

#定义：
            知识点回顾
            可变类型是不可hash类型
            不可变类型是可hash类型

#定义集合:
            集合：可以包含多个元素，用逗号分割，
            集合的元素遵循三个原则：
             1：每个元素必须是不可变类型(可hash，可作为字典的key)
             2:没有重复的元素
             3：无序

注意集合的目的是将不同的值存放到一起，不同的集合间用来做关系运算，无需纠结于集合中单个值
 

#优先掌握的操作：
#1、长度len
#2、成员运算in和not in

#3、|合集
#4、&交集
#5、-差集
#6、^对称差集
#7、==
#8、父集：>,>= 
#9、子集：<,<=    

```

## 练习

```angular2html
一.关系运算
　　有如下两个集合，pythons是报名python课程的学员名字集合，linuxs是报名linux课程的学员名字集合
　　pythons={'alex','egon','yuanhao','wupeiqi','gangdan','biubiu'}
　　linuxs={'wupeiqi','oldboy','gangdan'}
　　1. 求出即报名python又报名linux课程的学员名字集合
　　2. 求出所有报名的学生名字集合
　　3. 求出只报名python课程的学员名字
　　4. 求出没有同时这两门课程的学员名字集合



# 有如下两个集合，pythons是报名python课程的学员名字集合，linuxs是报名linux课程的学员名字集合
pythons={'alex','egon','yuanhao','wupeiqi','gangdan','biubiu'}
linuxs={'wupeiqi','oldboy','gangdan'}
# 求出即报名python又报名linux课程的学员名字集合
print(pythons & linuxs)
# 求出所有报名的学生名字集合
print(pythons | linuxs)
# 求出只报名python课程的学员名字
print(pythons - linuxs)
# 求出没有同时这两门课程的学员名字集合
print(pythons ^ linuxs)


 　　二.去重

　　 1. 有列表l=['a','b',1,'a','a']，列表元素均为可hash类型，去重，得到新列表,且新列表无需保持列表原来的顺序

　　 2.在上题的基础上，保存列表原来的顺序

　　 3.去除文件中重复的行，肯定要保持文件内容的顺序不变
　　 4.有如下列表，列表元素为不可hash类型，去重，得到新列表，且新列表一定要保持列表原来的顺序

l=[
    {'name':'egon','age':18,'sex':'male'},
    {'name':'alex','age':73,'sex':'male'},
    {'name':'egon','age':20,'sex':'female'},
    {'name':'egon','age':18,'sex':'male'},
    {'name':'egon','age':18,'sex':'male'},
]　　



#去重,无需保持原来的顺序
l=['a','b',1,'a','a']
print(set(l))

#去重,并保持原来的顺序
#方法一:不用集合
l=[1,'a','b',1,'a']

l1=[]
for i in l:
    if i not in l1:
        l1.append(i)
print(l1)
#方法二:借助集合
l1=[]
s=set()
for i in l:
    if i not in s:
        s.add(i)
        l1.append(i)

print(l1)


#同上方法二,去除文件中重复的行
import os
with open('db.txt','r',encoding='utf-8') as read_f,\
        open('.db.txt.swap','w',encoding='utf-8') as write_f:
    s=set()
    for line in read_f:
        if line not in s:
            s.add(line)
            write_f.write(line)
os.remove('db.txt')
os.rename('.db.txt.swap','db.txt')

#列表中元素为可变类型时,去重,并且保持原来顺序
l=[
    {'name':'egon','age':18,'sex':'male'},
    {'name':'alex','age':73,'sex':'male'},
    {'name':'egon','age':20,'sex':'female'},
    {'name':'egon','age':18,'sex':'male'},
    {'name':'egon','age':18,'sex':'male'},
]
# print(set(l)) #报错:unhashable type: 'dict'
s=set()
l1=[]
for item in l:
    val=(item['name'],item['age'],item['sex'])
    if val not in s:
        s.add(val)
        l1.append(item)

print(l1)






#定义函数,既可以针对可以hash类型又可以针对不可hash类型
def func(items,key=None):
    s=set()
    for item in items:
        val=item if key is None else key(item)
        if val not in s:
            s.add(val)
            yield item

print(list(func(l,key=lambda dic:(dic['name'],dic['age'],dic['sex']))))

```

## 数据类型总结
```angular2html
按存储空间的占用分（从低到高）

数字
字符串
集合：无序，即无序存索引相关信息
元组：有序，需要存索引相关信息，不可变
列表：有序，需要存索引相关信息，可变，需要处理数据的增删改
字典：无序，需要存key与value映射的相关信息，可变，需要处理数据的增删改
按存值个数区分

标量／原子类型	数字，字符串
容器类型	列表，元组，字典
 

 

按可变不可变区分

可变	列表，字典
不可变	数字，字符串，元组
 

 

按访问顺序区分

直接访问	数字
顺序访问（序列类型）	字符串，列表，元组
key值访问（映射类型）	字典
 



```



`莫让惰性，成为惯性！ 坚持，加油 `