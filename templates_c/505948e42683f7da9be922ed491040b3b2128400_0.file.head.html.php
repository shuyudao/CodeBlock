<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-07 20:33:32
  from 'C:\Users\sad\Desktop\codeBlock\app\views\common\head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8c731c232668_82620481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505948e42683f7da9be922ed491040b3b2128400' => 
    array (
      0 => 'C:\\Users\\sad\\Desktop\\codeBlock\\app\\views\\common\\head.html',
      1 => 1586256652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8c731c232668_82620481 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeBlock 个人代码片段管理存储工具</title>
    <!-- 没有SEO需求 去掉 -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.18.1/build/styles/atom-one-light.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.52.2/lib/codemirror.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.52.2/theme/base16-light.css">
    <link rel="stylesheet" href="<?php echo ($_smarty_tpl->tpl_vars['css']->value).('main.css');?>
">
    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.18.1/build/highlight.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

</head>

<body>
    <header>

        <div id="nav">
            <div>
                <div><strong style="font-size: 18px;color: #666;">CodeBlock</strong></div>
                <div id="nav_tag">
                    <a href="/"><nav>首页</nav></a>
                    <a href="/index.php/cate/index"><nav>分类</nav></a>
                    <a href="/index.php/code/index"><nav>创建</nav></a>
                </div>

            </div>
        </div>

    </header><?php }
}
