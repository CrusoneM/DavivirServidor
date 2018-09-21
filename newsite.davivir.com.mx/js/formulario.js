function verificar(){
  var validar=false

            var firstLastName   = $("#firstLastName").val();
            var email           = $("#email").val();
            var phone           = $("#phone").val();
            var check           = $("#check");
        // 1 field required

               // validar=validarcatcha()

                if (!check.is(':checked')){
                  $("#check-error").show();
                  $("#check").focus();
                    validar=true
                  // alert("yes");
                }   else {
                     $("#check-error").hide();
                }

                if(phone == "" || phone.length < 10 || phone.length > 10) {
                     $("#phone-error").show();
                     $("#phone").focus();
                     validar=true
                     ;
                }   else {
                     $("#phone-error").hide();
                }
                if(!isEmail(email)) {
                     $("#email-error").show();
                     $("#email").focus();
                     validar=true
                     ;
                }   else {
                     $("#email-error").hide();
                }
                if(firstLastName == "") {
                     $("#firstLastName-error").show();
                     $("#firstLastName").focus();
                     validar=true
                     ;
                }   else {
                     $("#firstLastName-error").hide();
                }

          if (validar==false) {
	           alert('todfo bien')
          }
}




function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}