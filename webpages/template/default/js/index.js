function show_job(id,showhtml){

	if(showhtml=="1")
	{
		$.post("index.php?m=ajax&c=show_leftjob",{},function(data){
			$("#menuLst").html(data);

			$(".lst"+id).attr("class","lst"+id+" hov");

		});
	}else{
		var num=$(".lstCon").length/3;
		if(id<num){
			var height=id*35;
			var heightdiv=$(".lst"+id+" .lstCon").height();
			if(heightdiv-height<35){
				height=heightdiv=$(".lst"+id+" .lstCon").height()/2;
			}
			$(".lst"+id+" .lstCon").attr("style","top:-"+height+"px");
		}else if(id<num*2){
			var height=id*35;
			var heightdiv=$(".lst"+id+" .lstCon").height()/2;
			$(".lst"+id+" .lstCon").attr("style","top:-"+heightdiv+"px");
		}else{
			var height=($(".lstCon").length-id)*35;
			var heightdiv=$(".lst"+id+" .lstCon").height();
			if(heightdiv>height){
				heightdiv=heightdiv-height;
			}else{
				heightdiv=0;
			}
			$(".lst"+id+" .lstCon").attr("style","top:-"+heightdiv+"px");
		}
		$(".lst"+id).attr("class","lst"+id+" hov");
	}
}
function hide_job(id){
	$("#menuLst li").removeClass("hov");
}
function showDiv2(obj){
	if($(obj).attr("class")=="current1"){
		$(obj).removeClass();
	}
	else{
		$(obj).addClass("current1");
		$(obj).find(".shade").height($(obj).find(".area").height()+60)
	}
}
function clean(){
	$("#edu").val("��ѡ��");
	$("#eduid").val("");
	$("#exp").val("��ѡ��");
	$("#expid").val("");
	$("#mun").val("��ѡ��")
	$("#munid").val("");;
	$("#salary").val("��ѡ��");
	$("#salaryid").val("");
	$("#index_job_class_val").val("��ѡ��ְλ���");
	$("#job_class").val("");
	$("#city").val("��ѡ�����ص�");
	$("#cityid").val("");
	$("#hy").val("��ѡ����ҵ���");
	$("#hyid").val("");
}
$(function(){
	$('body').click(function(evt) {
		if($(evt.target).parents("#job_hy").length==0 && evt.target.id != "hy") {
			$('#job_hy').hide();
		}
		if($(evt.target).parents("#job_exp").length==0 && evt.target.id != "exp") {
			$('#job_exp').hide();
		}
		if($(evt.target).parents("#job_edu").length==0 && evt.target.id != "edu") {
			$('#job_edu').hide();
		}
		if($(evt.target).parents("#job_salary").length==0 && evt.target.id != "salary") {
			$('#job_salary').hide();
		}
		if($(evt.target).parents("#job_mun").length==0 && evt.target.id != "mun") {
			$('#job_mun').hide();
		}

	})
})