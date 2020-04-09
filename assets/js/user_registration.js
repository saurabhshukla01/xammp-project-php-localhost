function userRegistrationAjax() {

	$("#btn-register").html('<i class="fa fa-refresh fa-spin"></i> Please wait, processing...');
	$("#btn-register").attr('disabled', true);

	email = $.trim($("#user_registration_email").val());
	password = $.trim($("#user_registration_password").val());
	confirm_password = $.trim($("#user_registration_password").val());

	$.ajax({
			url:"/user_registration/user_signup",
			type:'post',
			dataType:"json",
			data:{"email":email,"password": password,"confirm_password":confirm_password},
			success:function(response) {
				if(response.status == "1") {

					$("#btn-verify-otp").html('Verify OTP').attr('disabled', false);
				}
				else {

					 $("#btn-verify-otp").html('Verify OTP').attr('disabled', false);
					 alert("Invalid OTP . please try again")
				}
			},
			error: function() {
				
			}
		 });
}
