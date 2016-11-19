function ajax(params){
    /*
     params={

     }
     */
    var xhr=null;
    if (window.XMLHttpRequest) {
        xhr=new XMLHttpRequest();
    }else{
        xhr=new ActiveXObject("Microsoft.XMLHTTP");
    }
    var type=params.type=="post"?"post":"get";
    var url='';
    if (params.url) {
        url=params.url;
    }
    var asyn= params.asyn=="false"? false : true;
    xhr.open(type,url,asyn);
    if (type=="get") {
        xhr.send(null);
    }else if(type=="post"){
        xhr.setRequestHeader('Content-Type','application/x-www-from-urlencoded');
        xhr.send(params.data);
    }
    xhr.onreadystatechange=function(){
        if (xhr.readyState==4) {
            if (xhr.status==200) {
                // var data=this.responseText;
                var data=params.dataType=='xml'?this.responseXML:JSON.parse(this.responseText);
                if (typeof params.success=='function') {
                    params.success(data);
                }
            }else{
                if (typeof params.failure=='function') {
                    params.failure();
                }
            }
        }
    }
}