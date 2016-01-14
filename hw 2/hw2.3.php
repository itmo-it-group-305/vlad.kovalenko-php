$arr = [1,2,3,8,14,89,45];
    $len = count($arr);
    $newarr =[];
    for($i=0; $i<$len; $i++){
            $newarr[$i]=$arr[$len-$i-1];
        }
    var_dump($arr);
    var_dump($newarr);