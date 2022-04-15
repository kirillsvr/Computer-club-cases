(function ($) {

    $('form.sale').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        var error = true;
        $(this).find('input').each(function () {
            if ($(this).val() == ''){
                $(this).addClass('redBorder');
                error = false;
            }
        })
        if (error == true){
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json',
                data: data,
                success: function(data){
                    location.reload();
                },
                error: function(data) {
                    console.log(data);
                    console.log(data['status']);
                    alert(data['responseJSON']);
                }
            })
        }
    })

    $('form.auth').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        var error = true;
        $(this).find('input').each(function () {
            if ($(this).val() == ''){
                $(this).addClass('redBorder');
                error = false;
            }
        })
        if (error == true){
            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'json',
                data: data,
                success: function(data){
                    location.reload();
                },
                error: function(data) {
                    console.log(data);
                    console.log(data['status']);
                    alert(data['responseJSON']);
                }
            })
        }
    })

    $('.reset').on('click', function (e) {
       e.preventDefault();
       $.ajax({
            url: '/main/reset',
            method: 'GET',
            dataType: 'json',
            success: function(){
                location.reload();
            },
            error: function(data) {
               console.log(data);
                console.log(data['status']);
                alert(data['responseJSON']);
            }
        })
    })

})(jQuery);
