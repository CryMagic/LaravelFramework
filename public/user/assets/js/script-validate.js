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
    $("#formRegister #Email").focus(function(){
        $('#emailUnique').hide();
    })
    $("#formRegister #Email").focusout(function(){
        loading('on','#iconloading');
        var email = $('#Email').val();
        if(email.length > 0){
            $.get('/check-email/'+email, function(data){
                loading('off','#iconloading');
                if(data == 'found'){
                    $('#emailUnique').show();
                    $('#emailUnique').text('Email này đã được sử dụng');
                }else{
                    $('#emailUnique').hide();
                }
            });
        }
        else{
            loading('off','#iconloading');
        }
    })
    $("#regForm #Email1").focus(function(){
        $('#emailUnique1').hide();
    })
    $("#regForm #Email1").focusout(function(){
        loading('on','#iconloading2');
        var email = $('#Email1').val();
        if(email.length > 0){
            $.get('/check-email/'+email, function(data){
                loading('off','#iconloading2');
                if(data == 'found'){
                    $('#emailUnique1').show();
                    $('#emailUnique1').text('Email này đã được sử dụng');
                }else{
                    $('#emailUnique1').hide();
                }
            });
        }
        else{
            loading('off','#iconloading2');
        }
    })
    function redirect(url){
        window.location = url;
    }
    function loading(v,icon){
        if(v == 'on'){
            $(icon).show();
        }
        else{
            $(icon).hide();
        }
    }
    function loader(v){
        if(v == 'on'){
            $('#formLogin input').css({
                opacity:0.2,

            });
            $('#loading').show();
        }
        else{
            $('#formLogin input').css({
                opacity:1,

            });
            $('#loading').hide();
        }
    }
    
    $('#logForm').on('submit',function(e){
        e.preventDefault();
        loading('on','#loading1');
        var login_form = $('#logForm').serializeArray();
        var _token = $("input[name='_token']").val();
        var url = $('#logForm').attr('action');
  
         $.post(url,login_form,function(data){
             loading('off','#loading1');
             if(data == 'fail'){
                 $('#thongbao').removeClass('alert alert-success');
                 $('#thongbao').addClass('alert alert-danger').fadeIn(1000,function(){
                     $(this).hide();
                 });
                 $('#mess').text('Email hoặc Password không chính xác');
             }
             else{
                 $('#thongbao').removeClass('alert alert-danger');
                 $('#thongbao').addClass('alert alert-success').fadeIn(2000,function(){
                     $(this).hide();
                 });
                 $('#mess').text('Đăng nhập thành công, đang chờ chuyển trang ...');
                 redirect('/');
             }
             
         })
    })
    $('#formLogin').on('submit',function(e){
        e.preventDefault();
        loader('on');
        var login_form = $('#formLogin').serializeArray();
        var _token = $("input[name='_token']").val();
        var url = $('#formLogin').attr('action');
        
         $.post(url,login_form,function(data){
             loader('off');
             if(data == 'fail'){
                 $('#notify').removeClass('alert alert-success');
                 $('#notify').addClass('alert alert-danger').fadeIn(1000,function(){
                     $(this).hide();
                 });
                 $('#msg').text('Email hoặc Password không chính xác');
             }
             else{
                 $('#notify').removeClass('alert alert-danger');
                 $('#notify').addClass('alert alert-success').fadeIn(2000,function(){
                     $(this).hide();
                 });
                 $('#msg').text('Đăng nhập thành công, đang chờ chuyển trang ...');
                 redirect('/');
             }
             
         })
    })
})