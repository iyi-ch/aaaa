<h2>威力彩號</h2>
<!-- <?php
        echo "<h3>第一區<h3/>";
        echo rand(1, 38) . ',';
        echo rand(1, 38) . ',';
        echo rand(1, 38) . ',';
        echo rand(1, 38) . ',';
        echo rand(1, 38) . ',';
        echo rand(1, 38) . ',';
        // 1-38的亂數

        echo "<h3>第二區<h3/>";
        echo rand(1, 8);

        ?>
 -->



<?php
echo "<h3>第一區<h3/>";
$lotto = [];

while (count($lotto) < 6) {
    $num = rand(1, 38);
    if (!in_array($num, $lotto)) {
        $lotto[] = $num;
    }
}
echo "<br>開出順序:";
for ($i = 0; $i < count($lotto); $i++) {
    echo $lotto[$i] . ";";
}

echo "<br>大小順序:";
sort($lotto);
for ($i = 0; $i < count($lotto); $i++) {
    echo $lotto[$i] . ";";
}

echo "<h3>第二區<h3/>";
echo rand(1, 8);

?>


<h3>年年年</h3>
<?php
$leapyear = [];
$start = 2022;
$end = $start + 500;
for ($year = $start; $year <= $end; $year++) {
    if (($year % 4 == 0) && ($year % 100 != 0) . ($year % 400 == 0)) {
        $leapyear[] = $year;
    }
}

$leap=1998;
if(in_array($leap,$leapyear)){
    echo $leap.'年是閏年';
}else{
    echo $leap.'年不是閏年';
}

    




