$(function(){
	if(location.pathname!="/dashboard/login"){
		if(!$.cookie("PHPSESSID")){
			location.href="/dashboard/login";
			return;
		}
		var userInfo=JSON.parse($.cookie("userInfo"));
		var html=template("userinfo-tpl",userInfo);
		$("#profile").html(html);
	}
});