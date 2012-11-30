// JavaScript Documentfunction caeser_shift(){
	function co()
	{
var string=document.getElementById("ayush").value;
var shift=document.getElementById("key").value;
var a=string.length;
var character=new Array();
var value=new Array();
var i=0;
if(string!=null && string!="")
{
  for(i=0;i<a;i++){
	character[i]=string.charCodeAt(i)+(shift.charCodeAt(shift)-96);
	value+=String.fromCharCode(character[i]);
	document.getElementById("c").value = value; 
	
	//document.write(String.fromCharCode(character[i]));
	}
	//document.write(character);
	}
	//document.write("Hi ");
	
	 /*for(i=0;i<a;i++)
	{
	document.write(character);
	value[i]=character[i].toChar();
	
	document.write("Hi "); document.getElementById("c").value = output; 
	
	document.write(value[i]);
	}
	*/
	//value1=character.toChar();
	//document.write("Hi ");
	//document.write("Hi ");
	// document.getElementById("c").value = value1; 
	 return value;
	
//	document.write(value);
}