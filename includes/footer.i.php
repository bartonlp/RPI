<?php

return <<<EOF
<footer>
  <!-- bartonphillips.org:8080/includes/footer.i.php -->
  $b->aboutwebsite
  <div id="address">
    <address>
      $b->copyright
      $b->address
      $b->emailAddress
    </address>
  </div>
  $b->msg
  $b->msg1
  $counterWigget
  $lastmod
  $b->msg2
</footer>
$geo
$b->script
$b->inlineScript
</body>
</html>
EOF;
