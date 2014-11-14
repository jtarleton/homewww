<html>
<head>
</head>
<body>
<h1>Scooby Setup</h1>

<?php if(!isset($_GET['action'])): ?>
<p>Thank you for choosing to install Scooby!</p>

<p>First, we need to verify your system meets the minimum requirements for installation. Please ensure MongoDB is installed on your system and your web server is properly configured.</p>

<p>You may click "check system" to proceed.</p>
<form action="" method="get">
<input type="hidden" name="action" value="step1">
<input type="submit" value="Check System"></input></form>
<?php else: ?>
<?php 

switch($_GET['action']):
	case 'step1':
		echo 'Checking system...'; 


 echo '<p>Systems Requirements</p>
<table style="width:100%; table-layout:fixed;border:1px solid crimson;border-collapse:collapse;">
<tr><th>System Requirement</th><th>Your System</th><th>Status</th></tr>
<tr><td>Linux</td><td>'; 

echo php_uname();  

echo '</td><td class="ok">OK</td></tr>
<tr><td>PHP 5.4</td><td>'; 

echo phpversion(); 

echo '</td><td class="ok">OK</td></tr>
<tr><td>PHP Mongo Driver 1.4.4</td><td>'; 

echo var_export(extension_loaded('Mongo'), true ) ; 

echo '</td><td class="ok">OK</td></tr>
<tr><td>Apache 2.2</td><td>'; 

echo apache_get_version(); 

echo '</td><td class="ok">OK</td></tr>
<tr><td>Apache Module Rewrite</td><td>'; 

echo implode(' ', apache_get_modules()); 

echo '</td><td class="ok">OK</td></tr><tr>
<td>Is Mongo Running?</td>
<td>';

$mc = MongoClient::getConnections(); 

echo implode(' ',$mc[0]['server']);

echo shell_exec('ps -ef | grep mongo '); 

echo '</td>
<td class="">'; 

echo (!empty($mc)) ?  'OK'. $mc[0]['server'] : 'No'; 

echo '
</td>
</tr>


</table>';





		echo '<form action="" method="get">
<input type="hidden" name="action" value="step2">
<input type="submit" value="Proceed"></input></form>';
		break;
	case 'step2':
		echo 'Step2<form action="" method="get">
<input type="hidden" name="action" value="step3">
<input type="submit" value="Proceed"></input></form>';
		break;
	case 'step3':
		echo 'Step3<form action="" method="get">
<input type="hidden" name="action" value="step4">
<input type="submit" value="Proceed"></input></form>';
		break;
	case 'step4':
		echo 'Step4<form action="" method="get">
<input type="hidden" name="action" value="end">
<input type="submit" value="Proceed"></input></form>';
		break;
	case 'end':
		echo 'All done! <a href="welcome">Go to welcome page</a>';
		break;
	default: 
		break;
endswitch;
?>
<?php endif; ?>
</body>
</html>