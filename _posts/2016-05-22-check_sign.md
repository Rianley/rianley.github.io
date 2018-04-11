---
title: "普通接口sign验证的一种方法"
categories: php
tags:
 - PHP
 - 接口
 - app开发
author: Rianley
---


    function passport_check_sign($arr_param, $return_sign=TRUE)
    {
        $sn_key = 'xxxxxxxxxxxxxx';   // 双方认可的key值
        $your_sing = '';
        
        $arr_sign = array();
        foreach($arr_param as $key => $value)
        {
            if($key == 'sign')
            {
                $your_sing = urldecode($value);
                continue;
            }
            $arr_sign[] = $key.'='.$value;
        }
        $arr_sign[] = 'sn_key='.$sn_key;
        asort($arr_sign);
        $str_param = implode('&', $arr_sign);
        $my_sign = md5($str_param);
        if($return_sign){
            return $my_sign;
        }else{
            if($my_sign === $your_sing){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
