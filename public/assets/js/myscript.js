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
    var disable = $("button#btnBlock");
    $('button#btnBlock').on('click',function(e){
        
        alert("ok");

    });
})
