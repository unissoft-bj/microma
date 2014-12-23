!function(t){Class.Base.Event.extend("Widgets.Keyboard",{template:['<ul class="keyboardWrap">','<li class="keyboardRow clearfix">','<span class="keyboardCel" data-value="1">1</span>','<span class="keyboardCel" data-value="2">2</span>','<span class="keyboardCel" data-value="3">3</span>',"</li>",'<li class="keyboardRow clearfix">','<span class="keyboardCel" data-value="4">4</span>','<span class="keyboardCel" data-value="5">5</span>','<span class="keyboardCel" data-value="6">6</span>',"</li>",'<li class="keyboardRow clearfix">','<span class="keyboardCel" data-value="7">7</span>','<span class="keyboardCel" data-value="8">8</span>','<span class="keyboardCel" data-value="9">9</span>',"</li>",'<li class="keyboardRow clearfix">','<span class="keyboardCel keyboardSubmit">确定</span>','<span class="keyboardCel" data-value="0">0</span>','<span class="keyboardCel keyboardDelete"></span>',"</li>","</ul>"].join(""),init:function(){this.initDOM();this.initEvent()},initDOM:function(){this.$keyboard=t(this.template)},initEvent:function(){var a=t.support.touch?"tap":"click",i=t(document);this.open=t.proxy(this.open,this);this.input=t.proxy(this.input,this);this.close=t.proxy(this.close,this);this.del=t.proxy(this.del,this);this.checkHolder=t.proxy(this.checkHolder,this);i.on(a,this.checkHolder);i.on(a,"[data-keyboard]",this.open);this.$keyboard.on(a,"[data-value]",this.input);this.$keyboard.on(a,".keyboardSubmit",this.close);this.$keyboard.on(a,".keyboardDelete",this.del)},input:function(a){var i=t(a.target),e=i.attr("data-value"),s=this.config.max;a.stopPropagation();e=this.$input.attr("data-value")+e;e=parseInt(e,10);if(s&&e>s){e=s;t.toast("最大输入"+s,1e3)}this.$input.attr("data-value",0===e?"":e);this.$input.trigger("keyboard:change",[this,e])},del:function(a){var i=this.config.max,e;a&&a.stopPropagation();e=this.$input.attr("data-value").slice(0,-1);e=e?parseInt(e,10):0;if(i&&e>i){e=i;t.toast("最大输入"+i,1e3)}this.$input.attr("data-value",0===e?"":e);this.$input.trigger("keyboard:change",[this,e])},checkHolder:function(t){if(!this.isOpened)return;var a=this,i=this.config.$holder.add(".iDialog, .iDialogLayout");if(!i.has(t.target).length&&i.index(t.target)===-1)setTimeout(function(){a.close()},300)},open:function(a){var i=this,e=a?a.target?t(a.target):t(a):this.$input,s;if(this.isOpened&&this.$input&&this.$input[0]===e[0])return;if(this.isOpened&&this.$input&&this.$input[0]!==e[0]){var n=this.$input.attr("data-value");if(!n){this.$input.attr("data-value",this.config.min);this.$input.trigger("keyboard:change",[this,n])}}s=this.getConfig(e);s.$container.append(this.$keyboard.show());setTimeout(function(){e.trigger("keyboard:open",[i])},300);this.isOpened=true;this.config=s;this.$input=e},close:function(t){t&&t.stopPropagation();var a=this.$input.attr("data-value");if(!a){this.$input.attr("data-value",this.config.min);this.$input.trigger("keyboard:change",[this,a])}this.$keyboard.hide();this.$input.trigger("keyboard:close",[this]);this.isOpened=false},getConfig:function(a){return{$container:t(a.attr("data-keyboard")),$holder:a.attr("data-keyboard-holder")?t(a.attr("data-keyboard-holder")):a,max:a.attr("data-keyboard-max")?parseInt(a.attr("data-keyboard-max"),10):null,min:a.attr("data-keyboard-min")?parseInt(a.attr("data-keyboard-min"),10):null}},destroy:function(){this.close()}})}(window.Zepto);