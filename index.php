<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP Crud Operation with AJAX</title>

  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
                <h2 class="bg-dark text-white p-2 text-center text-uppercase my-3">PHP crud operation with ajex</h2>
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Musharaf</td>
                            <td>Hossain</td>
                            <td>musharaf@gmail.com</td>
                            <td><a href="">Edit</a></td>
                            <td><a href="">Delete</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>