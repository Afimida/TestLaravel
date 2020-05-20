$(document).ready(function () {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(".postbutton").click(function () {
        $.ajax({
            /* the route pointing to the post function */
            url: '/post-ajax',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                message: $(this).attr('id'),
                action: $(this).attr('data-action'),
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                removeElement('card-' + data.message);
                console.log(data.message);
            }
        });
    });
});

function removeElement(id) {
    var elem = document.getElementById(id);
    return elem.parentNode.removeChild(elem);
}
