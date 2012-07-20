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
  'LBL_MODULE_NAME' => 'Előrejelzések',
  'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
  'LBL_MODULE_TITLE' => 'Előrejelzések',
  'LBL_LIST_FORM_TITLE' => 'Elkötelezett előrejelzések',
  'LNK_UPD_FORECAST' => 'Előrejelzés munkalap',
  'LNK_QUOTA' => 'Előírások megtekintése',
  'LNK_FORECAST_LIST' => 'Előrejelzés történet megtekintése',
  'LBL_FORECAST_HISTORY' => 'Előrejelzések: Előzmény',
  'LBL_FORECAST_HISTORY_TITLE' => 'Előzmény',
  'LBL_TIMEPERIOD_NAME' => 'Időszak',
  'LBL_USER_NAME' => 'Felhasználó név',
  'LBL_REPORTS_TO_USER_NAME' => 'Jelentést tesz',
  'LBL_FORECAST_ID' => 'Azonosító',
  'LBL_FORECAST_TIME_ID' => 'Időszak azonosító',
  'LBL_FORECAST_TYPE' => 'Előrejelzés típusa',
  'LBL_FORECAST_OPP_COUNT' => 'Lehetőségek',
  'LBL_FORECAST_OPP_WEIGH' => 'Súlyozott összeg',
  'LBL_FORECAST_OPP_COMMIT' => 'Valószínű eset',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Legjobb eset',
  'LBL_FORECAST_OPP_WORST' => 'Legrosszabb eset',
  'LBL_FORECAST_USER' => 'Felhasználó',
  'LBL_DATE_COMMITTED' => 'Elkötelezett dátum',
  'LBL_DATE_ENTERED' => 'Felvitel dátuma:',
  'LBL_DATE_MODIFIED' => 'Dátum módosítva',
  'LBL_CREATED_BY' => 'Létrehozta',
  'LBL_DELETED' => 'Törölve',
  'LBL_MODIFIED_USER_ID' => 'Módosította',
  'LBL_QC_TIME_PERIOD' => 'Időszak:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Lehetőségek száma:',
  'LBL_QC_WEIGHT_VALUE' => 'Súlyozott összeg:',
  'LBL_QC_COMMIT_VALUE' => 'Elkötelezett összeg:',
  'LBL_QC_COMMIT_BUTTON' => 'Tárol',
  'LBL_QC_WORKSHEET_BUTTON' => 'Munkalap',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Előírt összegek göngyölítve:',
  'LBL_QC_DIRECT_FORECAST' => 'Közvetlen előrejelzéseim:',
  'LBL_QC_ROLLUP_FORECAST' => 'Csoport előrejelzéseim:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Előrejelzéseim',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Utolsó elkötelezés időpontja:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Utolsó elkötelezés összege:',
  'LBL_QC_HEADER_DELIM' => 'Címzett:',
  'LBL_OW_OPPORTUNITIES' => 'Lehetőség',
  'LBL_OW_ACCOUNTNAME' => 'Kliens',
  'LBL_OW_REVENUE' => 'Összeg',
  'LBL_OW_WEIGHTED' => 'Súlyozott összeg',
  'LBL_OW_MODULE_TITLE' => 'Lehetőség munkalap',
  'LBL_OW_PROBABILITY' => 'Valószínűség',
  'LBL_OW_NEXT_STEP' => 'Következő lépés',
  'LBL_OW_DESCRIPTION' => 'Leírás',
  'LBL_OW_TYPE' => 'Típus',
  'LNK_NEW_TIMEPERIOD' => 'Időszak létrehozása',
  'LNK_TIMEPERIOD_LIST' => 'Időszakok megtekintése',
  'LBL_SVFS_FORECASTDATE' => 'Ütemezés kezdő dátuma',
  'LBL_SVFS_STATUS' => 'Állapot',
  'LBL_SVFS_USER' => 'A',
  'LBL_SVFS_CASCADE' => 'Lépcsőzetes kimutatás?',
  'LBL_SVFS_HEADER' => 'Előrejelzés ütemezése:',
  'LB_FS_KEY' => 'Azonosító',
  'LBL_FS_TIMEPERIOD_ID' => 'Időszak azonosító',
  'LBL_FS_USER_ID' => 'Felhasználó azonosító',
  'LBL_FS_TIMEPERIOD' => 'Időszak',
  'LBL_FS_START_DATE' => 'Kezdés dátuma',
  'LBL_FS_END_DATE' => 'Befejezés dátuma',
  'LBL_FS_FORECAST_START_DATE' => 'Előrejelzés kezdő dátuma',
  'LBL_FS_STATUS' => 'Állapot',
  'LBL_FS_FORECAST_FOR' => 'Ütemezés a(z):',
  'LBL_FS_CASCADE' => 'Lépcsőzetes?',
  'LBL_FS_MODULE_NAME' => 'Előrejelzés ütemezése',
  'LBL_FS_CREATED_BY' => 'Létrehozta',
  'LBL_FS_DATE_ENTERED' => 'Dátum létrehozva',
  'LBL_FS_DATE_MODIFIED' => 'Dátum módosítva',
  'LBL_FS_DELETED' => 'Törölve',
  'LBL_FDR_USER_NAME' => 'Közvetlen riport',
  'LBL_FDR_OPPORTUNITIES' => 'Lehetőségek az előrejelzésben:',
  'LBL_FDR_WEIGH' => 'Súlyozott összeg a lehetőségekből:',
  'LBL_FDR_COMMIT' => 'Elkötelezett összeg',
  'LBL_FDR_DATE_COMMIT' => 'Elkötelezés időpontja',
  'LBL_DV_HEADER' => 'Előrejelzés: Munkalap',
  'LBL_DV_MY_FORECASTS' => 'Előrejelzéseim',
  'LBL_DV_MY_TEAM' => 'Csoportom előrejelzései',
  'LBL_DV_TIMEPERIODS' => 'Időszakok:',
  'LBL_DV_FORECAST_PERIOD' => 'Előrejelzés időszaka',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Lehetőségek előrejelzése',
  'LBL_SEARCH' => 'Választás',
  'LBL_SEARCH_LABEL' => 'Választás',
  'LBL_COMMIT_HEADER' => 'Elkötelezés előrejelzése',
  'LBL_DV_LAST_COMMIT_DATE' => 'Utolsó elkötelezés időpontja:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Utolsó elkötelezés összege:',
  'LBL_DV_FORECAST_ROLLUP' => 'Előrejelzés összesítő',
  'LBL_DV_TIMEPERIOD' => 'Időszak:',
  'LBL_DV_TIMPERIOD_DATES' => 'Dátumtartomány:',
  'LBL_LV_TIMPERIOD' => 'Időszak',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Kezdés dátuma',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Befejezés dátuma',
  'LBL_LV_TYPE' => 'Előrejelzés típusa',
  'LBL_LV_COMMIT_DATE' => 'Elkötelezett időpont',
  'LBL_LV_OPPORTUNITIES' => 'Lehetőségek',
  'LBL_LV_WEIGH' => 'Súlyozott összeg',
  'LBL_LV_COMMIT' => 'Elkötelezett összeg',
  'LBL_COMMIT_NOTE' => 'Írja be az elkötelezendő összegeket a kiválasztott időszakban:',
  'LBL_COMMIT_MESSAGE' => 'El akarja kötelezni ezeket az összegeket?',
  'ERR_FORECAST_AMOUNT' => 'Az összeg elkötelezéséhez egy számot kell megadnia.',
  'LBL_FC_START_DATE' => 'Kezdés dátuma',
  'LBL_FC_USER' => 'Időbeosztás',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Nincs aktív időszak az előrejelzéshez.',
  'LBL_FDR_ADJ_AMOUNT' => 'Korrigált összeg',
  'LBL_SAVE_WOKSHEET' => 'Munkalap mentése',
  'LBL_RESET_WOKSHEET' => 'Munkalap törlése',
  'LBL_SHOW_CHART' => 'Diagramok megtekintése',
  'LBL_RESET_CHECK' => 'A kiválasztott időszak minden munkalapja és a felhasználói bejelentkezése törlődik. Folytatja?',
  'LB_FS_LIKELY_CASE' => 'Valószínű eset',
  'LB_FS_WORST_CASE' => 'Legrosszabb eset',
  'LB_FS_BEST_CASE' => 'Legjobb eset',
  'LBL_FDR_WK_LIKELY_CASE' => 'Várh. valószínű eset',
  'LBL_FDR_WK_BEST_CASE' => 'Várh. legjobb eset',
  'LBL_FDR_WK_WORST_CASE' => 'Várható legrosszabb eset',
  'LBL_BEST_CASE' => 'Legjobb eset:',
  'LBL_LIKELY_CASE' => 'Valószínű:',
  'LBL_WORST_CASE' => 'Legrosszabb eset:',
  'LBL_FDR_C_BEST_CASE' => 'Legjobb eset:',
  'LBL_FDR_C_WORST_CASE' => 'Legrosszabb eset',
  'LBL_FDR_C_LIKELY_CASE' => 'Valószínű',
  'LBL_QC_LAST_BEST_CASE' => 'Utolsó előírt összeg (legjobb eset):',
  'LBL_QC_LAST_LIKELY_CASE' => 'Utolsó elkötelezés összege (valószínű eset):',
  'LBL_QC_LAST_WORST_CASE' => 'Utolsó elkötelezés összege (legrosszabb eset):',
  'LBL_QC_ROLL_BEST_VALUE' => 'Elkötelezés összege göngyölítve (legjobb eset)',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Elkötelezés összege göngyölítve (valószínű eset):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Elkötelezés összege göngyölítve (legrosszabb eset):',
  'LBL_QC_COMMIT_BEST_CASE' => 'Elkötelezés összege (legjobb eset):',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Elkötelezés összege (valószínű eset):',
  'LBL_QC_COMMIT_WORST_CASE' => 'Elkötelezés összege (legrosszabb eset):',
  'LBL_FORECAST_FOR' => 'Előrejelzés munkalap a:',
  'LBL_FMT_ROLLUP_FORECAST' => '(Összegzés)',
  'LBL_FMT_DIRECT_FORECAST' => '(Közvetlen)',
  'LBL_GRAPH_TITLE' => 'Előrejelzés története',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Előírás %-ban',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Elkötelezett összegek %-ban',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Lezárt lehetőségek összegei %-ban',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Előírás',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Elkötelezett előrejelzés',
  'LBL_GRAPH_OPPS_LEGEND' => 'Lezárt lehetőségek',
  'LBL_TP_QUOTA' => 'Előírás:',
  'LBL_CHART_FOOTER' => 'Előírás <> Elkötelezett összeg <> Lezárt lehetőség érteke',
  'LBL_TOTAL_VALUE' => 'Összesen:',
  'LBL_COPY_AMOUNT' => 'Teljes összeg',
  'LBL_COPY_WEIGH_AMOUNT' => 'Összesen súlyozott összeg',
  'LBL_WORKSHEET_AMOUNT' => 'Összesen becsült összeg',
  'LBL_COPY' => 'Érték másolása',
  'LBL_COMMIT_AMOUNT' => 'Elkötelezett értékek összesítése.',
  'LBL_COPY_FROM' => 'Érték másolása innen:',
  'LBL_CHART_TITLE' => 'Előírás <> Elkötelezett <> Tényleges',
);

