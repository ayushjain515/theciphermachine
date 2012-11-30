//var error=0;

function verifyemail(){
//var status = false;     

var email = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     //if (document.myform.email1.value.search(email) == -1) { /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
        if(document.getElementById("mailid").value.search(email) ==-1)
														   {alert("Please enter a valid email address.");
  //   error++;
	 }
     //else if (document.myform.email1.value != document.myform.email2.value) {
       //   alert("Email addresses do not match.  Please retype them to make sure they are the same.");
     //}
     else {
  //        alert("Woohoo!  The email address is in the correct format and they are the same.");
          //status = true;
		  //error=0;
  checkwords();
  }
//     return error;
}// JavaScript Document

//if(!error)
//{
	function checkwords()
	{
		var number=document.getElementById("feed").value.split(' ').length;
		if(number>30)
		{
			alert("enter less then 30 nos.");
			}
			else
			{
				alert("Send To Database.");
				}
		}
//}
