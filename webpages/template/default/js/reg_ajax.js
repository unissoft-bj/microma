
$(function(){
	$(".tips_class").blur(function(){
		var name=$(this).attr('name');
		reg_checkAjax(name);
	});
});
function reg_checkAjax(id){
	var obj = $.trim($("#"+id).val());
	var msg;
	if(id=="username"){
		if(obj==""){
			msg='�û�������Ϊ�գ�';
			return update_html(id,"0",msg);
		}else if(obj.length<2||obj.length>16){
			msg='������2��16λ�û�����';
			return update_html(id,"0",msg);
			return false;
		}else{
			$.post("index.php?m=register&c=ajax_reg",{username:obj},function(data){
				if(data==0){
					msg='��д��ȷ��';
					return update_html(id,"1",msg);
				}else{
					msg="�û����Ѵ��ڣ�";
					return update_html(id,"0",msg);
					return false;
				}
			});
		}
	}

	if(id=="password"){
		if(obj==""){
			 msg='���벻��Ϊ�գ�';
			 return update_html(id,"0",msg);
		 }else if(obj.length<6 || obj.length>20 ){
			 msg='ֻ������6��20λ���룡';
			 return update_html(id,"0",msg);
		 } else{
			 msg='����ɹ���';
			 return update_html(id,"1",msg);
		 }
	}
	if(id=="passconfirm")
	{
		var obj2 = $("#password").val();
		 if(obj==""){
			 msg="��ȷ�����룡";
			 return update_html(id,"0",msg);
		 }else if(obj2!=obj){
			msg="�����������벻ͬ��";
			 return update_html(id,"0",msg);
		}else{
			msg="������ȷ��";
			return update_html(id,"1",msg);
		 }

	}
	if(id=="moblie"){
		var reg= /^[1][3458]\d{9}$/;
		if(obj==''){
			msg="�ֻ��Ų���Ϊ�գ�";
			 return update_html(id,"0",msg);
		}else if(!reg.test(obj)){
			msg="�ֻ������ʽ����";
			 return update_html(id,"0",msg);
		 }else{
			$.post("index.php?m=register&c=regmoblie",{moblie:obj},function(data){
				if(data==0){
					msg='��д��ȷ��';
					return update_html(id,"1",msg);
				}else{
					msg="�����Ѵ��ڣ�";
					return update_html(id,"0",msg);
					return false;
				}
			});
		 }

	}
	if(id=="address"){
		 if(obj==""){
			msg="��ַ����Ϊ�գ�";
			 return update_html(id,"0",msg);
		 }else{
			msg="����ɹ���";
			return update_html(id,"1",msg);
		 }
	}
	if(id=="unit_name"){
		 if(obj==""){
			msg="��˾���Ʋ���Ϊ�գ�";
			return update_html(id,"0",msg);
		 }else{
			msg="����ɹ���";
			return update_html(id,"1",msg);
		 }
	}
	if(id=="email"){
	   var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	   if(!myreg.test(obj)){
			msg="�����ʽ����";
			return update_html(id,"0",msg);
	   }else{
		$.post("index.php?m=register&c=ajax_reg",{email:obj},function(data){
			if(data==0){
				msg="����ɹ���";
				return update_html(id,"1",msg);
			}else{
				msg="�����ѱ�ʹ�ã�";
				return update_html(id,"0",msg);
			}
		});
	   }
	}
}
function update_html(id,type,msg){
	$("#check_"+id).val(type);
	$("#ajax_"+id).html(msg);
	if(type=="0"){
		$("#"+id).attr('date','0');
		layer.tips(msg, "#"+id, {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:1px', '#F26C4F']});
	}else{
		$("#"+id).attr('date','1');
		$("#"+id).addClass('logoin_text_success');
	}
}
function check_user(){
	var loadi = layer.load('����ע�ᡭ��',0);
	var username=$.trim($("#username").val());
	var password=$.trim($("#password").val());
	var passconfirm=$.trim($("#passconfirm").val());
	var email=$.trim($("#email").val());
	var moblie=$.trim($("#moblie").val());
	var authcode=$.trim($("#txt_CheckCode").val());
	if($("#username").attr('date')!="1"||$("#password").attr('date')!="1"||$("#email").attr('date')!="1"||$("#moblie").attr('date')!="1"||$("#passconfirm").attr('date')!="1"){
		var vid=$("input[date!='1']").attr('id');
		layer.msg('����ȷ����������Ϣ��', 2, 8,function(){if(vid){var msg=$("#ajax_"+vid).html();layer.tips(msg, "#"+vid, {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:1px', '#F26C4F']});}});
	}else{
		if($("#xieyi").attr("checked")!='checked'){
			layer.msg('������ͬ��ע��Э����ܳ�Ϊ��վ��Ա��', 2, 8);return false;
		}else{
			$.post("index.php?m=register&c=regsave",{username:username,passconfirm:passconfirm,password:password,email:email,moblie:moblie,authcode:authcode,usertype:1},function(msg){
				layer.close(loadi);
				if(msg==1){
					window.location.href=weburl+"/member/index.php?c=info";//ע��ɹ�
				}else{
					var date=msg.split("##");
					layer.msg(date[1], 2, date[0]);return false;
				}
			});
		}
	}
}
function check_com(){
	var username=$.trim($("#username").val());
	var password=$.trim($("#password").val());
	var passconfirm=$.trim($("#passconfirm").val());
	var email=$.trim($("#email").val());
	var moblie=$.trim($("#moblie").val());
	var address=$.trim($("#address").val());
	var unit_name=$.trim($("#unit_name").val());
	var authcode=$.trim($("#txt_CheckCode").val());
	var loadi = layer.load('����ע�ᡭ��',0);
	if($("#username").attr('date')!="1"||$("#password").attr('date')!="1"||$("#passconfirm").attr('date')!="1"||$("#email").attr('date')!="1"||$("#moblie").attr('date')!="1"||$("#address").attr('date')!="1"||$("#unit_name").attr('date')!="1"){
		var vid=$("input[date!='1']").attr('id');
		layer.msg('����ȷ����������Ϣ��', 2, 8,function(){if(vid){var msg=$("#ajax_"+vid).html();layer.tips(msg, "#"+vid, {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:1px', '#F26C4F']});}});
	}else{
		if($("#xieyi").attr("checked")!='checked'){
			layer.msg('������ͬ��ע��Э����ܳ�Ϊ��վ��Ա��', 2, 8);return false;
		}else{
			$.post("index.php?m=register&c=regsave",{username:username,passconfirm:passconfirm,password:password,email:email,moblie:moblie,address:address,unit_name:unit_name,authcode:authcode,usertype:2},function(msg){
				layer.close(loadi);
				if(msg==1){
					window.location.href=weburl+"/member/index.php";//ע��ɹ�
				}else{
					var data=msg.split('##');
					if(data[0]==8){
						layer.msg(data[1], 2, 8);
					}else if(data[0]==7){
						layer.msg(data[1], 2, 9,function(){location.href =weburl;});
					}
				}
			});
		}
	}
}
function checklogin(){
	if($.trim($("#loginname").val())==""||$.trim($("#loginpassword").val())==""){
		$("#error_login").html("<font color='red'>�û��������벻��Ϊ�գ�</font>");return false;
	}else{return true;}
}
//--------------------------------------------------------------------------------------
function check_login(){
	var username=$("#username").val();
	var password=$("#password").val();
	var usertype=$("#usertype").val();
	if($("input[name=loginname]").attr("checked")=='checked'){
		var loginname=1;
	}else{
		var loginname=0;
	}
	var path=$("#path").val();
	if(username=="" || username=="�û���"){
		$("#show_name").show();
		$("#username").focus(
		    function(){
		       $("#show_name").hide();
		    }
		);
		return false;
	}else{
	    $("#show_name").hide();
	}
	if(password==""){
		$("#show_pass").show();
		$("#password").focus(
		    function(){
			    $("#show_pass").hide();
			}
		);
		return false;
	}else{
	    $("#show_pass").hide();
	}
	var authcode=$("#txt_CheckCode").val();
	$.post("index.php?m=login&c=loginsave",{username:username,password:password,usertype:usertype,path:path,loginname:loginname,authcode:authcode},function(data){
		if(data.indexOf('script')>0 || data==1)
		{
			if(data.indexOf('script'))
			{
				layer.load('��½��,���Ժ�...');
				$('#uclogin').html(data);
				setTimeout("window.location.href='"+weburl+"/member';",500);
			}else{
				window.location.href=weburl+"/member";
			}
		}else if(data==2){

			window.location.href=weburl+"/member/index.php?c=info";

		}else{
			layer.msg(data, 2, 8);
		}
	})
}
function checktype(id){
	$(".log_cur").attr("class","");
	$("#usertype"+id).attr("class","log_cur");
	$("#usertype").val(id);
	var url=$("#regurl").attr("href");
	if(id==1){
		url=url.replace("2",1);
	}else{
		url=url.replace("1",2);
	}
	$("#regurl").attr("href",url);
}