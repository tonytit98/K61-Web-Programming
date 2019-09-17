<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/aja+++x/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Default form register -->
    <form class="text-center border border-light p-5" method="post" action="./server_sample.php">

        <p class="h4 mb-4">Sign up</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
            </div>
        </div>
        <!-- E-mail -->
        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
        <!-- a password field to input the password -->
        <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">

        <!-- a radio button named "sex", values: male / female -->
        <b>
            Sex
        </b>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="male" id="male" value="option1">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="female" id="female" value="option2">
            <label class="form-check-label" for="female">Female</label>
        </div>
        <br>
        <!-- a checkbox named "hobbies", values: Reading, Sport, Music, ... -->
        <b>
            Hobbies
        </b>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="hobby1">
            <label class="form-check-label" for="defaultCheck1">
                hobby1
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="0" id="defaultCheck2" name="hobby2">
            <label class="form-check-label" for="defaultCheck2">
                hobby2
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="0" id="defaultCheck2" name="hobby3">
            <label class="form-check-label" for="defaultCheck2">
                hobby3
            </label>
        </div>
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit" name="reg_user">Sign up</button>

    </form>
    <!-- Default form register -->
</body>

</html>