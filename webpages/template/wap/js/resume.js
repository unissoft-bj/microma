function checkcity(id,type){
	if(id>0){
		$.post(weburl+"/index.php?m=ajax&c=wap_city",{id:id,type:type},function(data){
			if(type==1){
				$("#cityid").html(data);
			}else{
				$("#three_cityid").html(data);
			}
		})
	}else{
		if(type==1){
			$("#cityid").html('<option value="">��ѡ��</option>');
		}
		$("#three_cityid").html('<option value="">��ѡ��</option>');
	}
}
function checkinfo(){
	var name=$.trim($("input[name='name']").val());
	var birthday=$.trim($("input[name='birthday']").val());
	var living=$.trim($("input[name='living']").val());
	var email=$.trim($("input[name='email']").val());
	var telphone=$.trim($("input[name='telphone']").val());
	var description=$.trim($("#description").val());
	ifemail = check_email(email);  
	telphone = isjsMobile(telphone);  
	if(name==""){alert('����д������');return false;}
	if(birthday==""){alert('����д�������£�');return false;}
	if(telphone==false){alert('����ȷ��д�ֻ����룡');return false;}
	if(ifemail==false){alert('����д�����ʼ���');return false;}
	if(living==""){alert('����д�־�ס�أ�');return false;}
	if(description==""){alert("����д�������ۣ�");return false;}
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
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
}
function checkshow(id){
	if(id=="expect"){
		$("#infobutton").show();
		$("#info").hide();
	}else if(id=="info"){
		$("#expectbutton").show();
		$("#expect").hide();
	}
	$("#"+id+"button").hide();
	$("#"+id).show();
}function checkhide(id){
	$("#"+id+"button").show();
	$("#"+id).hide();
}
function saveexpect(){
	var name=$.trim($("#expect_name").val());
	var hy=$.trim($("#hy").val());
	var job_classid=$.trim($("#job_classid").val());
	var provinceid=$.trim($("#provinceid").val());
	var cityid=$.trim($("#cityid").val());
	var three_cityid=$.trim($("#three_cityid").val());
	var salary=$.trim($("#salary").val());
	var report=$.trim($("#report").val());
	var eid=$.trim($("#eid").val());
	if(name==""){
		alert('����д�������ƣ�');return false;
	}
	if(job_classid==""){
		alert('��ѡ����������ְλ��');return false;
	}
	if(cityid==""){
		alert('��ѡ�����������ص㣡');return false;
	}
	$.post(weburl+"/wap/member/index.php?c=expect",{name:name,hy:hy,job_classid:job_classid,provinceid:provinceid,cityid:cityid,three_cityid:three_cityid,salary:salary,report:report,eid:eid},function(data){
		if(data>0){
			alert('����ɹ���');
			window.location.href='index.php?c=addresume&eid='+data;
		}else{
			alert('����ʧ�ܣ�');
		}
	})
}

function checkskill(){
	var name=$.trim($("input[name='name']").val());
	var longtime=$.trim($("input[name='longtime']").val());
	if(name==""){
		alert('����д�������ƣ�');return false;
	}
	if(longtime==""){
		alert('����д����ʱ�䣡');return false;
	}
}
function checkwork(){
	var name=$.trim($("input[name='name']").val());
	var syear=$.trim($("input[name='syear']").val());
	var smouth=$.trim($("input[name='smouth']").val());
	var sday=$.trim($("input[name='sday']").val());
	var eyear=$.trim($("input[name='eyear']").val());
	var emouth=$.trim($("input[name='emouth']").val());
	var eday=$.trim($("input[name='eday']").val());
	var department=$.trim($("input[name='department']").val());
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(name==""){
		alert('����д��λ���ƣ�');return false;
	}
	if(syear==""||smouth==""||sday==""||eyear==""||emouth==""||eday==""){
		alert('����ȷ��д����ʱ�䣡');return false;
	}
	if(department==""){
		alert('����д���ڲ��ţ�');return false;
	}
	if(title==""){
		alert('����д����ְλ��');return false;
	}
	if(content==""){
		alert('����д�������ݣ�');return false;
	}
}
function checkproject(){
	var name=$.trim($("input[name='name']").val());
	var syear=$.trim($("input[name='syear']").val());
	var smouth=$.trim($("input[name='smouth']").val());
	var sday=$.trim($("input[name='sday']").val());
	var eyear=$.trim($("input[name='eyear']").val());
	var emouth=$.trim($("input[name='emouth']").val());
	var eday=$.trim($("input[name='eday']").val());
	var sys=$.trim($("input[name='sys']").val());
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(name==""){
		alert('����д��Ŀ���ƣ�');return false;
	}
	if(syear==""||smouth==""||sday==""||eyear==""||emouth==""||eday==""){
		alert('����ȷ��д��Ŀʱ�䣡');return false;
	}
	if(sys==""){
		alert('����д��Ŀ������');return false;
	}
	if(title==""){
		alert('����д����ְλ��');return false;
	}
	if(content==""){
		alert('����д��Ŀ���ݣ�');return false;
	}
}
function checkedu(){
	var name=$.trim($("input[name='name']").val());
	var syear=$.trim($("input[name='syear']").val());
	var smouth=$.trim($("input[name='smouth']").val());
	var sday=$.trim($("input[name='sday']").val());
	var eyear=$.trim($("input[name='eyear']").val());
	var emouth=$.trim($("input[name='emouth']").val());
	var eday=$.trim($("input[name='eday']").val());
	var specialty=$.trim($("input[name='specialty']").val());
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(name==""){
		alert('����дѧУ���ƣ�');return false;
	}
	if(syear==""||smouth==""||sday==""||eyear==""||emouth==""||eday==""){
		alert('����ȷ��д��Уʱ�䣡');return false;
	}
	if(specialty==""){
		alert('����д��ѧרҵ��');return false;
	}
	if(title==""){
		alert('����д����ְλ��');return false;
	}
	if(content==""){
		alert('����дרҵ������');return false;
	}
}
function checktraining(){
	var name=$.trim($("input[name='name']").val());
	var syear=$.trim($("input[name='syear']").val());
	var smouth=$.trim($("input[name='smouth']").val());
	var sday=$.trim($("input[name='sday']").val());
	var eyear=$.trim($("input[name='eyear']").val());
	var emouth=$.trim($("input[name='emouth']").val());
	var eday=$.trim($("input[name='eday']").val());
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(name==""){
		alert('����д��ѵ���ģ�');return false;
	}
	if(syear==""||smouth==""||sday==""||eyear==""||emouth==""||eday==""){
		alert('����ȷ��д��ѵʱ�䣡');return false;
	}
	if(title==""){
		alert('����д��ѵ����');return false;
	}
	if(content==""){
		alert('����д��ѵ������');return false;
	}
}
function checkcert(){
	var name=$.trim($("input[name='name']").val());
	var syear=$.trim($("input[name='syear']").val());
	var smouth=$.trim($("input[name='smouth']").val());
	var sday=$.trim($("input[name='sday']").val());
	var eyear=$.trim($("input[name='eyear']").val());
	var emouth=$.trim($("input[name='emouth']").val());
	var eday=$.trim($("input[name='eday']").val());
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(name==""){
		alert('����д֤��ȫ�ƣ�');return false;
	}
	if(syear==""||smouth==""||sday==""||eyear==""||emouth==""||eday==""){
		alert('����ȷ��д��Чʱ�䣡');return false;
	}
	if(title==""){
		alert('����д�䷢��λ��');return false;
	}
	if(content==""){
		alert('����д֤��������');return false;
	}
}
function checkother(){
	var title=$.trim($("input[name='title']").val());
	var content=$.trim($("textarea[name='content']").val());
	if(title==""){
		alert('����д�������⣡');return false;
	}
	if(content==""){
		alert('����д����������');return false;
	}
}
function checkjob1(id){
	var style=$("#joblist"+id).attr("style");
	$(".onelist").addClass("lookshow");
	$(".lookhide").attr("style","display: none;");
	if(style=="display: none;"){
		$("#joblist"+id).show();
		$("#job"+id).removeClass("lookshow");
	}
}
function checkjob2(id){
	var style=$("#jobpost"+id).attr("style");
	$(".post_show_three").attr("style","display: none;");
	if(style=="display: none;"){
		$("#jobpost"+id).show();
	}
}
function realy(){
	var info="";
	var value="";
	$("input[name='jobclass']:checked").each(function(){
		var obj = $(this).val();
		var name = $(this).attr("data");
		if(info==""){
			info=obj;
			value=name;
		}else{
			info=info+","+obj;
			value=value+","+name;
		}
	})
	if(info==""){
		alert('��ѡ��ְλ���');return false;
	}else{
		$("#job_classid").val(info);
		$("#jobclassbutton").val(value);
		Close();
	}
}
function checkshowjob(){
	$("#joblist").show();
	checkhide('info');
	$("#bg").show();
}
function checked_input(id){
	var check_length = $("input[name='jobclass']:checked").length;
	if(check_length>5){ 
		alert('�����ֻ��ѡ�������'); 
		$("#r"+id).attr("checked",false);
	}
}
function Close(){
	$("#joblist").hide();
	
}