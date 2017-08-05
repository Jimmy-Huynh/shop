$(document).ready(function () {
    $(document).on('click', '.delete', function () {
//        alert($(this).parent().parent().index());
        var val = $(this).parent().find("input").val();
        var tr = $(this).parent().closest('tr');
        $.ajax({
            type: "POST",
            url: 'http://localhost/shop/cart/deleteCart/',
            data:{id:val},
            success: function (data) {
                alert(data);
                if(data == "OK"){
                    tr.remove();
                }
            }
        });
    });
});


