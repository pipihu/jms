<?php
/**
 * 语言包-文章采集
 *
 * 语言包-文章采集
 * 
 * 调用模板：无
 * 
 * @category   jieqicms
 * @package    article
 * @copyright  Copyright (c) Hangzhou Jieqi Network Technology Co.,Ltd. (http://www.jieqi.com)
 * @author     $Author: juny $
 * @version    $Id: lang_collect.php 339 2009-06-23 03:03:24Z juny $
 */

$jieqiLang['article']['collect']=1; //表示本语言包已经包含

$jieqiLang['article']['article_not_exists']='对不起，该文章不存在！';
//file
//admin/batchcollect.php collect.php
$jieqiLang['article']['need_source_site']='请选择来源网站！';
$jieqiLang['article']['need_start_articleid']='请输入起始文章序号！';
$jieqiLang['article']['need_end_articleid']='请输入结束文章序号！';
$jieqiLang['article']['batch_collect_success']='恭喜您，全部文章采集完成！';
$jieqiLang['article']['collect_rule_notfull']='采集规则尚未配置完成，无法进行采集！';
$jieqiLang['article']['checking_article_now']='正在检查序号为 %s 的文章';
$jieqiLang['article']['article_collect_title']='文章采集';
$jieqiLang['article']['collect_next_html']='<html><head><title>文章采集</title><meta http-equiv="Content-Type" content="text/html; charset=%s"></head><body><br /><br />&nbsp;&nbsp;%s<br /><br /><a href="%s">如浏览器不能自动转换，点击这里采集下一篇。</a><script language="javascript">document.location="%s";</script></body></html>';
$jieqiLang['article']['not_support_collectsite']='对不起，目前不支持从该网站采集！';
$jieqiLang['article']['need_collect_articleid']='请输入要采集的文章序号！';
$jieqiLang['article']['batch_collect_useid']='按序号批量采集';
$jieqiLang['article']['collect_siteid']='采集网站';
$jieqiLang['article']['collect_start_id']='起始文章序号';
$jieqiLang['article']['collect_end_id']='结束文章序号';
$jieqiLang['article']['collect_or_addnew']='采集方式';
$jieqiLang['article']['collect_is_addnew']='采集全部文章，如本站已有，则自动更新';
$jieqiLang['article']['collect_not_addnew']='只更新本站已有的文章';
$jieqiLang['article']['collect_note']='说明：';
$jieqiLang['article']['collect_addnew_note']='这种采集模式适用于文章序号为数字的情况，比如采集序号为1到10的文章，系统将逐个去采集。';
$jieqiLang['article']['batch_collect_usepage']='按页面批量采集';
$jieqiLang['article']['collect_page_note']='这种采集模式适用于需要解析网页才能获得文章序号的情况，比如采集最近更新，文章分类或者排行榜页面中显示的全部文章。';
$jieqiLang['article']['collect_next_button']='下一步';
$jieqiLang['article']['batch_collect_uselist']='按序号列表批量采集';
$jieqiLang['article']['collect_batch_id']='文章序号';
$jieqiLang['article']['collect_batchid_note']='先选择采集网站，然后输入需要采集或更新的文章序号，多个序号用英文逗号(“,”)分开，如“123,234,345”';
$jieqiLang['article']['collect_start_button']='开始采集';
//admin/collect.php
$jieqiLang['article']['need_article_title']='文章标题不能为空！';
$jieqiLang['article']['limit_article_title']='文章标题不能有空格及特殊字符！';
$jieqiLang['article']['article_already_exists']='该文章已存在';
$jieqiLang['article']['collect_exists_note']='经检测，文章《%s》已经存在！<br /><br /><a href="%s">点击这里自动检查更新</a><br /><br /><a href="%s">点击这里返回文章信息页面</a>';
$jieqiLang['article']['collect_newarticle_failure']='添加新内容失败，请与管理员联系！';
$jieqiLang['article']['collect_newarticle_success']='新文章创建成功！<br /><br /><a href="%s">点击下一步开始同步章节</a>';
$jieqiLang['article']['need_source_articleid']='请输入来源文章序号！';
$jieqiLang['article']['collect_url_failure']='读取对方网站失败，可能是对方无法访问或者本服务器禁止远程读取网页！<br />URL: <a href="%s" target="_blank">%s</a>';
$jieqiLang['article']['collect_articleinfo_failure']='读取对方文章信息页面失败，可能是对方无法访问或者本服务器禁止远程读取网页！<br />URL: <a href="%s" target="_blank">%s</a>';
$jieqiLang['article']['collect_index_failure']='读取对方文章目录失败，可能是对方无法访问或者本服务器禁止远程读取网页！<br />URL: <a href="%s" target="_blank">%s</a>';
$jieqiLang['article']['parse_chapter_failure']='章节名称解析失败，可能是对方网页格式变动导致采集规则错误！<br />URL: <a href="%s" target="_blank">%s</a>';
$jieqiLang['article']['parse_articletitle_failure']='文章标题解析失败，可能是采集规则错误或者对方网站暂时无法打开！<br />URL=%s<hr>%s';
$jieqiLang['article']['collect_add_new']='文章采集-新建文章';
$jieqiLang['article']['collect_sort_guide']='参考类别：';
$jieqiLang['article']['article_image_url']='封面图片地址';
$jieqiLang['article']['collect_source_site']='来源网站';
$jieqiLang['article']['source_article_id']='来源文章序号';
$jieqiLang['article']['target_article_id']='本站文章序号';
$jieqiLang['article']['target_article_note']='发表新文章请留空';
//admin/collectedit.php collectnew.php
$jieqiLang['article']['rule_not_exists']='对不起，该采集规则不存在！';
$jieqiLang['article']['rule_edit_success']='恭喜您，网站采集规则修改完成！';
$jieqiLang['article']['rule_edit']='编辑采集规则';
$jieqiLang['article']['collect_rule_note']='规则说明';
$jieqiLang['article']['collect_rule_description']='<ul><li>系统默认变量：&lt;{articleid}&gt; - 文章序号，&lt;{chapterid}&gt － 章节序号， &lt;{subarticleid}&gt; － 文章子序号， &lt;{subchapterid}&gt; － 章节子序号。</li><li>系统标签 * 可以替代任意字符串。</li><li>系统标签 ! 可以替代除了&lt;和&gt;以外的任意字符串。</li><li>系统标签 ~ 可以替代除了&lt;&gt;\'&quot;以外的任意字符串。</li><li>系统标签 ^ 可以替代除了数字和&lt;&gt;之外字符串。</li><li>系统标签 $ 可以替代数字字符串。</li><li>采集规则中，需要获取的内容部分用四个以上系统标签代替，如 !!!!</li></ul>';
$jieqiLang['article']['collect_rule_basic']='基本设置';
$jieqiLang['article']['rule_site_id']='网站标识';
$jieqiLang['article']['rule_site_name']='网站名称';
$jieqiLang['article']['rule_site_url']='网站地址';
$jieqiLang['article']['rule_subarticleid']='文章子序号运算方式';
$jieqiLang['article']['rule_operation_note']='<br />支持使用&lt;{articleid}&gt;标记的四则运算（+加，-减，*乘，/除，%取余）';
$jieqiLang['article']['rule_subchapterid']='章节子序号运算方式';
$jieqiLang['article']['rule_proxy_host']='代理服务器地址';
$jieqiLang['article']['rule_proxy_port']='代理服务器端口';
$jieqiLang['article']['rule_proxy_user']='代理服务器帐号';
$jieqiLang['article']['rule_proxy_pass']='代理服务器密码';
$jieqiLang['article']['rule_proxyhost_note']='不使用代理服务器请留空';
$jieqiLang['article']['rule_proxyuser_note']='匿名的代理服务不用设置帐号和密码';
$jieqiLang['article']['rule_auto_clean']='现有章节无法对应时候是否全部清空重新采集';
$jieqiLang['article']['rule_default_full']='是否默认把采集到的文章设置为全本';
$jieqiLang['article']['rule_send_referer']='发送HTTP_REFERER标志，用于突破防采集设置';
$jieqiLang['article']['rule_page_charset']='对方网页编码';
$jieqiLang['article']['rule_charset_auto']='自动检测';
$jieqiLang['article']['rule_charset_gb']='GB2312';
$jieqiLang['article']['rule_charset_utf8']='UTF8';
$jieqiLang['article']['rule_charset_big5']='BIG5';
$jieqiLang['article']['rule_charset_note']='编码与本站不同将自动尝试转换';
$jieqiLang['article']['collect_rule_articleinfo']='文章信息页面采集规则';
$jieqiLang['article']['rule_articleinfo_url']='文章信息页面地址';
$jieqiLang['article']['rule_article_title']='文章标题采集规则';
$jieqiLang['article']['rule_article_author']='作者采集规则';
$jieqiLang['article']['rule_article_sort']='文章类型采集规则';
$jieqiLang['article']['rule_sort_relation']='文章类型对应关系';
$jieqiLang['article']['rule_sort_note']='对方类型名称和本站类型序号的用“=>”分割，两个类型之间用“||”分割，类型名称“default”标识默认的类型对应关系';
$jieqiLang['article']['rule_sort_guide']='<br />本站类型和序号对应关系如下：<br />%s';
$jieqiLang['article']['rule_article_keywords']='关键字采集规则';
$jieqiLang['article']['rule_article_intro']='内容简介采集规则';
$jieqiLang['article']['rule_article_image']='封面图片采集规则';
$jieqiLang['article']['rule_articleimage_filter']='过滤的封面图片';
$jieqiLang['article']['rule_articleindex_url']='目录页面链接采集规则';
$jieqiLang['article']['rule_articleindex_note']='本规则采集到的内容将作为标记&lt;{indexlink}&gt;使用，可以应用在下面的“文章目录页面地址”里面';
$jieqiLang['article']['rule_article_full']='全文标记采集规则';
$jieqiLang['article']['rule_articlefull_note']='本规则不是采集内容保存，而是匹配就认为是全本，不匹配则认为是连载';
$jieqiLang['article']['collect_rule_index']='文章目录页面采集规则';
$jieqiLang['article']['rule_index_url']='文章目录页面地址';
$jieqiLang['article']['rule_volume_name']='分卷名称采集规则';
$jieqiLang['article']['rule_chapter_name']='章节名称采集规则';
$jieqiLang['article']['rule_chapter_id']='章节序号采集规则';
$jieqiLang['article']['collect_rule_chapter']='章节内容页面采集规则';
$jieqiLang['article']['rule_chapter_url']='章节内容页面地址';
$jieqiLang['article']['rule_chapter_content']='章节内容采集规则';
$jieqiLang['article']['rule_chapter_filter']='章节内容过滤规则';
$jieqiLang['article']['rule_chapterfilter_note']='可多个过滤规则，每个规则必须一行，可使用替换标签，如：&lt;div&gt;!&lt;/div&gt;';
$jieqiLang['article']['rule_chapter_replace']='章节内容替换规则';
$jieqiLang['article']['rule_chapterreplace_note']='替换规则和过滤规则结合使用，默认本规则留空，表示符合过滤规则的内容全部替换成空，如果要替换成其他内容，则这里每行的替换规则对应上面每行的过滤规则，如符合过滤规则第三行的内容会被替换成本规则第三行内容';
$jieqiLang['article']['rule_or_articleimage']='是否采集图片内容到本地';

$jieqiLang['article']['collect_rule_imagetranslate']='采集到本地的图片处理，需要GD库支持';
$jieqiLang['article']['rule_or_imagetranslate']='是否启用图片处理';
$jieqiLang['article']['rule_or_imagetranslatedec']='启用图片处理对采集速度有一定影响';
$jieqiLang['article']['rule_or_imagewater']='采集图片是否加上水印';
$jieqiLang['article']['rule_or_imagewaterdec']='<br />加水印的设置在本模块的参数设置里面，于手工上传图片加水印方式相同。';
$jieqiLang['article']['rule_image_bgcolor']='采集图片背景颜色';
$jieqiLang['article']['rule_image_bgcolordec']='<br />这里留空则系统自动判断';
$jieqiLang['article']['rule_image_areaclean']='按区域抹去原有图片水印';
$jieqiLang['article']['rule_image_areacleandec']='<br />按照图片内的矩形坐标，抹去该区域内容。一个矩形用四个数值表示(用“,”分隔)，分别是矩形左上角X，Y和右下角X，Y。当X，Y大于0时候表示从图片左上角开始加多少像素，当X，Y小于0时候表示从图片右下角开始减多少像素。多个区域用“|”分割。<br />例如：本项设置成“1,1,100,50|-100,-50,-1,-1”，分别表示左上角和右下角100*50的矩形区域。';
$jieqiLang['article']['rule_image_colorclean']='按照颜色抹去原有图片水印';
$jieqiLang['article']['rule_image_colorcleandec']='<br />一般水印颜色与图片背景和内容颜色都不同，可以设置多个水印颜色全部抹去，用“|”分隔，如“#FAFAFA|#FF0000|#00FF00”';

$jieqiLang['article']['rule_save_edit']='保存修改';
$jieqiLang['article']['rule_need_siteid']='网站标识不能为空！';
$jieqiLang['article']['rule_siteid_exists']='网站标识已经存在，请换一个！';
$jieqiLang['article']['rule_edit_success']='恭喜您，网站采集规则修改完成！';
$jieqiLang['article']['rule_add_new']='添加采集规则';
//admin/collectpage.php collectpedit.php
$jieqiLang['article']['add_batch_collectrule']='添加新的批量采集规则';
$jieqiLang['article']['collect_rule_name']='采集规则名称';
$jieqiLang['article']['collect_rule_url']='采集页面地址';
$jieqiLang['article']['collect_rule_articleid']='文章序号采集规则';
$jieqiLang['article']['rule_next_pageid']='下一页的页码采集规则';
$jieqiLang['article']['rule_nextpage_note']='<br />这里留空表示没有第二页，填入 ++ 则表示页面序号是加1方式递增的，否则输入页码的采集规则。';
$jieqiLang['article']['rule_start_pageid']='起始页页码';
$jieqiLang['article']['rule_max_pagenum']='最多采集页数';
$jieqiLang['article']['no_site_collectrule']='对不起，该网站采集规则不存在！';
$jieqiLang['article']['no_batch_collectrule']='对不起，这个批量采集规则不存在！';
$jieqiLang['article']['batchcollect_edit_success']='恭喜您，批量采集规则修改完成！';
$jieqiLang['article']['batchcollect_edit']='编辑批量采集规则';
//admin/pagecollect.php
$jieqiLang['article']['need_collect_siteid']='对不起，请先选择要采集的网站！';
$jieqiLang['article']['collect_notsupport_site']='对不起，目前不支持从这个网站采集！';
$jieqiLang['article']['parse_articleid_failure']='文章序号采集失败，可能是采集规则错误或者对方网站暂时无法打开！';
$jieqiLang['article']['page_collect_doing']='正在采集 %s - %s 第 %s 页<br />本页拥有文章共 %s 篇<br />';
$jieqiLang['article']['page_checkid_doing']='%s正在检查序号为 %s 的文章<br />';
$jieqiLang['article']['page_collect_next']='本页采集完成，继续采集下一页的文章。<br /><br />本页是第 %s 页，本次最多采集 %s 页';
$jieqiLang['article']['page_collect_html']='<html><head><title>页面批量采集</title><meta http-equiv="Content-Type" content="text/html; charset=%s"></head><body><br /><br />&nbsp;&nbsp;%s<br /><br /><a href="%s">如浏览器不能自动转换，点击这里采集下一篇。</a><script language="javascript">document.location="%s";</script></body></html>';
$jieqiLang['article']['collect_name']='采集名称';
$jieqiLang['article']['collect_start_pageid']='起始页序号';
$jieqiLang['article']['collect_max_pagenum']='最多采集页数';
$jieqiLang['article']['collect_page_emptynote']='留空则按默认方式采集';
$jieqiLang['article']['collect_page_note']='“起始页序号”和“最多采集页数”一般不用填，系统会按默认设置的方式进行。只有您需要不按默认方式进行时才设置，里面的填写格式要跟采集规则里面的设置一致。';
//admin/updatecollect.php
$jieqiLang['article']['update_collect_success']='恭喜您，该文章已经更新成功！';
$jieqiLang['article']['collect_no_update']='已经检测完成，没有发现更新章节！<br /><br /><a href="%s">点击这里查看文章信息</a><br /><br /><a href="%s">点击这里清空文章并重新采集</a><br /><br /><a href="%s">点击这里采集其他文章</a>';
$jieqiLang['article']['collect_cant_update']='已经检测完成，发现有新章节，但是和现有章节不对应，无法继续采集，不对应章节如下：<br /><br />%s<br /><a href="%s">点击这里进入文章管理</a><br /><br /><a href="%s">点击这里清空文章并重新采集</a><br /><br /><a href="%s">点击这里采集其他文章</a>';
//include/collectarticle.php
$jieqiLang['article']['article_collect_clean']='文章《%s》现有的章节结构无法和对方文章结构相对应，已被清空并准备重新采集<br />';
$jieqiLang['article']['collect_chapter_doing']='正在采集《%s》共有 %d 个章节需要采集，采集时间与章节数量和对方网站打开速度有关，请耐心等待.....<br>';
$jieqiLang['article']['chapter_collect_failure']='%s.%s（采集失败！URL: <a href="%s" target="_blank">%s</a>） ';
$jieqiLang['article']['add_chapter_failure']='增加章节失败，请与管理员联系！';
$jieqiLang['article']['chapter_collect_success']='<br />全部章节内容采集完成！<br>';
$jieqiLang['article']['collect_create_readfile']='开始生成阅读页面（如果选择生成压缩包或全文阅读页面，则需要更多的时间），请耐心等候....<br>';
//include/updateone.php
$jieqiLang['article']['collect_title_empty']='采集到的文章标题为空！';
$jieqiLang['article']['collect_title_formaterr']='文章标题含有空格或特殊字符';
$jieqiLang['article']['collect_article_notaudit']='文章《%s》未经审核，将不会自动采集！';
$jieqiLang['article']['collect_article_notexists']='文章《%s》本站不存在，将不会自动采集！<br />';
$jieqiLang['article']['collect_addarticle_failure']='增加文章《%s》失败！<br />';
$jieqiLang['article']['parse_articleinfo_failure']='文章信息解析失败，可能是对方网页格式变动导致采集规则错误！<br />URL：<a href="%s" target="_blank">%s</a><br />';
?>