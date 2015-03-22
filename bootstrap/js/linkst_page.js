var selected_am = '';
var selected_st = '';

$(document).ready(function(){
	//alert("hello world");
	selected_st = '';
	selected_am = '';
	$("#find_am").on('input',function(){
		var q = $(this).val();
		//alert(q);
		if(q==''){
			document.getElementById('list_am').innerHTML = '';
			selected_am = '';
			return false;
		}
		$.post('linkstudent/get_am_list',{am_key : q},function(data){
			//alert(data);
			document.getElementById('list_am').innerHTML = data;
		});
	});
	$("#find_st").on('input',function(){
		var q = $(this).val();
		//alert(q);
		if(q==''){
			document.getElementById('list_st').innerHTML = '';
			selected_st = '';
			return false;
		}
		$.post('linkstudent/get_st_list',{st_key : q},function(data){
			//alert(data);
			document.getElementById('list_st').innerHTML = data;
		});
	});
	$("#link_them").click(function(){
		if(selected_am == '' || selected_st == ''){
			document.getElementById('error').innerHTML = 'First select AM and Student';
			return false;
		}
		else{
			//alert("Okay");
			$.post('linkstudent/link_am_st',{am_userid : selected_am, st_userid : selected_st},function(data){
				//alert(data);
				if(data == '1'){
					document.getElementById('error').innerHTML = 'Linked Successfully.';
					selected_st = '';
					selected_am = '';
					$("#find_am").val('');
					$("#find_st").val('');
				}
				else{
					document.getElementById('error').innerHTML = 'Some error occurred. Please try again.';
					selected_st = '';
					selected_am = '';
					$("#find_am").val('');
					$("#find_st").val('');
				}
			});
			return false;
		}
	});
});
function select_am(name,username){
	document.getElementById('list_am').innerHTML = '';
	$("#find_am").val(name);
	selected_am = username;
	//alert(name+' '+username);
}
function select_st(name,username){
	document.getElementById('list_st').innerHTML = '';
	$("#find_st").val(name);
	selected_st = username;
	//alert(name+' '+username);
}