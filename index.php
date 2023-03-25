<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5 col-8 offset-2">
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger">
                check error
            </div>
        <?php } ?>
    <form method="post" action="main.php">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter your brother's age</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="age" rows="1"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>