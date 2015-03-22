$(document).ready(function(){
	var show_from = 0;
	$.post('course_repository/show_files',{files_from : show_from},function(data){
		//alert(data);
		document.getElementById('files_list').innerHTML = data;
	});
	$("#showmore_files").click(function(){
		show_from += 20;
		$.post('course_repository/show_files',{files_from : show_from},function(data){
			//alert(data);
			$("#files_list").append(data);
			if(data == ''){
				document.getElementById('error').innerHTML = 'Nothing more to show';
			}
		});
	});
});