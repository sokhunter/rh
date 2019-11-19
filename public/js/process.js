$(document).on('submit', '.sendForm', function() {
    frm = $(this);
    btn = frm.find(".save");
    method = frm.attr("method");
    btn.attr("disabled", "disabled");
    $.ajax({
        url: frm.attr('action'),
        type: method,
        data: frm.serialize(),
        data: new FormData(this),
                contentType: false,
        cache: false,
        processData: false,
    })
    .done(function(data)
    {
        btn.removeAttr("disabled");
        frm.find('.response').html(data).hide().slideDown();
        
    })
    .error(function(data, msg)
    {
        btn.removeAttr("disabled");
        frm.find('.response').html("Ha ocurrido un error interno");
    });
    return false;
});

// $(document).on('submit', '.filtro', function() {
//     frm = $(this);
//     btn = frm.find(".filtrar");
//     method = frm.attr("method");
//     btn.attr("disabled", "disabled");
//     success_url = frm.attr("data-url");
//     $.ajax({
//         url: frm.attr('action'),
//         type: method,
//         data: frm.serialize(),
//         data: new FormData(this),
//                 contentType: false,
//         cache: false,
//         processData: false,
//     })
//     .done(function(data)
//     {
//         // btn.removeAttr("disabled");
//         window.location.href = success_url;
//         // frm.find('.response').html(data).hide().slideDown();
        
//     })
//     .error(function(data, msg)
//     {
//         btn.removeAttr("disabled");
//         frm.find('.response').html("Ha ocurrido un error interno");
//     });
//     return false;
// });