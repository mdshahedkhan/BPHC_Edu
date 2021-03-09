$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#EmploysCreate').submit(function (event) {
    event.preventDefault();
    let url = $(this).data('url');
    $.ajax({
        url: url,
        method: "post",
        contentType: false,
        processData: false,
        async: false,
        data: new FormData($(this)[0]),
        success: function (data) {
            if ($.isEmptyObject(data.error)) {
                $('.error-message').remove();
                $.Notification.notify('success', 'top right', data.success);
                $('#EmploysCreate')[0].reset();
                $('.image').empty();
                $('.gallery').empty();
                $('#job_experience_box').css('display', 'none');
                $('.select2-selection__rendered').empty();
            } else {
                ShowErrorMessage(data.error);
            }
        }
    });
});

// Display Error Message Show
function ShowErrorMessage(Message) {
    $('.error-message').css('display', 'block').find('ul').html('');
    $.each(Message, function (key, value) {
        $('.error-message').find('ul').append('<li>' + value + '</li>');
        $.Notification.notify('error', 'top right', value);
    });
}

// Form Password Show & Hide
$('#password').click(function () {
    if ($('#password').attr('type') == 'password') {
        $('#password').attr('type', 'text');
    } else {
        $('#password').attr('type', 'password');
    }
});
// Job Experience Box Toggle Slide
$('#job_experience_checkbox').click(function () {
    $('#job_experience_box').slideToggle();
});

// Image Reader
function readFile(input, place) {
    if (input.files) {
        $(place).html('');
        let FileAmount = 4;
        for (let i = 0; i < FileAmount; i++) {
            let Reader = new FileReader();
            Reader.onload = function (event) {
                $(place).append('<img style="width: 80px; height: 100px" class="img-thumbnail" src="' + event.target.result + '" style="height: 100px; width: 100px" >')
            }
            Reader.readAsDataURL(input.files[i]);
            console.log(input.files[i][name])
        }
    }
}

// Profile Image View
$('body').on('change', '#profile-image', function () {
    readFile(this, '.image');
});

// Profile Image View
$('body').on('change', '#nid_image', function () {
    readFile(this, '.gallery');
});


// All Delete Form Submit
function SubmitForm(Url, id) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function(){
        $.ajax({
            url: Url,
            method: "POST",
            success: function (result){
                swal("Deleted!", result.success, "success");
                $('.deleteRow'+id).empty();
            }
        })
    });
}
