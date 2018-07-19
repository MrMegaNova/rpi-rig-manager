<?php
 if (isset($_POST['Submit']))
{
	print "Start script    ";
	$rig = $_POST['rig01'];
	print $rig
	//shell_exec('echo $_POST['rig01'] >> log.txt');
	print "    Stop script";

}
?>


<!DOCTYPE html>
<head>
<title>Test</title>
</head>
<body>
	<body>
            <form method="post">
            	<input type=hidden name="rig" value="rig01"/>
            	<input type="Submit" name="Submit" id="Submit" value="Restart" class="btn btn-sm btn-block btn-outline-primary">let's go</button>
          </form>
    </body>
</html>
</body>