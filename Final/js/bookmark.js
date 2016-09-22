
	 var span = document.getElementsByTagName('span');
	 var num=0;
	 var flag = 0;
	  
	 for(var i = 1; i < span.length + 1; i++){
	 senddata(i); 
	 }
	  
	 function goodplus(gindex,businessName,address,user_ID){
	 flag = 1;
	 //num = parseInt(span.item(gindex-1).innerHTML);
	 if(checkcookie(gindex) == true){
	 //num = num + 1;
	 senddata(gindex,businessName,address,user_ID);
	 addToTable(businessName,address);
	 }else{
	 alert("You have saved this service provider!") 
	 }
	 }		
	 
	 function senddata(aindex,name,addr,user_ID){
	 var xmlhttp;
	 var txt;
	 if(window.XMLHttpRequest){
	 xmlhttp=new XMLHttpRequest();
	 }else{
	 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	 xmlhttp.onreadystatechange=function(){
	 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
	 txt = xmlhttp.responseText;
	 var cookieindex = aindex - 1;
	 //document.getElementsByTagName('span').item(cookieindex).innerHTML = txt;
	 }
	 }
	 xmlhttp.open("GET","http://13.73.116.179/php/bookmark.php?addr=" + addr + '&name=' + name + '&aindex=' + aindex
	 	+ '&user_ID=' + user_ID,true);
	 //xmlhttp.open("GET","index.php",true);
	 xmlhttp.send();
	 }
	  
	//判断是否已经存在了cookie
	 function checkcookie(gindex){
	 var thiscookie = 'sdcity_foodmap_goodplus' + gindex;
	 var mapcookie = getCookie(thiscookie)
	 if (mapcookie!=null && mapcookie!=""){
	 return false;
	 }else {
	 setCookie(thiscookie,thiscookie,365);
	 return true;
	 } 
	 }
	  
	//获取cookie
	 function getCookie(c_name){
	//获取cookie，参数是名称。
	 if (document.cookie.length > 0){
	//当cookie不为空的时候就开始查找名称 
	 c_start = document.cookie.indexOf(c_name + "=");
	 if (c_start != -1){
	//如果开始的位置不为-1就是找到了、找到了之后就要确定结束的位置
	 c_start = c_start + c_name.length + 1 ;
	//cookie的值存在名称和等号的后面，所以内容的开始位置应该是加上长度和1
	 c_end = document.cookie.indexOf(";" , c_start);
	 if (c_end == -1) {
	  c_end = document.cookie.length;
	 }
	 return unescape(document.cookie.substring(c_start , c_end));//返回内容，解码。
	 } 
	 }
	 return "";
	 }
	  
	//设置cookie
	 function setCookie(c_name,value,expiredays){
	//存入名称，值，有效期。有效期到期事件是今天+有效天数。然后存储cookie，
	 var exdate=new Date();
	 //exdate.setDate( exdate.getDate() + expiredays )
	 exdate.setDate( exdate.getDate() + 365)
	 document.cookie = c_name + "=" + escape(value) + ((expiredays==null) ? "" : "; expires=" + exdate.toGMTString())
	 }

	 for(var i=0;i<=19;i++)	{
	  var date = new Date(); 
	  var temCname='sdcity_foodmap_goodplus' + i;
	  date.setTime(date.getTime() - 10000); 
	  document.cookie = temCname + "=a; expires=" + date.toGMTString();}

	  function addToTable(service_name,service_address){
            $.ajax({           
            error:function(){alert("Time Out");},
            success:function(data){
               $("#result_table").append("<tr id='tr'"+ "><td>"+service_name+"</td><td>"+service_address+"</td></tr>");  
            }
            });
          }
	  

	 //function delCookie(name){//为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间 
	               // var date = new Date(); 
	              //  date.setTime(date.getTime() - 10000); 
	              //  document.cookie = name + "=a; expires=" + date.toGMTString(); 
	          //  } 