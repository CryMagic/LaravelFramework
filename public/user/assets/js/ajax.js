$id_province = $('#shipperProvince :selected').val();
$.get('get-all-district?province_id=' + $id_province, function(data){
    //success data
    var result = '';
    $.each(data,function(index,object){
        result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
    });
    $('#shipperDistrict').html(result);
    
});
$id_district = $('#shipperDistrict :selected').val();
$.get('get-all-ward?district_id=' + $id_district, function(data){
    //success data
    var result = '';
    $.each(data,function(index,object){
        result += '<option value="'+object.xaid+'">'+ object.name +'</option>';
    });
    $('#shipperWard').html(result);
    
});
$('#shipperProvince').on('change',function(e){
    var province_id = $(this).val();
    //ajax
    $.get('get-all-district?province_id=' + province_id, function(data){
        //success data
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
        });
        $('#shipperDistrict').html(result);
        
    });
})

$('#shipperDistrict').on('change',function(e){
    var district_id = $(this).val();
    //ajax
    $.get('get-all-ward?district_id=' + district_id, function(data){
        //success data
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.xaid+'">'+ object.name +'</option>';
        });
        $('#shipperWard').html(result);
        
    });
})