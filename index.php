<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <div class="container">

        <div class="container_row">

            <form id="myForm" class="container_form" ">
                <div class="col">
                    <input id="name" type="text" name="name" class="" placeholder="Name" aria-label="First name">
                </div>
                <div class="col">
                    <input id="login" type="text" name="login" class="" placeholder="Login" aria-label="Last name">
                </div>
                <button type="button" class="btn btn-primary" onclick="validateForm()">Отправить</button>

        </div>

            <div id="error" ></div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    function validateForm() {
        var name = $("#name").val();
        var login = $("#login").val();
        if (name == "" || login == "") {
            $("#error").html("Пожалуйста, заполните все поля");
        } else {
            $.ajax({
                type: "POST",
                url: "ajax/form.php",
                data: { name: name, login: login },
                success: function(response) {
                    console.log(response);
                    $("#error").html(response.message);
                }
            });
        }
    }

</script>

</body>
</html>