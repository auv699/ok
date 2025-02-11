<!-- 一键粘贴功能需要https才可以使用 -->
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
   <meta charset="utf-8"> 
   <title>蜜语星球 - 蜜语翻译器,文字加密通话,一键转换,蜜语密码-网站标题</title>
   <meta name="keywords" content="蜜语,蜜语翻译,在线加密,蜜语密码,加密通话,在线转码解码">
    <meta name="description" content="可以将文字、字母、数字、代码、标点符号等内容转换成新的文字形式，通过简单的文字以不同的排列顺序来表达不同的内容！">
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">  
   <link rel="stylesheet" href="./assets/css/materialdesignicons.min.css">  
   <link rel="stylesheet" href="./assets/css/style.min.css">  
   <link href="//s1.pstatp.com/cdn/expire-1-M/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="//s1.pstatp.com/cdn/expire-1-M/toastr.js/latest/css/toastr.min.css">
   <script src="//s1.pstatp.com/cdn/expire-1-M/jquery/1.12.4/jquery.min.js"></script>
   <script src="//s1.pstatp.com/cdn/expire-1-M/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
   body{
      background: #fff;
   }
   hr{
      border-top-color:#00bcd4;
   }
   .rollbar {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 999;
    display: none;
  }
.rollbar a {
    position: relative;
    z-index: 2;
    display: block;
    height: 50px;
    border-radius: 2px;
    background-color: #666;
    color: #fff;
}
.rollbar a:hover {
    color: red;
}
.rollbar .fa {
    line-height: 50px;
    font-size: 34px;
}
.rollbar li {
    position: relative;
    margin-top: 5px;
    text-align: center;
    opacity: .4;
    filter: alpha(opacity=40);
}
.rollbar ul {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 50px;
}
</style>
<body id="bodyColor" data-theme="default">
<div class="container" style="padding-top: 10px">
   <center>
       <a href="http://wwa.umav.cn/"> 
      <img src="https://umwx.oss-cn-shenzhen.aliyuncs.com/wp-content/uploads/2022/08/93f0c56975b0.jpg" width="80%">
      </a>
   </center>
   <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li class="active" style="width: 33%;" align="center">
         <a href="#jm" id="home-tab" role="tab" data-toggle="tab">蜜语</a>
      </li>
      <li class="nav-item" style="width: 33%;" align="center">
        <a data-toggle="tab" href="#py">破译蜜语</a>
      </li>
      <li class="nav-item" style="width: 33%;" align="center">
        <a data-toggle="tab" href="#about">关于蜜语</a>
      </li>
    </ul>

<div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="jm">
         <br>
          <div class="input-group m-b-10">
            <span class="input-group-addon">蜜语方言</span>
            <select class="form-control" id="miyu" name="example-select" size="1">
                <option value="dw">动物</option>
                <option value="sg">水果</option>
                <option value="bq">表情</option>
                <option value="ss">手势</option>
                <option value="my">猫语</option>
                <option value="sy">兽语</option>
                <option value="gy">狗语</option>
                <option value="ay">爱语</option>
                <option value="fh">符号</option>
                <option value="sz">数字</option>
                <option value="zm">字母</option>
              </select>
          </div>

           <div class="form-group has-">
             <textarea class="form-control" rows="5" id="jmContent" placeholder="请输入想要加蜜的内容..."></textarea>
           </div>
          <div class="example-box" align="center">
            <button onclick="act('jm')" class="btn btn-label btn-pink"><label><i class="fa fa-heartbeat fa-lg"></i></label> 立即加蜜</button>
            <button onclick="qk('jmContent')" class="btn btn-label btn-danger"><label><i class="fa fa-trash-o fa-lg"></i></label> 清空内容</button>
            <button onclick="nt('jmContent')" class="btn btn-label btn-cyan"><label><i class="fa fa-hand-spock-o fa-lg"></i></label> 一键粘贴</button>
         </div>
       </div>

       <div class="tab-pane fade in" id="py">
          <br>
           <div class="form-group has-">
             <textarea class="form-control" rows="5" id="pyContent" placeholder="请输入想要破译的内容..."></textarea>
           </div>
           <div class="example-box" align="center">
               <button onclick="act('py')" class="btn btn-label btn-purple"><label><i class="fa fa-heartbeat fa-lg"></i></label> 立即破译</button>
               <button onclick="qk('pyContent')" class="btn btn-label btn-danger"><label><i class="fa fa-trash-o fa-lg"></i></label> 清空内容</button>
               <button onclick="nt('pyContent')" class="btn btn-label btn-cyan"><label><i class="fa fa-hand-spock-o fa-lg"></i></label> 一键粘贴</button>
            </div>
       </div>

       <div class="tab-pane fade in" id="about">
         <blockquote class="blockquote">
            <p>蜜语可以将文字、字母、数字、代码、标点符号等内容转换成新的文字形式，通过简单的文字以不同的排列顺序来表达不同的内容！</p>
            <footer>网站</footer>
          </blockquote>
       </div>
</div>
</div>

<div class="rollbar" style="display: block;">
  <ul>
    <li><a onclick="cog()"><i class="fa fa-cog"></i></a></li>
  </ul>
</div>


<script src="//s1.pstatp.com/cdn/expire-1-M/layer/2.3/layer.js"></script>
<script src="//s1.pstatp.com/cdn/expire-1-M/clipboard.js/1.7.1/clipboard.min.js"></script>
<script src="//s1.pstatp.com/cdn/expire-1-M/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//s1.pstatp.com/cdn/expire-1-M/toastr.js/latest/toastr.min.js"></script>
<script>
$(document).ready(function(){
   $('#bodyColor').attr('data-theme',$.cookie('pifu'));
   $('#miyu').val($.cookie('mrfy'));
   var clipboard = new Clipboard('#copyBtn');
   clipboard.on('success', function (e) {
      toastr.success('复制成功！', '友情提示');
      layer.close(layer.index);
   });
   clipboard.on('error', function (e) {
      toastr.error('复制失败，请长按链接后手动复制', '友情提示');
      layer.close(layer.index);
   });
});

   function qk(act){
      $('#'+act).val('');
   }

   function nt(act){
      navigator.clipboard.readText().then(text => {
         $('#'+act).val(text);
      })
      .catch(err => {
        toastr.error('权限不足呜呜呜', '友情提示');
      });
   }

   function cog(){
      layer.alert(1,{
        title:'页面配置',
        shadeClose:true,
        btn:0,
        skin:'layui-layer-molv',
        content:'<div class="input-group m-b-10"><span class="input-group-addon">默认方言</span><select class="form-control" id="mrfy" name="example-select" size="1"><option value="dw">动物</option><option value="sg">水果</option><option value="bq">表情</option><option value="ss">手势</option><option value="my">猫语</option><option value="sy">兽语</option><option value="gy">狗语</option><option value="ay">爱语</option><option value="fh">符号</option><option value="sz">数字</option><option value="zm">字母</option></select></div>'+
        '<center><div class="form-group"><label class="btn-block">暗黑模式</label><label class="lyear-switch switch-solid switch-dark"><input type="checkbox" id="pifu" checked><span></span></label></div>'+
        '<button class="btn btn-label btn-success" onclick="cogOk();"><label><i class="fa fa-cog fa-lg"></i></label> 保存配置</button><center>'
      });
      $('#mrfy').val($.cookie('mrfy'));
      if($.cookie('pifu')=='default'){
        $('#pifu').attr('checked',false);
      }
   }

   function cogOk(){
     mrfy = $('#mrfy').val();
     pifu = document.getElementById("pifu").checked;
     $.cookie('mrfy',mrfy);
     if(pifu){
      $.cookie('pifu','dark');
     }else{
      $.cookie('pifu','default');
     }
     $('#bodyColor').attr('data-theme',$.cookie('pifu'));
     $('#miyu').val($.cookie('mrfy'));
     layer.msg('保存配置成功',{icon:6});
   }

   function htmlspecialchars(str) {       
        var s = "";  
        if (str.length == 0) return "";  
        for   (var i=0; i<str.length; i++)  
        {  
            switch (str.substr(i,1))  
            {  
                case "<": s += "&lt;"; break;  
                case ">": s += "&gt;"; break;  
                case "&": s += "&amp;"; break;  
                case " ":  
                    if(str.substr(i + 1, 1) == " "){  
                        s += " &nbsp;";  
                        i++;  
                    } else s += " ";  
                    break;  
                case "\"": s += "&quot;"; break;  
                // case "\n": s += "<br>"; break; 
                default: s += str.substr(i,1); break;  
            }  
        }  
        return s;  
    }


   function act(act){
      miyu = $('#miyu').val();
      if(act=='jm'){
         content = $('#jmContent').val();
         name = '加密';
      }else if(act=='py'){
         content = $('#pyContent').val();
         name = '破译'
      }
      if(!content){
         toastr.warning('亲亲请先输入内容哦！', '友情提示');
         return false;
      }
      var load = layer.load({time:false});
      $.ajax({
         url: "./ajax.php?act="+act,
         data: {content,miyu},
         type: "POST",
         dataType: "json",
         success:function(data){
            if(data.content!='' && data.content!='\u0000' && data.content!='\u000f'){
               area = [$(window).width() > 600 ? '600px' : '90%', $(window).height() > 550 ? '550px' : '90%'];
               layer.open({
                  title:name+'后的内容',
                  shadeClose:true,
                  btn:false,
                  area: area,
                  skin: 'layui-layer-molv',
                  content:'<div style=""><center><button id="copyBtn" data-clipboard-text="'+htmlspecialchars(data.content)+'" class="btn btn-success btn-xs">复制 <font color=""><b>'+name+'</b></font> 内容</button><hr><code>'+htmlspecialchars(data.content)+'</code><hr><a href="http://wwa.umav.cn/"> <img src="https://umwx.oss-cn-shenzhen.aliyuncs.com/wp-content/uploads/2022/08/93f0c56975b0.jpg" width="100%"></a></center></div>'
               });
            }else{
              toastr.warning('呜呜呜,这应该不是我们星球的语言吧...', '友情提示');
            }
            layer.close(load);
         },
         error:function(data){
            layer.close(load);
            toastr.warning('呜呜呜,这应该不是我们星球的语言吧...', '友情提示');
         }
         
      });
   }
</script>
</body>
</html>
</body>
</html>