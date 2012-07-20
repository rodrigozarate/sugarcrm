/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
SUGAR.routing={actions:new Object(),rules:new Object(),strings:new Object(),editRule:function(id){this.xhr.startRequest(callback.editRule,this.xhr.urlStandard+"&routingAction=getRule&rule_id="+id+"&bean=InboundEmail");},removeRule:function(id){alert('implement SUGAR.routing.removeRule() pls.');},getStrings:function(){this.xhr.startRequest(callback.strings,this.xhr.urlStandard+"&routingAction=getStrings");},getDependentDropdowns:function(){this.xhr.startRequest(callback.dd,this.xhr.urlStandard+"&routingAction=getActions");}}
SUGAR.routing.handleDependentDropdown=function(el,focusDD){if(SUGAR.dependentDropdown.debugMode)SUGAR.dependentDropdown.utils.debugStack('handleDependentDropdown');var index=el.id.slice(el.id.indexOf("::")+2,el.id.indexOf(":::"));var actionIndex=index / 100;var elementRow=el.parentNode;var elementIndex=el.id.slice(el.id.indexOf(":::")+3,el.id.indexOf(":-:"));SUGAR.dependentDropdown.currentAction=SUGAR.routing.rules.InboundEmail[SUGAR.routing.currentRuleId][focusDD][actionIndex];elementIndex++;var elementKey="element"+elementIndex;var focusElement=SUGAR.dependentDropdown.dropdowns[focusDD].elements[elementKey];if(focusElement){if(focusElement.handlers){try{focusElement=focusElement.handlers[el.value];}catch(e){if(SUGAR.dependentDropdown.dropdowns.debugMode){debugger;}}}
SUGAR.dependentDropdown.generateElement(focusElement,elementRow,index,elementIndex);}else{}}
SUGAR.routing.utils={removeChildren:function(el){for(i=el.childNodes.length-1;i>=0;i--){if(el.childNodes[i]){el.removeChild(el.childNodes[i]);}}}}
SUGAR.routing.xhr={currentRequestObject:null,timeout:30000,forceAbort:false,trail:new Array(),urlStandard:'sugar_body_only=true&to_pdf=true&module=Emails&action=SugarRoutingAsync',_reset:function(){this.timeout=30000;this.forceAbort=false;},startRequest:function(callback,args,forceAbort){if(this.currentRequestObject!=null){if(this.forceAbort==true){YAHOO.util.Connect.abort(this.currentRequestObject,null,false);}}
this.currentRequestObject=YAHOO.util.Connect.asyncRequest('POST',"./index.php",callback,args);this._reset();},handleFailure:function(o){SUGAR.showMessageBox('Exception occurred...',o.statusText);debugger;},fillStrings:function(o){var ret=YAHOO.lang.JSON.parse(o.responseText);SUGAR.routing.strings=ret.strings;SUGAR.routing.matchDom=ret.matchDom;SUGAR.routing.matchTypeDom=ret.matchTypeDom;SUGAR.routing.actions=ret.actions;},displayFetchedRule:function(o){var ret=YAHOO.lang.JSON.parse(o.responseText);SUGAR.routing.ui.displayRule(ret);},fillDependentDropdowns:function(o){var ret=YAHOO.lang.JSON.parse(o.responseText);SUGAR.dependentDropdown.dropdowns=ret;},saveRule:function(formId){if(SUGAR.routing.ui.checkRule(formId)){SUGAR.showMessageBox(SUGAR.routing.strings.LBL_ROUTING_SAVING_RULE,SUGAR.routing.strings.LBL_ROUTING_ONE_MOMENT);var values=YAHOO.util.Connect.setForm(document.getElementById(formId));this.startRequest(callback.saveRule,SUGAR.routing.urlStandard);}},deleteRule:function(rule_id){this.startRequest(callback.saveRule,this.urlStandard+"&routingAction=deleteRule&rule_id="+rule_id);},getComposeCache:function(){this.startRequest(callback.fillComposeCache,'sugar_body_only=true&to_pdf=true&module=Emails&action=EmailUIAjax&emailUIAction=fillComposeCache');},fillComposeCache:function(o){var ret=YAHOO.lang.JSON.parse(o.responseText);SUGAR.email2.composeLayout.emailTemplates=ret.emailTemplates;SUGAR.email2.composeLayout.signatures=ret.signatures;return SUGAR.email2.composeLayout.emailTemplates;},setRuleStatusCleanup:function(o){}}
SUGAR.routing.ui={deleteRule:function(rule_id){if(confirm(SUGAR.routing.strings.LBL_ROUTING_CONFIRM_DELETE)){SUGAR.routing.xhr.deleteRule(rule_id);}},displayRule:function(ret){if(!SUGAR.routing.rules[ret.bean]){SUGAR.routing.rules[ret.bean]=new Object();}
if(!SUGAR.routing.rules[ret.bean][ret.rule.id]){SUGAR.routing.rules[ret.bean][ret.rule.id]=new Object();}
SUGAR.routing.rules[ret.bean][ret.rule.id]=ret.rule;SUGAR.routing.currentRuleId=ret.rule.id;var d=document.getElementById("rulesDetailsCell");SUGAR.routing.utils.removeChildren(d);d.style.padding='5px';YAHOO.ext.DomHelper.append(d,{tag:'form',name:'routingForm'+ret.rule.id,id:'routingRule'+ret.rule.id,method:'post'});var form=document.getElementById('routingRule'+ret.rule.id);YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'bean',value:ret.bean});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'sugar_body_only',value:'true'});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'to_pdf',value:'true'});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'module',value:'Emails'});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'action',value:'SugarRoutingAsync'});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'routingAction',value:'saveRule'});YAHOO.ext.DomHelper.append(form,{tag:'input',type:'hidden',name:'id',value:ret.rule.id});var save="SUGAR.routing.xhr.saveRule('"+"routingRule"+ret.rule.id+"');";YAHOO.ext.DomHelper.append(form,{tag:'input',type:'button',cls:'button',onclick:save,value:"   "+SUGAR.routing.strings.LBL_ROUTING_BUTTON_SAVE+"   "});form.innerHTML+="&nbsp;";YAHOO.ext.DomHelper.append(form,{tag:'input',type:'button',cls:'button',onclick:'SUGAR.routing.ui.cancelRule();',value:"   "+SUGAR.routing.strings.LBL_ROUTING_BUTTON_CANCEL+"   "});form.innerHTML+="<br />&nbsp;<br />";var tmp=YAHOO.ext.DomHelper.append(form,{tag:'div',cls:'routingInputField',html:SUGAR.routing.strings.LBL_ROUTING_NAME+": &nbsp;"},true);var nameDiv=tmp.dom;YAHOO.ext.DomHelper.append(nameDiv,{tag:'input',type:'text',name:'name',id:'ruleName',value:ret.rule.name,size:'32',cls:'input'});YAHOO.ext.DomHelper.append(form,{tag:"br"});var tmp=YAHOO.ext.DomHelper.append(form,{tag:'div',cls:'routingInputField'},true);var matchDiv=tmp.dom;matchDiv.innerHTML+=SUGAR.routing.strings.LBL_ROUTING_MATCH+"&nbsp;";var tmp=YAHOO.ext.DomHelper.append(matchDiv,{tag:'select',name:'all',cls:'select'},true);var matchDropDown=tmp.dom;matchDropDown.options[0]=new Option(SUGAR.routing.strings.LBL_ROUTING_ANY,0);matchDropDown.options[1]=new Option(SUGAR.routing.strings.LBL_ROUTING_ALL,1,ret.rule.all);matchDiv.innerHTML+="&nbsp;"+SUGAR.routing.strings.LBL_ROUTING_MATCH_2+"&nbsp;";YAHOO.ext.DomHelper.append(form,{tag:"br"});var tmp=YAHOO.ext.DomHelper.append(form,{tag:'div',id:'routingCriteria'},true);for(var i=0;i<ret.rule.criteria.length;i++){var index=i*100;SUGAR.routing.ui.generateRuleCondition(tmp.dom,ret.rule.criteria[i],index);}
form.innerHTML+="<br />";var tmp=YAHOO.ext.DomHelper.append(form,{tag:'div',style:'padding-top:10px;'},true);var actionDiv=tmp.dom;actionDiv.innerHTML+=SUGAR.routing.strings.LBL_ROUTING_ACTIONS_PEFORM+":<br />&nbsp;<br />";for(var i=0;i<ret.rule.actions.length;i++){var index=i*100;SUGAR.routing.ui.generateRuleAction(actionDiv,ret.rule.actions[i],index);}},getElementValues:function(type){switch(type){case"move_mail":return SUGAR.email2.folders.getAvailableFoldersObject();break;case"email_templates":if(!SUGAR.email2.composeLayout.emailTemplates){SUGAR.routing.xhr.getComposeCache();setTimeout("SUGAR.routing.ui.getElementValues('email_templates');",2000);}else{return SUGAR.email2.composeLayout.emailTemplates;}
break;}},generateRuleAction:function(container,criteria,index){this.generateRuleRow(container,criteria,index,'Action');},generateRuleCondition:function(container,criteria,index){this.generateRuleRow(container,criteria,index,'Rule');},generateRuleRow:function(container,criteria,index,type){var elementIndex=0;var theme='Sugar';if(container.id.match(/Row/i)){var tmp=YAHOO.ext.DomHelper.insertAfter(container,{tag:'div',cls:'routing'+type,style:'padding:2px;',id:'routing'+type+'Row'+index},true);}else{var tmp=YAHOO.ext.DomHelper.append(container,{tag:'div',cls:'routing'+type,style:'padding:2px;',id:'routing'+type+'Row'+index},true);}
var ruleRow=tmp.dom;var remove="javascript:SUGAR.routing.ui.removeCriteria('routing"+type+"Row"+index+"');";var minus=YAHOO.ext.DomHelper.append(ruleRow,{tag:'a',href:remove},true);YAHOO.ext.DomHelper.append(minus.dom,{tag:'img',src:'index.php?entryPoint=getImage&themeName='+SUGAR.themes.theme_name+'&imageName=minus.gif',border:0,cls:'img'},false);ruleRow.innerHTML+="&nbsp;";var insert="javascript:SUGAR.routing.ui.insertCriteria('routing"+type+"Row"+index+"');";var plus=YAHOO.ext.DomHelper.append(ruleRow,{tag:'a',href:insert},true);YAHOO.ext.DomHelper.append(plus.dom,{tag:'img',src:'index.php?entryPoint=getImage&themeName='+SUGAR.themes.theme_name+'&imageName=plus.gif',border:0,cls:'img'},false);ruleRow.innerHTML+="&nbsp;";SUGAR.dependentDropdown.currentAction=criteria;var ddType=(type=='Rule')?'criteria':'actions';for(var elementKey in SUGAR.dependentDropdown.dropdowns[ddType].elements){var focusElement=SUGAR.dependentDropdown.dropdowns[ddType].elements[elementKey];SUGAR.dependentDropdown.generateElement(focusElement,ruleRow,index,elementIndex);if(!focusElement.force_render||focusElement.force_render==''){return;}else{elementIndex++;}}},insertCriteria:function(clickElement){var row=document.getElementById(clickElement);var focusRowIndex=parseFloat(clickElement.substr(clickElement.search(/\d/)));if(row.nextSibling){var nextRow=row.nextSibling;var nextRowIndex=parseFloat(nextRow.id.substr(nextRow.id.search(/\d/)));var insertIndex=((nextRowIndex-focusRowIndex)/ 2)+focusRowIndex;}else{var insertIndex=focusRowIndex+100;}
if(row.id.match(/Action/)){this.generateRuleAction(row,{},insertIndex);}else{this.generateRuleCondition(row,{},insertIndex);}},cancelRule:function(){SUGAR.routing.utils.removeChildren(document.getElementById("rulesDetailsCell"));},addRule:function(){ret={bean:'InboundEmail',rule:{id:'',name:'',criteria:[{action:{'crit0':'name','crit1':'match','crit2':''}}],actions:[{action:{'action0':'move_mail','action1':''}}]}};SUGAR.routing.ui.displayRule(ret);},removeCriteria:function(id){var bucket=document.getElementById(id);SUGAR.routing.utils.removeChildren(bucket);bucket.parentNode.removeChild(bucket);},setRuleStatus:function(cb){var status=(cb.checked)?'enable':'disable';var id=cb.value;SUGAR.routing.xhr.startRequest(callback.setRuleStatus,SUGAR.routing.xhr.urlStandard+"&routingAction=setRuleStatus&rule_id="+id+"&status="+status);}}
SUGAR.routing.ui.checkRule=function(formId){SUGAR.routing.ui.errors=new Array();var ret=true;var form=document.getElementById(formId);var el=null;var v=null;for(var i=0;i<form.elements.length;i++){el=form.elements[i];if(el.type!='hidden'&&el.type!='button'){if(el.type=='text'){if(el.value==""){SUGAR.routing.ui.errors.push(el.id);ret=false;}}else if(el.type=='select'||el.type=='select-one'){var v=el.options[el.selectedIndex].value;if(v=='-1'||v=='-2'||v=='_break'||v.match(/spacer/ig)){SUGAR.routing.ui.errors.push(el.id);ret=false;}}
if(el.style.border&&(el.style.border=='1px solid rgb(255, 0, 0)'||el.style.border=='#f00 1px solid')){el.style.border='1px solid #090';el.className='input';}}}
if(!ret){SUGAR.showMessageBox(SUGAR.routing.strings.LBL_ROUTING_CHECK_RULE,SUGAR.routing.strings.LBL_ROUTING_CHECK_RULE_DESC);for(var j=0;j<SUGAR.routing.ui.errors.length;j++){var focusEl=document.getElementById(SUGAR.routing.ui.errors[j]);if(focusEl)
focusEl.style.border="1px solid #f00";}}
return ret;}
callback={failure:SUGAR.routing.xhr.handleFailure,timeout:SUGAR.routing.xhr.timeout,scope:SUGAR.routing.xhr,editRule:{success:SUGAR.routing.xhr.displayFetchedRule,failure:this.failure,timeout:this.timeout,scope:this.scope},strings:{success:SUGAR.routing.xhr.fillStrings,failure:this.failure,timeout:this.timeout,scope:this.scope},example:{success:SUGAR.routing.xhr.handleSuccess,failure:this.failure,timeout:this.timeout,scope:this.scope},dd:{success:SUGAR.routing.xhr.fillDependentDropdowns,failure:this.failure,timeout:this.timeout,scope:this.scope},saveRule:{success:function(){SUGAR.hideMessageBox();SUGAR.routing.ui.cancelRule();AjaxObject.startRequest(callbackLoadRules,urlStandard+"&emailUIAction=loadRulesForSettings");},failure:this.failure,timeout:this.timeout,scope:this.scope},fillComposeCache:{success:SUGAR.routing.xhr.fillComposeCache,failure:this.failure,timeout:this.timeout,scope:this.scope},setRuleStatus:{success:SUGAR.routing.xhr.setRuleStatusCleanup,failure:this.failure,timeout:this.timeout,scope:this.scope}}
