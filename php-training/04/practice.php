<?php

echo '4.1.2 if文など<br/>';

$score = rand(50,100);
echo "スコアは{$score}点です<br/>";

if ($score >= 90) {
	echo '優<br/>';
} elseif ($score >= 70) {
	echo '良<br/>';
} elseif ($score >= 50) {
	echo '可<br/>';
} else {
	echo '不可<br/>';
}

echo "<br/>===========================<br/>";

echo '4.2.2 if文など<br/>';

for ($i=1; $i <10 ; $i++) { 

}

?>


<table border="1">
<?php
for ($i = 1; $i < 10; $i++) {
  print '<tr>';
  for ($j = 1; $j < 10; $j++) {
    print '<td>' . ($i * $j) . '</td>';
  }
  print '</tr>';
}
?>
</table>

<?php 

echo "<br/>===========================<br/>";

$sum = 0;
$i = 0;
while ($i <= 100) {
  $i++;
  if ($i % 2 !== 0) { continue; }
  $sum += $i;
}
print "合計値は{$sum}です。";