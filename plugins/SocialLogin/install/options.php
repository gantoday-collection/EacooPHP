<?php

return array(
    'type'=>array(
        'title'=>'开启同步登录',
        'type'=>'checkbox',
        'value'=>'',
        'options'=>array(
            'Weixin'=>'Weixin',
            'Qq'=>'Qq',
            'Sina'=>'Sina',
            'Renren'=>'Renren',
        ),
    ),
    'meta'=>array(
        'title'=>'接口验证代码',
        'type'=>'textarea',
        'value'=>'',
        'tip'=>'需要在Meta标签中写入验证信息时，拷贝代码到这里。'
    ),
    'WeixinKey'=>array(
                    'title'=>'微信APPKEY',
                    'type'=>'text',
                    'value'=>'',
                    'tip'=>'申请地址：http://open.weixin.qq.com/',
                ),
    'WeixinSecret'=>array(
        'title'=>'微信APPSECRET',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://open.weixin.qq.com/',
    ),
    'QqKey'=>array(
        'title'=>'QQ互联APPKEY',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://connect.qq.com',
    ),
    'QqSecret'=>array(
        'title'=>'QQ互联APPSECRET',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://connect.qq.com',
    ),
    'SinaKey'=>array(
        'title'=>'新浪APPKEY',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://open.weibo.com/',
    ),
    'SinaSecret'=>array(
        'title'=>'新浪APPSECRET',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://open.weibo.com/',
    ),
    'RenrenKey'=>array(
        'title'=>'人人APPKEY',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://dev.renren.com/',
    ),
    'RenrenSecret'=>array(
        'title'=>'人人APPSECRET',
        'type'=>'text',
        'value'=>'',
        'tip'=>'申请地址：http://dev.renren.com/',
    ),

);
