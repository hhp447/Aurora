//使用编辑器
$(function(){
	if($.trumbowyg){
		$('#trumbowyg').trumbowyg({
		    fullscreenable: true,
		    closable: true,
		    // btns: ['bold', 'italic', '|', 'insertImage'],
		    lang : 'zh_cn',
		    autogrow : true,
		});
	}
});










$(function(){
	//若存在上传后的文件路径则显示裁切框
	if($("#showFaceWindow").length>0){
		// var model = $("#model-layout").model();
		// model.display();
		$("#uploader").uploader({
			imgSrc : $("#showFaceWindow").val(),//$("#showFaceWindow").val()//'img/face/1436660092auth_sql.jpg'//
			success : function(uploader,r){
				img = $("<img src='img/face/"+r+"'>");
				img.load(function(){
					$("#current-face").children().remove();
					$("#current-face").append(img);
					// model.disappear();
					uploader.element.hide();
					location.href = "?r=user/headface";
				});
			}
		}).show();
	}
});




$(function(){
	var pageimg404 = $("#pageimg404");
	if(pageimg404.length > 0){
		$(window).mousemove(function(e){

			var left = ( (e.clientX+800) * -370) / ($(window).width()+1500);
			var lefti =  ( (e.clientX-500) * 370) / ($(window).width()+1500);
			$("#pageimg404").css("left",left);
			$("#pagefont404").css('left',lefti);
		});
	}
});
$(function(){
	var pageimg404 = $("#pageimg404");
	if(pageimg404.length > 0){
		$(window).mousemove(function(e){

			var left = ( (e.clientX+800) * -370) / ($(window).width()+1500);
			var lefti =  ( (e.clientX-500) * 370) / ($(window).width()+1500);
			$("#pageimg404").css("left",left);
			$("#pagefont404").css('left',lefti);
		});
	}
});