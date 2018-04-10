---
layout: post
categories: [tech]
share: true
comments: true
title: "ecshop订单表状态"
excerpt: "ecshop订单表,不同参数表示die不同状态,包括支付 和发货状态"
date: '2015-04-05T18:50:00+08:00'
#modified: '2015-04-05T18:50:00+08:00'
tags: [PHP,ecshop]
author: Richard
---


#### ecshop数据库订单状态判断
order_info 表
##### 刚下完订单
order_status 0 
shipping_status 0 
pay_status 0 
 
##### 取消
order_status 2 
shipping_status 0 
pay_status 0 
 
##### 确认
order_status 1 
shipping_status 0 
pay_status 0 
 
##### 已付款
order_status 1 
shipping_status 0 
pay_status 2 
 
##### 配货中
order_status 1 
shipping_status 3 
pay_status 2 
 
##### 已发货
order_status 5 
shipping_status 1 
pay_status 2 
 
##### 已收货
order_status 5 
shipping_status 2 
pay_status 2 
 
##### 退货
order_status 4 
shipping_status 0 
pay_status 0 
 
##### 订单状态
define(‘OS_UNCONFIRMED’, 0); // 未确认 
define(‘OS_CONFIRMED’, 1); // 已确认 
define(‘OS_CANCELED’, 2); // 已取消 
define(‘OS_INVALID’, 3); // 无效 
define(‘OS_RETURNED’, 4); // 退货 
 
##### 支付类型
define(‘PAY_ORDER’, 0); // 订单支付 
define(‘PAY_SURPLUS’, 1); // 会员预付款 
 
##### 配送状态
define(‘SS_UNSHIPPED’, 0); // 未发货 
define(‘SS_SHIPPED’, 1); // 已发货 
define(‘SS_RECEIVED’, 2); // 已收货 
define(‘SS_PREPARING’, 3); // 备货中 
 
##### 支付状态
define(‘PS_UNPAYED’, 0); // 未付款 
define(‘PS_PAYING’, 1); // 付款中 
define(‘PS_PAYED’, 2); // 已付款 
 
$_LANG['os'][OS_UNCONFIRMED] = ‘未确认’;0 
$_LANG['os'][OS_CONFIRMED] = ‘已确认’;1 
$_LANG['os'][OS_CANCELED] = ‘ 取消‘;2 
$_LANG['os'][OS_INVALID] = ‘无效‘;3 
$_LANG['os'][OS_RETURNED] = ‘退货‘;4 
 
$_LANG['ss'][SS_UNSHIPPED] = ‘未发货’; 
$_LANG['ss'][SS_PREPARING] = ‘配货中’; 
$_LANG['ss'][SS_SHIPPED] = ‘已发货’; 
$_LANG['ss'][SS_RECEIVED] = ‘收货确认’; 
 
$_LANG['ps'][PS_UNPAYED] = ‘未付款’; 
$_LANG['ps'][PS_PAYING] = ‘付款中’; 
$_LANG['ps'][PS_PAYED] = ‘已付款’; 
