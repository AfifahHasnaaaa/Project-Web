$(document).ready(function(){
			
    $('#formData').on('submit', function (e) {
        e.preventDefault();
        sendData();
    })

    function sendData() {
        var url_post = '{{ url("api/produk/input") }}';

        var dataForm = {};
        var allInput = $(".form-user-input");

        $.each (allInput, function (i, val) {
            dataForm[val['name']] = val['value'];
        });

        $.ajax(url_post, {
            type: 'PUT',
            data: dataForm,
            success: function (data, status, xhr) {
                var data_str = JSON.parse(data);

                alert(data_str['pesan']);
            },
            error: function (jqXHR, textStatus, errorMessage) {
                alert('Error : ' + jqXHR.responseJSON.message);
            }
        })
    }
})