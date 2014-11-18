调查问卷开发记录（2014-11-18）
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
	
	1-5.关于慈善金额（待整理……）
		后台有该功能，在表单设置-》更多功能中，可以给每一题设置酬劳。
		需要解决的问题 酬劳是如何存放到数据库中的？
	<font size="red">进行中……</font>
	
2.关于进度保存呢

	1-1.每次单个题目提交之后，将下一个题目的url写入cookie
	
	1-2.如果cookie中的题目url不为空，则慈善拇指的url设定为cookie中的url

3.关于UI view

调查问卷开发记录（2014-11-17）
=======================
1.关于userid

	1-1.save-form.php  创建表单时将userid和username添加到form_id表的字段中
	
	1-2.提交表单时，将cookie中的userid和username写入是form_id表中
	
	1-3.后台查看问卷结果时，显示userid和username
	
	1-4.关于慈善金额（待整理……）

2.关于进度保存呢

	1-1.每次单个题目提交之后，将下一个题目的url写入cookie
	
	1-2.如果cookie中的题目url不为空，则慈善拇指的url设定为cookie中的url

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
