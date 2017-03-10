function loading(v,icon){
    if(v == 'on'){
        $(icon).show();
    }
    else{
        $(icon).hide();
    }
}
$('#shipperProvince').on('change',function(e){
    loading('on','#loadDistrict');
    var province_id = $(this).val();
    //ajax
    $.get('get-all-district?province_id=' + province_id, function(data){
        //success data
        loading('off','#loadDistrict');
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
        });
        $('#shipperDistrict').html(result);
        
    });
})

$('#shipperDistrict').on('change',function(e){
    loading('on','#loadWard');
    var district_id = $(this).val();
    //ajax
    $.get('get-all-ward?district_id=' + district_id, function(data){
        loading('off','#loadWard');
        //success data
        var result = '';
        $.each(data,function(index,object){
            result += '<option value="'+object.xaid+'">'+ object.name +'</option>';
        });
        $('#shipperWard').html(result);
        
    });
})
// $(document).ready(function(){
//     var id_province = $('#shipperProvince :selected').val();
//     $.get('get-all-district?province_id=' + id_province, function(data){
//         //success data
//         var result = '';
//         $.each(data,function(object){
//             result += '<option value="'+object.maqh+'">'+ object.name +'</option>';
//         });
//         $('#shipperDistrict').html(result);
//     });
//     $.get('get-all-ward?district_id=001', function(data){
//         //success data
//         var result = '';
//         $.each(data,function(object){
//             result += '<option value="'+object.xaid+'">'+ object.name +'</option>';
//         });
//         $('#shipperWard').html(result);
//     });
// })
