
function checkjob(id,type){
	if(id>0){
		$.post(weburl+"/index.php?m=ajax&c=wap_job",{id:id,type:type},function(data){
			if(type==1){
				$("#job1_son").html(data);
			}else{
				$("#job_post").html(data);
			}
		})
	}else{
		if(type==1){
			$("#job1_son").html('<option value="">��ѡ��</option>');
		}
		$("#job_post").html('<option value="">��ѡ��</option>');
	}
}
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
function checkfrom(){
	if($.trim($("#name").val())==""){
		alert("��Ƹ���Ʋ���Ϊ�գ�");
		return false;
	}
	if($.trim($("#job_post").val())==""){
		alert("��ѡ��ְλ���");
		return false;
	}
	if($.trim($("#cityid").val())==""){
		alert("��ѡ�����ص㣡");
		return false;
	}
	if($.trim($("#days").val())<1){
		alert("����ȷ��д��Ƹ������");
		return false;
	}
	if($.trim($("#description").val())==""){
		alert("ְλ��������Ϊ�գ�");
		return false;
	}
}