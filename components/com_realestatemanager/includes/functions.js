function rem_buttonClickRent(button){
    if(button.name=='rentout'){
        rem_submitform('rent_return');
        return;
    }
    if(button.name=='rent'){
        rem_submitform('rent');
        return;
    }
    if(button.name=='rentout_save'){
        rem_submitform('rent_return');
        return;
    }
    if(button.name=='rent_save'){
      rem_submitform('rent');
      return;
    }
    if(button.name=='edit_rent'){
      rem_submitform('edit_rent_houses');
      return;
    }
}


function rem_checkAll(all){
  //var boxchecked = document.getElementsByName('boxchecked');
  var c = document.getElementsByName('bid[]');
  for(var i=0;i<c.length;i++)
    if(all.checked!=true) 
      c[i].checked=false; 
    else{
      c[i].checked=true;
    }
    
    if(all.checked) 
      document.adminForm.boxchecked.value = 1; 
    else{
      document.adminForm.boxchecked.value = 0;
    }
}

function rem_submitform(submit){
    var button=document.getElementById('adminFormTaskInput');
    button.value=submit;
    document.forms["adminForm"].submit();
}


function rem_buttonClickRentRequest(b){
    if (b.name=='acceptButton') document.getElementById('adminFormTaskInput').value = 'accept_rent_requests';
        else document.getElementById('adminFormTaskInput').value = 'decline_rent_requests';
    document.getElementById('adminForm').submit();
}


function rem_buttonClickBuyRequest(b){
    if (b.name=='acceptButton') document.getElementById('adminFormTaskInput').value = 'accept_buying_requests';
        else document.getElementById('adminFormTaskInput').value = 'decline_buying_requests';
    document.getElementById('adminForm').submit();
}


var photos=0;
function new_photos(){
    div=document.getElementById("items");
    button=document.getElementById("add");
    photos++;
    newitem="<strong>" + "Photo " + photos + ": </strong>";
    newitem+="<input type=\"file\" name=\"new_photo_file[]";
    newitem+="\" value=\"\"size=\"45\"><br>";
    newnode=document.createElement("span");
    newnode.innerHTML=newitem;
    div.insertBefore(newnode,button);
}


/**
* Debug Function, that works like print_r for Objects in Javascript
*/
function var_dump(obj){
    var vartext = "";
    for (var prop in obj){
        if (isNaN(prop.toString())){
            vartext += "\t->"+prop+" = "+ eval( "obj."+prop.toString()) +"\n";
        }
    }
    if(typeof obj == "object"){
        return "Type: "+typeof(obj)+((obj.constructor) ? "\nConstructor: "+obj.constructor : "") + "\n" + vartext;
    } else{
        return "Type: "+typeof(obj)+"\n" + vartext;
    }
}//end function var_dump


function rem_listItemTask(id, task, frmName){
    var f = eval( "document."+frmName );
    cb = eval( 'f.' + id );
    if (cb) {
        cb.checked = true;
        document.getElementById('adminFormTaskInput').value = task;
        f.submit();
    }
    return false;
}


/**
* Default function.  Usually would be overriden by the component
*/
function rem_submitButton(pressbutton, frmName, pageName){
    rem_submitForm(pressbutton, frmName, pageName);
}


/**
* Submit the admin form
*/
function rem_submitForm(pressbutton, frmName, pageName){
    var f = eval("document."+frmName);
    if(pressbutton == "cancel"){
        if(parent.closePanel) parent.closePanel(getURLParam('panelid'));
        f.func.value = "";
    }
    f.target = '_self';
    f.task.value = pressbutton;
    try{
        f.onsubmit();
    } catch(e){}
    f.submit();
}


function rem_submitListFunc(pressbutton, frmName, funcName){
    var f = eval("document."+frmName);
    f.task.value = pressbutton;
    f.func.value = funcName;
    try{
        f.onsubmit();
    } catch(e){}
    f.submit();
}


function MM_findObj(n, d){ //v4.01
    var p,i,x;
    if(!d) d=document;
    if((p=n.indexOf("?"))>0&&parent.frames.length){
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
    }
    if(!(x=d[n])&&d.all) x=d.all[n];
    for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n);
    return x;
}


function MM_swapImage(){ //v3.0
    var i,j=0,x,a=MM_swapImage.arguments;
    document.MM_sr=new Array;
    for(i=0;i<(a.length-2);i+=3)
    if ((x=MM_findObj(a[i]))!=null){
        document.MM_sr[j++]=x;
        if (!x.oSrc) x.oSrc=x.src;
        x.src=a[i+2];
    }
}


function MM_swapImgRestore(){ //v3.0
    var i,x,a=document.MM_sr;
    for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}


function MM_preloadImages(){ //v3.0
    var d=document;
    if(d.images){
        if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments;
        for(i=0; i<a.length; i++) if (a[i].indexOf("#")!=0){
            d.MM_p[j]=new Image;
            d.MM_p[j++].src=a[i];
        }
    }
}
