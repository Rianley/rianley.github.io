---
title: oldboy培训时写的作业 第二次作业
categories: python
tags:
 - python
 - 作业
 
---

## 作业

{% highlight python linenos %}

__Author__ = 'rianley cheng'

'''
*******人生苦短 我用python*******
*********python 第二次作业***************
 武道修炼巅峰第二重
 
 作业介绍
  九九乘法表 没啥好说滴！ 一种方法
  
  金字塔用了 两种方法 实现
   第一种方法 迭代 
   第二种方法 迭代+rjust方法
  
  4级菜单联动 用了 三种方法  
  第一种方法
  while 迭代循环 判断 和 continue  break 的使用
  
  第二种 
  
  用递归 写了一种方法  判断 几层 递归 几层 
  
  第三种 用函数 嵌套生成器的方式解决  （推荐使用 函数嵌套的方法）yield 是函数中断 进行用户输入判断 在重新调用 函数
  
  Life is too short  use python  ！ Learn python to believe Haifeng teacher！
'''
class homework():
    address = {
        '北京市': {
            '市辖区': {
                '东城区': {
                    '110101001000': '东华门街道办事处',
                    '110101002000': '景山街道办事处',
                    '110101003000': '交道口街道办事处',
                },
                '西城区': {
                    '110102001000': '西长安街街道办事处',
                    '110102003000': '新街口街道办事处',
                    '110102007000': '月坛街道办事处',
                },
                '朝阳区': {
                    '110105001000': '建外街道办事处',
                    '110105002000': '朝外街道办事处',
                    '110105003000': '呼家楼街道办事处',
                }
            }
        },
        '安徽省': {
            '宣城市': {
                '广德县': {
                    '341822100000': '桃州镇',
                    '341822101000': '柏垫镇',
                    '341822102000': '誓节镇',
                },
                '泾县': {
                    '341823100000': '泾川镇',
                    '341823101000': '茂林镇',
                    '341823102000': '榔桥镇',
                },
                '旌德县': {
                    '341825100000': '旌阳镇',
                    '341825101000': '蔡家桥镇',
                    '341825102000': '三溪镇',
                }
            },
            '安庆市': {
                '怀宁县': {
                    '340822100000': '高河镇',
                    '340822101000': '石牌镇',
                    '340822102000': '月山镇',
                },
                '桐城市': {
                    '340881101000': '吕亭镇',
                    '340881102000': '范岗镇',
                    '340881103000': '新渡镇',
                },
                '太湖县': {
                    '340825105000': '天华镇',
                    '340825106000': '牛镇镇',
                    '340825107000': '弥陀镇',
                }
            },
            '芜湖市': {
                '芜湖县': {
                    '340221102000': '陶辛镇',
                    '340221104000': '红杨镇',
                    '340221105000': '花桥镇',
                },
                '镜湖区': {
                    '340202404000': '赭山公共服务中心',
                    '340202405000': '弋矶山公共服务中心',
                    '340202406000': '汀棠公共服务中心',
                },
                '南陵县': {
                    '340223103000': '三里镇',
                    '340223104000': '何湾镇',
                    '340223105000': '工山镇',
                }
            }
        },
        '江苏省': {
            '扬州市': {
                '江都区': {
                    '321012100000': '仙女镇',
                    '321012101000': '小纪镇',
                    '321012103000': '武坚镇',
                },
                '宝应县': {
                    '321023106000': '鲁垛镇',
                    '321023107000': '小官庄镇',
                    '321023108000': '望直港镇',
                },
                '高邮市': {
                    '321084109000': '甘垛镇',
                    '321084112000': '界首镇',
                    '321084113000': '周山镇',
                }
            },
            '苏州市': {
                '相城区': {
                    '320507001000': '元和街道',
                    '320507002000': '太平街道',
                    '320507003000': '黄桥街道',
                },
                '姑苏区': {
                    '320508005000': '葑门街道',
                    '320508006000': '友新街道',
                    '320508007000': '观前街道',
                },
                '昆山市': {
                    '320583102000': '周市镇',
                    '320583103000': '陆家镇',
                    '320583104000': '花桥镇',
                }
            },
            '淮安市': {
                '涟水县': {
                    '320826104000': '大东镇',
                    '320826105000': '五港镇',
                    '320826106000': '梁岔镇',
                },
                '金湖县': {
                    '320831103000': '塔集镇',
                    '320831106000': '前锋镇',
                    '320831107000': '吕良镇',
                },
                '淮阴区': {
                    '320804104000': '码头镇',
                    '320804105000': '王兴镇',
                    '320804106000': '棉花庄镇',
                }
            }
        }
    }   #地址菜单

    def first(self):   # 循环嵌套 九九乘法表
        for i in range(1,10):  #顾头不顾尾 只取 1,到 9 ！
            for k in range(1,10):
                print('\033[1;35m%dx%d=%d\033[0m'%(i,k,i*k),end=' ')
            print('')

    def second(self):         #金字塔
        number = 7
        for c in range(1, number + 1):  # 一共循环多少次
            for i in range(number - c):  # 一次大循环有几次小循环 每次小循环 打印 几个空格
                print(' ', end='')  # 在一行中连续打印多个空格
            for j in range(2 * c - 1):
                print('\033[1;35m*\033[0m', end='')  # 在一行中连续打印多个空格
            print()

    def second_1(self):        #金字塔改版
        number = 7  # 层数
        str = ''
        for i in range(1, number + 1):  # 循环0-7 最大层
            for j in range(2 * i - 1):
                str += '\033[1;35m*\033[0m'  # 字符串追加 *
            print(str.rjust(number - i + len(str), ' '))  # rjust 要包含 原本字符串的长度
            str = ''  # 循环结束后 初始化字符串


    def third_1(self):  # 循环版 四级连动菜单  最loser 的写法
        first = True
        while first:
            second = True
            for i1 in self.address:
                print(i1)
            res1 = input('\033[1;35m请选择地址，b返回上一级，q退出:\033[0m').strip()
            if not res1: continue
            if res1 == 'b':
                print('已经是最顶级了！可以输入\033[1;35mq\033[0m退出:')
                continue
            if res1 == 'q':
                first = False
                continue
            if res1 not in self.address:
                print('\033[1;35m请输入可以选择的地址！\033[0m')
                continue
            while second:
                third = True
                for i2 in self.address[res1]:
                    print(i2)
                res2 = input('\033[1;35m请选择地址，b返回上一级，q退出:\033[0m').strip()
                if not res2: continue
                if res2 == 'b':
                    second = False
                    continue
                if res2 == 'q':
                    second = False
                    first = False
                    continue
                if res2 not in self.address[res1]:
                    print('\033[1;35m请输入正确的地址！\033[0m')
                    continue
                while third:
                    fourth = True
                    for i3 in self.address[res1][res2]:
                        print(i3)
                    res3 = input('请选择地址，\033[1;35mb返回上一级，q退出:\033[0m').strip()
                    if not res3: continue
                    if res3 == 'b':
                        third = False
                        continue
                    if res3 == 'q':
                        third = False
                        second = False
                        first = False
                        continue
                    if res3 not in self.address[res1][res2]:
                        print('\033[1;35m请输入正确的地址！\033[0m')
                        continue
                    while fourth:
                        for i4 in self.address[res1][res2][res3]:
                            print(i4, self.address[res1][res2][res3][i4])
                        res4 = input('已经是最后的地址了，\033[1;35m请尝试，b返回上一级，q退出:\033[0m').strip()
                        if not res4: continue
                        if res4 == 'b':
                            fourth = False
                            continue
                        if res4 == 'q':
                            fourth = False
                            third = False
                            second = False
                            first = False
                            continue

    def third_2(self,address_info, res1='', res2='', res3=''):  # 下面 用递归 进行优化
        while True:
            for i in address_info:
                if res3:
                    print(i, address_info[i])
                else:
                    print(i)
            if res3:
                res = input('已经是最后的地址了，请尝试，\033[1;33;44mb返回上一级，q退出:\033[0m').strip()
            else:
                res = input('请选择地址，\033[1;35mb返回上一级，q退出:\033[0m').strip()
            if not res: continue
            if res == 'b':
                if res1 == '':
                    print('\033[1;35;44m已经是最顶级了！可以输入q退出:\033[0m')
                    continue
                else:
                    if res3:  # 通过判断 来选择到底 传 第几层字典 给 函数
                        return self.third_2(self.address[res1][res2], res1, res2)
                    elif res2:
                        return self.third_2(self.address[res1], res1)
                    else:
                        return self.third_2(self.address)

            if res == 'q':
                return False
            if res3:
                continue
            if res not in address_info:
                print('\033[1;33;44m请输入可以选择的地址！\033[0m')
                continue

            if res2:
                return self.third_2(address_info[res], res1, res2, res)
            elif res1:
                return self.third_2(address_info[res], res1, res)
            else:
                return self.third_2(address_info[res], res)


    def third_3(self):  # 最终 优化版 函数 生成器
        def create(addre):
            for i in addre:
                print(i)
            while True:
                add = addre
                res = yield
                if res == 'b':
                    listx.pop()
                    if len(listx) == 0:
                        print('\033[1;35m已经是最上级了！！\033[0m!')
                    else:
                        listx.pop()
                if len(listx) > 3:
                    listx.pop()
                    print('\033[1;35m已经到最后了,\033[0m!返回上一级看看把')
                for i in listx:
                    if i not in add:
                        listx.pop()
                        continue
                    add = add[i]
                for i in add:
                    if len(listx) == 3:
                        print(i, add[i])
                    else:
                        print(i)

        thirdx = create(self.address)
        thirdx.__next__()  # 相当于把带function的东东变成生成器 停在yield(执行到那里，等待传值过去)

        listx = []
        while True:
            res = input('你可以进行如下操作，\033[1;35m b返回上一级，q退出:\033[0m!').strip()  # 与用户交互！接受用户输入信息 调用  tt函数进行处理
            if not res: continue
            if res == 'q':
                break
            listx.append(res)
            thirdx.send(res)  # 把值传给yield


res = homework()
#res.first()
#res.second()
#res.second_1()
#res.third_1()
#res.third_2(res.address)
res.third_3()

{% endhighlight %}
