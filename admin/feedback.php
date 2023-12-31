<?php
require '../data//login.php';
include_once("../data/database.php");
$select = new Select();
$user_fullname = "";
if ($_SESSION["user_type"] != "Admin") {
    session_start();

    session_unset();
    session_destroy();

    header("Location: ../index.php");
} else {
    if (!empty($_SESSION["id"]) && !isset($_SESSION)) {
        $user_id = $select->selectUserById($_SESSION["id"]);

    }
    $retrieve_feedback = $conn->prepare("
    SELECT * FROM feedback");
    $retrieve_feedback->execute([]);

    $retrieve_feedback_completed = $conn->prepare("
    SELECT * FROM feedback WHERE feedback_status = 'Fixed'");
    $retrieve_feedback_completed->execute([]);
    $retrieve_feedback_not_completed = $conn->prepare("
    SELECT * FROM feedback WHERE feedback_status = 'Pending'");
    $retrieve_feedback_not_completed->execute([]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback </i></title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS LINK -->
    <link rel="stylesheet" href="..//css//main.min.css">
    <!-- BOOTSTRAP ICON LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="..//css//nstyle.css? <?php echo time(); ?>">

    <title>ADMIN</title>

</head>

<body class="bg-light">

    <?php include_once('../modals/modals.php') ?>
    <div class="my-2 toast-container position-fixed top-0 start-50 translate-middle-x" id="alert-messages"></div>
    <div class="container-fluid p-0 d-flex" style="overflow-x: hidden;">
        <?php include_once("../Components/admin_Sidebar.php") ?>


        <div class="position-relative main-content" id="plot-content" style="width: 100%;">
            <?php include_once("../Components/admin_NavBar.php") ?>

            <!-- Modified section for time -->
            <div class="row g-2 px-3 my-1">

                <div class="col-lg-4 col-12 shadow-sm">
                    <div class="card rounded-0 border-0">
                        <div class="card-header">
                            <strong>Feedback</strong>
                        </div>
                        <div class="card-body">
                            <form id="update-feedback">
                                <div class="row">
                                    <div class="mt-2">
                                        <label class="form-label">Feedback Title</label>
                                        <input type="text" class="form-control shadow-none rounded-0"
                                            placeholder="Feedback Title" name="feedback_title">
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label">Feedback Description</label>
                                        <textarea type="text" class="form-control shadow-none rounded-0"
                                            placeholder="Feedback Description" name="feedback_desc"></textarea>
                                    </div>
                                    <div class="mt-2 col-4 col-lg-6">
                                        <label class="form-label">Feedback Type</label>
                                        <select name="feedback_type" id="feedback_type"
                                            class="form-select rounded-0 shadow-none">
                                            <option value="Selected Type" selected>Selected Type</option>
                                            <option value="Conflict">Conflict</option>
                                            <option value="Suspension">Suspension</option>
                                            <option value="Changing">Changing (Online or Face to Face)</option>
                                        </select>
                                    </div>
                                    <div class="mt-2 col-4 col-lg-6">
                                        <label class="form-label">Feedback Status</label>
                                        <select name="feedback_type" id="feedback_type"
                                            class="form-select rounded-0 shadow-none">
                                            <option value="Selected Feedback Status" selected>Selected Type</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Fixed">Fixed</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary shadown-none rounded-0"
                                            id="add-feedback-btn-teacher">Update Feedback</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Logs section -->
                <div class="col-lg-8 col-12">
                    <div class="card shadow-sm rounded-0 border-0">
                        <div class="card-header">
                            <strong>Feedback List</strong>
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <form id="feedback-form-filter">
                                    <div class="col-lg col col-12">
                                        <strong class="pe-2">Filter:</strong>
                                    </div>
                                    <div class="row">
                                        <div class="mt-2 col-lg-4 col-6">
                                            <label class="form-label" for="feedback_user_type_admin_filter">Feedback
                                                User Type</label>
                                            <select name="feedback_type_admin_filter" id="feedback_user_type_admin"
                                                class="form-select shadow-none rounded-0">
                                                <option value="Select User Type" selected>Select User Type</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Student">Student</option>
                                            </select>
                                        </div>
                                        <div class="mt-2 col-lg-4 col-6">
                                            <label class="form-label" for="feedback_type_admin">Feedback Type</label>
                                            <select name="feedback_type_admin_filter" id="feedback_type_admin_filter"
                                                class="form-select shadow-none rounded-0">
                                                <option value="Select Feedback Type" selected>Select Feedback Type
                                                </option>
                                                <option value="Conflict">Conflict</option>
                                                <option value="Suspension">Suspension</option>
                                                <option value="Changing">Changing (Online or Face to Face)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col col-lg-4 mt-3">
                                        <button type="submit" class="btn btn-primary shadown-none rounded-0"
                                            id="feedback-btn-filter">Go</button>
                                        <button type="button" class="btn btn-secondary shadown-none rounded-0"
                                            id="reset-feedback-filter-btn">Reset</button>
                                    </div>
                                </form>
                                <ul class="nav nav-tabs mt-3">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-link-table rounded-0 active"
                                            id="all-table-tab-feedback" data-bs-toggle="tab"
                                            data-bs-target="#all-table-tab-pane-feedback" type="button" role="tab"
                                            aria-controls="all-table-tab-pane-feedback"
                                            aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-link-table rounded-0"
                                            id="not-completed-table-tab-feedback" data-bs-toggle="tab"
                                            data-bs-target="#not-completed-table-tab-pane-feedback" type="button"
                                            role="tab" aria-controls="not-completed-table-tab-pane-feedback"
                                            aria-selected="false">Pending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-link-table rounded-0"
                                            id="completed-table-tab-feedback" data-bs-toggle="tab"
                                            data-bs-target="#completed-table-tab-pane-feedback" type="button" role="tab"
                                            aria-controls="completed-table-tab-pane-feedback"
                                            aria-selected="false">Fixed</button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="all-table-tab-pane-feedback"
                                        role="tabpanel" aria-labelledby="all-table-tab-feedback" tabindex="0">
                                        <div class="my-3 d-flex align-items-center">
                                            <h4>All</h4>
                                        </div>
                                        <div class="my-2 table-responsive">
                                            <table id="datatable-feedback" class="table table-bordered">
                                                <thead class="bg-primary">
                                                    <tr class="text-center border-dark" style='font-size: 13px;'>
                                                        <th>Feedback Title</th>
                                                        <th>Feedback Description</th>
                                                        <th>Feedback Type</th>
                                                        <th>Feedback User Type</th>
                                                        <th>Feedback Complaint</th>
                                                        <th>Feedback Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($row = $retrieve_feedback->fetch()) {
                                                        echo '
                                                            <tr class="text-center">
                                                                <td>' . $row["feedback_title"] . '</td>
                                                                <td>' . $row["feedback_desc"] . '</td>
                                                                <td>' . $row["feedback_type"] . '</td>
                                                                <td>' . $row["feedback_user_type"] . '</td>
                                                                <td>' . $row["feedback_user_name_from"] . '</td>
                                                                <td>' . $row["feedback_status"] . '</td>
                                                                </tr>
                                                        ';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="not-completed-table-tab-pane-feedback"
                                        role="tabpanel" aria-labelledby="not-completed-table-tab-feedback" tabindex="0">
                                        <div class="my-3 d-flex align-items-center">
                                            <h4>Pending</h4>

                                        </div>
                                        <div class="my-2 table-responsive">
                                            <table id="datatable-feedback" class="table table-bordered">
                                                <thead class="bg-primary">
                                                    <tr class="text-center border-dark" style='font-size: 13px;'>
                                                        <th>Feedback Title</th>
                                                        <th>Feedback Description</th>
                                                        <th>Feedback Type</th>
                                                        <th>Feedback User Type</th>
                                                        <th>Feedback Complaint</th>
                                                        <th>Feedback Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($row = $retrieve_feedback_not_completed->fetch()) {
                                                        echo '
                                                            <tr class="text-center">
                                                                <td>' . $row["feedback_title"] . '</td>
                                                                <td>' . $row["feedback_desc"] . '</td>
                                                                <td>' . $row["feedback_type"] . '</td>
                                                                <td>' . $row["feedback_user_type"] . '</td>
                                                                <td>' . $row["feedback_user_name_from"] . '</td>
                                                                <td>' . $row["feedback_status"] . '</td>
                                                                </tr>
                                                        ';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="completed-table-tab-pane-feedback" role="tabpanel"
                                        aria-labelledby="completed-table-tab-feedback" tabindex="0">
                                        <div class="my-3 d-flex align-items-center">
                                            <h4>Fixed</h4>
                                        </div>
                                        <div class="my-2 table-responsive">
                                            <table id="datatable-feedback" class="table table-bordered">
                                                <thead class="bg-primary">
                                                    <tr class="text-center border-dark" style='font-size: 13px;'>
                                                        <th>Feedback Title</th>
                                                        <th>Feedback Description</th>
                                                        <th>Feedback Type</th>
                                                        <th>Feedback User Type</th>
                                                        <th>Feedback Complaint</th>
                                                        <th>Feedback Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($row = $retrieve_feedback_completed->fetch()) {
                                                        echo '
                                                            <tr class="text-center">
                                                                <td>' . $row["feedback_title"] . '</td>
                                                                <td>' . $row["feedback_desc"] . '</td>
                                                                <td>' . $row["feedback_type"] . '</td>
                                                                <td>' . $row["feedback_user_type"] . '</td>
                                                                <td>' . $row["feedback_user_name_from"] . '</td>
                                                                <td>' . $row["feedback_status"] . '</td>
                                                                </tr>
                                                        ';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</body>
<!-- BOOTSTRAP JS LINK -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
<!-- JQUERY JS LINK -->
<script src="../js/jquery-3.6.4.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="../js//datatables.min.js?<?php echo time(); ?>"></script>
<script src="../js//index.js?<?php echo time(); ?>"></script>
<script src="../js//time.js?<?php echo time(); ?>"></script>
<script src="../js/validation_admin.js"></script>


</html>