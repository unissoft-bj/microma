$(function() {
   // $("img").lazyload({event : "mouseover"});
});
 function check_code(){
	document.getElementById("vcode_img").src=weburl+"/include/authcode.inc.php?"+Math.random();
}
 function check_codes(){
	document.getElementById("vcode_imgs").src=weburl+"/include/authcode.inc.php?"+Math.random();
}
 function checkcode(){
	document.getElementById("vcode_img").src=weburl+"/include/authcode.inc.php?"+Math.random();
}
 function get_comindes_jobid(){
	var codewebarr="";
	$("input[name=checkbox_job]:checked").each(function(){
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	return codewebarr;
}
function search_show(id){$(".cus-sel-opt-panel").hide();$("#"+id).show();}
function search_hide(id){$("#"+id).hide();}
$.fn.smartFloat = function(d_id) {
	var height=$(window).height();
	var heightdiv=$("#"+d_id).height();
	var position = function(element) {
		var top=(parseInt(height)-(heightdiv))/2;
		$(window).scroll(function() {
			var scrolls = $(this).scrollTop();
			if (window.XMLHttpRequest) {
				element.css({
					position: "fixed",
					top: top
				});
			} else {
				element.css({
					top: top+scrolls
				});
			}
		});
	};
 	return $(this).each(function() {
		position($(this));
	});
};
function position(id){
	var height=$(window).height();
	var width=$(window).width();
	var heights=$(id).height();
	var widths=$(id).width();
	var top=(parseInt(height)-(heights))/2;
	var left=(parseInt(width)-(widths))/2;
	if(window.attachEvent){
		var offset_top=$(id).offset().top;
		top=parseInt(top)+parseInt(offset_top);
	}
	$(id).css("top",top);
	$(id).css("left",left);
	$(id).show();
}
function logout(url){
	$.get(url,function(msg){
		if(msg==1 || msg.indexOf('script')){
			if(msg.indexOf('script')){
				$('#uclogin').html(msg);
			}
			layer.msg('您已成功退出！', 2, 9,function(){window.location.href =weburl;});
		}else{
			layer.msg('退出失败！', 2, 8);
		}
	});
}
$(document).ready(function(){
	$("#sq_job").click(function(){
		var jobid=$("#jobid").val();
		$.post("index.php?m=ajax&c=index_ajaxjob",{jobid:jobid},function(data){
			if(data==4){
				layer.msg('您在该公司黑名单中，不能提交申请！', 2, 8);
			}else if(!data || data==0){
				showcomlogin();
			}else if(data==2){
				layer.alert('您还没有简历，是否先添加简历？', 0, '提示',function(){window.location.href ="member/index.php?c=resume";window.event.returnValue = false;return false; });
			}else if(data==3){
				layer.msg('您先已申请过该职位！', 2, 3);
			}else{
				$(".POp_up_r").html('');
				$(".POp_up_r").append(data);
				$.layer({
					type : 1,
					title :'申请职位',
					offset: [($(window).height() - 380)/2 + 'px', ''],
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['380px','auto'],
					page : {dom :"#sqjob_show"}
				});
			}
		});
	});
	$("#click_sq").click(function(){
		var companyname=$("#companyname").val();
		var jobname=$("#jobname").val();
		var companyuid=$("#companyuid").val();
		var jobid=$("#jobid").val();
		var eid=$("input[name=resume]:checked").val();
		$('#sqjob_show').hide();
		$('#bg').hide();
		layer.closeAll();
		var loadi = layer.load('执行中，请稍候...',0);
		$.post("index.php?m=ajax&c=sq_job",{companyname:companyname,jobname:jobname,companyuid:companyuid,jobid:jobid,eid:eid},function(data){
			layer.close(loadi);
			if(data==4){
				layer.msg('您在该公司黑名单中，不能提交申请！', 2, 8);
			}else if(data==1){
				var i = $.layer({
					shade:[0],
					area:['auto','auto'],
					dialog:{
						msg:'申请成功，是否返回个人中心？',
						btns:2,
						type:4,
						btn:['个人中心','关闭'],
						yes:function(){window.location.href="member/index.php?c=job";window.event.returnValue = false;return false;},
						no:function(){layer.close(i);}
					}
				});
			}else if(data==2){
				layer.msg('系统出错，请稍后再试！', 2, 3);return false;
			}else if(data==3){
				layer.msg('您已申请过该职位！', 2, 0);return false;
			}else if(data==5){
				layer.msg('该职位已过期，不能申请该职位！', 2, 3);return false;
			}else if(data==6){
				layer.msg('该职位不存在！', 2, 8);return false;
			}else{
				layer.alert('请先登录！',0,'提示',function(){window.location.href="index.php?m=login&usertype=1";window.event.returnValue=false;return false;});
			}
		});
	})
	$(".sq_resume").click(function(){
		if($(this).attr("eid")){$("#eid").val($(this).attr("eid"));}else{var show_job=1;}
		if($(this).attr("uid")){$("#uid").val($(this).attr("uid"));}
		if($(this).attr("username")){$("#username").val($(this).attr("username"));}
		if($(this).attr("jobname")){$("#jobname").val($(this).attr("jobname"));}
		var uid=$("#uid").val();
		$.post(weburl+"/index.php?m=ajax&c=index_ajaxresume",{show_job:show_job},function(data){
			var data=eval('('+data+')');
			var status=data.status;
			var integral=data.integral;
			if(data.html){
				$("#jobname").html(data.html);
			}
			if(data.content){
				$("#content").val(data.content);
				$("#update_yq").attr("checked",true);
			}
			if(!status || status == 0){
				layer.alert('您不是企业用户，请先登录！', 0, '提示',function(){
					window.location.href =weburl+"/index.php?m=login&usertype=2&type=out"; window.event.returnValue = false;return false;
				});

			}else if(status==1){
				layer.confirm("邀请面试将扣除"+integral+integral_pricename+"，是否继续？",function(){
					$.layer({
						type : 1,
						title :'邀请面试',
						offset: [($(window).height() - 380)/2 + 'px', ''],
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"}
					});
				});
			}else if(status==2){
				layer.confirm("你的等级特权已经用完,将扣除"+integral+integral_pricename,function(){
					$.layer({
						type : 1,
						title :'邀请面试',
						offset: [($(window).height() - 380)/2 + 'px', ''],
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"}
					});
				});
			}else if(status==3){
				$.layer({
					type : 1,
					title :'邀请面试',
					offset: [($(window).height() - 380)/2 + 'px', ''],
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['380px','auto'],
					page : {dom :"#job_box"}
				});
			}else if(status==4){
				layer.msg('会员邀请简历已用完！', 2, 8);return false;
			}else if(status==5){
				layer.msg('您暂无发布中的职位！', 2, 8);return false;
			}
		});
	})

	$("#click_invite").click(function(){
		var eid=$("#eid").val();
		var uid=$("#uid").val();
		var content=$("#content").val();
		var username=$("#username").val();
		var jobname=$("#jobname").val();
		if($("#update_yq").attr("checked")=='checked'){
			var update_yq=1;
		}else{
			var update_yq=0;
		}
		if($.trim(content)==""){
			layer.msg('内容不能为空！', 2, 8);return false;
		}
		layer.closeAll();
		loadi = layer.load('执行中，请稍候...',0);
		$.post(weburl+"/index.php?m=ajax&c=sava_ajaxresume",{eid:eid,uid:uid,content:content,username:username,jobname:jobname,update_yq:update_yq},function(data){
			layer.close(loadi);
			var data=eval('('+data+')');
			var status=data.status;
			var integral=data.integral;
			if(status==8){
				layer.msg('您已被该用户列如黑名单！', 2, 8);return false;
			}else if(status==9){
				layer.msg('该用户已被你列入黑名单！', 2, 8);return false;
			}else if(!status || status==0){
				layer.alert('请先登录！', 0, '提示',function(){window.location.href ="index.php?m=login&usertype=2&type=out";window.event.returnValue = false;return false;  });
			}else if(status==5){
				layer.confirm('您还有'+integral+integral_pricename+'！不够邀请面试，是否充值？', function(){window.location.href =weburl+"/member/index.php?c=pay";window.event.returnValue = false;return false;  });
			}else if(status==3){
				layer.msg('您已成功邀请！', 2, 1);
			}else if(status==7){
				layer.msg('您已经邀请过该人才，请不要重复邀请！', 2, 8);

			}
		});
	})

	$("input[name=city]").click(function(){
		$('.city_box').show();
	})
	$(".p_t_right").click(function(){
		$("#bg").hide(1000);
		$('.city_box').hide(1000);
	})
	$("#colse_box").click(function(){
		$('.job_box').hide();
	})
	$("#close_job").click(function(){
		var check_val="0";
		var name_val = "不限";
		$("input[type='checkbox'][name='job_box']:checked").each(function(){
		  var info = $(this).val().split("+");
			  check_val+=","+info[0];
			  name_val+="+"+info[1];
		  });
		  check_val = check_val.replace("0,","");
		  $("#qw_job").val(check_val);
		  name_val = name_val.replace("不限+","");
		  $("#qw_show_job").html(name_val);
		  $("#bg").hide(1000);
		  $('#pannel_job').hide(1000);
	})
	$("#click").click(function(){
		var info = $("input[@type=radio][name=cityid][checked]").val();
		var info_arr = info.split("+");
		var name = info_arr[0];
		var id = info_arr[1];
		$("#sea_place").val(name);
		$("#cityid").val(id);
		$("#bg").attr("style","display:none");
		$('.city_box').hide(1000);
	});
	$("#click_head").click(function(){
		var info = $("input[@type=radio][name=cityid][checked]").val();
		var info_arr = info.split("+");
		var name = info_arr[0];
		var id = info_arr[1];
		$("#sea_place_head").val(name);
		$("#cityid_head").val(id);
		$("#bg").hide(1000);
		$('#city_box_head').hide(1000);
	});
	$(".header_seach_find").mouseover(function(){
		$(".header_seach_find_list").show();
	}).mouseout(function(){
		$(".header_seach_find_list").hide();
	});
	$(".header_seach_find_list").mouseover(function(){
		$(".header_seach_find_list").show();
	});
	if(!isPlaceholder()){
		$("input").not("input[type='password']").each(
		function(){
			if($(this).val()=="" && $(this).attr("placeholder")!=""){
				$(this).val($(this).attr("placeholder"));
				$(this).focus(function(){
					if($(this).val()==$(this).attr("placeholder")) $(this).val("");
				});
				$(this).blur(function(){
					if($(this).val()=="") $(this).val($(this).attr("placeholder"));
				});
			}
		});
	};
})
function isPlaceholder(){
    var input = document.createElement('input');
    return 'placeholder' in input;
}
function fav_job(id,type){
	$.post("index.php?m=ajax&c=favjobuser",{id:id},function(data){
		if(data==1){
			var i = $.layer({
				shade : [0.5 , '#000' , true],
				area : ['auto','auto'],
				dialog : {
					msg:'收藏成功，是否返回个人中心？',
					btns : 2,
					type : 4,
					btn : ['查看收藏','关闭'],
					yes : function(){
						window.location.href ="member/index.php?c=favorite";window.event.returnValue = false;return false;
					},
					no : function(){
						layer.close(i);
					}
				}
			});
		}else if(data==2){
			layer.msg('系统出错，请稍后再试！', 2, 3);return false;
		}else if(data==3){
			layer.msg('您已收藏过该职位！', 2, 0);return false;
		}else if(data==0){
			if(type==2){
				$("#touch_lo").hide();
				$("#tologoin").show("1000");
			}else{
				layer.msg('您不是求职用户！', 2, 3);return false;
			}
		}else if(data==4){
			if(type==2){
				$("#touch_lo").hide();
				$("#tologoin").show("1000");
			}else{
				layer.msg('对不起，您不是个人用户，无法申请职位！', 2, 8);return false;
			}
		}
	});
}
function addwebfav(url,title){
	var title,url;
	if(document.all){
		window.external.addFavorite(url,title);
	}else if(window.sidebar){
		window.sidebar.addPanel(title,url,"");
	}
}
function setHomepage(url){
   var url;
   if(document.all){
	  document.body.style.behavior='url(#default#homepage)';
	  document.body.setHomePage(url);
   }else if(window.sidebar){
		if(window.netscape){
			 try{
				 netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			 }
			 catch(e){
				 alert("您的浏览器未启用[设为首页]功能，开启方法：先在地址栏内输入about:config,然后将项 signed.applets.codebase_principal_support 值该为true即可");
			 }
		}
		var prefs=Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		prefs.setCharPref('browser.startup.homepage',url);
   }
}
function marquee(time,id){
	$(function(){
		var _wrap=$(id);
		var _interval=time;
		var _moving;
		_wrap.hover(function(){
			clearInterval(_moving);
		},function(){
			_moving=setInterval(function(){
			var _field=_wrap.find('li:first');
			var _h=_field.height();
			_field.animate({marginTop:-_h+'px'},800,function(){
			_field.css('marginTop',0).appendTo(_wrap);
			})
		},_interval)
		}).trigger('mouseleave');
	});
}
function forget(){
	var aucode = $("#txt_CheckCode").val();
	var username =  $("#username").val();
	if(username==""){
		$("#msg_error").html("<font color='red'>请填写你注册时的用户名！</font>");
		return false;
	}
	if(aucode==""){
		$("#msg_error").html("<font color='red'>验证码不能为空！</font>");
		return false;
	}
	return true;
}
function unselectall(){
	if(document.getElementById('chkAll').checked){
		document.getElementById('chkAll').checked = document.getElementById('chkAll').checked&0;
	}
}
function CheckAll(form){
	for (var i=0;i<form.elements.length;i++){
		var e = form.elements[i];
		if (e.Name != 'chkAll'&&e.disabled==false)
		e.checked = form.chkAll.checked;
	}
}
function get_zph(id){
	var pid=id;
	var stime=$("#zph_stime_"+id).val();
	var etime=$("#zph_etime_"+id).val();
	if(stime<'0' && etime>'0'){
		layer.msg('招聘会已经开始！', 2,8);return false;
	}else if(etime<'0'){
		layer.msg("招聘会已经结束！", 2,8);return false;
	}
	$("#zph_name").html($(".title"+pid).html());
	$("input[name=pid]").val(pid);
	$.get("index.php?m=ajax&c=getzph",function(data){
		var data=eval('('+data+')');
		var status=data.status;
		var content=data.content;
		if(status==0){
			$("#error_zph").show();
			$("#TB_ajaxContent").hide();
			$("#error_zph").html(content);
		}else{
			$("#error_zph").hide();
			$("#TB_ajaxContent").show();
			$("#joblist").html(content);
			$("input[name=uid]").val(data.uid);
		}
		if(status==2){
			$(".Corporate_box_sub").hide();
		}
		$.layer({
			type : 1,
			title :'预约招聘会',
			offset: [($(window).height() - 235)/2 + 'px', ''],
			shade: [0],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['380px','auto'],
			page : {dom :"#TB_window"}
		});
	});
};
function clickzph(){
	var uid=$("input[name=uid]").val();
	var pid=$("input[name=pid]").val();
	var jobid=get_comindes_jobid();
	$.get("index.php?m=ajax&c=zphcom&uid="+uid+"&pid="+pid+"&jobid="+jobid, function(data){
		var data=eval('('+data+')');
		var status=data.status;
		var content=data.content;
		layer.closeAll();
		if(status==0){
			layer.msg(content, 2,8);
		}else{
			layer.msg(content, 2,9);
		} return false;
	})
}
function showcomlogin(){
	$.layer({
		type : 1,
		title :'快速登录',
		offset: [($(window).height() - 380)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['380px','300px'],
		page : {dom :"#touch_lo"}
	});
}
function report_com(){
	$.layer({
		type : 1,
		title :'举报该职位',
		offset: [($(window).height() - 380)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['380px','250px'],
		page : {dom :"#report"}
	});
}
function checkcomlogin(){
	var username = $.trim($("#username").val());
	var password = $.trim($("#password").val());
	var authcode = $.trim($("#authcode").val());
	if(username == "" || password=="" || authcode==""){
		layer.msg('请完整填写用户名，密码，验证码！', 2, 8);return false;
	}
	$.post("index.php?m=login&c=loginsave",{comid:1,username:username,password:password,authcode:authcode,usertype:"1"},function(data){
		if(data==1){
			location.reload();
		}else{
			layer.msg(data, 2, 8,function(){location.reload();});return false;
		}
	});
}
function checklogin(){
	var username = $("#username").val();
	var password = $("#password").val();
	var authcode = $("#authcode").val();
	if(username == "" || password=="" || authcode==""){
		$("#msg").html("<font color='red'>请完整填写用户名，密码，验证码！</font>");
		return false;
	}
	$.post(weburl+"/index.php?m=login&c=loginsave",{comid:1,username:username,password:password,authcode:authcode,usertype:"1"},function(data){
		if(data==1){
			window.location.reload();
		}else{
			$("#msg").html("<font color='red'>"+data+"</font>");
		}
	});
}
function checklink(){
	var comid = $("#comid").val();
	var username = $("#username").val();
	var password = $("#password").val();
	var authcode = $("#authcode").val();
	if(username == "" || password=="" || authcode==""){
		$("#msg").html("<font color='red'>请完整填写用户名，密码，验证码！</font>");
		return false;
	}
	$.post(weburl+"/index.php?m=login&c=loginsave",{comid:comid,username:username,password:password,authcode:authcode,usertype:"1"},function(data){
		if(data==1){
			window.location.reload();
		}else{
			$("#msg").html("<font color='red'>"+data+"</font>");
		}
	});
}
function check_skill(id){
	$(".pop-ul-ul").hide();
	$(".user_tck_box1").removeClass("tanchu");
	$("#showskill"+id).addClass("tanchu");
	$("#skill"+id).show();
}
function box_delete(id){
	$("#sk"+id).remove();
	$("#td_"+id).remove();
	 $("#zn"+id).removeAttr("checked");
}
function checked_input2(id,name,divid,fid){
	var check_length = $("input[type='checkbox'][name='"+name+"'][checked]").length;
	if(name=="job_classid"){
		if($("#zn"+id).attr("checked")=="checked"){
			if(check_length>=5){
				layer.msg('您最多只能选择五个', 2,8);
				$("#zn"+id).attr("checked",false);
			}else{
				var info = $("#zn"+id).val();
				var info_arr = info.split("+");
				if(id==fid){
					$("."+fid).remove();
				}else{
					$("#td_"+fid).remove();
				}
				$("#"+divid).append("<li id='td_"+id+"' class='show_type"+id+" "+fid+"' ><input id='chk_"+id+"' onclick='box_delete("+id+");' type='checkbox' checked value='"+info+"' name='"+name+"'>"+info_arr[1]+"</li>");
			}
		}else{
			$("#td_"+id).remove();
		}
	}
}
$(document).ready(function(){
	var jobarr=new Array();
	$("#close_skill").click(function(){
		$("#bg").hide();
		$('#skill_box').hide();
		var skill_val = "";
		var i=0;
		$("input[type='checkbox'][name='job_classid']:checked").each(function(){
		  var info = $(this).val().split("+");
			jobarr[i]=info[0];
			i++;
		  skill_val+="<li id=\"sk"+info[0]+"\" class=\"show_type"+info[0]+"\" onclick=\"box_delete('"+info[0]+"');\"><input type=\"checkbox\" name=\"job_classid[]\" checked=\"\" value="+info[0]+"><span>"+info[1]+"</span></li>";
		  });
		$("#job_classid").html(skill_val);
	})
})
function checkmore(type,div,size,msg){
	if(msg=="展开"){
		var msg="收起";
		$("#"+type+" a:gt("+size+")").show();
		$("#"+div).html("<a class=\"yun_close  icon\" href=\"javascript:;\" onclick=\"checkmore('"+type+"','"+div+"','"+size+"','"+msg+"');\">"+msg+"</a>");
	}else{
		var msg="展开";
		$("#"+type+" a:gt("+size+")").hide();
		$("#"+div).show();
		$("#"+div).html("<a class=\"yun_open  icon\" href=\"javascript:;\" onclick=\"checkmore('"+type+"','"+div+"','"+size+"','"+msg+"');\">"+msg+"</a>");
	}
}

function checkrest(url){window.location.href="index.php?m="+url;}
function Close(id){
	$("#"+id).hide();
	$("#bg").hide();
}
function check_pl(){
	if($.trim($("#content").val())==""){
		layer.msg('评论内容不能为空！', 2,2);return false;
	}
}
function huifu(id){
	$("#huifu"+id).show();
}
function check_huifu(id){
	if($("#reply"+id).val()==""){
		layer.msg('回复内容不能为空！', 2,2);return false;
	}
}
function addfriend(id,type){
	loadi = layer.load('执行中，请稍候...',0);
	$.post(weburl+"/index.php?m=ajax&c=makefriends",{id:id,type:type},function(data){
		layer.close(loadi);
		if(data=="5"){
			layer.alert('请先登录！', 0, '提示',function(){window.location.href =weburl+"/index.php?m=login&usertype=1";window.event.returnValue = false;return false;   });
		}else if(data=="4"){
			layer.msg('不能添加自己为好友！', 2, 0);return false;
		}else if(data=="3"){
			layer.msg('您未通过身份验证不能添加好友！', 2, 8);return false;
		}else if(data=="2"){
			layer.msg('对方未通过身份审核，不能加其为好友！', 2, 8);return false;
		}else if(data=="1"){
			layer.msg('已提交好友申请，等待对方同意！', 2, 1);return false;
		}else if(data=="6"){
			layer.msg('你们已经好友！', 2, 9);return false;
		}else if(data=="7"){
			layer.msg('已提交好友申请，请耐心等待！', 2, 1);return false;
		}
	});
}
function layer_del(msg,url){
	if(msg==''){
		$.get(url,function(data){
			var data=eval('('+data+')');
			if(data.url=='1'){
				layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.reload();});return false;
			}else{
				layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.href=data.url;});return false;
			}
		});
	}else{
		layer.confirm(msg, function(){
			$.get(url,function(data){
				var data=eval('('+data+')');
				if(data.url=='1'){
					layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.reload();});return false;
				}else{
					layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.href=data.url;});return false;
				}
			});
		});
	}
}
function top_search(M,name){
	$("input[name='m']").val(M);
	$(".header_seach_find_list").hide();
	$('#search_name').html(name)
}
$(document).ready(function(){
	$('#bottom_ad_is_show').val('1');
	var duilian = $("div.duilian");
	var duilian_close = $(".btn_close");
	var scroll_Top = $(window).scrollTop();
	var window_w = $(window).width();
	if(window_w>1000){duilian.show();}
	buttom_ad();
	$("div .duilian").css("top",scroll_Top+200);
	$(window).scroll(function(){
		buttom_ad();
		var scroll_Top = $(window).scrollTop();
		duilian.stop().animate({top:scroll_Top+200});
	});
	duilian_close.click(function(){
		$(this).parents('.duilian').hide();
		return false;
	});
});
function colse_bottom(){
	$("#bottom_ad_fl").parent().hide();
	$('#bottom_ad_is_show').val('0');
}
function buttom_ad(){
	if($("#bottom_ad").length>0&&$("#bottom_ad_is_show").length>0){
		var scrollTop = $(window).scrollTop();
		var w_height=$(document).height();
		var bottom_ad=$("#bottom_ad").offset().top;
		var bottom_ad_fl=$("#bottom_ad_fl").offset().top;
		var poor_height=parseInt(w_height)-parseInt(scrollTop);
		var bottom_ad_is_show=$('#bottom_ad_is_show').val();
		if(window.attachEvent){
			poor_height=parseInt(poor_height)-parseInt(22);
		}
		if(poor_height<=880){
			$("#bottom_ad_fl").parent().hide();
		}else if(bottom_ad_is_show=='1'){
			$("#bottom_ad_fl").parent().show();
		}
	}
}
function returnmessage(frame_id){
	if(frame_id==''||frame_id==undefined){
		frame_id='supportiframe';
	}
	var message = $(window.frames[frame_id].document).find("#layer_msg").val();
	if(message != null){
		var url=$(window.frames[frame_id].document).find("#layer_url").val();
		var layer_time=$(window.frames[frame_id].document).find("#layer_time").val();
		var layer_st=$(window.frames[frame_id].document).find("#layer_st").val();
		if(url=='1'){
			layer.msg(message, layer_time, Number(layer_st),function(){ location.reload();});
		}else if(url==''){
			layer.msg(message, layer_time, Number(layer_st));
		}else{
			layer.msg(message, layer_time, Number(layer_st),function(){location.href = url;});
		}
	}
}
function com_msg(){
	var msg_content=$.trim($("#msg_content").val());
	if(msg_content==''){
		layer.msg('咨询内容不能为空！', 2,2);return false;
	}
}

function job_class(id,type,grade){
	if(type=='f'){
		var height=$("#dt_job_"+id).offset().top;
		$("#layout_job .dt_job_"+grade).removeClass('cur');
		$("#layout_job .dd_job_"+grade).hide();
		if(grade=='1'){
			var top=parseInt(height)-parseInt(615);
			$("#layout_job .dd_job_2").hide();
			$("#layout_job .dt_job_2").removeClass('cur');
		}else{
			var top=34;
		}
		$("#dt_job_"+id).addClass('cur');
		$("#dd_job_"+id).css("top",top);
		$("#dd_job_"+id).fadeIn("slow");
	}else{
		var check_length = $("input[type='checkbox'][name='job_class'][checked]").length;
		if($("#job_"+id).attr("checked")=="checked"){
			if(check_length>=5){
				layer.msg('您最多只能选择五项！', 2,8);
				$("#job_"+id).attr("checked",false);
			}else{
				var value=$("#job_"+id).val();
				$("#job_choosed").append("<span id='span_job_"+id+"'><input id='ck_job_"+id+"'  value='"+id+"' onclick=\"del_ck('job_"+id+"')\" name='job_class' checked='checked' type='checkbox' target='"+value+"'>"+value+"</span>");
			}
		}else{
			$("#span_job_"+id).remove();
		}
	}
}
function job_city(id,type,grade){
	if(type=='province'){
		var height=$("#dt_"+id).offset().top;
		if(grade=='1'){
			var top=parseInt(height)-parseInt(570);
		}else{
			var top=34;
		}
		$("#layout_inner .dt_"+grade).removeClass('cur');
		$("#dt_"+id).addClass('cur');
		$("#layout_inner .dd_"+grade).hide();
		$("#dd_"+id).css("top",top);
		$("#dd_"+id).show();
	}else{
		var check_length = $("input[type='checkbox'][name='select_city'][checked]").length;
		if($("#"+id).attr("checked")=="checked"){
			if(check_length>=5){
				layer.msg('您最多只能选择五个城市！', 2,8);
				$("#"+id).attr("checked",false);
			}else{
				var value=$("#"+id).val();
				$("#choosed").append("<span id='span_"+id+"'><input id='ck_"+id+"'  value='"+id+"' onclick=\"del_ck('"+id+"')\" name='select_city' checked='checked' type='checkbox' target='"+value+"'>"+value+"</span>");
			}
		}else{
			$("#span_"+id).remove();
		}
	}
}
function select_prop(name,id,div){
	var chk_value =[];
	var chk_ids =[];
	$('input[name="'+name+'"]:checked').each(function(){
		chk_value.push($(this).attr('target'));
		chk_ids.push($(this).val());
	});
	if(chk_value.length==0){
		layer.msg('请选择职位类别！', 2,2);return false;
	}else{
		$("#"+id+" dt").removeClass("cur");
		$("#"+id+" dd").hide();
		$("#"+id).val(chk_value);
		$("#"+name).val(chk_ids);
		$("#"+id).removeClass("city_cur");
		$("#"+div).hide();
	}
}
function close_prop(div,id){
	$("#"+div).hide();
	$("#"+id).removeClass("city_cur");
}
function del_ck(id){
	$("#span_"+id).remove();
	$("#"+id).removeAttr("checked");
}
function atn(id){
	if(id){
		$.post(weburl+"/index.php?m=ajax&c=atn_company",{id:id},function(data){
			if(data==1){
				$("#atn_"+id).removeClass('zg-btn-unfollow');
				$("#atn_"+id).addClass('zg-btn-green');
				$("#atn_"+id).html("取消关注");
				var antnum=$("#antnum"+id).html();
				$("#antnum"+id).html(parseInt(antnum)+1);
			}else if(data==2){
				$("#atn_"+id).removeClass('zg-btn-green');
				$("#atn_"+id).addClass('zg-btn-unfollow');
				$("#atn_"+id).html("关注");
				var antnum=$("#antnum"+id).html();
				$("#antnum"+id).html(parseInt(antnum)-1);
			}else if(data==3){
				layer.msg('请先登录！', 2, 8);return false;
			}else if(data==4){
				layer.msg('只有个人用户才可关注', 2, 8);return false;
			}
		});
	}
}
function jsmsg(id){
	var myuid = $("#myuid").val();
	if(myuid==""){
		layer.msg('你还没有登录！', 2, 8);
	}
	$("#msg"+id).show();
}
function showImgDelay(imgObj,imgSrc,maxErrorNum){
    if(maxErrorNum>0){
        imgObj.onerror=function(){
            showImgDelay(imgObj,imgSrc,maxErrorNum-1);
        };
        setTimeout(function(){
            imgObj.src=imgSrc;
        },500);
		maxErrorNum=parseInt(maxErrorNum)-parseInt(1);
    }
}
function reportSub(){
	var authcode=$("#report_authcode").val();
	var r_reason=$("#r_reason").val();
	var r_uid=$("#r_uid").val();
	var id=$("#id").val();
	var r_name=$("#r_name").val();
	if($.trim(r_reason)==""){
		layer.msg('举报内容不能为空！', 2, 8);
		return false;
	}
	$.post("index.php?m=com&c=report",{authcode:authcode,r_reason:r_reason,id:id,r_name:r_name,r_uid:r_uid},function(data){
		layer.closeAll();
		if(data==1){
			layer.msg('验证码不正确！', 2, 8);
		}else if(data==2){
			layer.msg('您已经举报过该用户！', 2, 8);
		}else if(data==3){
			layer.msg('举报成功！', 2, 9);
		}else if(data==4){
			layer.msg('举报失败！', 2, 8);
		}else if(data==5){
			layer.msg('网站已关闭举报功能！', 2, 8);
		}
	})
}
function Remind_show(){
	$(".header_Remind_list").show();
}
function Remind_hide(){
	$(".header_Remind_list").hide();
}