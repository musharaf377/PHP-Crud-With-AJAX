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
        <?php include "db.php"; ?>
        <div class="container">
            <div class="row">
                <h2 class="bg-dark text-white p-2 text-center text-uppercase my-3">PHP crud operation with ajex</h2>
                <div class="col-lg-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New
                    </button>

                    <!-- Insert Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Student Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control mb-2" id="name">
                                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2" id="email">
                                        <input type="text" name="depertment" placeholder="Enter Your Depertment" class="form-control" id="depertment">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="addStudentData()" class="btn btn-primary">Save Student</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="student-tbody">
                            
                        </tbody>
                    </table>

                    <!-- Update Modal -->
                    <div class="modal fade" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Student Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control mb-2" id="upname">
                                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2" id="upemail">
                                        <input type="text" name="depertment" placeholder="Enter Your Depertment" class="form-control" id="updepertment">
                                        <input type="hidden" id="hiddenId">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="updateStudentData()" class="btn btn-primary">Update Student</button>
                                </div>
                            </div>
                        </div>
                    </div>

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