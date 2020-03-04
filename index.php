<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
    <div id="themetoggle">
        <link href="surveyform/textStyle_light.css" rel="stylesheet">
<!--        <link href="surveyform/textStyle_dark.css" rel="stylesheet">-->
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#gender').select2();
            $('#role').select2();
            $('#social').select2();
            $('#dob').select2();
            $('#social').select2({
                placeholder: function(){
                    $(this).data('placeholder');
                }
            });
        });
        function dark_theme(){
            document.getElementById("themetoggle").innerHTML=
                '<link href="surveyform/textStyle_dark.css" rel="stylesheet">';
        }
        function light_theme(){
            document.getElementById("themetoggle").innerHTML=
                '<link href="surveyform/textStyle_light.css" rel="stylesheet">';
        }
    </script>

</head>
<body>
<div class="theme_toggle">
    <input class="light_mode" type="button" value="Dark Theme" onclick='dark_theme()'>
    <input class="dark_mode" type="button" value="Light Theme" onclick='light_theme()'>
</div>

<div class="wrapper">
    <div class="header">
        <h2>SURVEY FORM</h2>
    </div>
    <!--    Total 9 data in form   -->
    <form action="surveyform/file.php" class="content" enctype="multipart/form-data" method="post">
        <div>
            <p><strong>First Name</strong></p>
            <input class="ip" name="fname" placeholder="Enter First Name" type="text">
        </div>
        <div>
            <p><strong>Last Name</strong></p>
            <input class="ip" name="lname" placeholder="Enter Last Name">
        </div>
        <div>
            <p><strong>Gender</strong></p>
            <select id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div>
            <p><strong>Age</strong></p>
            <input class="ip" type="number" name="age" placeholder="Enter Age" min="5" max="85">
        </div>
        <div>
            <p><strong>E-Mail</strong></p>
            <input class="ip" type="email" name="email" placeholder="Enter your Mail Id">
        </div>
        <div>
            <p><strong>Date Of Birth</strong></p>
            <input class="ip" type="date" name="dob">
        </div>
        <div>
            <p><strong>Current Role</strong></p>
            <select class="ip" id="role" class="js-example-basic-single" name="role">
                <option value="Student">Student</option>
                <option value="Self-Employee">Self-Employed</option>
                <option value="Priv-Employee">Private Employee</option>
                <option value="Intern">Internship</option>
            </select>
        </div>
        <div>
            <p><strong>Social Media Platforms</strong></p>
            <select class="ip" id="social" multiple name="social[]" data-placeholder="Select your social media platform">
                <option value="Whatsapp">Whatsapp</option>
                <option value="Twitter">Twitter</option>
                <option value="Instagram">Instagram</option>
                <option value="Telegram">Telegram</option>
                <option value="Facebook">Facebook</option>
            </select>
        </div>
        <div>
        <p><strong>Profile Picture</strong></p>
            <input class="ip" type="file" id="dp" name="file">
        </div>
        <div>
            <p><strong>Comments</strong></p>
            <input class="ip" name="comment" placeholder="Enter comments if any">
        </div>
        <input class="ip" id="submit" type="submit" value="SUBMIT">
        <input class="ip" id="reset" type="reset" value="RESET">
    </form>
</div>
</body>
</html>
