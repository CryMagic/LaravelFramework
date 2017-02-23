$(document).ready(function(){
    $(".logForm").validate({
        focusInvalid: false,
            ignore: "",
            rules: {
                Email: {
                    email:true,
                    required: true
                },
                Password: {
                    minlength:6,
                    required: true,
                }
            },
            messages: {
                Email: {
                    required: "Bạn chưa nhập Email",
                    email: "Định dạng email không đúng"
                },
                Password: {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: jQuery.validator.format("Mật khẩu phải ít nhất 6 kí tự")
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },
    });
    $("#formLogin").validate({
        focusInvalid: false,
            ignore: "",
            rules: {
                Email: {
                    email:true,
                    required: true
                },
                Password: {
                    minlength:6,
                    required: true,
                }
            },
            messages: {
                Email: {
                    required: "Bạn chưa nhập Email",
                    email: "Định dạng email không đúng"
                },
                Password: {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: jQuery.validator.format("Mật khẩu phải ít nhất 6 kí tự")
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },
    });
    $(".regForm").validate({
        focusInvalid: false,
            ignore: "",
            rules: {
                FirstName: "required",
                LastName: "required",
                Email: {
                    email:true,
                    required: true
                },
                Password: {
                    minlength:6,
                    required: true,
                }
            },
            messages: {
                FirstName: "Bạn chưa nhập FirstName",
                LastName: "Bạn chưa nhập LastName",
                Email: {
                    required: "Bạn chưa nhập Email",
                    email: "Định dạng email không đúng"
                },
                Password: {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: jQuery.validator.format("Mật khẩu phải ít nhất 6 kí tự")
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label);
                var parent = $(element).parent('.form-group').parent('.has-feedback');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },
    });
    $("#formRegister").validate({
        focusInvalid: false,
            ignore: "",
            rules: {
                FirstName: "required",
                LastName: "required",
                Email: {
                    email:true,
                    required: true
                },
                Password: {
                    minlength:6,
                    required: true,
                }
            },
            messages: {
                FirstName: "Bạn chưa nhập FirstName",
                LastName: "Bạn chưa nhập LastName",
                Email: {
                    required: "Bạn chưa nhập Email",
                    email: "Định dạng email không đúng"
                },
                Password: {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: jQuery.validator.format("Mật khẩu phải ít nhất 6 kí tự")
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label);
                var parent = $(element).parent('.form-group').parent('.has-feedback');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },
    });
})