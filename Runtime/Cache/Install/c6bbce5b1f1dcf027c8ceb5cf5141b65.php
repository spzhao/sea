<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OneThink 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/spzhao/3-onethink/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/spzhao/3-onethink/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/spzhao/3-onethink/Public/Install/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/spzhao/3-onethink/Public/static/jquery-1.10.2.min.js"></script>
        <script src="/spzhao/3-onethink/Public/static/bootstrap/js/bootstrap.js"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" target="_blank" href="http://www.onethink.cn">OneThink</a>
                    <div class="nav-collapse collapse">
                    	<ul id="step" class="nav">
                    		
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li><a href="javascript:;">环境检测</a></li>
    <li><a href="javascript:;">创建数据库</a></li>
    <li><a href="javascript:;">安装</a></li>
    <li><a href="javascript:;">完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <h1>OneThink V1.0 安装协议</h1>
    <p>版权所有 (c) 2013，上海顶想信息科技有限公司保留所有权利。</p>

    <p>感谢您选择OneThink，希望我们的努力能为您提供一个简单、强大的站点解决方案。顶想公司网址为 <a href="http://www.topthink.net" target="_blank">http://www.topthink.net</a>，产品官方网站网址为 <a href="http://www.onethink.cn" target="_blank">http://www.onethink.cn</a>。</p>

    <p>用户须知：本协议是您与顶想公司之间关于您使用OneThink产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制顶想责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款及/或顶想随时对其的修改，您应不使用或主动取消OneThink产品。否则，您的任何对OneThink的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受顶想对服务条款随时所做的任何修改。</p>

    <p>本服务条款一旦发生变更, 顶想将在产品官网上公布修改内容。修改后的服务条款一旦在网站公布即有效代替原来的服务条款。您可随时登陆官网查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，顶想公司有权随时中止或终止您对OneThink产品的使用资格并保留追究相关法律责任的权利。</p>

    <p>在理解、同意、并遵守本协议的全部条款后，方可开始使用OneThink产品。您也可能与顶想公司直接签订另一书面协议，以补充或者取代本协议的全部或者任何部分。</p>

    <p>顶想公司拥有OneThink的全部知识产权，包括商标和著作权。本软件只供许可协议，并非出售。顶想只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。</p>
	<p>OneThink遵循Apache Licence2开源协议，并且免费使用（但不包括其衍生产品、插件或者服务）。Apache Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，允许代码修改，再作为开源或商业软件发布。需要满足的条件：<br/>
1． 需要给用户一份Apache Licence ；<br/>
2． 如果你修改了代码，需要在被修改的文件中说明；<br/>
3． 在延伸的代码中（修改和有源代码衍生的代码中）需要带有原来代码中的协议，商标，专利声明和其他原来作者规定需要包含的说明；<br/>
4． 如果再发布的产品中包含一个Notice文件，则在Notice文件中需要带有本协议内容。你可以在Notice中增加自己的许可，但不可以表现为对Apache Licence构成更改。</p>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <div>
                	
    <a class="btn btn-primary btn-large" href="<?php echo U('Install/step1');?>">同意安装协议</a>
    <a class="btn btn-large" href="http://www.onethink.cn">不同意</a>

                </div>
            </div>
        </footer>
    </body>
</html>