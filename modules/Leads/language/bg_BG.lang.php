<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


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

	

$mod_strings = array (
  'LBL_REPORTS_FROM' => 'Reports From:',
  'LBL_EXPORT_PHONE_MOBILE' => 'Мобилен номер',
  'LBL_EDITLAYOUT' => 'Редактиране на подредби',
  'LBL_ENTERDATE' => 'Въведи дата',
  'LBL_LOADING' => 'Зарежда се ...',
  'LBL_EDIT_INLINE' => 'Редактирай',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_VCARD' => 'vCard',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_CONVERT_COPY' => 'Copy Data',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Edit Convert Layout',
  'LBL_MODULE_TIP' => 'The module to create a new record in.',
  'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
  'LBL_EXPORT_CREATED_BY' => 'Created By ID',
  'ERR_DELETE_RECORD' => 'en_us Трябва да определите номер на записа, за да изтриете този потенциален клиент.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Описание на организацията',
  'LBL_ACCOUNT_ID' => 'Организация',
  'LBL_ACCOUNT_NAME' => 'Организация:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
  'LBL_ADD_BUSINESSCARD' => 'Въведи визитка',
  'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
  'LBL_ALT_ADDRESS_CITY' => 'Алтернативен адрес: град',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Алтернативен адрес: държава',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Алтернативен адрес: пощенски код',
  'LBL_ALT_ADDRESS_STATE' => 'Алтернативе адрес: област',
  'LBL_ALT_ADDRESS_STREET_2' => 'Алтернативен адрес: улица 2',
  'LBL_ALT_ADDRESS_STREET_3' => 'Алтернативен адрес: улица 3',
  'LBL_ALT_ADDRESS_STREET' => 'Алтернативен адрес: улица',
  'LBL_ALTERNATE_ADDRESS' => 'Алтернативен адрес:',
  'LBL_ALT_ADDRESS' => 'Алтернативен адрес:',
  'LBL_ANY_ADDRESS' => 'Адрес:',
  'LBL_ANY_EMAIL' => 'Електронна поща:',
  'LBL_ANY_PHONE' => 'Телефон:',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник',
  'LBL_ASSIGNED_TO_ID' => 'Отговорник:',
  'LBL_BACKTOLEADS' => 'Връщане в модул потенциални клиенти',
  'LBL_BUSINESSCARD' => 'Преобразуване в контакт',
  'LBL_CITY' => 'Град:',
  'LBL_CONTACT_ID' => 'Контакт',
  'LBL_CONTACT_INFORMATION' => 'Информация',
  'LBL_CONTACT_NAME' => 'Име на потенциалния клиент:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Потенциал - Възможност:',
  'LBL_CONTACT_ROLE' => 'Роля:',
  'LBL_CONTACT' => 'Потенциален клиент:',
  'LBL_CONVERTED_ACCOUNT' => 'Преобразуван в организация:',
  'LBL_CONVERTED_CONTACT' => 'Преобразуван в контакт:',
  'LBL_CONVERTED_OPP' => 'Преобразуван във възможност:',
  'LBL_CONVERTED' => 'Преобразуван:',
  'LBL_CONVERTLEAD_TITLE' => 'Преобразуване в контакт [Alt+V]',
  'LBL_CONVERTLEAD' => 'Преобразуване в контакт',
  'LBL_CONVERTLEAD_WARNING' => 'Warning: This Lead may have already been converted',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'into Contact',
  'LBL_COUNTRY' => 'Държава:',
  'LBL_CREATED_NEW' => 'Създадена е нова',
  'LBL_CREATED_ACCOUNT' => 'Въведена е нова организация',
  'LBL_CREATED_CALL' => 'Планирано е ново обаждане',
  'LBL_CREATED_CONTACT' => 'Въведен е нов контакт',
  'LBL_CREATED_MEETING' => 'Насрочена е нова среща',
  'LBL_CREATED_OPPORTUNITY' => 'Въведена е нова възможност',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Потенциални клиенти',
  'LBL_DEPARTMENT' => 'Отдел:',
  'LBL_DESCRIPTION_INFORMATION' => 'Допълнителна информация',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DO_NOT_CALL' => 'Да не бъде търсен по телефон:',
  'LBL_DUPLICATE' => 'Подобни потенциални клиенти',
  'LBL_EMAIL_ADDRESS' => 'Електронна поща:',
  'LBL_EMAIL_OPT_OUT' => 'Да не се изпраща електронна поща:',
  'LBL_EXISTING_ACCOUNT' => 'Използвана е вече съществуваща организация',
  'LBL_EXISTING_CONTACT' => 'Използван е вече съществуващ контакт',
  'LBL_EXISTING_OPPORTUNITY' => 'Използвана е вече съществуваща възможност',
  'LBL_FAX_PHONE' => 'Факс:',
  'LBL_FIRST_NAME' => 'Име:',
  'LBL_FULL_NAME' => 'Пълно име:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
  'LBL_HOME_PHONE' => 'Домашен телефон:',
  'LBL_IMPORT_VCARD' => 'Импортиране на електронна визитка',
  'LBL_IMPORT_VCARDTEXT' => 'Автоматично създава нов потенциален клиент чрез импортиране на електронна визитка от Вашата файлова система.',
  'LBL_INVALID_EMAIL' => 'Неработеща електронна поща:',
  'LBL_INVITEE' => 'Докладва на',
  'LBL_LAST_NAME' => 'Фамилия:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Описание на източника:',
  'LBL_LEAD_SOURCE' => 'Източник:',
  'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
  'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
  'LBL_LIST_CONTACT_NAME' => 'Име на потенциалния клиент',
  'LBL_LIST_CONTACT_ROLE' => 'Роля',
  'LBL_LIST_DATE_ENTERED' => 'Създадено на',
  'LBL_LIST_EMAIL_ADDRESS' => 'Електронна поща',
  'LBL_LIST_FIRST_NAME' => 'Име',
  'LBL_VIEW_FORM_TITLE' => 'Потенциални клиенти',
  'LBL_LIST_FORM_TITLE' => 'Списък с потенциални клиенти:',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Описание на източника',
  'LBL_LIST_LEAD_SOURCE' => 'Източник',
  'LBL_LIST_MY_LEADS' => 'Моите потенциални клиенти',
  'LBL_LIST_NAME' => 'Име',
  'LBL_LIST_PHONE' => 'Телефон',
  'LBL_LIST_REFERED_BY' => 'Пренасочен от',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_TITLE' => 'Длъжност',
  'LBL_MOBILE_PHONE' => 'Мобилен номер:',
  'LBL_MODULE_NAME' => 'Потенциални клиенти',
  'LBL_MODULE_TITLE' => 'Потенциални клиенти',
  'LBL_NAME' => 'Име:',
  'LBL_NEW_FORM_TITLE' => 'Нов потенциален клиент',
  'LBL_NEW_PORTAL_PASSWORD' => 'Нова парола за достъп до портала:',
  'LBL_OFFICE_PHONE' => 'Служебен телефон:',
  'LBL_OPP_NAME' => 'Възможност:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Сума на възможността:',
  'LBL_OPPORTUNITY_ID' => 'Възможност',
  'LBL_OPPORTUNITY_NAME' => 'Възможност:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща:',
  'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
  'LBL_PHONE' => 'Телефон:',
  'LBL_PORTAL_ACTIVE' => 'Порталът е активен:',
  'LBL_PORTAL_APP' => 'Приложения',
  'LBL_PORTAL_INFORMATION' => 'Информация',
  'LBL_PORTAL_NAME' => 'Име на портала:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Паролата за достъп до портала е установена',
  'LBL_POSTAL_CODE' => 'Пощенски код:',
  'LBL_STREET' => 'Улица',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Адрес за кореспонденция: град',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Адрес за кореспонденция: държава',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Адрес за кореспонденция: пощенски код',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Адрес за кореспонденция: област',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Адрес за кореспонденция: улица 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Адрес за кореспонденция: улица 3',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Адрес за кореспонденция: улица',
  'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
  'LBL_REFERED_BY' => 'Пренасочен от:',
  'LBL_REPORTS_TO_ID' => 'Докладва на',
  'LBL_REPORTS_TO' => 'Докладва на:',
  'LBL_SALUTATION' => 'Поздрав',
  'LBL_MODIFIED' => 'Модифицирано от',
  'LBL_MODIFIED_ID' => 'Модифицирано от',
  'LBL_CREATED' => 'Създадено от',
  'LBL_CREATED_ID' => 'Създадено от',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Потенциални клиенти"',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Избери маркираните клиенти',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Избери маркираните клиенти',
  'LBL_STATE' => 'Област:',
  'LBL_STATUS_DESCRIPTION' => 'Описание на статуса:',
  'LBL_STATUS' => 'Статус:',
  'LBL_TITLE' => 'Длъжност:',
  'LNK_IMPORT_VCARD' => 'Създаване от електронна визитка',
  'LNK_LEAD_LIST' => 'Списък с потенциални клиенти',
  'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
  'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
  'LNK_NEW_CONTACT' => 'Създаване на контакт',
  'LNK_NEW_LEAD' => 'Въвеждане на потенциален клиент',
  'LNK_NEW_NOTE' => 'Въвеждане на бележки',
  'LNK_NEW_TASK' => 'Добавяне на задача',
  'LNK_NEW_CASE' => 'Въвеждане на казус',
  'LNK_NEW_CALL' => 'Планиране на обаждане',
  'LNK_NEW_MEETING' => 'Насрочване на среща',
  'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
  'LNK_SELECT_ACCOUNT' => 'Избери организация',
  'LNK_SELECT_ACCOUNTS' => '<b>OR</b> Select Account',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Копиране данните от алтернативния адрес върху основния адрес',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Копиране данните от основния адрес върху алтернативния адрес',
  'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'За да запазите тази възможност е необходимо да посочите организация.n Моля, въведете нова или изберете от вече съществуващи.',
  'NTC_REMOVE_CONFIRMATION' => 'Сигурни ли сте, че искате да премахнете този потенциален клиент от този казус?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете този запис като direct report?',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Кампании',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Успешна кампания:',
  'LBL_TARGET_BUTTON_LABEL' => 'Целеви',
  'LBL_TARGET_BUTTON_TITLE' => 'Целеви',
  'LBL_CAMPAIGN_ID' => 'Кампания',
  'LBL_CAMPAIGN' => 'Кампания:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
  'LBL_PROSPECT_LIST' => 'Целева група',
  'LBL_CAMPAIGN_LEAD' => 'Кампании',
  'LNK_LEAD_REPORTS' => 'Справки за потенциални клиенти',
  'LBL_BIRTHDATE' => 'Дата на раждане:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Благодарим Ви за изпратената информация.',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Съжаляваме, сървърът е временно недостъпен. Моля, опитайте по-късно.',
  'LBL_ASSISTANT_PHONE' => 'Телефон на асистента',
  'LBL_ASSISTANT' => 'Асистент',
  'LBL_REGISTRATION' => 'Регистрация',
  'LBL_MESSAGE' => 'Моля, въведете необходимата информация долу. Персонален профил ще бъде създаден за последващо потвърждение от Ваша страна.',
  'LBL_SAVED' => 'Благодарим Ви за регистрацията. Вашият профил бе създаден успешно. Нашият представител ще се свърже с Вас в най-кратки срокове.',
  'LBL_CLICK_TO_RETURN' => 'Връщане към портала',
  'LBL_CREATED_USER' => 'Създаден потребител',
  'LBL_MODIFIED_USER' => 'Модифициран потребител',
  'LBL_CAMPAIGNS' => 'Кампании',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Кампании',
  'LBL_CONVERT_MODULE_NAME' => 'Модул',
  'LBL_CONVERT_REQUIRED' => 'Задължително',
  'LBL_CONVERT_SELECT' => 'Дава възможност за избор',
  'LBL_CONVERT_EDIT' => 'Редактиране',
  'LBL_CONVERT_DELETE' => 'Изтриване',
  'LBL_CONVERT_ADD_MODULE' => 'Добавяне на модул',
  'LBL_CREATE' => 'Създай',
  'LBL_SELECT' => '<b>OR</b> Select',
  'LBL_WEBSITE' => 'Сайт',
  'LNK_IMPORT_LEADS' => 'Импортиране на потенциални клиенти',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Забележка: Сегашните превърнати потенциални клиенти на екрана, съдържат допълнителни полета. Когато персонализирате превърнатите потенциални клиенти в студиото за първи път, трябва да добавите допълнителните полета към визуализиране, колкото е необходимо.  Допълнителните полета, няма да се визуализират, както е при стандартните.',
  'LBL_REQUIRED_TIP' => 'Модулите трябва да бъдат създадени или избрани, преди да бъдат преобразувани потенциалните клиенти.',
  'LBL_COPY_TIP' => 'Ако е избрано поле от потенциалния клиент ще бъдат копирани в полето със същото име в новосъздадения списък.',
  'LBL_SELECTION_TIP' => 'Модули с relate поле в Контакти може да бъде избрано преди да завърши процеса на преобразуване на потенциалните клиенти.',
  'LBL_DELETE_TIP' => 'Премахване на модула от процеса за преобразуване.',
  'LBL_ACTIVITIES_MOVE' => 'Премести дейностите в',
  'LBL_ACTIVITIES_COPY' => 'Копирай дейностите в',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Select the record to which to move the Lead&#39;s activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).',
  'LBL_ACTIVITIES_COPY_HELP' => 'Select the record(s) for which to create copies of the Lead&#39;s activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).',
  'LBL_PHONE_HOME' => 'Домашен телефон',
  'LBL_PHONE_MOBILE' => 'Мобилен телефон',
  'LBL_PHONE_WORK' => 'Служебен телефон',
  'LBL_PHONE_OTHER' => 'Алтернативен телефон',
  'LBL_PHONE_FAX' => 'Факс',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Отговорник',
  'LBL_EXPORT_EMAIL2' => 'Алтернативен е-мейл адрес',
);

