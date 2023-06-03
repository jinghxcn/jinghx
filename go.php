<?php
$t_url = $_GET['url'];
$url = $t_url;
if ($url == "")[
    $url="https://jinghx.cn"
]
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="report" content="{&quot;spm&quot;:&quot;1032.2214&quot;}">
    <meta name="referrer" content="always">
    <link rel="shortcut icon" href="./assets/img/jhx/jhx.svg">
    <link rel="icon" href="./assets/img/jhx/jhx.svg">
    <title>景衡溪-安全中心</title>
    <style>
        html,
        body {
            background: #F3F4F5;
            font-family: PingFang SC, Hiragino Sans GB, Arial, Microsoft YaHei, Verdana, Roboto, Noto, Helvetica Neue, sans-serif;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .content {
            padding-top: 220px;
            width: 450px;
            margin: auto;
            word-break: break-all;
        }

        .content .logo-img img {
            display: block;
            width: 175px;
            height: 48px;
            margin: auto;
            margin-bottom: 16px;
        }

        .content .loading-item {
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid #E1E1E1;
        }

        .content .flex {
            display: flex;
            align-items: center;
        }

        .content .flex-end {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .content .loading-activity {
            display: block;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #4049f0;
            font-size: 14px;
        }

        .content .tip1 {
            background: #F0F9EA;
        }

        .content .tip2 {
            background: #FDF5E6;
        }

        .content .tip3 {
            background: #FEF0F0;
        }

        .content .ApesarehappyBox {
            flex: 1;
            display: flex;
        }

        .content .Apesarehappy:hover {
            text-decoration: revert;
        }

        .content .Apesarehappy {
            display: flex;
            align-items: center;
            font-size: 14px;
            font-family: PingFangSC-Regular, PingFang SC;
            font-weight: 400;
            color: #68C23B;
        }

        .content .Apesarehappy img {
            width: 24px;
            height: 24px;
            margin-right: 4px;
        }

        .content .loading-color1 {
            color: #267DCC;
        }

        .content .loading-color2 {
            color: #FC5531;
        }

        .content .loading-tip {
            padding: 12px;
            margin-bottom: 16px;
            border-radius: 4px;
        }

        .content .loading-topic {
            font-size: 14px;
            color: #222226;
            line-height: 24px;
            margin-bottom: 24px;
        }

        .content .loading-img {
            width: 24px;
            height: 24px;
        }

        .content .loading-btn {
            white-space: nowrap;
            font-size: 14px;
            color: #FC5531;
            border: 1px solid #FC5531;
            display: inline-block;
            box-sizing: border-box;
            padding: 6px 18px;
            border-radius: 18px;
            margin-left: 8px;
        }

        .content .loading-btn-github {
            width: 121px;
            background: #FC5531;
            color: #fff;
        }

        .content .loading-text {
            font-size: 16px;
            font-weight: 600;
            color: #222226;
            line-height: 22px;
            margin-left: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .codyUrl {
            padding: 4px 10px;
            background: #000;
            border-radius: 4px;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            font-size: 14px;
            display: none;
        }

        #adCody {
            width: 110px;
            font-size: 14px;
            color: #CCCCD8;
            cursor: pointer;
        }

        #adCody:hover {
            text-decoration: underline;
        }

        @media (max-width: 450px) {
            .content {
                padding-top: 120px;
                width: 94%;
            }
        }

        #csdn-toolbar {
            width: 0;
            height: 0;
            display: none
        }
    </style>
    <style type="text/css">
        #_copy {
            align-items: center;
            background: #4494d5;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            display: flex;
            font-size: 13px;
            height: 30px;
            justify-content: center;
            position: absolute;
            width: 60px;
            z-index: 1000
        }

        #select-tooltip,
        #sfModal,
        .modal-backdrop,
        div[id^=reader-helper] {
            display: none !important
        }

        .modal-open {
            overflow: auto !important
        }

        ._sf_adjust_body {
            padding-right: 0 !important
        }

        .super_copy_btns_div {
            position: fixed;
            width: 154px;
            left: 10px;
            top: 45%;
            background: #e7f1ff;
            border: 2px solid #4595d5;
            font-weight: 600;
            border-radius: 2px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, PingFang SC, Hiragino Sans GB, Microsoft YaHei, Helvetica Neue, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
            z-index: 5000
        }

        .super_copy_btns_logo {
            width: 100%;
            background: #4595d5;
            text-align: center;
            font-size: 12px;
            color: #e7f1ff;
            line-height: 30px;
            height: 30px
        }

        .super_copy_btns_btn {
            display: block;
            width: 128px;
            height: 28px;
            background: #7f5711;
            border-radius: 4px;
            color: #fff;
            font-size: 12px;
            border: 0;
            outline: 0;
            margin: 8px auto;
            font-weight: 700;
            cursor: pointer;
            opacity: .9
        }

        .super_copy_btns_btn:hover {
            opacity: .8
        }

        .super_copy_btns_btn:active {
            opacity: 1
        }
    </style>
</head>

<body>
    <div id="linkPage" class="link-page">
        <div class="content">
            <div class="loading-item loading-others">
                <div class="flex loading-tip tip2"> <img class="loading-img" src="./assets/img/safe/icon_safe.png"
                        alt="">
                    <div class="loading-text">请注意您的账号和财产安全</div>
                </div>
                <div class="loading-topic"><span>您即将离开景衡溪，去往：</span><a class="loading-color2"><?php echo $url;?></a><br><span>免责声明：本站外所有内容与本站无关</span>
                </div>

                <div class="flex-end"><a class="loading-btn" id="apesar-loading" href="<?php echo $url;?>" target="_self"
                        data-report-click="{&quot;spm&quot;:&quot;1032.2214.3001.5250&quot;}">继续</a> </div>
            </div>
        </div>
    </div>
</body>
</html>





