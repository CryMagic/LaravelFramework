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
});