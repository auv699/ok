<?php 
	include './function.php';
	if($_GET['act'] && isset($_POST['content'])){
		if($_GET['act']=='jm'){
			$res['code'] = 1;
			$res['msg'] = '加密成功';
			$res['content'] = encode($_POST['content'],miyu($_POST['miyu']));
			exit(json_encode($res));
		}elseif($_GET['act']=='py'){
			$res['code'] = 1;
			$res['msg'] = '破译成功';
			$res['content'] = decode($_POST['content']);
			exit(json_encode($res));
		}
	}
?>