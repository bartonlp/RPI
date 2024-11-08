<?php
$_site = require_once getenv("SITELOADNAME");
//$_site->dbinfo->engine = "sqlite";
//$_site->noTrack = true;
  
SimpleErrorClass::setDevelopment(true);
error_log("/test_examples/test.php: TEST to see if error_log is working.");

$S = new SimpleSiteClass($_site);
//echo "<pre>var_dump<br>";var_dump($S); echo "</pre>";
//echo "<pre>var_export<br>". escapeltgt(var_export($S, true)). "</pre>";

//vardump("S", $S);
//varexport($S);
echo "Loader=". SITELOAD_VERSION . "<br>";
echo "Class=".$S->__toString()."<br>";
echo "SiteClass=".$S->getVersion()."<br>";
echo "Database=".Database::getVersion()."<br>";
if(str_contains(SITELOAD_VERSION, 'pdo')) {
  echo "dbPdo=".dbPdo::getVersion()."<br>";
} else {
  echo "dbMysqli=".dbMysqli::getVersion()."<br>";
}
echo "helper=".getVersion()."<br>";
