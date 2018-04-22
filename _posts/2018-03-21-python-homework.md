---
title: oldboy培训时写的作业 第一次作业
categories: python
tags:
 - python
 - 作业
 
---

## 作业

{% highlight python linenos %}
#!/usr/bin/python
'''
 功能介绍
 登陆
     **    输入三次用户名错  记录主机地址，禁止他在登录  注：这儿 如果用户换机器还是 可以登录

     **  输入三次用户名正确，但是三次密码错，将记录用户名  锁定该用户，不允许他继续登录！ （这儿当个用户被锁定，此账号无法登录，换其他的账户 可以继续登录）

     **  配置文件 会自动生成！这儿有 异常处理，不至于打不开文件 而导致报错

     ** PHP 是这个世界上 最好的语言
'''
__Author__ ='rianley cheng'
import uuid
class login:
    login_number = 3
    local_mac = ''
    dic = {
        'rianley': {'password': '123', 'count': 0},
        'rianley1': {'password': '123', 'count': 0},
        'rianley2': {'password': '123', 'count': 0},
    }
    def validation(self):  # 验证用户今天是否输入超过三次
        mac = uuid.UUID(int=uuid.getnode()).hex[-12:]
        mac_num = ":".join([mac[e:e + 2] for e in range(0, 11, 2)]) #获取用户当前的mac 地址
        try:                                                         #查看文件 是否已经存在，不存在，直接跳 login  方法
            with open('config.txt', 'r') as f:                 #文件存在，比对信息，比对成功，则直接 exit（） 比对不成功 则跳转
                lines = f.read()  # 读取所有行
                if mac_num in lines.strip(): # 比对这个傻逼，今天是不是输入过3次，又来输入了玩
                    exit('对不起，你今天连续输入三次都未成功，系统怀疑你没有用户名 禁止你登录！如有问题请联系管理员申诉')
                else:
                    self.login_mian()
        except IOError:
            self.login_mian()
    def get_macget_mac(self):
        mac = uuid.UUID(int=uuid.getnode()).hex[-12:]
        mac_num = ":".join([mac[e:e + 2] for e in range(0, 11, 2)])
        f = open('config.txt', 'a')
        f.write(mac_num+'\n')
        f.close()
    def login_mian(self):
        while True:
            name =input('请输入用户名：')
            if not name in self.dic:
                print('该用户不存在，你还有%s次机会'%(self.login_number))
                self.login_number-=1
                if self.login_number<0:
                    self.get_macget_mac()  #记录主机信息
                    print('你输入三次都没对，系统默认你是不法分子！禁止你登录！而且还报警了，在不跑路，你要GG了')
                    break
                continue
            else:
                try:
                    with open('config.txt', 'r') as f:  # 文件存在，比对信息，比对成功，则直接 exit（） 比对不成功 则继续
                        lines = f.read()  # 读取所有行
                        if name in lines:#判断用户是否已经登录三次，被锁定了
                            exit('此用户已被锁定，请联系管理员解锁')
                except IOError:
                    pass

            password = input("请输入密码：")
            if password == self.dic[name]['password']:
                print('恭喜您登录成功！')
                print('您的登录账号是{name},密码为{password}'.format(name=name, password=password))  #输出用户登录信息
                break
            else:
                self.dic[name]['count'] += 1
                if self.dic[name]['count'] >2:
                    print('密码输入次数超限制，已将该用户锁定，限制登录！')
                    f = open('config.txt', 'a')
                    f.write(name + '\n')
                    f.close()
                    break
                self.login_number-=1
                print('密码不正确,你还能输入%s次'%(self.login_number))
                continue
obj= login() #实例化对象
obj.validation()
{% endhighlight %}
