<?php

/*

Modification information for LGPL compliance

r58076 - 2010-09-03 10:29:58 -0700 (Fri, 03 Sep 2010) - kjing - Author: Rob Aagaard <rob@sugarcrm.com>
    #39462: Fix the Shortcut bar quick create full form button to cancel the confirm navigation alert for that form.

r57805 - 2010-08-18 16:11:22 -0700 (Wed, 18 Aug 2010) - kjing - Author: Rob Aagaard <rob@sugarcrm.com>
    #39053: Make the full form page take away the navigation javascript warning, because the changes you are making will be saved, eventually, probably.

r57528 - 2010-07-18 18:37:50 -0700 (Sun, 18 Jul 2010) - kjing - Author: Collin Lee <clee@Collin-Lee-MacBook-Pro.local>
    Bug: 38576

r57526 - 2010-07-16 18:11:54 -0700 (Fri, 16 Jul 2010) - kjing - Author: Stanislav Malyshev <smalyshev@gmail.com>
    add associated contacts to the email subpanel

r57466 - 2010-07-14 17:38:01 -0700 (Wed, 14 Jul 2010) - kjing - Author: dwheeler@sugarcrm.com <dwheeler@dwheeler-laptop>
    19329: Switched to multiselect for project, product, and quote subpanels.

r57465 - 2010-07-14 16:03:31 -0700 (Wed, 14 Jul 2010) - kjing - Author: Stanislav Malyshev <smalyshev@gmail.com>
    fix configurations & statuses

r57448 - 2010-07-13 14:34:07 -0700 (Tue, 13 Jul 2010) - kjing - Merge: bc3e0ee 7ac4a5f
Author: dwheeler@sugarcrm.com <dwheeler@dwheeler-laptop.(none)>
    Merge branch 'master' of git+ssh://github.com/sugarcrm/Mango

r57317 - 2010-07-08 07:01:39 -0700 (Thu, 08 Jul 2010) - kjing - Author: Rob Aagaard <rob@sugarcrm.com>
    Bug 19355: Handle the cancel button correctly when you are editing from a list

r57069 - 2010-06-23 10:54:44 -0700 (Wed, 23 Jun 2010) - kjing - commit f24f316cc907d70c44e8add4d1b55bb692c177f5
Author: dwheeler@sugarcrm.com <dwheeler@dwheeler-laptop.(none)>
    35744

r56990 - 2010-06-16 13:05:36 -0700 (Wed, 16 Jun 2010) - kjing - snapshot "Mango" svn branch to a new one for GitHub sync

r56989 - 2010-06-16 13:01:33 -0700 (Wed, 16 Jun 2010) - kjing - defunt "Mango" svn dev branch before github cutover

r56510 - 2010-05-17 11:54:49 -0700 (Mon, 17 May 2010) - jenny - Merging with Windex 56356:56506.

r56459 - 2010-05-13 18:35:31 -0700 (Thu, 13 May 2010) - smalyshev - #37332
fix cancel button - do not submit form with all the data

r55980 - 2010-04-19 13:31:28 -0700 (Mon, 19 Apr 2010) - kjing - create Mango (6.1) based on windex

r55979 - 2010-04-19 13:15:20 -0700 (Mon, 19 Apr 2010) - jmertic - Bug 36062 - Fixed 'Cancel' button code for DC Menu quick creates.

r55022 - 2010-03-02 09:14:24 -0800 (Tue, 02 Mar 2010) - clee - Bug:36066
We are setting a new target when a form is invoked.  This opens up a new window/tab.  I've changed the full form functionality to not open a new window/tab.
Modified:
include/Smarty/plugins/function.sugar_button.php

r54870 - 2010-02-24 07:41:23 -0800 (Wed, 24 Feb 2010) - roger - bug: 35958 - make the quick create save button blue.

r54023 - 2010-01-25 21:48:12 -0800 (Mon, 25 Jan 2010) - lam - added primary button class

r53522 - 2010-01-07 10:40:50 -0800 (Thu, 07 Jan 2010) - jmertic - Bug 34868 - Make sure clicking on the 'Edit' button on a DetailView actually goes to the EditView.

r53119 - 2009-12-09 19:23:33 -0800 (Wed, 09 Dec 2009) - mitani - fixes tags for xtemplate

r53116 - 2009-12-09 17:24:37 -0800 (Wed, 09 Dec 2009) - mitani - Merge Kobe into Windex Revision 51633 to 53087

r52448 - 2009-11-13 02:21:35 -0800 (Fri, 13 Nov 2009) - mitani - Fixes issues with quick create buttons, removes buttons from the top of the quick create form for productivity bar, aligns navigation buttons with other buttons on detail and edit views fixes an issue with calls edit view still calling on leads 

r52277 - 2009-11-06 12:41:42 -0800 (Fri, 06 Nov 2009) - mitani - Updates the Productivity Bar  UI and adds Spot :) 

r52120 - 2009-11-02 14:45:24 -0800 (Mon, 02 Nov 2009) - clee - Fixed errors with default connector buttons/hover buttons not appearing in default install for sales edition.

r51719 - 2009-10-22 10:18:00 -0700 (Thu, 22 Oct 2009) - mitani - Converted to Build 3  tags and updated the build system 

r51634 - 2009-10-19 13:32:22 -0700 (Mon, 19 Oct 2009) - mitani - Windex is the branch for Sugar Sales 1.0 development

r50375 - 2009-08-24 18:07:43 -0700 (Mon, 24 Aug 2009) - dwong - branch kobe2 from tokyo r50372

r48227 - 2009-06-08 14:59:16 -0700 (Mon, 08 Jun 2009) - tyoung - 23828: replaced the PHP mechanism to calculate the subpanel name based on the module name, which failed as a result of the switch from module-based subpanel names to relationship-based names, which a javascript mechanism embedded in the two affected methods in SubpanelUtils - inlineSave() and cancelCreate(). 
The new mechanism works out from the save or cancel button, respectively, until it encounters a subpanel (marked by a new CSS class 'quickcreate'). It then uses that subpanel name in later operations. This mechanism is now reliable for relationship-based subpanel names. Furthermore, it does not require modifications to the method-chain. To fix this issue by passing the subpanel name along the method-chain would require changing the method signature of the smarty method, sugar_button, which would be very broad-ranging.

r45148 - 2009-03-16 07:43:29 -0700 (Mon, 16 Mar 2009) - clee - Bug:28522
There were several issues with the code to select teams as well as the quicksearch code.  The main issues for the teams selection was that the fields all share the same name and the elements were not being properly selected within the javascript code.
include/EditView/EditView2.php
include/generic/SugarWidgets/SugarWidgetSubpanelTopButtonQuickCreate.php
include/generic/SugarWidgets/SugarWidgetSubpanelTopCreateNoteButton.php
include/generic/SugarWidgets/SugarWidgetSubpanelTopCreateTaskButton.php
include/generic/SugarWidgets/SugarWidgetSubpanelTopScheduleCallButton.php
include/generic/SugarWidgets/SugarWidgetSubpanelTopScheduleMeetingButton.php
include/javascript/sugar_3.js
include/SearchForm/tpls/header.tpl
include/Smarty/plugins/function.sugar_button.php
include/Smarty/plugins/function.sugarvar_teamset.php
include/SugarFields/Fields/Collection/ViewSugarFieldCollection.php
include/SugarFields/Fields/Collection/CollectionEditView.tpl
include/SugarFields/Fields/Collection/SugarFieldCollection.js
include/SugarFields/Fields/Teamset/SugarFieldTeamset.php
include/SugarFields/Fields/Teamset/ViewSugarFieldTeamsetCollection.php
include/SugarFields/Fields/Teamset/Teamset.js
include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl
include/SugarFields/Fields/TeamsetCollectionMassupdateView.tpl
include/SugarFields/Fields/Teamset/TeamsetCollectionSearchView.tpl
include/TemplateHandler/TemplateHandler.php
modules/Teams/TeamSetManager.php
themes/default/IE7.js
Removed:
include/SugarFields/Fields/Teamset/TeamsetCollectionQuickCreateView.tpl

r42807 - 2008-12-29 11:16:59 -0800 (Mon, 29 Dec 2008) - dwong - Branch from trunk/sugarcrm r42806 to branches/tokyo/sugarcrm

r42645 - 2008-12-18 13:41:08 -0800 (Thu, 18 Dec 2008) - awu - merging maint_5_2_0 rev41336:HEAD to trunk

r41336 - 2008-11-04 15:00:45 -0800 (Tue, 04 Nov 2008) - awu - merging Milan code into Tokyo (trunk)

r39146 - 2008-08-26 17:16:04 -0700 (Tue, 26 Aug 2008) - awu - Merging pre_5_1_0 to trunk

r38393 - 2008-07-29 12:44:00 -0700 (Tue, 29 Jul 2008) - Collin Lee - Bug:23873
Spoke with Ran more about this issue. It turns out the "Select" button was not the only button that needed to have a unique id. All subpanel and subpanel quick create buttons where no unique id exists for the element are candidates for change. Modified sugar widget subpanel classes to use a unique id for "Create" and "Select" buttons. Modified function.sugar_button.php to uniquely identify subpanel buttons as well.   

r37505 - 2008-07-02 10:12:55 -0700 (Wed, 02 Jul 2008) - roger - bug: 23283 - buttons in EditView were grouped together without spacing.

r32531 - 2008-03-06 19:04:15 -0800 (Thu, 06 Mar 2008) - jmertic - Bug 19305: Reverted fix in include/formbase.php. Instead check for isDuplicate being set to true and if so, clear the return_id form variable on save.
Touched:
- modules/Tasks/Save.php
- modules/Leads/LeadFormBase.php
- modules/Documents/Save.php
- modules/Campaigns/Save.php
- modules/Emails/Save.php
- modules/KBDocuments/Save.php
- modules/Accounts/AccountFormBase.php
- modules/Meetings/MeetingFormBase.php
- modules/DocumentRevisions/Save.php
- modules/Prospects/ProspectFormBase.php
- modules/Opportunities/OpportunityFormBase.php
- modules/Notes/NoteFormBase.php
- modules/Calls/CallFormBase.php
- modules/Holidays/Save.php
- modules/Quotes/Save.php
- modules/Quotes/QuoteFormBase.php
- modules/Contracts/Save.php
- modules/EmailTemplates/EmailTemplateFormBase.php
- modules/Project/Save.php
- modules/Contacts/ContactFormBase.php
- modules/ProspectLists/ProspectListFormBase.php
- include/formbase.php
- include/Smarty/plugins/function.sugar_button.php
- include/EditView/EditView2.php

r30452 - 2007-12-14 13:28:17 -0800 (Fri, 14 Dec 2007) - clee - Fix for 18019
Need to add code to set the return_id value in include/Smarty/plugins/function.sugar_button.php when clicking on the Duplicate button so that this value is passed into the EditView and a cancel operation can return the user to the previous screen correctly.
Modified:
include/Smarty/plugins/function.sugar_button.php

r29427 - 2007-11-09 09:24:11 -0800 (Fri, 09 Nov 2007) - clee - Fix for 17450
Need extra check for cancel from shortcut menu where action is set, but no return_id or id value exists.

r29426 - 2007-11-09 08:54:58 -0800 (Fri, 09 Nov 2007) - clee - Fix for 17450
The subpanel quick creates full form button generated was not setting a return_action value.  As a result, it defaulted to the previous action ("SubPanelViewer").  Upon cancel, the MVC attempted to run the action for which there was no record.
Modified:
include/Smarty/plugins/function.sugar_button.php
Code Review: Roger

r28804 - 2007-10-24 09:14:09 -0700 (Wed, 24 Oct 2007) - clee - Fix for 16894
Modified function.sugar_button.php to make extra checks to see if the return action is set to DetailView, that a valid id value is set.  Otherwise, there's no way to pull up the DetailView contents.
Modified:
include/Smarty/plugins/function.sugar_button.php
Code Review by Roger.

r28777 - 2007-10-23 17:33:25 -0700 (Tue, 23 Oct 2007) - bsoufflet - bug 16861

r28771 - 2007-10-23 17:23:13 -0700 (Tue, 23 Oct 2007) - clee - Fix for 16740
Fixed include/Smarty/plugins/function.sugar_button.php file.   The button for Audit log was being created with the $_REQUEST id.  However, this value was built for the first request so subsequent requests to view the Audit log would always go back to the id built in the cached .tpl file.  Modified to use {$fields.id.value} instead.
Modified:
Fixed include/Smarty/plugins/function.sugar_button.php

r28643 - 2007-10-22 13:58:23 -0700 (Mon, 22 Oct 2007) - majed - bug #16757
fixes duplicate so it returns to the detail view of the new record instead of the index page

r28573 - 2007-10-21 01:24:14 -0700 (Sun, 21 Oct 2007) - majed - adds support for metadata driven quick creates and adds the ability to create from subpanels for any module 
bug # 16541

r28324 - 2007-10-17 16:24:57 -0700 (Wed, 17 Oct 2007) - majed - bug #13311 fixes delete button showing up when it shouldn't in most scenarios some places the button may be disabled instead of disappearing and in worst case it should display you do not have access if you don't 

r28178 - 2007-10-15 16:56:47 -0700 (Mon, 15 Oct 2007) - majed - Checkin to add first side quick create for meta data driven ui. 

r25427 - 2007-08-11 13:52:09 -0700 (Sat, 11 Aug 2007) - clee - Added empty id check so we do not show the audit button when creating a new record.

r25408 - 2007-08-10 18:12:47 -0700 (Fri, 10 Aug 2007) - clee - Fix for 14268.  Removed the audit link from the VCR Control row and moved to the DetailView/EdtiView header.tpl files.  The link is shown for all modules IF the SugarBean's isAuditEnabled value is set to true.
Updated files:
include/DetailView/header.tpl
include/EditView/EditView2.php
include/EditView/header.tpl
include/EditView/SugarVCR.php
include/Smarty/plugins/function.sugar_button.php
include/SugarFields/Parsers/MetaParser.php

r24941 - 2007-08-01 12:53:34 -0700 (Wed, 01 Aug 2007) - roger - RRS: bug 13806. Set the return_action to DetailView for the Edit button.

r24531 - 2007-07-23 01:25:31 -0700 (Mon, 23 Jul 2007) - clee - Fix for 13778.  Changed include/Smarty/plugins/function.sugar_button.php so that FIND_DUPLICATE button will set return_action to "DetailView" (used only in Contacts and Accounts DetailView Meta-data files).

r24352 - 2007-07-16 10:56:01 -0700 (Mon, 16 Jul 2007) - roger - RRS: bug 13627.

r24254 - 2007-07-12 16:17:11 -0700 (Thu, 12 Jul 2007) - clee - Fixed CANCEL button to return to DetailView always.

r24108 - 2007-07-08 01:05:03 -0700 (Sun, 08 Jul 2007) - clee - Changed to set check_form parameter to EditView if action is EditView.

r23512 - 2007-06-08 17:13:38 -0700 (Fri, 08 Jun 2007) - clee - Determine DetailView.php or index.php action based on presence of id.

r23011 - 2007-05-22 21:51:24 -0700 (Tue, 22 May 2007) - clee - Merging latest changes.

r22641 - 2007-05-10 01:38:12 -0700 (Thu, 10 May 2007) - clee - Change action to ListView for DELETE button.

r22640 - 2007-05-10 01:34:59 -0700 (Thu, 10 May 2007) - clee - For EditView's, default back to DetailView for CANCEL and SAVE buttons.

r22638 - 2007-05-10 01:22:32 -0700 (Thu, 10 May 2007) - clee - Changed FIND_DUPLICATE to FIND_DUPLICATES

r22618 - 2007-05-09 15:36:06 -0700 (Wed, 09 May 2007) - clee - Added file.


*/


/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 *
 * This is a Smarty plugin to handle the creation of HTML form buttons under the
 * metat-data framework.  The buttons may be defined using either the set of built-in
 * buttons or custom code.
 *
 * For example, to add the 'SAVE' and 'CANCEL' buttons to the editviewdefs.php meta-data file,
 * you will create a key/value pair where the key is of value 'form' and value is another array
 * with a 'buttons' key.
 *
 * ...
 * $viewdefs['Accounts']['EditView'] = array(
 * 'templateMeta' => array(
 *                           'form' => array('buttons'=>array('SAVE','CANCEL')),
 * ...
 *
 * The supported types are: CANCEL, DELETE, DUPLICATE, EDIT, FIND_DUPLICATES and SAVE.
 * If you need to create a custom button or the button is very specific to the module and not
 * provided as a supported type, then you'll need to use custom code.  Instead of providing the
 * key, you'll have to create an array with a 'customCode' key.
 *
 * ...
 * $viewdefs['Accounts']['EditView'] = array(
 * 'templateMeta' => array(
 *	'form' => array('buttons'=>array('SAVE',
 *	                                 array('customCode'=>'<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" ' .
 *	                                 		'                    accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" ' .
 *	                                 		'                    class="button" ' .
 *	                                 		'					 onclick="alert(\'hello {$id} \')"; ' .
 *	                                 		'                    type="submit" ' .
 *	                                 		'                    name="button" ' .
 *	                                 		'                    value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">')
 *	                                 )),
 * ...
 *
 * Please note that you should ensure that your customCode is generic in the sense that there are no
 * instance specific values created because it will cause failures should other instances also use
 * the button's code.  The key to remember is that we are rendering a generic template for each
 * module's view and, as such, the meta-data definition should also be generic enough to support
 * variable instance values for the module.
 *
 * In our examples, the resulting metatdata definition is passed to EditView's header.tpl
 * file and the Smarty plugin (this file) is invoked as follows:
 * {{sugar_button module='{{$module}}' id='{{$form.buttons[$id]}}' view='EditView'}}
 *
 *
 * @author Collin Lee {clee@sugarcrm.com}
 */

/**
 * smarty_function_sugar_button
 * This is the constructor for the Smarty plugin.
 *
 * @param $params The runtime Smarty key/value arguments
 * @param $smarty The reference to the Smarty object used in this invocation
 */
function smarty_function_sugar_button($params, &$smarty)
{
   if(empty($params['module'])) {
   	  $smarty->trigger_error("sugar_button: missing required param (module)");
   } else if(empty($params['id'])) {
   	  $smarty->trigger_error("sugar_button: missing required param (id)");
   } else if(empty($params['view'])) {
   	  $smarty->trigger_error("sugar_button: missing required param (view)");
   }

   $type = $params['id'];
   $location = (empty($params['location'])) ? "" : "_".$params['location'];

   if(!is_array($type)) {
   	  $module = $params['module'];
   	  $view = $params['view'];
   	  switch(strtoupper($type)) {
			case "SEARCH":
			return '<input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;';
			break;

			case "CANCEL":
			$cancelButton  = '{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}';
			$cancelButton .= '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}\'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="'.$type.$location.'"> ';
			$cancelButton .= '{elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}';
			$cancelButton .= '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}\'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="'.$type.$location.'"> ';
			$cancelButton .= '{elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}';
			$cancelButton .= '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=index&module='.$module.'\'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="'.$type.$location.'"> ';
			$cancelButton .= '{else}';
			$cancelButton .= '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}\'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="'.$type.$location.'"> ';
			$cancelButton .= '{/if}';
			return $cancelButton;
			break;

			case "DELETE":
			return '{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'' . $module . '\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} ';
			break;

			case "DUPLICATE":
			return '{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\''. $module . '\'; this.form.return_action.value=\'DetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'' . $view . '\'; this.form.return_id.value=\'{$id}\';SUGAR.ajaxUI.submitForm(this.form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} ';
			break;

			case "EDIT";
			return '{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value=\'' . $module . '\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\';SUGAR.ajaxUI.submitForm(this.form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} ';
			break;

			case "FIND_DUPLICATES":
			return '{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="this.form.return_module.value=\'' . $module . '\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';SUGAR.ajaxUI.submitForm(this.form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} ';
			break;

			case "SAVE":
				$view = ($_REQUEST['action'] == 'EditView') ? 'EditView' : (($view == 'EditView') ? 'EditView' : $view);
				return '{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=\'\'; {/if}this.form.action.value=\'Save\'; if(check_form(\'' . $view . '\'))SUGAR.ajaxUI.submitForm(this.form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="'.$type.$location.'">{/if} ';
			break;

			case "SUBPANELSAVE":
                if($view == 'QuickCreate' || (isset($_REQUEST['target_action']) && strtolower($_REQUEST['target_action'])) == 'quickcreate') $view =  "form_SubpanelQuickCreate_{$module}";
                return '{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="disableOnUnloadEditView();this.form.action.value=\'Save\';if(check_form(\''.$view.'\'))return SUGAR.subpanelUtils.inlineSave(this.form.id, \'' . $params['module'] . '_subpanel_save_button\');return false;" type="submit" name="' . $params['module'] . '_subpanel_save_button" id="' . $params['module'] . '_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} ';
			case "SUBPANELCANCEL":
				return '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate(\'' . $params['module'] . '_subpanel_cancel_button\');return false;" type="submit" name="' . $params['module'] . '_subpanel_cancel_button" id="' . $params['module'] . '_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> ';
		    case "SUBPANELFULLFORM":
				$html = '<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value=\'DetailView\'; this.form.action.value=\'EditView\'; if(typeof(this.form.to_pdf)!=\'undefined\') this.form.to_pdf.value=\'0\';" type="submit" name="' . $params['module'] . '_subpanel_full_form_button" id="' . $params['module'] . '_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> ';
				$html .= '<input type="hidden" name="full_form" value="full_form">';
		        return $html;
			case "DCMENUCANCEL":
				return '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="javascript:lastLoadedMenu=undefined;DCMenu.closeOverlay();return false;" type="submit" name="' . $params['module'] . '_dcmenu_cancel_button" id="' . $params['module'] . '_dcmenu_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> ';
		   
			case "DCMENUSAVE":
                            if ($view == 'QuickCreate') {
                                $view = "form_DCQuickCreate_{$module}";
                            } else if ($view == 'EditView') {
                                $view = "form_DCEditView_{$module}";
                            }
				return '{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="this.form.action.value=\'Save\';if(check_form(\''.$view.'\'))return DCMenu.save(this.form.id, \'' . $params['module'] . '_subpanel_save_button\');return false;" type="submit" name="' . $params['module'] . '_dcmenu_save_button" id="' . $params['module'] . '_dcmenu_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} ';
			case "DCMENUFULLFORM":
                $html = '<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" accessKey="{$APP.LBL_FULL_FORM_BUTTON_KEY}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value=\'DetailView\'; this.form.action.value=\'EditView\'; this.form.return_module.value=\'' . $params['module'] . '\';this.form.return_id.value=this.form.record.value;if(typeof(this.form.to_pdf)!=\'undefined\') this.form.to_pdf.value=\'0\';SUGAR.ajaxUI.submitForm(this.form,null,true);DCMenu.closeOverlay();" type="button" name="' . $params['module'] . '_subpanel_full_form_button" id="' . $params['module'] . '_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> ';
				$html .= '<input type="hidden" name="full_form" value="full_form">';
		        return $html;	
			case "POPUPSAVE":
				$view = $view == 'QuickCreate' ? "form_QuickCreate_{$module}" : $view;
				return '{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" '
					 . 'class="button primary" onclick="this.form.action.value=\'Popup\';' 
					 . 'return check_form(\''.$view.'\')" type="submit" name="' . $params['module'] 
					 . '_popupcreate_save_button" id="' . $params['module'] 
					 . '_popupcreate_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} ';
			case "POPUPCANCEL":
				return '<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" ' 
					 . 'class="button" onclick="toggleDisplay(\'addform\');return false;" ' 
					 . 'name="' . $params['module'] . '_popup_cancel_button" type="submit"' 
					 . 'id="' . $params['module'] . '_popup_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> ';
		    
			case "AUDIT":
	            $popup_request_data = array(
			        'call_back_function' => 'set_return',
			        'form_name' => 'EditView',
			        'field_to_name_array' => array(),
			    );
	            $json = getJSONobj();

	            require_once('include/SugarFields/Parsers/MetaParser.php');
	            $encoded_popup_request_data = MetaParser::parseDelimiters($json->encode($popup_request_data));
	 			$audit_link = '<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick=\'open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=' . $params['module'] . '", true, false, ' . $encoded_popup_request_data . '); return false;\' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">';
				$view = '{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}'.$audit_link.'{/if}{/if}';
				return $view;

			//Button for the Connector intergration wizard
			case "CONNECTOR":
				require_once('include/connectors/utils/ConnectorUtils.php');
				require_once('include/connectors/sources/SourceFactory.php');
				$modules_sources = ConnectorUtils::getDisplayConfig();
				if(!is_null($modules_sources) && !empty($modules_sources))
				{
					foreach($modules_sources as $mod=>$entry) {
					    if($mod == $module && !empty($entry)) {
					    	foreach($entry as $source_id) {
					    		$source = SourceFactory::getSource($source_id);
					    		if($source->isEnabledInWizard()) {
					    			return '<input title="{$APP.LBL_MERGE_CONNECTORS}" type="button" class="button" onClick="document.location=\'index.php?module=Connectors&action=Step1&record={$fields.id.value}&merge_module={$module}\'" name="merge_connector" value="{$APP.LBL_MERGE_CONNECTORS}">';
					    		}
					    	}
					    }
					}
				}
				return '';


   	  } //switch

   } else if(is_array($type) && isset($type['customCode'])) {
   	  return $type['customCode'];
   }

}

?>
