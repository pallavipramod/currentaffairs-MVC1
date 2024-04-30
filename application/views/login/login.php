<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
</head>
<body>
    <div class="navbar">
        <div class="row">
            <div class="col-md-10">
                <h2><a href="index">Register</a></h2>
            </div>
            <div class="col-md-2">
                <h3><a href="login">Login</a></h3>
            </div>
        </div>
    </div>
    <?php
        if(isset($code))
        {
            echo $code;
        }
    ?>
    <div class="register-form">
        <div class="col-md-5">
            <?php echo form_open('login/Userlogin'); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name = "email" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
<style>
    body{
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .navbar{
    width: 100vw;
    background-color: #ccd5ae;
    }
    .register-form{
        position: relative;
        top: 15vh;
        width: 45vw;
        height: 50vh;
        background-color: #fefae0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</html>