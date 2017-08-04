$(document).ready(function () {
    $(document).on('click', '.delete', function () {
//        alert($(this).parent().parent().index());

        $.ajax({
            type: "get",
            url: 'http://localhost/shop/cart/deleteCart/'+$(this).parent().parent().index(),
            success: function (data) {
                if(data =="OK"){
                    $(this).parent().parent().remove();
                }
            }
        });
    });
});


