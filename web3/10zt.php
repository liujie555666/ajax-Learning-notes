<?php
	$code = $_GET['code'];
	$result = '{"msg":"","status":"0","error_code":"0","data":{"info":{"status":"1","state":"1","com":"zhongtong","context":[{"time":"1472885856","desc":"[\u5357\u9633] \u5feb\u4ef6\u5df2\u5230\u8fbe \u5357\u9633"},{"time":"1472863723","desc":"[\u6f2f\u6cb3\u4e2d\u8f6c] \u5feb\u4ef6\u79bb\u5f00 \u6f2f\u6cb3\u4e2d\u8f6c \u5df2\u53d1\u5f80 \u5357\u9633"},{"time":"1472863267","desc":"[\u6f2f\u6cb3\u4e2d\u8f6c] \u5feb\u4ef6\u5df2\u5230\u8fbe \u6f2f\u6cb3\u4e2d\u8f6c"},{"time":"1472835980","desc":"[\u5408\u80a5\u4e2d\u8f6c\u90e8] \u5feb\u4ef6\u79bb\u5f00 \u5408\u80a5\u4e2d\u8f6c\u90e8 \u5df2\u53d1\u5f80 \u6f2f\u6cb3\u4e2d\u8f6c"},{"time":"1472822013","desc":"[\u5408\u80a5\u78e8\u5e97] \u5feb\u4ef6\u79bb\u5f00 \u5408\u80a5\u78e8\u5e97 \u5df2\u53d1\u5f80 \u5408\u80a5"},{"time":"1472818565","desc":"[\u5408\u80a5] \u5feb\u4ef6\u5df2\u5230\u8fbe \u5408\u80a5"},{"time":"1472784342","desc":"[\u5408\u80a5\u78e8\u5e97] \u5408\u80a5\u78e8\u5e97 \u7684 \u660e\u971e\u4f73\u6c83\u65af \u5df2\u6536\u4ef6"}],"_source_com":"zhongtong"},"notice":"\u7269\u6d41\u4fe1\u606f\u4e0e\u5b98\u7f51\u5b9e\u65f6\u540c\u6b65\uff0c\u5df2\u8017\u65f61\u59296\u65f616\u5206","com":"zhongtong","company":{"url":"http:\/\/www.zto.com\/?from=openv","fullname":"\u4e2d\u901a\u5feb\u9012","shortname":"\u4e2d\u901a","icon":{"id":"29","smallurl":"https:\/\/ss2.baidu.com\/6ONYsjip0QIZ8tyhnq\/it\/u=1807529516,3291075151&fm=58","smallpos":"0,496","middleurl":"https:\/\/ss1.baidu.com\/6ONXsjip0QIZ8tyhnq\/it\/u=1835223070,3312272045&fm=58","middlepos":"0,324","normal":"https:\/\/ss0.baidu.com\/6ONWsjip0QIZ8tyhnq\/it\/u=1022514261,1855787563&fm=58"},"website":{"title":"www.zto.com","url":"http:\/\/www.zto.com"},"tel":"95311","auxiliary":[{"title":"\u7f51\u70b9\u67e5\u8be2","url":"http:\/\/www.zto.com\/GuestService\/SiteQuery"},{"title":"\u7f51\u4e0a\u5bc4\u4ef6","url":"http:\/\/my.zto.com\/order"},{"title":"\u4ef7\u683c\u67e5\u8be2","url":"http:\/\/www.zto.com\/GuestService\/PriceQuery"},{"title":"\u4e2d\u901a\u4f18\u9009","url":"http:\/\/www.ztbest.com"}],"timecost":{"btn_show":"1","url":"http:\/\/wap.zto.com\/Price"},"onlineorder":{"btn_show":"1","url":"http:\/\/wap.zto.com\/Order\/OrderAdd"}},"source":{"logo":"https:\/\/ss2.baidu.com\/6ONYsjip0QIZ8tyhnq\/it\/u=3361401566,3988135348&fm=58","title":"\u6570\u636e\u6765\u81ea\u4e2d\u901a\u5feb\u9012","url":"http:\/\/www.zto.com\/?from=baidu_ala","name":"\u4e2d\u901a\u5feb\u9012","showName":"\u6570\u636e\u6765\u6e90\uff1a\u4e2d\u901a\u5feb\u9012"},"kuaidiSource":{"logo":"https:\/\/ss2.baidu.com\/6ONYsjip0QIZ8tyhnq\/it\/u=1429564979,1787167512&fm=58","title":"\u6570\u636e\u6765\u81ea\u5feb\u9012100","url":"http:\/\/www.kuaidi100.com\/?from=baidu_ala","name":"\u5feb\u9012100","showName":"\u5feb\u9012100"}}}';
	if ($code == '410552010638') {
		# code...
		echo $result;
	}else{
		echo '{"msg":"该单号暂无物流信息，请稍后再试，或检查你输入的订单号是否有误","tatus":"-2"}';
	}

?>