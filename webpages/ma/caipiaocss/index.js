!function(t,e,a,i){var r=t.isSupportTouch?"tap":"click";t.extend(e,{config:{poolUrl:"/ma/caipiao_buylist.php"},quickInit:function(){this.cartData=LS.get("ssqPoolNum");this.cartSize=0;this.betAreaInit().betButtonInit();return this},myInit:function(){var e=t("a.rightBox").eq(0).attr("cpurl");if(t.getPara("activityType"))t("a.rightBox").eq(0).attr("cpurl",e+"&activityType="+t.getPara("activityType"));this.layoutInit().dataInit().shakeInit();return this},layoutInit:function(){var i=t("#wraper"),r=t(a),n=t("#header"),l=t(".betResult");this.reCal=function(){i.height(r.height()-n.height()-l.height())};this.reCal();r.resize(this.reCal);t(a).on("ortchange",function(t){e.relCal&&e.relCal()});return this},betAreaInit:function(){var a=t(".betBox"),i=t(".betResult"),r=this,n=Game.createCom("COMS.PT.BetArea",{wrap:a,redBallSelector:".redBalls li span",blueBallSelector:".blueBalls li span",animate:true}).onBallChange(function(a,i,r){var n=e.config.maxRedNum;if(n<33&&"red"==a&&1==i){var l=Game.unique(this.get("red"),r),s=l.length<=n;if(!s)t.alert("红球数量不能超过"+n+"！");return s}}).onChange(function(){var t=this.get("red").length,e=this.get("blue").length;if(t+e>0)i.addClass("hasBetNums");else i.removeClass("hasBetNums");if(0==r.cartSize)if(t+e>0)i.addClass("hasNums");else r.showCartTip()});delete this.betAreaInit;this.betArea=n;return this},dataInit:function(){var e=LS.get("ssqSelectNum")||t.getPara("bet"),e=(e||"").split(":");if(e&&2==e.length){this.betArea.set([e[0].split(" "),e[1].split(" ")]);LS.remove("ssqSelectNum")}return this},shakeInit:function(){var i=t(".rockTip"),n=this,l=n.betArea,s=function(){l.clear();l.random("red",6);l.random("blue",1)};if(a.DeviceMotionEvent){i.show();e.loadJS(e.cdnUrl+"/wap/js/shake.js",function(){return!!t.shake},function(){t.shake.on(s,n)})}else i.hide();i.bind(r,s);return this},fillZ:function(t){var e=t.length,a=0,i=[];for(;a<e;a++)i[a]=Game.fillZero(t[a],2);return i.join(" ")},betButtonInit:function(){var e=this,i=t("#clearNum"),n=t("#confirm");i[r](function(){var a=e.betArea.get();if(0==a[0].length&&0==a[1].length)return;t.confirm("确定要清空选号？",function(t){if(t)e.betArea.clear()})});n[r](function(i){var r=e.betArea.get(),n=e.config.poolUrl,l=t.getPara("activityType");if(l)n=t.addUrlPara(n,"activityType="+l);if(e.cartSize>0){if(r[0].length>=6&&r[1].length>=1)LS.set("ssqSelectNum",[e.fillZ(r[0]),e.fillZ(r[1])].join(":"));a.location.href=n;return}else if(r[0].length>=6&&r[1].length>=1){LS.set("ssqSelectNum",[e.fillZ(r[0]),e.fillZ(r[1])].join(":"));a.location.href=n;return}else if(0==r[0].length&&0==r[1].length){e.betArea.random("red",6);e.betArea.random("blue",1);return}else if(r[0].length<6||r[1].length<1){t.alert("请至少选择6个红球,1个蓝球",["我知道了"]);return}});this.randomInit();this.addCartInit();return this},randomInit:function(){var i=t("#randomNum"),n=t("#randomTip"),l=Game.ssq.core;i[r](function(){if(n.hasClass("hide"))n.removeClass("hide");else n.addClass("hide")});n.delegate("a","click",function(i){var r=t(i.currentTarget),s=parseInt(r.attr("data-count"),10),o=l.serialize(l.random(false,s));LS.set("ssqSelectNum",o);n.hide();a.location.href=e.config.poolUrl})},addCartInit:function(){var e=this,i=t("#cartBtn"),n=t("#cartLink");url=e.config.poolUrl,activityType=t.getPara("activityType");if(e.cartData){e.showCartTip();t(".betBox").css("padding-bottom","2.83rem")}if(activityType)url=t.addUrlPara(url,"activityType="+activityType);n[r](function(){a.location.href=url});i[r](function(){var a=e.betArea.get(),i=e.config.poolUrl,r=t.getPara("activityType");if(a[0].length>=6&&a[1].length>=1){var n=[e.fillZ(a[0]),e.fillZ(a[1])].join(":");if(e.cartSize>0)e.cartData+=","+n;else e.cartData=n;LS.set("ssqPoolNum",e.cartData);e.showCartTip();e.betArea.clear();if(!t.fx.off)e.cartAnimate(a);return}else if(0==a[0].length&&0==a[1].length){e.betArea.random("red",6);e.betArea.random("blue",1);return}else if(a[0].length<6||a[1].length<1){t.alert("请至少选择6个红球,1个蓝球",["我知道了"]);return}})},showCartTip:function(){var e=this,a=t(".betResult"),i=t("#cartBtn .orgTip"),r=t("#randomTip"),n=t("#cartLink");if(e.cartData)e.cartSize=e.cartData.split(",").length;var l=e.cartSize;if(l>=10)l="9+";if(e.cartSize>0){i.html(l);i.show();n.show();a.addClass("hasNums")}else{i.hide();n.hide();a.removeClass("hasNums");if(!r.hasClass("hide"))r.addClass("hide")}},cartAnimate:function(e){var a='<span class="{classname}" style= "left:{X}px;top:{Y}px" data="{tX}px,{tY}px">{num}</span>',i=[],r={},n=t("body");this.getBall=function(e,n){t.each(e,function(e,l){var s=t("."+n+"Balls .js-ball").eq(l-1);r.classname=n+"Balltemp";r.X=s.position().left;r.Y=s.position().top;r.tX=t("#cartBtn").position().left-r.X+t("#cartBtn").width()/2.5;r.tY=t(".betResult").offset().top-r.Y-s.height()/2;r.num=s.text();if(r.tY>0)i.push(t.format(a,r))})};this.getBall(e[0],"red");this.getBall(e[1],"blue");n.css("overflow","hidden");t("#cartBtn .orgTip").addClass("orgTip_big");t(".docBody").append(i.join(""));t.each(t(".redBalltemp,.blueBalltemp"),function(e,a){var a=t(a);var i=a.attr("data");a.animate({translate:i},200,"ease-in")});setTimeout(function(){t(".redBalltemp,.blueBalltemp").remove();n.removeAttr("style");t("#cartBtn .orgTip").removeClass("orgTip_big")},200)}})}(Zepto,Core,window);