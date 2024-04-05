function postData(url, e, timeout=2000, redirect=1) {
    e.preventDefault()
    $.ajax({
        url: url,
        method: 'POST',
        data:$('#form-data').serialize(),
        statusCode: {

        },
        success: function(response) {
            if (typeof response.data != 'undefined') {
                toastr.success(response.data.message)
                console.log(response.data.redirect)
                if (redirect) {
                    setTimeout(function(){
                        window.location = response.data.redirect
                    }, timeout)
                }
            }
            if (typeof response.success != 'undefined') {
                if (!response.success) {
                    toastr.error(response.message)
                }
            }
        },
        error: function(data) {
            var errors = data.responseJSON;
            console.log(errors)
            $.each(errors.errors, function(k,v){
                // $('#' + k).show()
                toastr.error(v)
            })
        }
    })
}