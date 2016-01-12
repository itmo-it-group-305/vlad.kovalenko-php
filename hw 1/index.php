//1.1
$year = 2001;
var_dump(is_int($year/4) ? "Yes" : "No");
//1.2
$date = (int)date('i');
echo($date%5<3? 'green' : 'red');
//1.3
//точки
$a = [2,7];
$b = [6,1];
$c = [12,5];
//квадраты сторон
$ab = ((pow(($a[0] - $b[0]), 2)) + (pow(($a[1] - $b[1]), 2)));
$bc = ((pow(($b[0] - $c[0]), 2)) + (pow(($b[1] - $c[1]), 2)));
$ac = ((pow(($a[0] - $c[0]), 2)) + (pow(($a[1] - $c[1]), 2)));
//стороны для формулы
$bs = 0;
$s1 = 0;
$s2 = 0;
// ищем большую сторону
if($ab>=$bc){
    if($ab>=$ac){
        $bs = $ab;
        $s1 = $ac;
        $s2 = $bc;
    } else {
        $bs = $ac;
        $s1 = $bc;
        $s2 = $ab;
    }
} else {
    if($bc>=$ac){
        $bs = $bc;
        $s1 = $ac;
        $s2 = $ab;
    } else {
        $bs = $ac;
        $s1 = $ab;
        $s2 = $bc;
    }
}
// выводим результат формулы
var_dump(($bs == ($s1 + $s2))? "Yes" : "No");