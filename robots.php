<?php
$page = file_get_contents("https://bartonlp.com/otherpages/robots.eval");
return eval("?>". $page);
