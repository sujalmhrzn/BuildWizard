$('.dropdown-menu li').on('click', function() {
    var getValue = $(this).text();
    $('.dropdown-select').text(getValue);
  });

function estimatePrice()
{
  let estimate=[$("#cpu").val(),$("#motherboard").val(),$("#cooler").val(),$("#ram").val(),$("#psu").val(),$("#case").val(),$("#gpu").val(),$("#storage").val()];
  $.ajax({
    url: 'estimate.php', 
    method: 'GET', 
    data:{
      data:estimate
    },
    success: function (data) {
      $("#estimate").text(data);
    }
  });
}