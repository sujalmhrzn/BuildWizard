function addToFavourites(pid)
{
    $.ajax({
        url: 'fav.php', 
        method: 'POST', 
        data:{
            pid:pid
        },
        success: function (data) {
            location.reload();
        }
    });
}