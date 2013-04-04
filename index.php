<html>
<head>
<title>Lauren's PHP Page</title>
</head>
<body>
<?php echo '<p>Welcome to Lauren\'s page.</p>';
$browser = escapeshellcmd($_SERVER["HTTP_USER_AGENT"]);
shell_exec("python ../cgi-bin/pscript1.py");
$output = shell_exec("python ../cgi-bin/pscript2.py");
echo "<pre>";
echo "The total number of visitors so far: ";
echo $output;
$comp = shell_exec("echo $browser | grep -P -i -o '\s\(.*[0-9]\)'");
echo "The computer you are using now is: ";
echo $comp;

echo "</pre>";
 ?>
</body>
</html>
