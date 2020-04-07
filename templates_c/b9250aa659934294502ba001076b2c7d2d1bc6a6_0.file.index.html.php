<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-07 20:33:32
  from 'C:\Users\sad\Desktop\codeBlock\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8c731c194cd2_09955889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9250aa659934294502ba001076b2c7d2d1bc6a6' => 
    array (
      0 => 'C:\\Users\\sad\\Desktop\\codeBlock\\app\\views\\index.html',
      1 => 1586257569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.html' => 1,
  ),
),false)) {
function content_5e8c731c194cd2_09955889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\sad\\Desktop\\codeBlock\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:common/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="container">
    <div id="content">
        <div id="con-left">
            <div id="cate">
                <div id="cate_list">
                    <div class="cate_item cate_active" data-id="0">全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cates']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="cate_item" data-id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div id="con-right">
            <div id="search">
                <input type="text" placeholder="在这里查找你想要的片段">
                <button>搜</button>
            </div>
            <div id="code-list">
                <div id="code-bar">
                    <span>共 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 条记录</span>
                </div>
                <div class="ccn2a">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codes']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="code-item">
                        <div class="code-header" code-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            <div class="code-t">
                                <a href="#">
                                    <h4 class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                                </a>
                            </div>
                            <div class="copy">
                                <span class="edit_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-bianji"></use>
                                </svg></span>
                                <span class="del_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-shanchu"></use>
                                </svg></span>
                                <span class="copy_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-fuzhi"></use>
                                </svg></span>
                            </div>
                        </div>

                        <div class="code-box">
                            <pre><code class="lang-javascript"><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</code></pre>
                        </div>
                        <pre id="code-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="display: none;position: absolute;"><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</pre>
                        <div class="code-meta">
                            <span><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-daima1"></use>
                                </svg><?php echo $_smarty_tpl->tpl_vars['item']->value['catename'];?>
</span>
                            <span><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-shijian"></use>
                                </svg><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],'%Y-%m-%d %H:%M');?>
</span>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
            </div>
            <button type="button" id="next_page" style="width: 140px;margin: 20px auto;display: block;" class="el-button">
                <span>加载下一页</span>
            </button>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="//at.alicdn.com/t/font_1737673_ertf6urwomn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function copyTextToClipboard(text) {
    var textArea = document.createElement("textarea")

    textArea.style.position = 'fixed'
    textArea.style.top = 0
    textArea.style.left = 0
    textArea.style.width = '2em'
    textArea.style.height = '2em'
    textArea.style.padding = 0
    textArea.style.border = 'none'
    textArea.style.outline = 'none'
    textArea.style.boxShadow = 'none'
    textArea.style.background = 'transparent'
    textArea.value = text

    document.body.appendChild(textArea)

    textArea.select()

    try {
      var msg = document.execCommand('copy') ? '成功' : '失败'
    } catch (err) {
      alert('您的浏览器复制失败，请手动复制');
    }

    document.body.removeChild(textArea)
}
    function getdate(time) {
        if (time < 1086238690995)
            var now = new Date(time * 1000),
                y = now.getFullYear(),
                m = now.getMonth() + 1,
                d = now.getDate();
        return y + "-" + (m < 10 ? "0" + m : m) + "-" + (d < 10 ? "0" + d : d) + " " + now.toTimeString().substr(0, 5);
    }

    function getAjax(url) {
        $.ajax({
            type: "get",
            url: url,
            success: function (res) {
                if (res.code == 200) {
                    var data = res.data.res;
                    var html = "";
                    if(newcate){
                        $("#code-bar").html("<span>共 " + res.data.count + " 条记录</span>")
                    }
                    data.forEach(item => {
                        item.ctime = getdate(item.ctime);
                        item.code = hljs.highlightAuto(item.code).value;
                        html += `<div class="code-item">
                            <div class="code-header" code-id=${item.id}>
                                <div class="code-t">
                                    <a href="#"><h4 class="title">${item.title}</h4></a>
                                </div>
                                <div class="copy">
                                    <span class="edit_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-bianji"></use>
                                </svg></span>
                                <span class="del_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-shanchu"></use>
                                </svg></span>
                                <span class="copy_code"><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-fuzhi"></use>
                                </svg></span>
                                </div>
                            </div>

                            <div class="code-box">
                                <pre><code class="lang-javascript">${item.code}</code></pre>
                            </div>
                            <pre id="code-${item.id}" style="display: none;position: absolute;">${item.code}</pre>

                            <div class="code-meta">
                                <span><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-daima1"></use>
                                </svg>${item.catename}</span>
                                <span><svg class="icon" aria-hidden="true">
                                    <use xlink:href="#icon-shijian"></use>
                                </svg>${item.ctime}</span>
                            </div>
                        </div>`
                    });
                    if(newcate){
                        $(".ccn2a").html(html);
                    }else{
                        $(".ccn2a").html($(".ccn2a").html()+html);
                        $("#next_page span").html("加载下一页");
                        if(res.data.res.length < 10){
                            $("#next_page").hide();
                        }
                    }

                } else {
                    console.log(res);
                }
                hljs.initHighlightingOnLoad();
            }
        })
    }

    var cateid = 0;
    var page = 0;
    var newcate = true;
    hljs.initHighlightingOnLoad();
    $(".cate_item").click(function () {
        $("#search input").val("");
        $(".cate_item").removeClass("cate_active");
        $(this).addClass("cate_active");
        page = 0;
        newcate = true;
        $("#next_page").show();
        cateid = $(this).attr("data-id");

        $(".ccn2a").html("<p style='color:#6a6a6a'>加载数据中...</p>");
        getAjax("/index.php/code/select/cateid/" + cateid + "/page/" + page);
    })

    $("#search button").click(function(){
        var keyword = $("#search input").val();
        if(keyword!=""&&keyword!=null){
            $(".ccn2a").html("<p style='color:#6a6a6a'>加载数据中...</p>");
            getAjax("/index.php/code/search/keyword/"+keyword);
        }
    })

    $("#next_page").click(function(){
        $(this).find("span").html("加载...")
        page++;
        newcate = false;
        getAjax("/index.php/code/select/cateid/" + cateid + "/page/" + page);
        
    })

    $("body").on("click",".del_code",function(){
        var code_id = $(this).parent().parent().attr("code-id");
        $.get("/index.php/code/del/id/"+code_id,res => {
            $(this).parent().parent().parent().remove();
        })
    })
    $("body").on("click",".edit_code",function(){
        var code_id = $(this).parent().parent().attr("code-id");
        window.location.href = "/index.php/code/index/codeid/"+code_id;
    })
    $("body").on("click",".copy_code",function(){
        var code_id = $(this).parent().parent().attr("code-id");
        copyTextToClipboard($("#code-"+code_id).html());
    })
    
<?php echo '</script'; ?>
><?php }
}
