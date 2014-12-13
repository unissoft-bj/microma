2014-12-13
===================
积分商城配置及操作
1.导入db中的ma_product.sql ，其包含ma_product商品数据表
2.商品添加在 /ma/admin/login.php后台，账号和密码均为admin

2014-11-29
================================

1，microma首页面title“phpyun人才系统”改为"微会务系统"
	进入/admin后台修改站点名称	

2，签到环节写入authmapip表和authsms表

3，简化签到环节，输入手机号完成签到；用手机号写lname字段；真正的lname、公司、职务在其他环节手机

4，预注册的输入框显示“请输入预注册时登记的手机号”“ -- 或者 --”；如果此处输入的手机号在regphone字段没有查到，则直接转入到现场注册逻辑（可以考虑把两个手机号输入框合并成一个，输入手机号码后先查regphone，如果有则进入预注册流程，如果没有，则进入现场注册流程）

5，加入短信模块，给会务组，管理员使用，可以写smspool群发短信，也可以针对性发送短息

6，“慈善拇指”，改成“公益拇指”
	首页的在header.htm修改
	投票页面在/diaocha目录下进入问卷的后台修改
	ok

7，首页面的“欢迎来宾”区域去掉，会议日程展开为日程表
	修改index.htm
	ok

8，首页面加上 “由紫光智能WIFI提供解决方案 联系电话13701272752”
	footer.htm
	ok

9，增加会员积分模块，首页上的在线消息模块去掉，改为“甜蜜积分”，提示文字“您有xx积分，点击兑换”
	建议改成“积分商城”
	用于兑换礼品
	礼品在后台添加，参数为：商品名称、商品价格、所需积分、商品图片、商品描述
	to do


2014-11-19
============================

针对认证后没有登录的问题，原因：
cookie中的mac分别在/ 和 /wap 下各出现一次
解决方法：

index.php中

调查问卷开发记录（2014-11-19）
=======================
1.关于userid

	1-1.save-form.php  创建表单时将userid和username添加到form_id表的字段中
		save_form.php  75行 修改 在创建表单数据库表的时候，添加userid和username
	<font size="green">完成</font>
		
	1-2.提交表单时，将cookie中的userid和username写入是form_id表中
		post-function.php
		1777行
		插入userid和username到$table_data中，$table_data是所有表单数据的载体，将ip_address字段存储userid，用来做用户只能填写一次问卷的校验
	<font size="green">完成</font>
	
	1-3.后台查看问卷结果时，显示userid和username
		view_entry.php中，显示userid和username line:249
		manage_entries.php 添加userid和username entry-function.php line：1889  //yc
	<font size="green">完成</font>
	
	1-4.每个用户只能答一次问卷（form_id中做校验）
		在1-2已经解决，需要在表单设置中选中每个ip只能填写一次问卷。
	<font size="green">完成</font>
	
	1-5.关于问卷的权限，只有登录用户才有资格。
		view.php line:10
	完成
	
	1-6.关于慈善金额（待整理……）
		后台有该功能，在表单设置-》更多功能中，可以给每一题设置酬劳。
		需要解决的问题 酬劳是如何存放到数据库中的？
		//view.php 页面参数传递 line：113
		关于酬金：
		如果给整个问卷设置酬金 存放在数据表ap_form_payments中
		如果给每个题设置金额，则根据用户提交的题目计算出酬金
		view_entry.php line：198
		
		目前后台对问卷查看的状态：只支持完整提交后的数据和酬金
		答题过程是记录在session中的，最后提交的时候一起写到数据库
		以后可以根据需求再做修改，目前建议保持这种模式。
	<font size="red">进行中……</font>
	
2.关于进度保存呢

	1-1.每次答题时，将当期url写入cookie
		view.php line:20
	1-2.如果cookie中的题目url不为空，则慈善拇指的url设定为cookie中的url
		header.htm line:75
	完成

3.关于UI view

	view-function.php 模板代码 
	line:5062 
	line:4969
	<pre>line:4628 删除<h2>{$form->name}</h2>	</pre>
	答完题目的末班
	line：5747
	line:5697

2014-11-18总结
==========================
关于慈善拇指 大家可以测试下了

进度问题保存问题，用户识别绑定，慈善金额都可以了

慈善金额可以给不同的题目设置不同的金额

目前存在的问题是，慈善金额目前只有显示，还没写入数据库；

明天处理UI和这个问题


需要更新下数据库
在git上的db目录


慈善拇指的后台管理
/diaocha/index.php
用户名 admin@qq.com
密码 admin

调查问卷开发记录（2014-11-19）
=======================
1.关于userid

	1-1.save-form.php  创建表单时将userid和username添加到form_id表的字段中
		save_form.php  75行 修改 在创建表单数据库表的时候，添加userid和username
	<font size="green">完成</font>
		
	1-2.提交表单时，将cookie中的userid和username写入是form_id表中
		post-function.php
		1777行
		插入userid和username到$table_data中，$table_data是所有表单数据的载体，将ip_address字段存储userid，用来做用户只能填写一次问卷的校验
	<font size="green">完成</font>
	
	1-3.后台查看问卷结果时，显示userid和username
		view_entry.php中，显示userid和username line:249
		manage_entries.php 添加userid和username entry-function.php line：1889  //yc
	<font size="green">完成</font>
	
	1-4.每个用户只能答一次问卷（form_id中做校验）
		在1-2已经解决，需要在表单设置中选中每个ip只能填写一次问卷。
	<font size="green">完成</font>
	
	1-5.关于问卷的权限，只有登录用户才有资格。
		view.php line:10
	完成
	
	1-6.关于慈善金额（待整理……）
		后台有该功能，在表单设置-》更多功能中，可以给每一题设置酬劳。
		需要解决的问题 酬劳是如何存放到数据库中的？
		//view.php 页面参数传递 line：113
		关于酬金：
		如果给整个问卷设置酬金 存放在数据表ap_form_payments中
		如果给每个题设置金额，则根据用户提交的题目计算出酬金
		view_entry.php line：198
		
		目前后台对问卷查看的状态：只支持完整提交后的数据和酬金
		答题过程是记录在session中的，最后提交的时候一起写到数据库
		以后可以根据需求再做修改，目前建议保持这种模式。
	<font size="red">进行中……</font>
	
2.关于进度保存呢

	1-1.每次答题时，将当期url写入cookie
		view.php line:20
	1-2.如果cookie中的题目url不为空，则慈善拇指的url设定为cookie中的url
		header.htm line:75
	完成

3.关于UI view

	view-function.php 模板代码 
	line:5062 
	line:4969
	<pre>line:4628 删除<h2>{$form->name}</h2>	</pre>
	答完题目的末班
	line：5747
	line:5697

调查问卷开发记录（2014-11-17）
=======================
1.关于userid

	1-1.save-form.php  创建表单时将userid和username添加到form_id表的字段中
	
	1-2.提交表单时，将cookie中的userid和username写入是form_id表中
	
	1-3.后台查看问卷结果时，显示userid和username
	
	1-4.关于慈善金额（待整理……）

2.关于进度保存呢

	1-1.每次答题时，将当期url写入cookie
		view.php line:20
	1-2.如果cookie中的题目url不为空，则慈善拇指的url设定为cookie中的url
		header.htm line:75

	完成
3.关于UI view


2014-11.17
============
1.更新db中的ihost-ma.sql 


2014.11.6 本周计划
====================
1.代码根据现在的需求进行优化和重写
2.完善UI
3.完善认证模块
4.整合ihost到index中
下周计划：
挖掘phpyun
实现认证模块之外的其他附属功能
microma
=======

micro website for meeting affaires

=== etc ==========
folder for help files and project files

=== webpages =======
folder for working files
