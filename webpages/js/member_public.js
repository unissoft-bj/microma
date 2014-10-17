var timestamp=Math.round(new Date().getTime()/1000);
function check_code(){
	document.getElementById("vcode_img").src="include/authcode.inc.php?"+Math.random();
}
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
function addfriend(id,type){
	$.post(weburl+"/index.php?m=ajax&c=makefriends",{id:id,type:type},function(data){
		if(data=="5"){
			layer.alert('���ȵ�¼��', 0, '��ʾ',function(){window.location.href ="index.php?m=login&usertype=1"; window.event.returnValue = false;return false;});
		}else if(data=="4"){
			layer.msg('��������Լ�Ϊ���ѣ�', 2, 0);return false;
		}else if(data=="3"){
			layer.msg('��δͨ�������֤������Ӻ��ѣ�', 2, 8);return false;
		}else if(data=="2"){
			layer.msg('�Է�δͨ�������ˣ����ܼ���Ϊ���ѣ�', 2, 8);return false;
		}else if(data=="1"){
			layer.msg('���ύ�������룬�ȴ��Է�ͬ�⣡', 2, 1);return false;
		}else if(data=="6"){
			layer.msg('�����Ѿ����ѣ�', 2, 9);return false;
		}else if(data=="7"){
			layer.msg('���ύ�������룬�����ĵȴ���', 2, 1);return false;
		}
	});
}
function buyad(){
	if($.trim($('#ad_name').val())==''){
		layer.msg('�����������ƣ�', 2, 2);return false;
	}
	if($.trim($('#pic_url').val())==''){
		layer.msg('��ѡ����ͼƬ��', 2, 2);return false;
	}
	if($.trim($('#pic_src').val())==''){
		layer.msg('�����������ӣ�', 2, 2);return false;
	}
	if($.trim($('#buy_time').val())==''){
		layer.msg('�����빺��ʱ�䣡', 2, 2);return false;
	}
	buy_vip_ad();
}
function buy_vip_ad(){
	var value=$("input[name=buytype]:checked").val();
	var service_price=$("input[name=service_price]").val();
	var integral_buy=$("input[name=integral_buy]").val();
	var unit_buy=$("input[name=unit_buy]").val();
	var name="";
	if(value==1){
		name=service_price+"Ԫ";
	}else{
		name=integral_buy+unit_buy;
	}
	layer.confirm("�����������۳�"+name+"���Ƿ������",function(){
		setTimeout(function(){$('#myform').submit()},0);
	});
}
$(document).ready(function(){
	$("#dingdan_submit").click(function(){
		var paytype=$("input[name=p1]:checked").val();
		var order=$("input[name=dingdan]").val();
		$.post(weburl+"/index.php?m=ajax&c=order_type",{order:order,paytype:paytype},function(data){return false;})
	})
	$("input[name=default_resume]").click(function(){
		var value=$(this).val();
		$.post(weburl+"/index.php?m=ajax&c=default_resume",{eid:value},function(data){
			if(data==0){
				layer.alert('���ȵ�¼��', 0, '��ʾ',function(){window.location.href ="index.php?m=login&usertype=1";window.event.returnValue = false;return false;});
			}else if(data==1){
				layer.msg('���óɹ���', 2, 9);return false;
			}else{
				layer.msg('ϵͳ�������Ժ����ԣ�', 2, 8);return false;
			}
		})
	})
	$("input[name=buytype]").click(function(){
		var value=$("input[name=buytype]:checked").val();
		if(value==1){
			$("#span_service_price").show();
			$("#span_integral_buy").hide();
		}else{
			$("#span_integral_buy").show();
			$("#span_service_price").hide();
		}
	})
	$(".seemsg").click(function(){
		var id=$(this).attr("id");
		$.post("index.php?c=up_msg",{id:id},function(msg){
			if(msg==1){
				$(".msgcontent").hide();
				$("#msg"+id).show();
			}else{
				layer.msg('�Ƿ�������', 2, 0);return false;
			}
		});
	})

	$("#colse_box").click(function(){$('.job_box').hide();})
	$("#price_int").blur(function(){
		var value=$(this).val();
		var proportion=$(this).attr("int");
		$("#com_vip_price").val(value/proportion);
		$("#span_com_vip_price").html(value/proportion);
	})
	$("#comvip").change(function(){
		var value=$("#comvip option:selected").attr("price");
		if(value!=""){
			$("#com_vip_price").val(value);
			$("#span_com_vip_price").html(value);
		}else{
			$("#com_vip_price").val('0');
			$("#span_com_vip_price").html('0');
		}
	})
	$(".province").change(function(){
		var province=$(this).val();
		var lid=$(this).attr("lid");
		if(province==""){
			$("#"+lid+" option").remove()
			$("<option value='0'>��ѡ�����</option>").appendTo("#"+lid);
			lid2=$("#"+lid).attr("lid");
			if(lid2){
				$("#"+lid2+" option").remove();
				$("<option value='0'>��ѡ�����</option>").appendTo("#"+lid2);
				$("#"+lid2).hide();
			}
		}

		$.post(weburl+"/index.php?m=ajax&c=ajax&"+timestamp, {"str":province},function(data) {
			if(lid!="" && data!=""){
				$('#'+lid+' option').remove();
				$(data).appendTo("#"+lid);
				city_type(lid);
			}
		})
	})
	$(".job1").change(function(){
		var province=$(this).val();
		var lid=$(this).attr("lid");
		$.post(weburl+"/index.php?m=ajax&c=ajax_job&"+timestamp, {"str":province},function(data) {
			if(lid!="" && data!=""){
				$('#'+lid+' option').remove();
				$(data).appendTo("#"+lid);
				job_type(lid);
			}
		})
	})
	$(".jobone").change(function(){
		var province=$(this).val();
		var lid=$(this).attr("lid");
		$.post(weburl+"/index.php?m=ajax&c=ajax_ltjob&"+timestamp, {"str":province},function(data) {
			if(lid!="" && data!=""){
				$('#'+lid+' option').remove();
				$(data).appendTo("#"+lid);
			}
		})
	})
})

function city_type(id){
	var id;
	var province=$("#"+id).val();
	var lid=$("#"+id).attr("lid");
	$.post(weburl+"/index.php?m=ajax&c=ajax&"+timestamp, {"str":province},function(data) {
		if(lid!=""){
			if(lid!="three_cityid" && lid!="three_city" && data!=""){
				$('#'+lid+' option').remove();
				$(data).appendTo("#"+lid);
			}else{
				if(data!=""){
					$('#'+lid+' option').remove();
					$(data).appendTo("#"+lid);
					$('#'+lid).show();
				}else{
					$('#'+lid+' option').remove();
					$("<option value='0'>��ѡ�����</option").appendTo("#"+lid);
					$('#'+lid).hide();
				}
			}
		}
	})
}
function job_type(id){
	var id;
	var province=$("#"+id).val();
	var lid=$("#"+id).attr("lid");
	$.post(weburl+"/index.php?m=ajax&c=ajax_job&"+timestamp, {"str":province},function(data) {
		if(lid!="" && data!=""){
			$('#'+lid+' option').remove();
			$(data).appendTo("#"+lid);
		}
	})
}
function check_form(ifidname,byidname){
	var ifidname;
	var byidname;
	if (ifidname){
		var msg=$("#"+byidname).html();
		layer.msg(msg, 2, 8);return false;
	}else{
		$("#"+byidname).hide();
		return true;
	}
}

function check_email(strEmail) {
	 var emailReg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	 if (emailReg.test(strEmail))
	 return true;
	 else
	 return false;
 }
function isjsMobile(obj){
	if(obj.length!=11) return false;
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="14"&& obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
}

function isIdCardNo(idcard) {
        var Errors=new Array( "0,��֤ͨ��!", "1,���֤����λ������!", "2,���֤����������ڳ�����Χ���зǷ��ַ�!", "3,���֤����У�����!", "4,���֤�����Ƿ�!");
        var area={11:"����",12:"���",13:"�ӱ�",14:"ɽ��",15:"���ɹ�",21:"����",22:"����",23:"������",31:"�Ϻ�",32:"����",33:"�㽭",34:"����",35:"����",36:"����",37:"ɽ��",41:"����",42:"����",43:"����",44:"�㶫",45:"����",46:"����",50:"����",51:"�Ĵ�",52:"����",53:"����",54:"����",61:"����",62:"����",63:"�ຣ",64:"����",65:"�½�",71:"̨��",81:"���",82:"����",91:"����"}
        var idcard,Y,JYM;
        var S,M;
        var idcard_array = new Array();
        idcard_array = idcard.split("");
        if(area[parseInt(idcard.substr(0,2))]==null) return false;
        switch(idcard.length){
              case 18:{
                  if( parseInt(idcard.substr(6,4)) % 4 == 0 || (parseInt(idcard.substr(6,4)) % 100 == 0 && parseInt(idcard.substr(6,4))%4 == 0 )){
                       ereg=/^[1-9][0-9]{5}(19|20|21|22)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}[0-9Xx]$/;
                  } else {
                        ereg=/^[1-9][0-9]{5}(19|20|21|22)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}[0-9Xx]$/;
                  }
                  if(ereg.test(idcard)){
                        S = (parseInt(idcard_array[0]) + parseInt(idcard_array[10])) * 7
                        + (parseInt(idcard_array[1]) + parseInt(idcard_array[11])) * 9
                        + (parseInt(idcard_array[2]) + parseInt(idcard_array[12])) * 10
                        + (parseInt(idcard_array[3]) + parseInt(idcard_array[13])) * 5
                        + (parseInt(idcard_array[4]) + parseInt(idcard_array[14])) * 8
                        + (parseInt(idcard_array[5]) + parseInt(idcard_array[15])) * 4
                        + (parseInt(idcard_array[6]) + parseInt(idcard_array[16])) * 2
                        + parseInt(idcard_array[7]) * 1
                        + parseInt(idcard_array[8]) * 6
                        + parseInt(idcard_array[9]) * 3 ;
                        Y = S % 11;
                        M = "F";
                        JYM = "10X98765432";
                        M = JYM.substr(Y,1);
                        if(M == idcard_array[17]) return true;
                        else return false;
                  }else return false;
                  break;
              }
              default:{
                    return false;
                    break;
              }
        }
		return false;
    }
function checkDate(date){return true;}
$(document).ready(function(){
	$("#wysc").click(function(){
		$("#uploadname").val('');
		$("#upload_img").css("top","10%");
		$("#upload_img").show();
		$("#bg").show();
	})
	$("#qd").click(function(){
		var name=$("#uploadname").val();
		if(name==""){$("#close").click();return false;}
		var namearr=name.split("###");
		var i,upload="";
		for(i=0;i<namearr.length;i++){
			var num=i+1;
			upload+='<dd style="height:auto;" id="list'+i+'"><div style="float:left;"><img src="..'+namearr[i]+'" width="100" height="100"/></div><div style="float:left; margin-left:10px; line-height:30px;"><div><input class="imgshow" type="hidden" value="'+namearr[i]+'" />���ƣ�<input class="titleshow" type="text" size="28" maxlength="10" value="����չʾ'+num+'" /></div><div style="text-align:left;"><a href="javascript:del_upload(\''+namearr[i]+'\',\''+i+'\');">ȡ��ɾ��</a></div></div><div style="clear:both; height:5px;"></div></dd>';
		}
		$("#trlistone dl").html(upload);
		$("#trlistone").show();
		$("#trlisttwo").hide();
		$("#close").click();
	})
	$("#close").click(function(){
		$("#upload_img").hide();
		$("#bg").hide();
	})
})
function del_upload(dir,list){
	$.post(weburl+"/index.php?m=ajax&c=delupload&"+timestamp, {"str[]":[dir]},function(data) {
		if(data){
			$("#list"+list).remove();
			var upload=$("#trlistone dl").html();
			if(upload==""){
				$("#trlistone").hide();
				$("#trlisttwo").show();
			}
		}
	})
}
$(document).ready(function(){
	$("#renzheng-scrool li").click(function(){
		$("#renzheng-scrool li").attr("class","");
		$(this).attr("class","hover");
		var name=$(this).attr("name");
		$(".renzheng").hide();
		$("#"+name+"_rz").show();
	})
	$("#email_cert").blur(function(){
		var email=$(this).val();
		if(check_email(email)){
			$("#email_cert_id").css("color","green");
			$("#email_cert_id").html("��ȷ");
		}else{
			$("#email_cert_id").css("color","red");
			$("#email_cert_id").html("��ʽ����ȷ");
		}
	})
	$("#email_btn").click(function(){
		var email=$("#email_cert_id").html();
		if(email!="��ȷ"){
			$("#email_cert_id").css("color","red");
			$("#email_cert_id").html("����ȷ��д");
			return false;
		}
		var emailval=$("#email_cert").val();
		layer.load('ִ���У����Ժ�...',0);
		$.post(weburl+"/index.php?m=ajax&c=emailcert&"+timestamp, {"str[]":[emailval]},function(data) {
			layer.closeAll();
			if(data){
				if(data=="3"){
					$("#erroremail").html("<font color='red'>�ʼ�û�����ã�����ϵ����Ա��</font>");
				}
				if(data=="2"){
					$("#erroremail").html("<font color='red'>�ʼ�֪ͨ�ѹرգ�����ϵ����Ա��</font>");
				}
				$("#email_rz .clearfix").attr("class","flow_step_no5 clearfix");
				$("#email_step1").hide();
				$("#email_step2").show();
			}else{
				$("#email_cert_id").css("color","red");
				$("#email_cert_id").html("�����µ�¼");
			}
		})
	})
	$("#moblie_cert").blur(function(){
		var email=$(this).val();
		if(isjsMobile(email)){
			$("#moblie_cert_id").css("color","green");
			$("#moblie_cert_id").html("��ȷ");
		}else{
			$("#moblie_cert_id").css("color","red");
			$("#moblie_cert_id").html("��ʽ����ȷ");
		}
	})
	$("#moblie_btn").click(function(){
		var email=$("#moblie_cert_id").html();
		var valuename=$("#moblie_btn").val();
		if(email!="��ȷ"){
			$("#moblie_cert_id").css("color","red");
			$("#moblie_cert_id").html("����ȷ��д");
			return false;
		}
		var moblieval=$("#moblie_cert").val();
		layer.load('ִ���У����Ժ�...',0);
		$.post(weburl+"/index.php?m=ajax&c=mobliecert&"+timestamp, {"str[]":[moblieval]},function(data) {
			layer.closeAll();
			if(data=="0"){
				$("#email_cert_id").css("color","red");
				$("#email_cert_id").html("�����µ�¼");
			}else{
				if(data=="3"){
					$("#errormsg").html("<font color='red'>����֪ͨ�ѹرգ�����ϵ����Ա��</font>");
					$("#time").hide();
				}else{
					send(121);
				}
				$("#moblie_rz .clearfix").attr("class","flow_step_no2 clearfix");
				$("#moblie_step1").hide();
				$("#moblie_step2").show();
			}
		})
	})
	$("#moblie_submit").click(function(){
		var email_code=$("#moblie_code_id").html();
		var mobliecode=$("#moblie_code").val();
		$.post(weburl+"/index.php?m=ajax&c=mobliecode&"+timestamp, {"str[]":[mobliecode]},function(data) {
			if(data==0){
				$("#moblie_code_id").css("color","red");
				$("#moblie_code_id").html("�����µ�¼");
				return false;
			}else if(data==2){
				$("#moblie_code_id").css("color","red");
				$("#moblie_code_id").html("��֤�벻��ȷ");
				return false;
			}else if(data==3){
				$("#moblie_code_id").css("color","red");
				$("#moblie_code_id").html("��֤ʧ�ܣ�����ϵ����Ա");
				return false;
			}else if(data==1){
				$("#moblie_rz .clearfix").attr("class","flow_step_no3 clearfix");
				$("#moblie_step2").hide();
				$("#moblie_step3").show();
			}
		})
	})
	$("#details-ul li").click(function(){
		$("#details-ul li").attr("class","");
		$(this).attr("class","hover");
		$(".xinxi-guanli-box").hide();
		var name=$(this).attr("name");
		$("#details-con-"+name).show();
	})
	$(".looklist").click(function(){
		var statusbody=$(this).attr("statusbody");
		if(statusbody){
			layer.alert(statusbody, -1, !1);
		}
	})
})
function send(i){
	i--;
	if(i==-1){
		document.getElementById("time").value="���»�ȡ";
		location.href='';
		return null;
	}
	 document.getElementById("time").value= i+"��";
	 setTimeout("send("+i+");",1000);
}

function ajaxFileUpload(){
	if($("#fileToUpload").val()==''){
		$("#yyzz_cert_id").css("color","red");
		$("#yyzz_cert_id").html("��ѡ��ͼƬ");
		return;}
	$.ajaxFileUpload({
			url:'index.php?c=uploadcert',
			secureuri:false,
			fileElementId:'fileToUpload',
			dataType: 'json',
			data:{name:'logan', id:'id'},
			success: function (data,status){
				if(data.url=='0'){
					 window.location.href="index.php?c=cert&type=3";
				}else if(data.url!='1'&& data.url!='2'&&data.url!='3'&&data.url!='4'){
					$("#yyzz_rz .clearfix").attr("class","flow_step_no5 clearfix");
					$("#yyzz_step1").hide();
					$("#yyzz_step2").show();
				}else{
					$("#yyzz_cert_id").css("color","red");
					$("#yyzz_cert_id").html(data.s_thumb+"�ϴ�ʧ�ܣ�����ϵ����Ա");
				}
			}
		}
	)
	return false;
}
function checkshare(){
	var re = /^-?[0-9]*(\.\d*)?$|^-?d^(\.\d*)?$/;
	var smallday = $.trim($("#smallday").val());
	if(smallday!=""){
		if (!re.test(smallday)){
			layer.msg('����������д����ȷ��', 2, 8);return false;
		}
	}else{
		layer.msg('������������Ϊ�գ�', 2, 8);return false;
	}
	return true;
}

$(function(){
	$(".zphstatus").click(function(){
		var zid=$(this).attr("zid");
		var pid=$(this).attr("pid");
		$.get(weburl+"/index.php?m=ajax&c=getzphcom&jobid="+pid+"&zid="+zid, function(data){
		    var data=eval('('+data+')');
			$("#title").html(data.title);
			$("#stime").html(data.starttime);
			$("#etime").html(data.endtime);
			$("#address").html(data.address);
			$("#cname").html(data.content);
			$.layer({
				type : 1,
				title :'�ҵ�ְλ',
				offset: [($(window).height() - 380)/2 + 'px', ''],
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['380px','auto'],
				page : {dom :"#infobox"}
			});
		});
	});

});
function left_banner(id){
	var style=document.getElementById('left'+id).style.display;
	if(style=="none"){
		$("#left"+id).show();
	}else{
		$("#left"+id).hide();
	}
}
function m_checkAll(form){
	for (var i=0;i<form.elements.length;i++){
		var e = form.elements[i];
		if (e.Name != 'checkAll'&&e.disabled==false)
		e.checked = form.checkAll.checked;
	}
}
function really(name){
	var chk_value =[];
	$('input[name="'+name+'"]:checked').each(function(){
		chk_value.push($(this).val());
	});
	if(chk_value.length==0){
		layer.msg("��ѡ��Ҫɾ�������ݣ�",2,8);return false;
	}else{
		layer.confirm("ȷ��ɾ����",function(){
			setTimeout(function(){$('#myform').submit()},0);
		});
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
function CheckForm(){
	var chk_value =[];
	$('input[name="usertype"]:checked').each(function(){
		chk_value.push($(this).val());
	});
	if(chk_value.length==0){
		layer.msg("��ѡ�������ͣ�",2,8);return false;
	}
}
function pay_form(name){
	if($("#comvip").length!=0&&$("#comvip").val()==''){
		layer.msg("��ѡ�������ͣ�",2,8);return false;
	}
	if($("#price_int").length!=0&&$("#price_int").val()<1){
		layer.msg(name,2,8);return false;
	}
}
function Showsub1(){
	var oldpass = $("#oldpassword").val();
	var pass = $("#password").val();
	var repass = $("#repassword").val();
	oldpass=$.trim(oldpass);
	pass=$.trim(pass);
	repass=$.trim(repass);
	var flag = true;
	if(oldpass==""){
		$("#msg_oldpassword").html("<font color='red'>ԭʼ���벻��Ϊ��!</font>");
		flag = false;
	} else if(oldpass.length<6 || oldpass.length>20){
		$("#msg_oldpassword").html("<font color='red'>�������� 6-20���ַ�֮��!</font>");
		flag = false;
	} else{
		$("#msg_oldpassword").html("<font color='#008000'>����ɹ�!</font>");
	}
	if(pass==""){
		$("#msg_password").html("<font color='red'>�����벻��Ϊ��!</font>");
		flag = false;
	}else if(pass.length<6 || pass.length>20){
		$("#msg_password").html("<font color='red'>���������� 6-20���ַ�֮��!</font>");
		flag = false;
	}else{
		$("#msg_password").html("<font color='#008000'>����ɹ�!</font>");
	}
	if(repass==""){
		$("#msg_repassword").html("<font color='red'>���ٴ�ȷ��������!</font>");
		flag = false;
	}else if(repass.length<6 || repass.length>20){
		$("#msg_repassword").html("<font color='red'>���������� 6-20���ַ�֮��!</font>");
		flag = false;
	} if(repass!=pass){
		$("#msg_repassword").html("<font color='red'>�����������벻һ�£�����������!</font>");
		flag = false;
	}else if(repass==pass && repass!=""){
		$("#msg_repassword").html("<font color='#008000'>����ɹ�!</font>");
	}
	return flag;
}


function reply_xin(id,name,content){
	$("#fid").val(id);
	$("#wnc").html("<div class='Reply_cont_name'><font color='#0066FF'>"+name+"</font> �������ԣ�</div>"+content);
	$("#reply").show();
}
function check_xin(){
	if($("#content").val()==""){
		layer.msg('�ظ����ݲ���Ϊ�գ�', 2, 2);return false;
	}
}
function Showsub(){
	 var title = $("#title").val();
	 var con = $("#content").val();
	 con=$.trim(con);
	 if(title==""){layer.msg('����д���Ա��⣡', 2, 2);return false;}
	 if(con==""){layer.msg('����д�������ݣ�', 2, 2);return false;}
}
function zhankaiShouqi(control){
	$(control).parent().find('.job_add_y_list:gt(3)').slideToggle();
	if($(control).html()=='����'){
		$(control).html('����');
	}else{
		$(control).html('����');
	}
}

$(function(){
  $('body').click(function(evt) {
	if($(evt.target).parents("#job_hy").length==0 && evt.target.id != "hy") {
	   $('#job_hy').hide();
	}
	if($(evt.target).parents("#job_qyhy").length==0 && evt.target.id != "qyhy") {
	   $('#job_qyhy').hide();
	}
	if($(evt.target).parents("#job_pr").length==0 && evt.target.id != "pr") {
	   $('#job_pr').hide();
	}
	if($(evt.target).parents("#job_lt_salary").length==0 && evt.target.id !="lt_salary"){
	    $('#job_lt_salary').hide();
	}
	if($(evt.target).parents("#job_lt_full").length==0 && evt.target.id !="lt_full"){
	    $('#job_lt_full').hide();
	}
	if($(evt.target).parents("#job_salary").length==0 && evt.target.id != "salary") {
	   $('#job_salary').hide();
	}
	if($(evt.target).parents("#job_report").length==0 && evt.target.id != "report") {
	   $('#job_report').hide();
	}
	if($(evt.target).parents("#job_province").length==0 && evt.target.id != "province") {
	   $('#job_province').hide();
	}
	if($(evt.target).parents("#job_twocity").length==0 && evt.target.id != "twocity") {
	   $('#job_twocity').hide();
	}
	if($(evt.target).parents("#job_threecity").length==0 && evt.target.id != "threecity") {
	   $('#job_threecity').hide();
	}
	if($(evt.target).parents("#job_skillc").length==0 && evt.target.id != "skillc") {
	   $('#job_skillc').hide();
	}
	if($(evt.target).parents("#job_level").length==0 && evt.target.id != "level") {
	   $('#job_level').hide();
	}
	if($(evt.target).parents("#job_marriage").length==0 && evt.target.id != "marriage") {
	   $('#job_marriage').hide();
	}
	if($(evt.target).parents("#job_educ").length==0 && evt.target.id != "educ") {
	   $('#job_educ').hide();
	}
	if($(evt.target).parents("#job_edu").length==0 && evt.target.id != "edu") {
	   $('#job_edu').hide();
	}
	if($(evt.target).parents("#job_type").length==0 && evt.target.id != "type") {
	   $("#job_type").hide();
	}
	if($(evt.target).parents("#job_edu").length==0 && evt.target.id != "edu") {
	   $('#job_edu').hide();
	}
	if($(evt.target).parents("#job_mun").length==0 && evt.target.id != "mun") {
	   $("#job_mun").hide();
	}
	if($(evt.target).parents("#job_exp").length==0 && evt.target.id != "exp") {
	   $("#job_exp").hide();
	}
	if($(evt.target).parents("#job_qypr").length==0 && evt.target.id != "qypr") {
	   $("#job_qypr").hide();
	}
	if($(evt.target).parents("#job_mun").length==0 && evt.target.id != "mun") {
	   $("#job_mun").hide();
	}
	if($(evt.target).parents("#job_qyprovince").length==0 && evt.target.id != "qyprovince") {
	   $("#job_qyprovince").hide();
	}
	if($(evt.target).parents("#job_ltage").length==0 && evt.target.id != "ltage") {
	   $("#job_ltage").hide();
	}
	if($(evt.target).parents("#job_ltsex").length==0 && evt.target.id != "ltsex") {
	   $("#job_ltsex").hide();
	}
	if($(evt.target).parents("#job_type1").length==0 && evt.target.id != "jobone_name") {
	   $("#job_type1").hide();
	}

	if($(evt.target).parents("#job_ltexp").length==0 && evt.target.id != "ltexp") {
	   $("#job_ltexp").hide();
	}
	if($(evt.target).parents("#job_citys").length==0 && evt.target.id != "citys") {
	   $("#job_citys").hide();
	}
	if($(evt.target).parents("#job_three_city").length==0 && evt.target.id != "three_city") {
	   $("#job_three_city").hide();
	}
	if($(evt.target).parents("#job_ltedu").length==0 && evt.target.id != "ltedu") {
	   $("#job_ltedu").hide();
	}
	if($(evt.target).parents("#job_basic_info").length==0 && evt.target.id != "basic_info") {
	   $("#job_basic_info").hide();
	}
	if($(evt.target).parents("#job_job1").length==0 && evt.target.id != "job1") {
	   $("#job_job1").hide();
	}
	if($(evt.target).parents("#job_job1_son").length==0 && evt.target.id != "job1_son") {
	   $("#job_job1_son").hide();
	}
	if($(evt.target).parents("#job_job_post").length==0 && evt.target.id != "job_post") {
	   $("#job_job_post").hide();
	}
	if($(evt.target).parents("#job_number").length==0 && evt.target.id !="number"){
	    $('#job_number').hide();
	}
    if($(evt.target).parents("#job_age").length==0 && evt.target.id !="age"){
	    $('#job_age').hide();
	}
	if($(evt.target).parents("#job_sex").length==0 && evt.target.id !="sex"){
	    $("#job_sex").hide();
	}
   });
})
function selects(id,type,name){
	$("#job_"+type).hide();
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
}


function select_city(id,type,name,gettype,ptype){
	$("#job_"+type).hide();
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
	if(type=='qyprovince'){
		$("#citysid").val('');
	}
	if(type=='province'){
		$("#citys").val('��ѡ�����');
		$("#three_city").val('��ѡ�����');
		$("#citysid").val('');
		$("#three_cityid").val('');
	}
	if(type=='job1'){
		$("#job1_son").val('��ѡ��ְλ');
		$("#job1_sonid").val('');
		$("#job_post").val('��ѡ��ְλ');
		$("#job_postid").val('');
	}
	$.post(weburl+"/index.php?m=ajax&c=ajax_city",{id:id,gettype:gettype,ptype:ptype},function(data){
		if(ptype=='job'){
			$("#job_"+gettype).html(data);
			if(gettype=="job1_son"){
				if(data==""){
					$("#job_"+gettype).hide();
				}else{
					$("#job_"+gettype).show();
				}
			}else if(gettype=="job_post"){
				$("#job_post").parents().show();
				$("#job_"+gettype).show();
			}
		}else{
			if(gettype=="citys"){$("#"+gettype).val("��ѡ�����");}
			$("#job_"+gettype).html(data);
			if(type=='citys'){
				$("#cityshowth").show();
			}
		}
	})
}
function selectjobone(id,type,name,gettype){
	$("#"+type).val(id);
	$("#"+type+"_name").val(name);
	$("#jobtwo").val("");
	$("#jobtwo_name").val("��ѡ��");
	$.post(weburl+"/index.php?m=ajax&c=ajax_ltjobone&"+timestamp, {"str":id},function(data) {
		if(data!=""){
			$('#job_type2').find("ul").html(data);
		}
	});
	$("#job_type1").hide();
}
function selectjobtwo(id,type,name,gettype){
	$("#"+type).val(id);
	$("#"+type+"_name").val(name);
	$("#job_type2").hide();
}
function checktpl(id){

	var	buytpl=$("#buytpl_"+id).val();
	var name=$("input[name=tplname"+id+"]").val();
	var msg;
	var p=$("#list_tpl_"+id).html().replace("ģ��۸�","");
	$('#tplid').val(id);
	if(buytpl==1){
		msg="���Ѿ������������ʹ�ã�";
	}else{
		msg="ȷ��ʹ��"+name+",�۳�"+p+"��";
	}
	layer.confirm(msg,function(){
		setTimeout(function(){$('#myform').submit()},0);
	});
}
function job_refresh(){
	layer.confirm("ˢ�´��������꣬�Ƿ��ȹ�����Ȩ��",function(){
		window.location.href =weburl+"/member/index.php?c=pay";window.event.returnValue = false;return false;
	});
}
function invoice_link(type){
	if(type=='2'){$(".payment_fp_touch_in").show();}else{$(".payment_fp_touch_in").hide();}
}
function del_pay(oid){
	layer.confirm('�Ƿ�ȡ���ö�����', function(){
		$.get("index.php?c=del_pay&id="+oid,function(msg){
			if(msg=='0'){
				layer.msg('�Ƿ�������', 2, 0);return false;
			}else{
				layer.msg('ȡ���ɹ���', 2, 9,function(){location.reload();});return false;
			}
		});
	});
}
function paylog_remark(){
	var id=$("#paylog_id").val();
	var content=$.trim($("#alertcontent").val());
	if(id<1){
		layer.msg('�Ƿ�������', 2, 8);return false;
	}
	if(content==''){
		layer.msg('��ע���ݲ���Ϊ�գ�', 2, 8);return false;
	}
}
function paylog_invoice(){
	var title=$.trim($("#title").val());
	var link_man=$.trim($("#link_man").val());
	var link_moblie=$.trim($("#link_moblie").val());
	var address=$.trim($("#address").val());
	if(title==''||link_man==''||link_moblie==''||address==''){
		layer.msg('��Ʊ̧ͷ����ϵ�ˡ���ϵ�绰���ʼĵ�ַ������Ϊ�գ�', 2, 8);return false;
	}

}