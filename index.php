<?php
// Check if the form has been submitted
if (isset($_GET['submit'])) {
    echo '<script>alert("Opération réussie !")</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send an email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <section>

        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <!-- Email Form -->
                            <form class="send-email-form" action="index.php?submit=1" onsubmit="return validateForm()"
                                name="myForm" novalidate>
                                <h2 class="text-center mt-4 mb-5">Send an email</h2>
                                <div class="send-email-form-img-container mb-3 mt-3">
                                    <img src="./assets/images/undraw_hey_email_liaa.svg" alt=""
                                        class="send-email-form-img" />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="name" class="mb-1">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter your name" />
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email" class="mb-1">Email address</label>
                                    <input type="email" name="email" class=" form-control" id="email"
                                        placeholder="Enter email" />
                                </div>
                                <button type='submit' value='1' name='submit' class=" btn btn-primary">Submit</button>
                            </form>
                            <!-- Email Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    const validateForm = () => {

        // get name and email from the DOM

        let name = document.forms["myForm"]["name"].value;
        let email = document.forms["myForm"]["email"].value;

        // check if the name is empty
        if (name === "") {
            alert("Please fill in the name")
            return false

            // check if the email is empty
        } else if (email === "") {
            alert("Please fill in the email")
            return false

            // check if the email is valid
        } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            alert("You have entered an invalid email address!")
            return false
        } else return true
    }
    </script>
</body>

</html>