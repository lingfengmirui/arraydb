<?php
namespace lingfengmirui\arraydb;

class arrSort{

    public function sortRule($arr, $sort = '',$order = 'DESC')
    {
        $tag = array_column($arr,  $sort);
        array_multisort($tag, $order == 'DESC' ? SORT_DESC : SORT_ASC,$arr);
        return $arr;
    }

}