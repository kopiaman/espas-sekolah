
var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("student_payment",pType,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Cetak_Resit';if(!pageObj.buttonEventBefore['Cetak_Resit']){pageObj.buttonEventBefore['Cetak_Resit']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Cetak_Resit']){pageObj.buttonEventAfter['Cetak_Resit']=function(result,ctrl,pageObj,proxy,pageid,rowData){var payid=result["pay_id"];var sid=result["sid"];var viewResit="x_resit.php?pay_id="+payid+"&sid="+sid;window.open(viewResit,"_blank");}}
$('a[id=Cetak_Resit]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Cetak_Resit"+"_"+Runner.genId();this.id=newId;var button_Cetak_Resit=new Runner.form.Button({id:newId,btnName:"Cetak_Resit"});button_Cetak_Resit.init({args:[pageObj,proxy,pageid]});}});});