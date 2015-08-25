<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="法律咨询">
<title><?php echo $title_for_layout?> 北京鑫源商务律师网</title>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<script type="text/javascript" src="/lawyer/js/jquery.js"></script>
<script type="text/javascript" src="/lawyer/js/default.js"></script>
<?php echo $html->css("default");?>
<?php echo $scripts_for_layout ?>
</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<div id="header">
<div id="admin">
    <a href="/lawyer/pages/admin/">登录后台</a>
</div>
<div id="logo"><a href="/lawyer/">北京市鑫源商务律师网</a></div>
<div id="menu">
    <ul>
        <li class="item" id="company">
        <ul>
            <li class="show">公司业务</li>
            <li class="toshow"><a href="/lawyer/gqzr/">股权转让</a></li>
            <li class="toshow"><a href="/lawyer/gdss/">股东诉讼</a></li>
            <li class="toshow"><a href="/lawyer/gszl/">公司治理</a></li>
            <li class="toshow"><a href="/lawyer/gzcz/">改制重组</a></li>
            <li class="toshow"><a href="/lawyer/wstz/">外商投资</a></li>
            <li class="toshow"><a href="/lawyer/gsbg/">公司并购</a></li>
            <li class="toshow"><a href="/lawyer/gsss/">公司上市</a></li>
            <li class="toshow"><a href="/lawyer/gsss/">破产重整</a></li>
        </ul>
        </li>
        <li class="item" id="finance">
        <ul>
            <li class="show">金融与投资</li>
            <li class="toshow"><a href="/lawyer/smgq/">么募股权</a></li>
            <li class="toshow"><a href="/lawyer/xmrz/">项目融资</a></li>
            <li class="toshow"><a href="/lawyer/qhls/">期货律师</a></li>
            <li class="toshow"><a href="/lawyer/pjls/">票据律师</a></li>
            <li class="toshow"><a href="/lawyer/xtls/">信托律师</a></li>
            <li class="toshow"><a href="/lawyer/bsls/">保险律师</a></li>
            <li class="toshow"><a href="/lawyer/dbjf/">担保纠纷</a></li>
            <li class="toshow"><a href="/lawyer/jrfz/">金融犯罪</a></li>
        </ul>
        </li>
        <li class="item" id="ip">
        <ul>
            <li class="show">知识产权</li>
            <li class="toshow"><a href="/lawyer/zczl/">知产战略</a></li>
            <li class="toshow"><a href="/lawyer/zlls/">专利律师</a></li>
            <li class="toshow"><a href="/lawyer/sbls/">商标律师</a></li>
            <li class="toshow"><a href="/lawyer/symm/">商业秘密</a></li>
            <li class="toshow"><a href="/lawyer/zzq/">著作权</a></li>
            <li class="toshow"><a href="/lawyer/jsjrj/">计算机软件</a></li>
            <li class="toshow"><a href="/lawyer/jcdl/">集成电路</a></li>
            <li class="toshow"><a href="/lawyer/fbzdjz/">反不正当竞争</a></li>
        </ul>
        </li>
        <li class="item" id="realestate">
        <ul>
            <li class="show">工程房地产</li>
            <li class="toshow"><a href="/lawyer/jsgc/">建设工程</a></li>
            <li class="toshow"><a href="/lawyer/fckf/">房产开发</a></li>
            <li class="toshow"><a href="/lawyer/botxm/">BOT项目</a></li>
            <li class="toshow"><a href="/lawyer/dcbg/">地产并购</a></li>
            <li class="toshow"><a href="/lawyer/wyzs/">物业租售</a></li>
            <li class="toshow"><a href="/lawyer/gccb/">工程承包</a></li>
            <li class="toshow"><a href="/lawyer/tdsyq/">土地使用权</a></li>
            <li class="toshow"><a href="/lawyer/wygl/">物业管理</a></li>
        </ul>
        </li>
    </ul>
</div>
</div>

<div id="container">
    <div id="first">
    <div class="left">
       <h4>联系方式</h4> 
       <ul>
           <li>地址:</li>
           <li>邮编:</li>
           <li>电话:</li>
           <li>传真:</li>
           <li>邮箱:</li>
           <li>手机:</li>
       </ul>
    </div>
    <div class="left">
        <h4>律师团队</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="/lawyer/lawyers/more/">更多..</a></li>
        </ul>
    </div>
    <div class="left">
        <h4>律师动态</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="/lawyer/actions/more/">更多..</a></li>
        </ul>
    </div>

    <div class="left">
        <h4>成功案例</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="/lawyer/stories/more/">更多..</a></li>
        </ul>
    </div>

    <div class="left">
        <h4>法律培训</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="/lawyer/trains/more/">更多..</a></li>
        </ul>
    </div>
    <div class="left">
        <h4>友情链接</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="/lawyer/links/more/">更多..</a></li>
        </ul>
    </div>
    </div>
    <div id="center">
<!-- Here's where I want my views to be displayed -->
<?php echo $content_for_layout ?>
    </div>
    <div id="right">
        
    </div>
</div>

<!-- Add a footer to each displayed page -->
<div id="footer">
版权所有 © 北京市鑫源商务律师网
</div>

</body>
</html>
