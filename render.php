<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/9/14
 * Time: 14:55
 */


$file_list=[
  'index.html',
  'prices.html'
];


$replace=[
    'title'=>'WAF主控系统',
    'domain'=>'www.wafsys.com',
    'keywords'=>'waf主控,cdn,cdn主控系统,cdn主控,fikker主控,fikker,fikker系统,cdn系统',
    'description'=>'WAF主控系统是一款针对fikker CDN的节点控制系统，全新的系统架构和全新的蚂蚁金服UI设计，让您有新一般的体验。'
];

foreach ($file_list as $html){
    $str=file_get_contents($html);


    foreach ($replace as $k=>$v){
        $str=str_replace('{{'.$k.'}}',$v,$str);
    }

    file_put_contents($html,$str);
}
