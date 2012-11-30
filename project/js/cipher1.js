function ff  ()
{
var str= document.getElementById("ayush").value;
 var shift = parseInt(document.getElementById("key").value);
crypt( str, shift);

}

function crypt(input, key) {
	var output = "";
		for (var i = 0; i < input.length; i++) {
		var c = input.charCodeAt(i);
		if      (c >= 65 && c <=  90) 
//		output += String.fromCharCode((c - 65 + key) % 26 + 65);  // Uppercase
		output += String.fromCharCode((c - 65 + key) % 26 + 65);
		else if (c >= 97 && c <= 122) output += String.fromCharCode((c - 97 + key) % 26 + 97);  // Lowercase
		//else                          output += input.charAt(i);  // Copy
		//document.write(output);
		 document.getElementById("c").value = output; 
		
	}
	return output;
}


// JavaScript Document