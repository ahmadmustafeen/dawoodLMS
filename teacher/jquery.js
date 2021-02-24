// $(document).ready(function(){
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    $('#selectDeparta').on(change,function(){

        var periodID = $(this).val();
        $.ajax({
            method: 'POST',
            url: 'ajax.php',
            data:{id:periodID},
            dataType:'HTML',
            success:function(data){
                // $('#students').html(data);
                document.getElementById('studentsa').innerHTML += data;
            }
        });
       
    });
// });