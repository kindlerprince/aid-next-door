$(document).ready(function(){
        //alert("hello file is working");
	$("#loggedin").submit(function(){
		var flag=false;
		var selected = $("input[type='radio'][name='resetpd']:checked");
		var x=selected.val();
                if(x=="viasms" || x=="viaemail")
                    flag=true;
		
		if(flag==false)
			alert("Please select option");
		return flag;
	});
});