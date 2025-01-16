<?php

include "registration.php";
include "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Admin Dashboard</title>
    <script src="https://kit.fontawesome.com/92cde7fc6f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/adminDashboard.css" />
</head>

<body>
    <div class="grid-container">

        <!-----HEADER------>

        <header class="header">
            <div class="header-right">
                <div class="info-box">
                    <i class="fa-regular fa-user"></i>
                    <div class="user-text">

                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn-dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <!-----HEADER------>

        <!-----SIDEBAR------>

        <aside id="sjb-sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img src="images/cdpLogo.png" alt="Logo">
                    <br>
                    <strong>WEB ADMIN DASHBOARD</strong>
                </div>

            </div>

            <!-----php echo isset($_GET['page']) && $_GET['page'] === 'dashboard' ? 'active' : ''; ?>---->

            <ul class="sidebar-list">
                <li class="sidebar-list-item active" data-page="dashboard" onclick="changePage('dashboard')">
                    <i class="fa-solid fa-chart-line"></i>DASHBOARD
                </li>
                <li class="sidebar-list-item" data-page="students" onclick="changePage('link-launchers')">
                    <i class="fa-solid fa-link"></i> LINK LAUNCHERS
                </li>
                <li class="sidebar-list-item" onclick="changePage('add-users')">
                    <i class="fa-regular fa-id-card"></i> ADD USERS
                </li>
                <li class="sidebar-list-item" onclick="changePage('upload-session')">
                    <i class="fa-solid fa-upload"></i> UPLOAD SESSION
                </li>
                <li class="sidebar-list-item" onclick="changePage('announcement')">
                    <i class="fa-regular fa-id-card"></i> ADD ANNOUNCEMENTS
                </li>
            </ul>
        </aside>

        <!-----SIDEBAR------>


        <main class="main-container">
            <!-- Dashboard Page -->
            <div id="dashboard-page" class="page-content">

                <div class="main-title">
                    <h1>DASHBOARD</h1>
                </div>

                <div class="main-cards">

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-user"></i>
                            <p>USERS ONLINE</p>
                        </div>
                        <h2>150</h2> <!--CHANGE VALUE ACCORDING TO CODE THAT IDENTIFIES USERS ONLINE-->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-folder"></i>
                            <p>GSDs ACTIVE</p>
                        </div>
                        <h2>10</h2> <!--CHANGE VALUE ACCORDING TO CODE THAT IDENTIFIES USERS ONLINE-->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <i class="fa-solid fa-keyboard"></i>
                            <p>USERS REGISTERED</p>
                        </div>
                        <h2><?php echo getUserCount('web_users'); ?></h2> <!--CHANGE VALUE ACCORDING TO CODE THAT IDENTIFIES USERS ONLINE-->
                    </div>



                </div>

                <div class="charts">

                    <div class="charts-card">
                        <p class="chart-title">CALENDAR</p>
                        <!-- Calendar HTML Structure -->
                        <div class="calendar">
                            <div class="calendar-header">
                                <button id="prevMonthBtn" class="prev-month">❮</button>
                                <h3 id="monthYear" class="month-year"></h3>
                                <button id="nextMonthBtn" class="next-month">❯</button>
                            </div>
                            <div class="calendar-weekdays">
                                <div>SUN</div>
                                <div>MON</div>
                                <div>TUE</div>
                                <div>WED</div>
                                <div>THU</div>
                                <div>FRI</div>
                                <div>SAT</div>
                            </div>
                            <div id="calendarDays" class="calendar-days"></div>
                        </div>
                        <script src="dynamicCalendar.js"></script>
                    </div>

                    <div class="charts-card">
                        <p class="chart-title">GSDs STATUS</p>
                        <div id="area-chart"></div>
                    </div>
                </div>

            </div>

            <!-- End of Dashboard Page -->

            <!---Link Launchers Page--->

            <div id="link-launchers-page" class="page-content">
                <div class="main-title">
                    <h1>LINK LAUNCHERS</h1>
                </div>

                <div class="container-fluid link-container">
                    <div class="main-buttons">

                        <a href="https://jet-p-001.sitecorecontenthub.cloud/en-us/Account?ReturnUrl=%2Fen-us" class="btn-cards" target="_blank">
                            <div class="btn-cards-inner">
                                <img src="images/jetstarLogo.png" alt="Logo">
                                <br>
                                <p>JETSTAR ACCOUNT SIGN-IN</p>
                            </div>
                        </a>
                        <a href="https://jetstarairways-my.sharepoint.com/:x:/r/personal/justin_black_jetstar_com/_layouts/15/doc2.aspx?sourcedoc=%7BD31F2C8A-2F46-46B0-B7DF-C0A522AB3BD6%7D&file=Content%20Hub%20Help%20Migration%20CIM%20-%20Monstars.xlsx&fromShare=true&action=default&mobileredirect=true&wdOrigin=TEAMS-MAGLEV.p2p_ns.rwc&wdExp=TEAMS-TREATMENT&wdhostclicktime=1721275896240&web=1
" class="btn-cards" target="_blank">
                            <div class="btn-cards-inner">
                                <img src="images/cdpLogo.png" alt="Logo">
                                <br>
                                <p>CH MIGRATION HELP SHARED FILE</p>
                            </div>
                        </a>

                        <a href="https://jet-p-001.sitecorecontenthub.cloud/en-us/Account?ReturnUrl=%2Fen-us" class="btn-cards" target="_blank">
                            <div class="btn-cards-inner">
                                <img src="images/cdpLogo.png" alt="Logo">
                                <br>
                                <p>JETSTAR ACCOUNT SIGN-IN</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!-- End of Link of Launchers Page -->

            <!-- Add Users Page -->

            <div id="add-users-page" class="page-content">

                <div class="main-title">
                    <h1>REGISTER USERS</h1>
                </div>

                <div class="add-page-container">
                    <div class="container-lg form-container ">
                        <form action="#" class="form-login" method="POST" enctype="multipart/form-data">
                            <div class="row gx-3">
                                <div class="col">
                                    <label for="FirstName">First Name:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="E.g: Juan" autofocus required>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="MiddleName">Middle Name:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="middle_name" placeholder="E.g: Dela Cruz" autofocus required>
                                    </div>
                                </div>
                                <div class="mb-3"></div>
                            </div>

                            <div class="row gx-3">
                                <div class="col">
                                    <label for="Surname">Surname:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="surname" placeholder="E.g: Dela Cruz" autofocus required>
                                    </div>
                                </div>
                                <div class="mb-3"></div>
                            </div>

                            <div class="row gx-3">
                                <div class="col">
                                    <label for="Username">Username:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" placeholder="E.g: WEB-2024-01" autofocus required>
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Email">Email:</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                        <span class="input-group-text">@gmail.com</i></span>
                                    </div>
                                </div>
                                <div class="mb-3"></div>
                            </div>

                            <div class="row gx-3">
                                <div class="col">
                                    <label for="Gender">Gender:</label>
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="preferNTS">Prefer not to say</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="Password">Password:</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" autofocus required>
                                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="ConfirmPassword">Confirm Password:</label>
                                    <div class="input-group">
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" autofocus required>
                                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3"></div>
                            </div>

                            <div class="row gx-3">
                                <div class="col">
                                    <label for="DateOfBirth">Date of Birth:</label>
                                    <input type="date" name="dob" class="form-control" autofocus required>
                                </div>
                                <div class="col">
                                    <label for="Photo">Photo Upload:</label>
                                    <div class="input-group">
                                        <input type="file" name="photo" class="form-control" accept="image/*">
                                        <span class="input-group-text"><i class="fa-solid fa-camera"></i></span>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="AccountType">Account Type:</label>
                                    <select name="usertype" class="form-select">
                                        <option value="user">User</option>
                                        <option value="admin" disabled>Admin</option>
                                    </select>
                                </div>
                                <div class="mb-3"></div>
                            </div>

                            <div class="btn-form-container">
                                <button type="submit" name="submit" class="btn-register">REGISTER</button>
                            </div>
                    </div>

                    <div class="container-lg list-user-container ">
                        <div class="user-box">
                            <table class="table table-bordered table-striped list-table">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Surname</th>
                                        <th>Gender</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                </thead>
                                <tbody id="studentTableBody">
                                    <?php
                                    $userData = getuserData();
                                    foreach ($userData as $web_user) {
                                        echo "<tr>";
                                        echo "<td>{$web_user['username']}</td>";
                                        echo "<td>{$web_user['first_name']}</td>";
                                        echo "<td>{$web_user['middle_name']}</td>";
                                        echo "<td>{$web_user['surname']}</td>";
                                        echo "<td>{$web_user['gender']}</td>";
                                        echo "<td>{$web_user['dob']}</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Add Users Page -->

            <!-- Upload session Page -->
            
            <div id="upload-session-page" class="page-content">
                <div class="main-title">
                    <h1>UPLOAD SESSIONS</h1>

                </div>

                <div class="container-lg upload-container">
                    <form action="#" class="form-upload" method="POST" enctype="multipart/form-data">
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text">Title:</span>
                                <input type="text" class="form-control" name="upload-title" placeholder="How to rename a content inside Content Hub" autofocus required>
                            </div>
                        </div>
                        <div class="textarea-section">
                            <label>Description:</label>
                            <br>
                            <textarea class="form-control textarea-form" placeholder="Input your description here"></textarea>
                        </div>
                    </form>
                </div>

            </div>

            <!-- End of Upload session Page -->
    </div>

    </main>



    <script src="sidebar.js"></script>
</body>

</html>