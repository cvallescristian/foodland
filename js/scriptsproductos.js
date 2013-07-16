
$(document).ready(function(){
    $('#test_modal').modal('show');
});

$('#test_modal').modal('hide')

$('#test_modal').modal({
    backdrop: true,
    keyboard: true,
    show: false \\remove this if you dont want it to show straight away
}).css({
    width: 'auto',
    'margin-left': function () {
        return -($(this).width() / 2);
    }
});


