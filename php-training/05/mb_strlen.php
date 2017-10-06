<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';

echo $str.'<br/>';

print '文字数: '.mb_strlen($str).'<br/>';
print 'バイト数: '.strlen($str).'<br/>';