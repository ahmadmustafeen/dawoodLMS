$(document).ready(function(){
    $('#select_batch').on('change',function(){
        var batc = $('#selectDeparta').val();
        var periodID = $(this).val();
        $.ajax({
            method: 'POST',
            url: 'ajax.php',
            data:{id:periodID,bat:batc},
            dataType:'HTML',
            success:function(data){
                $('#d').html(data);
            }
        });
       
    });
});