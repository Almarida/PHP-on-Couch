<html>
<head>
<?php
echo '<title>Condors Castle</title>';
?>
</head>
<body>
<?php
       echo '<p>This content was generated by PHP and condor</p>';
?>
<p>And this content is static HTML. Screwn you lawrence I'm not stupid.</p>
</body>
</html>

<?php
echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="/images/image1.png" width="280" height="125" title="Logo of a company" alt="Logo of a company" />

</html>
';
?>

<?php
$myCluster = new CouchbaseCluster('couchbase://10.1.0.4');
$myCluster = new CouchbaseCluster();
$myBucket = $myCluster->openBucket('default');
?>
