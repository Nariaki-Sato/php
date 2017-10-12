<?php
session_start();
//セッション変数を空にする
$_SESSION = [];
//セッション情報が存在する場合には破棄
if (isset($_COOKIE[session_name()])) {
	//セッション情報のクッキーを取得
	$cparam = session_get_cookie_params();
	
	setcookie(
		session_name(),
		'',
		time() - 3600,
		$cparam['path'],
		$cparam['domain'],
		$cparam['secure'],
		$cparam['httponly']
	);
}

//セッションを破棄
session_destroy();

