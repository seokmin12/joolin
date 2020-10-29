$(document).ready(function(){
	$('#agree').click(function(){
		if($('#use_form_agree').prop('checked') == false || $('#privacy_agree').prop('checked') == false){
	    	alert('필수 약관에 동의 하셔야 합니다.');
		}else{
			$(location).attr('href','../register.html');
		}
	});
});