<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>BaxLib-Microservice</TITLE>
	</HEAD>
	<BODY>
		<?php
			if(isset($_POST["content"]))
			{
				$fHandle=fopen("tmp.content",'a');
					fwrite($fHandle,$_POST["content"]);
					fclose($fHandle);
				passthru("python main.py analyze tem.content");
				$resHandle=fopen("res.log",'r');
					fread($resHandle);
					fclose($resHandle);
				var_dump($resHandle);
			}
			else
			{
				print('{"status":"arg_error"}');
			}
		?>
	</BODY>
</HTML>
