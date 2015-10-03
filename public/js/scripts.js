
$(function() {
    $("#contactForm").submit(function(e) {
        e.preventDefault();
    });
});
function contactSubmit() {
    $.ajax({
        type: "POST",
        data: $('#contactForm').serialize(),
        url: '/noudmegit/contact/save',
        success: function(data) {
            if(data['state'] == 'success') {
                Materialize.toast(data['message'], 4000)
            }
        }
    })
}