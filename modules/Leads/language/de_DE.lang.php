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
  'LBL_REPORTS_FROM' => 'Berichtet von:',
  'LBL_EXPORT_PHONE_MOBILE' => 'Telefon mobil',
  'LBL_EDITLAYOUT' => 'Layout bearbeiten',
  'LBL_ENTERDATE' => 'Datum eingeben',
  'LBL_LOADING' => 'Laden. Bitte warten...',
  'LBL_EDIT_INLINE' => 'Bearbeiten',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_VCARD' => 'vCard',
  'LBL_LIST_NAME' => 'Name',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_NAME' => 'Name:',
  'LBL_PORTAL_INFORMATION' => 'Portal Information',
  'LBL_PORTAL_NAME' => 'Portal Name:',
  'LBL_STREET' => 'Street',
  'LBL_STATUS' => 'Status:',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_MODULE_TIP' => 'The module to create a new record in.',
  'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
  'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
  'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',
  'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, um diesen Datensatz löschen zu können.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Firma Beschreibung',
  'LBL_ACCOUNT_ID' => 'Firma ID',
  'LBL_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
  'LBL_ADD_BUSINESSCARD' => 'vCard hinzufügen',
  'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
  'LBL_ALT_ADDRESS_CITY' => '2. Adresse Ort',
  'LBL_ALT_ADDRESS_COUNTRY' => '2. Adresse Land',
  'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse Postleitzahl',
  'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland',
  'LBL_ALT_ADDRESS_STREET_2' => '2. Adresse Strasse 2',
  'LBL_ALT_ADDRESS_STREET_3' => '2. Adresse Strasse 3',
  'LBL_ALT_ADDRESS_STREET' => '2. Adresse Strasse',
  'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
  'LBL_ALT_ADDRESS' => 'Andere Adresse',
  'LBL_ANY_ADDRESS' => 'Irgendeine Adresse:',
  'LBL_ANY_EMAIL' => 'Irgendeine E-Mail:',
  'LBL_ANY_PHONE' => 'Irgendeine Telefonnummer:',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
  'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
  'LBL_BACKTOLEADS' => 'Zurück zu den Interessenten',
  'LBL_BUSINESSCARD' => 'Interessent umwandeln',
  'LBL_CITY' => 'Stadt:',
  'LBL_CONTACT_ID' => 'Kontakt ID',
  'LBL_CONTACT_INFORMATION' => 'Informationen',
  'LBL_CONTACT_NAME' => 'Name:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Interessent:',
  'LBL_CONTACT_ROLE' => 'Beruf:',
  'LBL_CONTACT' => 'Interessent:',
  'LBL_CONVERTED_ACCOUNT' => 'Umgewandelt in Firma:',
  'LBL_CONVERTED_CONTACT' => 'Umgewandelt in Kontakt:',
  'LBL_CONVERTED_OPP' => 'Umgewandelt in Verkaufschance:',
  'LBL_CONVERTED' => 'Umgewandelt',
  'LBL_CONVERTLEAD_TITLE' => 'Interessent umwandeln [Alt-V]',
  'LBL_CONVERTLEAD' => 'Interessent umwandeln',
  'LBL_CONVERTLEAD_WARNING' => 'Warnung: Der Status des Interessenten ist schon auf "umgewandelt". Kontakte und/oder Firmen sind eventuell schon daraus angelegt. Wenn Sie dennoch den Interessenten wandeln wollen, drücken Sie "Sichern". Um zurückzukehren, ohne den Interessenten zu wandeln drücken Sie "Abbrechen"',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Möglicher Kontakt',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATED_NEW' => 'Neu angelegt',
  'LBL_CREATED_ACCOUNT' => 'Neue Firma angelegt',
  'LBL_CREATED_CALL' => 'Neuer Anruf angelegt',
  'LBL_CREATED_CONTACT' => 'Neuer Kontakt angelegt',
  'LBL_CREATED_MEETING' => 'Neues Meeting angelegt',
  'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_DEPARTMENT' => 'Abteilung:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
  'LBL_DUPLICATE' => 'Ähnlicher Interessenten',
  'LBL_EMAIL_ADDRESS' => 'E-Mail:',
  'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
  'LBL_EXISTING_ACCOUNT' => 'Vorhandene Firma ausgewählt',
  'LBL_EXISTING_CONTACT' => 'Vorhandener Kontakt ausgewählt',
  'LBL_EXISTING_OPPORTUNITY' => 'Vorhandene Verkaufschance benutzt',
  'LBL_FIRST_NAME' => 'Vorname:',
  'LBL_FULL_NAME' => 'Ganzer Name:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
  'LBL_HOME_PHONE' => 'Telefon privat:',
  'LBL_IMPORT_VCARD' => 'vCard importieren',
  'LBL_IMPORT_VCARDTEXT' => 'Erstellen Sie einen neuen Interessenten, indem Sie eine vCard von Ihrem Computer importieren.',
  'LBL_INVALID_EMAIL' => 'Ungültige E-Mail:',
  'LBL_INVITEE' => 'Direkt-Unterstellte',
  'LBL_LAST_NAME' => 'Nachname:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung Quelle:',
  'LBL_LEAD_SOURCE' => 'Quelle:',
  'LBL_LIST_ACCEPT_STATUS' => 'Status',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_CONTACT_NAME' => 'Name',
  'LBL_LIST_CONTACT_ROLE' => 'Rolle',
  'LBL_LIST_DATE_ENTERED' => 'Erstellt am:',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
  'LBL_LIST_FIRST_NAME' => 'Vorname',
  'LBL_VIEW_FORM_TITLE' => 'Interessenten Ansicht',
  'LBL_LIST_FORM_TITLE' => 'Interessenten Liste',
  'LBL_LIST_LAST_NAME' => 'Nachname',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung Quelle',
  'LBL_LIST_LEAD_SOURCE' => 'Quelle',
  'LBL_LIST_MY_LEADS' => 'Meine Interessenten',
  'LBL_LIST_PHONE' => 'Telefon Büro',
  'LBL_LIST_REFERED_BY' => 'Empfohlen von',
  'LBL_LIST_TITLE' => 'Funktion',
  'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
  'LBL_MODULE_NAME' => 'Interessenten',
  'LBL_MODULE_TITLE' => 'Interessenten: Home',
  'LBL_NEW_FORM_TITLE' => 'Neuer Interessent',
  'LBL_NEW_PORTAL_PASSWORD' => 'Neues Portal Passwort:',
  'LBL_OFFICE_PHONE' => 'Bürotelefon:',
  'LBL_OPP_NAME' => 'Verkaufschance Name:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Verkaufschance Betrag:',
  'LBL_OPPORTUNITY_ID' => 'Verkaufschance ID',
  'LBL_OPPORTUNITY_NAME' => 'Verkaufschance Name:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
  'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PORTAL_ACTIVE' => 'Portal Aktiv:',
  'LBL_PORTAL_APP' => 'Portal Anwendung',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password ist gesetzt:',
  'LBL_POSTAL_CODE' => 'PLZ:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Ort',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Hauptadresse Strasse 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Hauptadresse Strasse 3',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Strasse',
  'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
  'LBL_REFERED_BY' => 'Empfohlen von:',
  'LBL_REPORTS_TO_ID' => 'Berichtet an ID',
  'LBL_REPORTS_TO' => 'Berichtet an:',
  'LBL_SALUTATION' => 'Anrede',
  'LBL_MODIFIED' => 'Geändert von',
  'LBL_MODIFIED_ID' => 'Geändert von ID',
  'LBL_CREATED' => 'Erstellt von:',
  'LBL_CREATED_ID' => 'Erstellt von ID:',
  'LBL_SEARCH_FORM_TITLE' => 'Interessenten Suche',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Interessenten auswählen',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Interessenten auswählen',
  'LBL_STATE' => 'Bundesland:',
  'LBL_STATUS_DESCRIPTION' => 'Beschreibung:',
  'LBL_TITLE' => 'Funktion:',
  'LNK_IMPORT_VCARD' => 'vCard importieren',
  'LNK_LEAD_LIST' => 'Interessenten',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
  'LNK_NEW_CONTACT' => 'Neuer Kontakt',
  'LNK_NEW_LEAD' => 'Neuer Interessent',
  'LNK_NEW_NOTE' => 'Neue Notiz',
  'LNK_NEW_TASK' => 'Neue Aufgabe',
  'LNK_NEW_CASE' => 'Neues Ticket',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_SELECT_ACCOUNT' => 'Firma auswählen',
  'LNK_SELECT_ACCOUNTS' => '<b>ODER</b>Auswahl Firma',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Weitere Adresse in Hauptadresse kopieren',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Hauptadresse in weitere Adresse kopieren',
  'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Zum Erstellen einer Verkaufschance benötigen Sie eine Firma. Bitte erstellen Sie eine Firma oder wählen Sie eine existierende aus.',
  'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diesen Interessenten wirklich aus diesem Ticket löschen?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Möchten Sie diesen Eintrag wirklich als direkten Bericht entfernen?',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnen',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Erfolgreiche Kampagne:',
  'LBL_TARGET_BUTTON_LABEL' => 'Gezielt',
  'LBL_TARGET_BUTTON_TITLE' => 'Gezielt',
  'LBL_CAMPAIGN_ID' => 'Kampagnen ID',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_PROSPECT_LIST' => 'Kontaktliste',
  'LBL_CAMPAIGN_LEAD' => 'Interessent',
  'LNK_LEAD_REPORTS' => 'Interessenten Berichte',
  'LBL_BIRTHDATE' => 'Geburtstag',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Vielen Dank für die Eingabe.',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Es tut uns leid, der Server ist im Moment nicht erreichbar, versuchen Sie es bitte später noch einmal.',
  'LBL_ASSISTANT_PHONE' => 'Telefon Assistent(in)',
  'LBL_ASSISTANT' => 'Assistent(in)',
  'LBL_REGISTRATION' => 'Registrierung',
  'LBL_MESSAGE' => 'Bitte geben Sie Ihre Information unten ein. Information und/oder ein Konto wird für Sie erstellt - vorausgesetzt Sie stimmen zu.',
  'LBL_SAVED' => 'Danke für Ihre Registrierung. Ihr Konto wird angelegt und Sie werden in Kürze kontaktiert.',
  'LBL_CLICK_TO_RETURN' => 'Zurück zum Portal',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_MODIFIED_USER' => 'Veränderter Benutzer',
  'LBL_CAMPAIGNS' => 'Kampagnen',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagnen',
  'LBL_CONVERT_MODULE_NAME' => 'Modul',
  'LBL_CONVERT_REQUIRED' => 'Erforderlich',
  'LBL_CONVERT_SELECT' => 'Selektion zulassen',
  'LBL_CONVERT_COPY' => 'Daten kopieren',
  'LBL_CONVERT_EDIT' => 'Bearbeiten',
  'LBL_CONVERT_DELETE' => 'Löschen',
  'LBL_CONVERT_ADD_MODULE' => 'Modul hinzufügen',
  'LBL_CONVERT_EDIT_LAYOUT' => '"Umwandlungs" Layout bearbeiten',
  'LBL_CREATE' => 'Erstellen',
  'LBL_SELECT' => '<b>ODER</b> selektieren',
  'LBL_WEBSITE' => 'Webseite:',
  'LNK_IMPORT_LEADS' => 'Interessenten importieren',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notiz: Die "Umwandlungs" Maske enthält benutzerdefinierte Felder. Wenn Sie erstmalig die Maske im Studio bearbeiten müssen Sie benutzerdefinierte Felder zum Layout hinzufügen. Die Felder sind wie in früheren Version nicht automatisch verfügbar.',
  'LBL_REQUIRED_TIP' => 'Die benötigten Module müssen erstellt sein bevor der ausgewählte Interessent gewandelt werden kann.',
  'LBL_COPY_TIP' => 'Wenn selektiert, werden alle Felder des Interessenten in die Felder mit gleicher Bezeichnung des neuen Datensatzes kopiert.',
  'LBL_ACTIVITIES_MOVE' => 'Aktivitäten verschieben nach',
  'LBL_ACTIVITIES_COPY' => 'Aktivitäten kopieren nach',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Satz auswählen, wohin die Interessenten Aktivitäten, Aufgaben, Anrufe, Meetings, Notizen und  E-Mails verschoben werden.',
  'LBL_ACTIVITIES_COPY_HELP' => 'Satz/Sätze auswählen, wohin die Interessenten Aktivitäten, Aufgaben, Anrufe, Meetings, Notizen und  E-Mails hinkopiert werden. E-Mails werden mit diese Sätze verknüpft.',
  'LBL_PHONE_HOME' => 'Telefon privat',
  'LBL_PHONE_MOBILE' => 'Handy',
  'LBL_PHONE_WORK' => 'Telefon Büro',
  'LBL_PHONE_OTHER' => 'Anderes Telefon',
  'LBL_PHONE_FAX' => 'Telefon/Fax:',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesen Benutzer',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
  'LBL_EXPORT_CREATED_BY' => 'Ersteller',
  'LBL_EXPORT_EMAIL2' => 'Andere E-Mail Adresse',
);

