<?php
/**
 * 系统设置
**/
$mod='blank';
include("../includes/common.php");
$title='偏执个人介绍管理系统';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">个人介绍页系统设置</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
         
		  <li class="active"><a href="./set.php"><span class="glyphicon glyphicon-cog"></span> 系统设置</a></li>
		  <li><a href="../"><span class="glyphicon glyphicon-home"></span> 返回首页</a></li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['submit'])) {
	$sitename=daddslashes($_POST['sitename']);
	$ym=daddslashes($_POST['ym']);
	$keywords=daddslashes($_POST['keywords']);
	$description=daddslashes($_POST['description']);
	$panel=daddslashes($_POST['panel']);
	$gg=daddslashes($_POST['gg']);
	$copy=daddslashes($_POST['copy']);
	$liuyan=daddslashes($_POST['liuyan']);
	$music=daddslashes($_POST['music']);
	$kfqq=daddslashes($_POST['kfqq']);
	$api=daddslashes($_POST['api']);
	$payid=daddslashes($_POST['payid']);
	$ms=daddslashes($_POST['ms']);
	$pwd=daddslashes($_POST['pwd']);
	$sql="update `yaofan_config` set `sitename` ='{$sitename}',`ym` ='{$ym}',`keywords` ='{$keywords}',`description` ='{$description}',`panel` ='{$panel}',`gg` ='{$gg}',`copy` ='{$copy}',`liuyan` ='{$liuyan}',`music` ='{$music}',`kfqq` ='{$kfqq}',`api` ='{$api}',`payid` ='{$payid}',`ms` ='{$ms}' where `id`='{$siteid}'";
	if(!empty($pwd))$DB->query("update `yaofan_config` set `pwd` ='{$pwd}' where `id`='{$siteid}'");
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>
<div class="panel panel-info">
<div class="panel-heading"><h3 class="panel-title">系统配置</h3></div>
<div class="panel-body">
  <form action="./set.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站名称</label>
	  <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $conf['sitename']; ?>" class="form-control" required/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">网站域名(需精确到程序运行目录)</label>
	  <div class="col-sm-10"><input type="text" name="ym" value="<?php echo $conf['ym']; ?>" class="form-control" required/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">网名</label>
	  <div class="col-sm-10"><input type="text" name="liuyan" value="<?php echo $conf['liuyan']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">关键字</label>
	  <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $conf['keywords']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站描述</label>
	  <div class="col-sm-10"><input type="text" name="description" value="<?php echo $conf['description']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">底部版权</label>
	  <div class="col-sm-10"><input type="text" name="panel" value="<?php echo $conf['panel']; ?>" class="form-control"/></div>
	</div><br/>
			<div class="form-group">
	  <label class="col-sm-2 control-label">个人说明（支持html）</label>
	  <div class="col-sm-10"><textarea class="form-control" name="gg" rows="6"><?php echo $conf['gg']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">版权前年份</label>
	  <div class="col-sm-10"><input type="text" name="copy" value="<?php echo $conf['copy']; ?>" class="form-control"/></div>
	</div><br/>

		<div class="form-group">
	  <label class="col-sm-2 control-label">按钮一超链接</label>
	  <div class="col-sm-10"><input type="text" name="ms" value="<?php echo $conf['ms']; ?>" class="form-control"/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">按钮三超链接</label>
	  <div class="col-sm-10"><input type="text" name="api" value="<?php echo $conf['api']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">ＱＱ</label>
	  <div class="col-sm-10"><input type="text" name="kfqq" value="<?php echo $conf['kfqq']; ?>" class="form-control"/></div>
	</div><br/>
<div class="form-group">
	  <label class="col-sm-2 control-label">音乐链接</label>
	  <div class="col-sm-10"><input type="text" name="payid" value="<?php echo $conf['music']; ?>" class="form-control"/></div>
	</div><br/>
	
  <form action="./set.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">后台密码设置</label>
	  <div class="col-sm-10"><input type="text" name="pwd" value="" class="form-control" placeholder="不修改请留空"/></div>
	  <br/>
	</div><br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-info form-control"/><br/>
	 </div>
	</div>
  </form>
</div>
</div>
<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default"));
}
</script>
<?php
}?>

    </div>
  </div>
