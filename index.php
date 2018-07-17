<?php
include("./includes/common.php");
function get_curl($url, $post = 0, $referer = 0, $cookie = 0, $header = 0, $ua = 0, $nobaody = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $klsf[] = "Accept:*/*";
    $klsf[] = "Accept-Encoding:gzip,deflate,sdch";
    $klsf[] = "Accept-Language:zh-CN,zh;q=0.8";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $klsf);
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($header) {
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
    }
    if ($cookie) {
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }
    if ($referer) {
        if ($referer == 1) {
            curl_setopt($ch, CURLOPT_REFERER, "http://m.qzone.com/infocenter?g_f=");
        } else {
            curl_setopt($ch, CURLOPT_REFERER, $referer);
        }
    }
    if ($ua) {
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    } else {
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.0.4; es-mx; HTC_One_X Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0');
    }
    if ($nobaody) {
        curl_setopt($ch, CURLOPT_NOBODY, 1);//主要头部
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);//跟随重定向
    }
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ret = curl_exec($ch);
    curl_close($ch);
    return $ret;
}
function get_curl_self($url, $post = 0)
{
    $ch = curl_init();
	$urlarr = parse_url($url);
	if($urlarr['host']==$_SERVER['HTTP_HOST'] && !ini_get('acl.app_id')){
		$url=str_replace('http://'.$_SERVER['HTTP_HOST'].'/','http://127.0.0.1:80/',$url);
		$url=str_replace('https://'.$_SERVER['HTTP_HOST'].'/','https://127.0.0.1:443/',$url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: '.$_SERVER['HTTP_HOST']));
	}
    curl_setopt($ch, CURLOPT_URL, $url);
	if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ret = curl_exec($ch);
    curl_close($ch);
    return $ret;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $conf['sitename']; ?></title>
             <meta name="keywords" content="<?php echo $conf['keywords']; ?>">
            <meta name="description" content="<?php echo $conf['description']; ?>">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="favicon.ico">
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&spec=100" alt="" /></span>
							<h1><?php echo $conf['liuyan']; ?></h1>
                                                                  <?php echo $conf['gg']; ?>
						</header>
						
<footer>
							<ul class="icons">
							    <li><a target="_blank" href="<?php echo $conf['ms']; ?>" class="fa-home">首页</a></li>
							    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']; ?>&site=qq&menu=yes" class="fa-qq"><?php ECHO $Latewish["wangming"]?></a></li>
								<li><a target="_blank" href="<?php echo $conf['api']; ?>" class="fa-weibo">微博</a></li>
							</ul>
						</footer>
					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <?php echo $conf['copy']; ?>: <a href="/"><?php echo $conf['panel']; ?></a></li>
						</ul>
					</footer>
<embed src="<?php echo $conf['music']; ?>" width="0" height="0" ><!-- 音乐播放器 -->
			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
			
	</body>
</html>