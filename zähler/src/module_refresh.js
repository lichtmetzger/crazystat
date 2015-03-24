/*

>>>>>> CrazyStat <<<<<<
A convenient, comprehensive and free PHP statistic-Script with optional counter.

Copyright (C) 2004-2012  Christopher Kramer

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

E-Mail: webmaster AT christosoft DOT de
Web: http://www.christosoft.de
Version: 1.71

*** module_refresh.js ***
Function:          Ajax-function to reload modules (optionally with different settings)
Directly callable: no
Included:          by show_stat.php as JavaScript
*/


var mod_count=0;
var all=false;
var list_modules= new Array('hit','weekday','month','day','hour','browser','file','resolution','colordepth','system','referer','keyword');
var mk=false;
var ajaxTree=true;

function refresh(module,parameter)  // Refresh module data via ajax
 {
 waitmessage();
 if(!use_ajax) return true;
 var timeNow=new Date();          // time will be appended to Request to avoid browser caching
 var ajaxObj_Refresh=ajax();    // XMLHttpRequest-Object
 if(module=='ALL')
  {
  module=list_modules[mod_count];
  mod_count ++;
  if(list_modules[mod_count]) all=true;
  else all=false;
  }
 else
  {
  all=false;
  }
 ajaxObj_Refresh.open('get','module_out.php?'+sid+'&modul='+(module)+'&'+parameter+'&stamp='+timeNow.getTime(),true);
 switch(parameter)
  {
  case 'mode=referer_tree_mk':
   mk=true;
   ajaxTree=false;
   break;
  case 'mode=referer_tree0':
   mk=false;
   ajaxTree=false;
   break;
  case 'mode=referer_tree_ajax':
   mk=false;
   ajaxTree=true;
   break;
  }
 ajaxObj_Refresh.onreadystatechange=function() { replaceData(module, ajaxObj_Refresh); };
 ajaxObj_Refresh.send(null);
 return false;
 }

function replaceData(module, ajaxObj_Refresh)  // got new data from server, replace HTML with net data
 {
 if(ajaxObj_Refresh.readyState==4)
  {
  if(ajaxObj_Refresh.responseText.length<200 && ajaxObj_Refresh.responseText.search('<!-- NOT_LOGGED_IN -->')==0)
   {
   messagebox('<p>'+ajaxObj_Refresh.responseText+'</p>');
   }
  else
   {
   if(module=='referer' && ajaxTree) refreshJSdata();
   document.getElementById('module_'+module).innerHTML=ajaxObj_Refresh.responseText;
   if(module!='referer' || !ajaxTree) hide_waitbox();
   }
  if(module=='referer' && mk) convertTrees();
  ajaxObj_Refresh=null;
  if(all) refresh('ALL','mode=refresh');
  if(sortabletable && module!='hit' && (module!='referer' || (!mk && !ajaxTree))) t=new SortableTable(document.getElementById('daten_'+module), 100);
  if(lytebox)
   {
   myLytebox=null;
   initLytebox();
   } 
  }
 }


function refreshJSdata() // Refresh data array "js_data" with new values via AJAX (JSON)
 {
 var timeNow=new Date();       // time will be appended to Request to avoid browser caching
 ajaxObj_Refresh_js=ajax();    // XMLHttpRequest-Object
 ajaxObj_Refresh_js.open('get','module_out.php?'+sid+'&modul=referer&js_data=1&stamp='+timeNow.getTime(),true);
 ajaxObj_Refresh_js.onreadystatechange=replaceJSData;
 ajaxObj_Refresh_js.send(null);
 }
 
function replaceJSData()  // new data for "js_data" is there - replace data with new data
 {
 if(ajaxObj_Refresh_js.readyState==4)
  {
  js_data=JSON.parse(ajaxObj_Refresh_js.responseText);
  hide_waitbox();
  }
 }
