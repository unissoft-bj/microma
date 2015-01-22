
        <!DOCTYPE html>
        <html>
        <head>
        <title>�������</title>
        
        <body style="background-color: #514f4f;overflow: hidden;">
        <div class="nav" style="height:43px;line-height:43px;background-color: #CC0000;display:block;"><p>���˴�ת��</p>
         <span class="bank"><a href="javascript:window.history.go(-1);" class="hand">����</a></span>
        </div>
        <div style="width: 100%;padding-top:50px;">
         <p style="margin:0px auto;line-height:20px;padding:5px 5px;width:95%;color: #747373;font-size:14px;background-color: #dedede;">��Ϸ����ÿ��ת������10����,�н���ϵͳ��¼,�ͷ���������һʱ��ȡ����ϵ��</p>
        </div>
        <div style="padding:5px 0px 0px 15px;">
           <p><span style="font-size:16px;color:#fff;position: relative;top:10px;">��ǰ����1000</span> <input id="spinBtn" type="button" onclick="spin();" value="��ʼ�齱" class="luckBtn" style="margin-top: 3px;"></p>
        </div>
        <div style="width: 100%;text-align: center;margin:0px auto;">
        <canvas id="wheelcanvas" width="500" height="500"></canvas> 
        </div>
        <script type="application/javascript"> 
        var colors = ["#B8D430", "#3AB745", "#029990", "#3501CB",
                      "#2E2C75", "#673A7E", "#CC0071", "#F80120",
                      "#F35B20", "#FB9A00", "#FFCC00", "#FEF200"];
          var restaraunts = ["X2", "X4", "X5", "����Ŭ��","˫ɫ��һע","5000Ԫ�ֽ�","iphone6һ̨","ƻ���ʼǱ�һ̨"];
          
          var startAngle = 0;
          var arc = Math.PI / 4;
          var spinTimeout = null;
          
          var spinArcStart = 10;
          var spinTime = 0;
          var spinTimeTotal = 0;
          var winWidth=500;
          var ctx;
          function draw() {
            drawRouletteWheel();
          }
          var windowWidth=0;
        	if((document.body) && (document.body.clientWinWidth)){
        	 windowWidth = document.body.clientWinWidth;
        	}else if(window.innerWidth){
        	 windowWidth = window.innerWidth;
        	}
          if(windowWidth!=0&&windowWidth<400){
        	  $("#wheelcanvas").width(320);
        	  $("#wheelcanvas").height(320);
        	 }
          function drawRouletteWheel() {
            var canvas = document.getElementById("wheelcanvas");
            if (canvas.getContext) {
              var outsideRadius = winWidth*0.4;
              var textRadius = winWidth*160/500;
              var insideRadius = winWidth*125/500;
              
              ctx = canvas.getContext("2d");
              ctx.clearRect(0,0,winWidth,winWidth);
              
        //       var pic = new Image();  
        //       pic.width=500;
        //       pic.onload=function(){  
        //     	  ctx.drawImage(pic,0,0,500,500);  
        //       }          
        <%--       pic.src ="<%=basePath%>/resources/images/touch/pan.gif";      --%>
        
              ctx.strokeStyle = "#CFCFCF";
              ctx.lineWidth = 2;
              
              ctx.font = 'bold 16px sans-serif';
              ctx.fillStyle = "#fff";
              ctx.arc(winWidth/2, winWidth/2, outsideRadius+15,0,2*Math.PI,true);
              ctx.stroke();
              ctx.fill();
              ctx.save();
              for(var i = 0; i < 8; i++) {
                var angle = startAngle + i * arc;
                
                ctx.fillStyle = colors[i];
                ctx.beginPath();
                ctx.arc(winWidth/2, winWidth/2, outsideRadius, angle, angle + arc, false);
                ctx.arc(winWidth/2, winWidth/2, 10, angle + arc, angle, true);
                ctx.stroke();
                ctx.fill();
                ctx.save();
        /*      ctx.shadowOffsetX = -1;
                ctx.shadowOffsetY = -1;
                ctx.shadowBlur    = 0;
                ctx.shadowColor   = "rgb(220,220,220)";*/
                ctx.fillStyle = "#FFF";
                ctx.translate(winWidth/2 + Math.cos(angle + arc / 2) * textRadius, winWidth/2 + Math.sin(angle + arc / 2) * textRadius);
                ctx.rotate(angle + arc / 2 + Math.PI / 2);
                var text = restaraunts[i];
                ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
                ctx.restore(); 
              }
              //Arrow
              ctx.fillStyle = "white";
              ctx.beginPath();
              ctx.moveTo(winWidth/2 - 4, winWidth/2 - (outsideRadius + 5));
              ctx.lineTo(winWidth/2 + 4, winWidth/2 - (outsideRadius + 5));
              ctx.lineTo(winWidth/2 + 4, winWidth/2 - (outsideRadius - 5));
              ctx.lineTo(winWidth/2 + 9, winWidth/2 - (outsideRadius - 5));
              ctx.lineTo(winWidth/2 + 0, winWidth/2 - (outsideRadius - 23));
              ctx.lineTo(winWidth/2 - 9, winWidth/2 - (outsideRadius - 5));
              ctx.lineTo(winWidth/2 - 4, winWidth/2 - (outsideRadius - 5));
              ctx.lineTo(winWidth/2 - 4, winWidth/2 - (outsideRadius + 5));
              ctx.fill(); 
            }
          }
          function spin() {
        	$("#spinBtn").attr("disabled","true");
            $("#spinBtn").css("background","grey");
            spinAngleStart = Math.random() * 10 + 30;
            spinTime = 0;
            spinTimeTotal = Math.random() * 4 + 5 * 1000;
            rotateWheel();
          }
          
          function rotateWheel() {
            spinTime += 20;
            if(spinTime >= spinTimeTotal) {
              stopRotateWheel();
              return;
            }
            var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
            startAngle += (spinAngle * Math.PI / 180);
            drawRouletteWheel();
            spinTimeout = setTimeout('rotateWheel()', 20);
          }
          
          function stopRotateWheel() {
            clearTimeout(spinTimeout);
            var degrees = startAngle * 180 / Math.PI + 90;
            var arcd = arc * 180 / Math.PI;
            var index = Math.floor((360 - degrees % 360) / arcd);
            ctx.save();
            ctx.font = 'bold 30px sans-serif';
            var text = restaraunts[index]
            ctx.fillText(text, winWidth/2 - ctx.measureText(text).width / 2, winWidth/2 + 10);
            ctx.restore();
        	$("#spinBtn").removeAttr("disabled");
        	$("#spinBtn").css("background","#CC0000");
          }
          
          function easeOut(t, b, c, d) {
            var ts = (t/=d)*t;
            var tc = ts*t;
            return b+c*(tc + -3*ts + 3*t);
          }
          
          draw();
        </script>
        <body>
        </html>