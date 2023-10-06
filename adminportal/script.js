function removeProduct(pid)
{
    if (confirm('Do you want to proceed?')) {
        $.ajax({
            url: 'remove.php', 
            method: 'POST', 
            data:{
                pid:pid
            },
            success: function (data) {
                    console.log(data);
            }
        });

        
        location.reload();
    } 
}