
var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("aset",pType,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Import_Item_Standard_Kawasan_Sekolah';if(!pageObj.buttonEventBefore['Import_Item_Standard_Kawasan_Sekolah']){pageObj.buttonEventBefore['Import_Item_Standard_Kawasan_Sekolah']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Import_Item_Standard_Kawasan_Sekolah']){pageObj.buttonEventAfter['Import_Item_Standard_Kawasan_Sekolah']=function(result,ctrl,pageObj,proxy,pageid,rowData){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id=Import_Item_Standard_Kawasan_Sekolah]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Import_Item_Standard_Kawasan_Sekolah"+"_"+Runner.genId();this.id=newId;var button_Import_Item_Standard_Kawasan_Sekolah=new Runner.form.Button({id:newId,btnName:"Import_Item_Standard_Kawasan_Sekolah"});button_Import_Item_Standard_Kawasan_Sekolah.init({args:[pageObj,proxy,pageid]});}});});var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("aset",pType,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Import_Item_Standard_Keselamatan';if(!pageObj.buttonEventBefore['Import_Item_Standard_Keselamatan']){pageObj.buttonEventBefore['Import_Item_Standard_Keselamatan']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Import_Item_Standard_Keselamatan']){pageObj.buttonEventAfter['Import_Item_Standard_Keselamatan']=function(result,ctrl,pageObj,proxy,pageid,rowData){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id=Import_Item_Standard_Keselamatan]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Import_Item_Standard_Keselamatan"+"_"+Runner.genId();this.id=newId;var button_Import_Item_Standard_Keselamatan=new Runner.form.Button({id:newId,btnName:"Import_Item_Standard_Keselamatan"});button_Import_Item_Standard_Keselamatan.init({args:[pageObj,proxy,pageid]});}});});