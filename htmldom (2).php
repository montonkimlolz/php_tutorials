<?php 
require 'simplehtmldom_1_8_1/simple_html_dom.php';

$html = file_get_html('https://www.prcpassers.com/show-passers.php?prcp_exam=let_elem.201809');

$pre = $html->find('pre');
foreach($pre as $p){
 echo $p;
}
?>