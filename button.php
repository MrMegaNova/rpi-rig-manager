<?php
 if (isset($_POST['rig']))
{
	print "\nStart script    ";
	$rig = $_POST['rig'];
	shell_exec("./test.sh '".$rig."'");
	print "\nStop script";

}
?>


<!DOCTYPE html>
<head>
<title>Test</title>
</head>
<body>
	<body>
            <form method="post">
            	<input type="Submit" name="rig" id="Submit" value="Rig00 start-stop" class="btn btn-sm btn-block btn-outline-primary">let's go</button>
            	<input type="Submit" name="rig" id="Submit" value="rig01" class="btn btn-sm btn-block btn-outline-primary">let's go</button>
            	<input type="Submit" name="rig" id="Submit" value="Rig02" class="btn btn-sm btn-block btn-outline-primary">let's go</button>
          </form>
    </body>
</html>
</body>