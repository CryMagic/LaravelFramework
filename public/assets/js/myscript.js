$('#selectProvince').on('data',function(e){
    console.log(e);
    var province_id = e.target.value;
    //ajax
    $.get('/admin/ajax-district?province_id=' + province_id, function(data){
        //success data
        console.log(data);
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
        });
         $('#selectDistrict').html(result);
        
    });
});

$('#selectProvince').on('change',function(e){
    console.log(e);
    var province_id = e.target.value;
    //ajax
    $.get('/admin/ajax-district?province_id=' + province_id, function(data){
        //success data
        console.log(data);
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
            $('#selectDistrict').html(result);
        });
         
        
    });
});
$('#selectDistrict').on('change',function(e){
    console.log(e);
    var district_id = e.target.value;
    //ajax
    $.get('/admin/ajax-ward?district_id=' + district_id, function(data){
        //success data
        console.log(data);
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.xaid+'">'+ object.name +'</option>';
        });
         $('#selectWard').html(result);
        
    });
});
$(document).ready(function(){
    let btn = $("[id^=btnBlock]");
    let btnIsContinue = $("[id^=btnIsContinue]");
    let isDisplay = $("[id^=isDisplay]");
    $(btn).on('click',function(){
        var idButton  = $(this);
        var _token = $("input[name='_token']").val();
        var id = idButton.data('id');
        var url = '/admin/block-user/';
        $.ajax({
            dataType: 'json',
            type: 'post',
            cache:false,
            url: url + id,
            data: {
                '_token': _token, 'id': id, 'url': url
            },
            success: function (data) {
                if(data.status){
                    idButton.removeClass('btn-success');
                    idButton.addClass('btn-danger');
                    $('i#'+id).removeClass('fa-unlock-alt');
                    $('i#'+id).addClass('fa-lock');

                }
                else{
                    idButton.removeClass('btn-danger');
                    idButton.addClass('btn-success');
                    $('i#'+id).addClass('fa-unlock-alt');
                    $('i#'+id).removeClass('fa-lock');
                }
            }
        });
    });
    $(btnIsContinue).on('click',function(){
        var button  = $(this);
        var _token = $("input[name='_token']").val();
        var id = button.data('id');
        var url = '/admin/continue/';
        $.ajax({
            dataType: 'json',
            type: 'post',
            cache:false,
            url: url + id,
            data: {
                '_token': _token, 'id': id, 'url': url
            },
            success: function (data) {
                if(data.isContinue){
                    button.removeClass('btn-success');
                    button.addClass('btn-danger');
                    $('i#'+id).removeClass('fa-check');
                    $('i#'+id).addClass('fa-close');
                }
                else{
                    button.addClass('btn-success');
                    button.removeClass('btn-danger');
                     $('i#'+id).removeClass('fa-close');
                    $('i#'+id).addClass('fa-check');
                }
            }
        });
    });
    $(isDisplay).on('click',function(){
        var span  = $(this);
        var _token = $("input[name='_token']").val();
        var id = span.data('id');
        var url = '/admin/display/';
        $.ajax({
            dataType: 'json',
            type: 'post',
            cache:false,
            url: url + id,
            data: {
                '_token': _token, 'id': id, 'url': url
            },
            success: function (data) {
                if(data.isDisplay){
                    
                    span.addClass('label-success');
                    span.removeClass('label-danger');
                    
                    $('i#'+id).removeClass('fa-ban');
                    $('i#'+id).addClass('fa-check-circle');
                }
                else{
                    span.removeClass('label-success');
                    span.addClass('label-danger');
                    $('i#'+id).removeClass('fa-check-circle');
                    $('i#'+id).addClass('fa-ban');
                }
            }
        });
    });
    $('div.alert').delay(3000).slideUp();
});