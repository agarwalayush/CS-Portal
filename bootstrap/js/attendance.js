var students='';
function func()
{
    $("#filter_student").change(function(){
       // $(this).val()="ayush";
       var namevalue = $(this).val();
       
        $.post('attendance/add_members',{value : namevalue},function(data){
            document.getElementById('show_attend').innerHTML = document.getElementById('show_attend').innerHTML+ data;
            
        });
    students=students+namevalue+',';
  //  alert(students);
    $('#students').val(students);
    //$this.val(student);
       //alert($(this).val());
    
    });
}



$(document).ready(function(){
       // window.onload = function(){setTimeout("editEffect()", 200)}
 
     $.post('attendance/show_members',function(data){
        document.getElementById('members_list').innerHTML = data;
    });
    setTimeout(func,1000);
   
});


function rmove(id){
        var name='a';
        //var parent=document.getElementById('show_attend');
        var child=document.getElementById(id);
        child.parentNode.removeChild(child);
        //parent.removeChild(child);
        //child.value='';
 
         $.post('attendance/get_name',{rollno : id},function(data){
            a=data;
            
            //alert(a);
            var splitter=students.split(',');
            //alert(splitter[1]);
            for (i = 0; i < splitter.length-1; i++) 
            { 
                if(a== splitter[i])
                {
                    splitter.splice(i,1);
                  //  alert(splitter[splitter.length-2]);
                    break;
                }
                
            }
            students='';
            if(splitter[0]=='')
            ;
            else
            {   
                //alert('got in');
                students=splitter[0];
                   for (i = 1; i < splitter.length-1; i++) 
                { 
                    //alert(splitter[i]);
                    students=students+','+splitter[i];
                } 
                students=students+',';
            }
           // alert(students);
            $('#students').val(students);
            
        });
       
    
}
