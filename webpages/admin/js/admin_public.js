function loadlayer(){
	parent.layer.load('ִ���У����Ժ�...',0);
}
function wait_result(){
	parent.layer.closeAll();
	parent.layer.load('ִ���У����Ժ�...',0);
}
function check_username(){
	var username=$.trim($("#username").val());
	var pytoken=$.trim($("#pytoken").val());
	if(username){
		$.post("index.php?m=admin_resume&c=check_username",{username:username,pytoken:pytoken},function(msg){
			if(msg){
				layer.tips('�Ѵ��ڸ��û���',"#username" , {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']});
				$("#username").attr("vtype",'1');
			}else if($("#username").attr('vtype')=='1'){layer.closeTips();$("#username").attr("vtype",'0');}
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
			parent.layer.msg(message, layer_time, Number(layer_st),function(){ location.reload();});
		}else if(url==''){
			parent.layer.msg(message, layer_time, Number(layer_st));
		}else{
			parent.layer.msg(message, layer_time, Number(layer_st),function(){location.href = url;});
		}
	}
}
function config_msg(data){
	$("body").append(data);
	var message = $("#layer_msg").val();
	var url=$("#layer_url").val();
	var layer_time=$("#layer_time").val();
	var layer_st=$("#layer_st").val();
	if(url=='1'){
		parent.layer.msg(message, layer_time, Number(layer_st),function(){
			location.reload();
		});
	}else if(url==''){
		parent.layer.msg(message, layer_time, Number(layer_st));
	}else{
		parent.layer.msg(message, layer_time, Number(layer_st),function(){
			top.location.href =url;
		});
	}return false;
}
function resetpw(uname,uid){
	var pytoken = $('#pytoken').val();
	parent.layer.confirm("ȷ��Ҫ����������",function(){
		$.get("index.php?m=user_member&c=reset_pw&uid="+uid+"&pytoken="+pytoken,function(data){
			parent.layer.closeAll();
			parent.layer.alert("�û���"+uname+" �����Ѿ�����Ϊ123456��", 9);return false;
		});
	});
}
function really(name){
	var chk_value =[];

	$('input[name="'+name+'"]:checked').each(function(){
		chk_value.push($(this).val());
	});

	if(chk_value.length==0){
		parent.layer.msg("��ѡ��Ҫɾ�������ݣ�",2,8);return false;
	}else{
		parent.layer.confirm("ȷ��ɾ����",function(){
			setTimeout(function(){$('#myform').submit()},0);
		});
	}
}
function layer_del(msg,url){

	if(msg==''){
		loadlayer();
		$.get(url,function(data){
			var data=eval('('+data+')');
			if(data.url=='1'){
				parent.layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.reload();});return false;
			}else{
				parent.layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.href=data.url;});return false;
			}
		});
	}else{
		var pytoken = $('#pytoken').val();
		parent.layer.confirm(msg, function(){
			loadlayer();
			$.get(url+'&pytoken='+pytoken,function(data){
				var data=eval('('+data+')');
				if(data.url=='1'){
					parent.layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.reload();});return false;
				}else{
					parent.layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.href=data.url;});return false;
				}
			});
		});
	}
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
$(document).ready(function(){
	$(".admin_Operating_c").hover(function(){
		var aid=$(this).attr("aid");
		$("#list"+aid).show();
		$("#list_"+aid).attr("class","admin_Operating_c admin_Operating_hover");
		goTopEx("list"+aid);
	},function(){
		var aid=$(this).attr("aid");
		$("#list"+aid).hide();
		$("#list_"+aid).attr("class","admin_Operating_c");
		goTopEx("list"+aid);
	});
})

function goTopEx(id){
	var top=document.getElementById(id).getBoundingClientRect().top;
	var height=$(window).height();
	var height=height-5;
	$(".infoboxp").attr("style","min-height:"+height+"px;");
	var ttop=height-top;
	if(ttop<80){
		$("#"+id).attr("class","admin_Operating_list admin_Operating_up");
	}else{
		$("#"+id).attr("class","admin_Operating_list admin_Operating_down");
	}
}

function add_class(name,width,height,divid,url){
	if(url){$(divid).append("<input id='surl' value='"+url+"' type='hidden'/>");}
	$.layer({
		type : 1,
		title : name,
		offset: [($(window).height() - height)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : [width,height],
		page : {dom :divid}
	});
}

function status_div(name,width,height){
	$.layer({
		type : 1,
		title :name,
		offset: [($(window).height() - height)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : [width,height],
		page : {dom :"#status_div"}
	});
}
function copy_url(name,url){
	$("#copy_url").val(url);
	$.layer({
		type : 1,
		title : name,
		offset: [($(window).height() - 110)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','110px'],
		page : {dom :'#wname'}
	});
}
function rec_up(url,id,rec,type){
	parent.layer.confirm("ȷ��ִ�в�����",function(){
		var pytoken=$("#pytoken").val();
		$.get(url+"&id="+id+"&rec="+rec+"&type="+type+"&pytoken="+pytoken,function(data){
			parent.layer.closeAll();
			if(data==1){
				parent.layer.msg("�����ɹ���",2,9);
				if(rec=="1"){
					$("#"+type+id).html("<a href=\"javascript:void(0);\" onClick=\"rec_up('"+url+"','"+id+"','0','"+type+"');\"><img src=\"../data/ajax_img/doneico.gif\"></a>");
				}else{
					$("#"+type+id).html("<a href=\"javascript:void(0);\" onClick=\"rec_up('"+url+"','"+id+"','1','"+type+"');\"><img src=\"../data/ajax_img/errorico.gif\"></a>");
				}
			}else{
				parent.layer.msg("����ʧ�ܣ�",2,8,function(){location.reload();});return false;
			}
		});
	});

}
