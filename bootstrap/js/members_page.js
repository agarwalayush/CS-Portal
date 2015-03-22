$(document).ready(function(){
	//alert('hi');
	var show_from = 0;
	var sort_members_by = $("#filter_members").val();
	$("#filter_members").change(function(){
		show_from = 0;
		sort_members_by = $(this).val();
		//alert(sort_members_by);
		$.post('members/show_members',{members_filter : sort_members_by, members_from : show_from},function(data){
			//alert(data);
			document.getElementById('members_list').innerHTML = data;
		});
	});
	$.post('members/show_members',{members_filter : 'r', members_from : show_from},function(data){
		//alert(data);
		document.getElementById('members_list').innerHTML = data;
	});
	$("#showmore_members").click(function(){
		sort_members_by = $("#filter_members").val();
		show_from += 15;
		$.post('members/show_members',{members_filter : sort_members_by, members_from : show_from},function(data){
			//alert(data);
			$("#members_list").append(data);
			if(data == ''){
				document.getElementById('error').innerHTML = 'Nothing more to show';
				//alert('Nothing more to show');
			}
		});
	});
});
function makeAM(userid){
	//alert(userid);
	$.post('members/make_mentor',{am_userid : userid},function(data){
		if(data){
			$("#member_"+userid).hide();
		}
		else{
			alert('Some error occurred');
		}
	});
}
