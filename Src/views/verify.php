<?php include "base.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veryfication page</title>
</head>

<body>
    <div class="container vh-100">
        <div class="d-flex row justify-content-center">
            <div class="col">

            </div>



            <div class="col-10">

                <h2 class="font-weight-bold text-center align-top">Verify your phone number</h2>

                <p class="text-center">Whatsapp will send an SMS message (carrier charges may apply) to verify your phone number. <br> Enter your country chose and phone number:</p>


            </div>

            <div class="col ">
                <i class="fa fa-ellipsis-v text-center" aria-hidden="true"></i>
              
            </div>

        </div>
        <div class="row">

            <div class="form-outline">
            <input type="country" id="country" class="form-control" />
                <a href="#" class="dropdown-toggle"><span class="caret"></span><label class ="form-label" for="country">Country</label></a>
            </div>

            <hr style="width: 15%;">
        </div>
        <br>
        <div class="form-outline">
            <input type="tel" id="typePhone" class="form-control" />
            <label class="form-label" for="typePhone">Phone number input</label>
         
        </div>
        <div class="row">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="button">NEXT</button>
            </div>
        </div>
</body>

</html>
