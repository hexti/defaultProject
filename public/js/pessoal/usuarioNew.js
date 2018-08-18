function checkPass(){
	var pass1 = document.getElementById('senha');
	var pass2 = document.getElementById('senha-confirma');
	
	var message = document.getElementById('confirmMessage');
	
	var goodColor = "#66cc66";
	var badColor = "#ff6666";

	if(pass1.value == pass2.value){
		pass2.style.backgroundColor = goodColor;
		pass1.style.backgroundColor = goodColor;
		return true;
	}else{
		toastr.error('Senhas não conferem')
		pass2.style.backgroundColor = badColor;
		pass1.style.backgroundColor = badColor;
		return false
	}
}  

