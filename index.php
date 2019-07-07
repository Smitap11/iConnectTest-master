<!DOCTYPE html>
<html>
<head>
    <title>KYC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>

<div class="container kycContainer">
    <div class="p-3 text-center"><h3>KYC Details</h3></div>
    <form id="kycDetails" method="POST" action="kycSubmit.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="mobileNumber" class="col-sm-2 col-form-label">Mobile Number</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="dateOfBirth" class="col-md-2 col-form-label">Date of Birth</label>
                <div class="input-group date col-md-10" data-provide="datepicker">
                    <input type="text" class="form-control dateOfBirth" name="dateOfBirth" autocomplete="off" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div id="selectImage"  class="col-sm-3">
                    <label>Select Your Adhar Card</label><br/>
                    <input type="file" name="file" id="file" required />
                </div>
                <div id="image_preview border" class="col-sm-9">
                    <img id="previewing" src="assets/images/no-image.png" />
                </div>
            </div>

            <h4 id='loading' class="py-3" style="display:none">loading..</h4>
            <div id="message" class="p-3 m-3"></div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    <div>

</body>
</html>