$(document).ready(function(){
	$(".down_resume").click(function(){
		var eid=$("#eid").val();
		var uid=$("#uid").val();
		var username=$("#username").val();
		$.post("index.php?m=ajax&c=down_resume",{eid:eid,uid:uid,username:username},function(data){
 			var data=eval('('+data+')');
			var status=data.status; 
			var integral=data.integral; 
			if(!status || status==0){ 
				layer.msg('��������ҵ�û���', 2, 8);return false; 
			}else if(status==1){
				layer.confirm("���ؼ������۳�"+integral+integral_pricename+"���Ƿ����أ�", function(){down_integral(eid,uid);}); 
			}else if(status==2){
				layer.confirm("���ĵȼ���Ȩ�Ѿ�����,���۳�"+integral+integral_pricename+"���Ƿ����أ�", function(){down_integral(eid,uid);});  
			}else if(status==6){
				window.open("index.php?m=ajax&c=resume_word&id="+eid);
			}else if(status==3){
				window.open("index.php?m=ajax&c=resume_word&id="+eid);
				location.href=document.URL;
			}else if(status==4){ 
				layer.msg('��Ա���ؼ��������꣡', 2, 8);return false; 
			}else if(status==5){
				layer.alert(integral_pricename+'���㣬���ȳ�ֵ��',8, '��ʾ',function(){location.href =weburl+"/member/index.php?c=pay" });return false;
			}else if(status==7){ 
				layer.msg('���û��ѱ��������������', 2, 8);return false; 
			}else if(status==8){ 
				layer.msg('���ѱ����û������������', 2, 8);return false; 
			}
		});
	})	
	$(".lt_down_resume").click(function(){
		var eid=$("#eid").val();
		var uid=$("#uid").val();
		var username=$("#username").val();
		$.post("index.php?m=ajax&c=lt_down_resume",{eid:eid,uid:uid,username:username},function(data){
			var data=eval('('+data+')');
			var status=data.status;
			var integral=data.integral; 
			if(status==2){
				layer.confirm("���ĵȼ���Ȩ�Ѿ�����,���۳�"+integral+integral_pricename+"���Ƿ����أ�", function(){lt_down_integral(eid,uid);});  
			}else if(status==6){
				window.open("index.php?m=ajax&c=resume_word&id="+eid);
			}else if(status==0){
				layer.msg('���ȵ�¼��', 2,8,function(){location.href ="index.php?m=login&usertype=1" });
			}else if(status==3){
				window.open("index.php?m=ajax&c=resume_word&id="+eid);
				location.href=document.URL;
			}else if(status==4){
				layer.msg('��Ա���ؼ��������꣡', 2, 8);return false;  
			}
		});
	})	
})
function for_link(eid){
	$.post("index.php?m=ajax&c=for_link",{eid:eid},function(data){  
		var data=eval('('+data+')');
		var status=data.status;
		if(status==1){
			layer.msg(data.msg, 2,8);
		}else if(status==2){
			layer.confirm(data.msg, function(){down_integral(eid,data.uid);});
		}else if(status==3){
			$("#for_link .city_1").html(data.html);
			$.layer({
				type : 1,
				title : "�鿴��ϵ��ʽ", 
				offset: [($(window).height() - 150)/2 + 'px', ''],
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['350px','150px'],
				page : {dom :"#for_link"}
			});
		} 
	});
}
function down_integral(eid,uid){
	$.post("index.php?m=ajax&c=down_resume",{type:"integral",eid:eid,uid:uid},function(data){ 
		var data=eval('('+data+')');
		var status=data.status;
		var integral=data.integral;
		if(status==5){
			layer.confirm('������'+integral+integral_pricename+'���������ؼ������Ƿ��ֵ��', function(){window.location.href ="member/index.php?c=pay";window.event.returnValue = false;return false; }); 
		}else if(status==3){
			window.open("index.php?m=ajax&c=resume_word&id="+eid);
			location.href=document.URL;
		}
	})
} 