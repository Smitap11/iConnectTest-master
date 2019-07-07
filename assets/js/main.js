$(function() {
    $('.dateOfBirth').datepicker({
        format: 'Y-m-d',
        useCurrent: false,
        autoclose: true,
        keepOpen: false,
        changeMonth: true,
        changeYear: true,
        startDate: '-3y',
    });

    $("#file").change(function() {
        $("#message").empty();
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
            $('#previewing').attr('src','noimage.png');
            $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
            return false;
        }
        else
        {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });

    function imageIsLoaded(e) {
        $("#file").css("color","green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '250px');
        $('#previewing').attr('height', '230px');
    };

    $("#kycDetails").submit(function (e) {
        e.preventDefault();
        var formData = new FormData();
        var mobileNumber = $("input[name='mobileNumber']").val();
        formData.append('firstName', $("input[name='firstName']").val());
        formData.append('lastName', $("input[name='lastName']").val());
        formData.append('mobileNumber', mobileNumber);
        formData.append('dateOfBirth', $("input[name='dateOfBirth']").val());
        var file = document.getElementById("file").files[0];
        formData.append('file', file);

        if (mobileNumber.length != 10)
        {
            $("#message").html('Mobile Number should be 10 digit.');
        }else{
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                enctype: 'multipart/form-data',
                success: function (response) {
                    console.log(response);
                    $('#loading').hide();
                    $("#message").html(response);
                }
            });
        }


    });
});