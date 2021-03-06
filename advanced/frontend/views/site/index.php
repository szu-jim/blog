<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\widgets\post\PostWidget;
use yii\base\Widget;

$this->title = '博客-首页';

?>
<div class="jumbotron">
  <div class="container">
    <h1 class="text-center">叶锦俊的个人博客</h1>
    <br />
    <p class="text-center">用于个人学习</p>
  </div>
</div>

<div class="container" id="summary-container">
    <legend>热门分类 
    <span class="pull-right"><a href="" class="font-12">更多»</a></span>
    </legend>   
  <div class="row">
    <div class="col-md-4"> <img class="img-circle" src="/statics/images/img/htmlcss_img.jpg" alt="HTML/CSS">
      <h2>HTML/CSS文章</h2>
      <p><a class="btn btn-default" href="#" role="button">点击进入</a></p>
    </div>
    <div class="col-md-4"> <img src="/statics/images/img/js_img.jpg" alt="JavaScript">
      <h2>JavaScript文章</h2>
      <p><a class="btn btn-default" href="#" role="button">点击进入</a></p>
    </div>
    <div class="col-md-4"> <img src="/statics/images/img/http_img.jpg" alt="HTTP/TCP/IP">
      <h2>HTTP/TCP/IP文章</h2>
      <p><a class="btn btn-default" href="#" role="button">点击进入</a></p>
    </div>
  </div>
  
  <hr class="divider">
       
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#tab-HtmlCss" aria-controls="home" role="tab" data-toggle="tab">HTML/CSS文章</a></li>
      <li role="presentation"><a href="#tab-JavaScript" aria-controls="profile" role="tab" data-toggle="tab">JavaScript文章</a></li>
      <li role="presentation"><a href="#tab-HttpTcpIp" aria-controls="messages" role="tab" data-toggle="tab">HTTP/TCP/IP文章</a></li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="tab-HtmlCss">
        <div class="row feature">
           <div class="col-md-7">           
            <h2 class="feature-heading">HTML</h2>
            <p class="lead">超文本标记语言，标准通用标记语言下的一个应用。</p>
            <p class="lead">"超文本"就是指页面内可以包含图片、链接，甚至音乐、程序等非文字元素。</p>
            <h2 class="feature-heading">CSS</h2>
            <p class="lead">层叠样式表是一种用来表现HTML或XML等文件样式的计算机语言。CSS不仅可以静态地修饰网页，还可以配合各种脚本语言动态地对网页各元素进行格式化。</p>
            <p class="lead">CSS 能够对网页中元素位置的排版进行像素级精确控制，支持几乎所有的字体字号样式，拥有对网页对象和模型样式编辑的能力。</p>
           </div>
           <div class="col-md-5">
            <img class="feature-html img-responsive img-circle" src="/statics/images/img/htmlcss_big.jpg" alt="HTML/CSS">
           </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="tab-JavaScript">
        <div class="row feature">
           <div class="col-md-5">
             <img class="feature-js img-responsive" src="/statics/images/img/js_big.jpg" alt="JavaScript">
           </div>
           <div class="col-md-7">           
             <h2 class="feature-heading">JavaScript</h2>
             <p class="lead">JavaScript一种直译式脚本语言，是一种动态类型、弱类型、基于原型的语言，内置支持类型。它的解释器被称为JavaScript引擎，为浏览器的一部分，广泛用于客户端的脚本语言，最早是在HTML网页上使用，用来给HTML网页增加动态功能。</p>
           </div>          
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="tab-HttpTcpIp">
        <div class="row feature">
           <div class="col-md-7">           
            <h2 class="feature-heading">HTTP</h2>
            <p class="lead">超文本传输协议是互联网上应用最为广泛的一种网络协议。所有的WWW文件都必须遵守这个标准。设计HTTP最初的目的是为了提供一种发布和接收HTML页面的方法。</p>
            <h2 class="feature-heading">TCP/IP</h2>
            <p class="lead">TCP/IP协议，又名网络通讯协议，是Internet最基本的协议、Internet国际互联网络的基础，由网络层的IP协议和传输层的TCP协议组成。TCP/IP 定义了电子设备如何连入因特网，以及数据如何在它们之间传输的标准。</p>
           </div>
           <div class="col-md-5">
            <img class="feature-http img-responsive" src="/statics/images/img/http_big.jpg" alt="HTTP/TCP/IP">
           </div>
        </div>
      </div>
    </div>

    <hr class="divider">

    <div class="col-lg-9">
        <?=PostWidget::widget(['limit'=>5])?>
    </div>
</div>
  
  <hr class="divider">
  
</div>