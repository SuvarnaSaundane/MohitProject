//alert ('hii...');
$(document).ready(function () {
$("#frm").validate({

    rules: {
        name: {
          required: true,
          alphabetsnspace: true
        },

        email: {
            required: true,
            email: true,
        },

        password: {
            required: true,
            maxlength: 8,
            minlength: 6,
        },        
},
messages: {
       
    name: {
      required: "Please enter name",
      alphabetsnspace: "Enter only alphabets."
    },
   
    email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
       
      },
      password: {
        required: "Please enter password",
        minlength: "The password should be minimum 6 value",
        maxlength: "The password should be maximum 8 value",
      },
      
  },

        submitHandler: function(form) {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var email = $("#email").val();
            var password = $("#password").val();
            

            $.ajax({
                url: "{{ route('insert') }}",
                type:'POST',
                data: {_token:_token, email:email, password:password,address},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        }); 

        /* function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.'+key+'_err').text(value);
            });
        } */
    });
    });

