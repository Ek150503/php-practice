<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP</title>
</head>

<body>
    <div class="w-50 mx-auto">
        <form action="index.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <?php

    $email = "";
    $passworld = "";
    $remember = "off";
    
    if(isset($_POST["email"]) && isset($_POST["pswd"])){
        $email = $_POST["email"];
        $passworld = $_POST["pswd"];

        $remember = "off";
        if(!empty($_POST["remember"])){
            $remember = $_POST["remember"];
        }  

        // echo "Your Username is " . $email . "<br/>";
        // echo "Your Password is " . $passworld . "<br/>";
        // echo "You click on remember: " . $remember;

    }
    
    ?>


    <div class="w-50 mx-auto my-5 row">
        <div class="col-4">
            <h3>Your Email: </h3> <?php echo $email  ?>
        </div>
        <div class="col-4">
            <h3>Your Password:</h3> <?php echo $passworld ?>
        </div>
        <div class="col-4">
            <h3>Check:</h3> <?php echo $remember ?>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>