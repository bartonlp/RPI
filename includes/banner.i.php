<?php

return <<<EOF
<header>
  <!-- bartonphillips.org:8080/includes/banner.i.php -->
  <a href="http://www.$this->siteDomain">
    $image1</a>
  $image2
  $mainTitle
<noscript>
<p style='color: red; background-color: #FFE4E1; padding: 10px'>
$image3
Your browser either does not support <b>JavaScripts</b> or you have JavaScripts disabled, in either case your browsing
experience will be significantly impaired. If your browser supports JavaScripts but you have it disabled consider enabaling
JavaScripts conditionally if your browser supports that. Sorry for the inconvienence.</p>
</noscript>
</header>
EOF;
