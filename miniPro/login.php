<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS only -->
        <link href="css/css/bootstrap.min.css" rel="stylesheet" />
        <script src="css/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Sign In</title>
    </head>
    <body>
        <div class="container p-4 p-md-0">
            <div class="row mb-4 border border-primary">
                <div class="col-12 col-md-6 p-md-5 shadow rounded">
                    <h3 class="font-weight-bolder mt-5 mt-md-0">Sign In</h3>
                    <form action="./signinAction.php" method="POST">
                        <div class="col-auto">
                            <label class="sr-only">Email</label>
                            <div class="input-group mb-2">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ente Email Id" required />
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only">Password</label>
                            <div class="input-group mb-2">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required />
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3 mb-5 mb-md-2">Sign In</button>
                        <button type="button" onclick="loginPage()" class="btn btn-primary mt-3 mb-5 mb-md-2">Signup</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function loginPage() {
                window.location.href="signup.php";
            }
        </script>
    </body>
</html>
