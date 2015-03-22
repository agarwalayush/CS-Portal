$(document).ready(function(){
	var show_from = 0;
	$.post('mentors/show_mentors',{mentors_from : show_from},function(data){
		//alert(data);
		document.getElementById('mentors_list').innerHTML = data;
	});
	$("#showmore_mentors").click(function(){
		show_from += 15;
		$.post('mentors/show_mentors',{mentors_from : show_from},function(data){
			//alert(data);
			$("#mentors_list").append(data);
			if(data == ''){
				document.getElementById('error').innerHTML = 'Nothing more to show';
				//alert('Nothing more to show');
			}
		});
	});
});