<?php
$t_msg = $_GET['msg'];
$msg = $t_msg;
if ($msg == "")[
    $msg="二维码已经过安全认证，请放心扫描"
]
?>



<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <link rel="icon" href="./assets/img/jhx/jhx.svg">
    <title>景叶联系方式</title>
    <link href="./assets/css/lx.css" rel="stylesheet">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

</head>

<body>
    <div id="warpper">
        <div id="safe">
            <img src="./assets/img/safe/icon_safe.png">
            <span><?php echo $msg;?></span>
        </div>
        <div id="qrcode_name">
            <span>请添加我联系方式</span>
        </div>
        <div id="qrcode">
            <div id="imgwarp" class="desc">

                <img id="qrImg" alt="xrwx二维码" src="./assets/img/qrcode/wx.jpg">
            </div>
            <div id="imgwarp" class="desc showpc-qq">

                <a>QQ: <font color="green">172764339</font> </a>
            </div>
        </div>
        <div id="handle">
            <p id="scan_tips" style="font-size: 1.1rem;">长按识别二维码</p>
        </div>
        <div id="tips">
            <p>WX: <font color="red">jinghx_cn</font>  QQ: <font color="green">172764339</font></p>
        </div>




        <div id="infos " style="display: none; ">
            <p id="footer ">由景衡溪提供运营支持</p>
        </div>
    </div>
</body>


<!-- Mirrored from qq.wpon.cn/?msg=%e6%80%9d%e8%b7%af%e7%90%86%e6%b8%85%ef%bc%8c%e5%bc%80%e5%a7%8b%e9%97%ae%e7%ad%94 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 07:27:11 GMT -->
</html>