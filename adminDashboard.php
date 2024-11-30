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
                    <img src="images/resono-logo.png" alt="Resono Logo">
                    <p>WEB ADMIN DASHBOARD</p>
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
                        <h2>20</h2> <!--CHANGE VALUE ACCORDING TO CODE THAT IDENTIFIES USERS ONLINE-->
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

                <div class="main-buttons">
    
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
                        <h2>20</h2> <!--CHANGE VALUE ACCORDING TO CODE THAT IDENTIFIES USERS ONLINE-->
                    </div>
                </div>
            </div>

            <!-- Add Users Page -->
            <div id="add-users-page" class="page-content">

                <div class="main-title">
                    <h1>STUDENTS</h1>
                </div>

                <div class="container-md">
                    <form>
                        <div class="image-box">
                            <img src="images/resono-logo.png" alt="Resono Logo" />
                            <br>
                            <strong>Web Team Essentials System</strong>
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="userPass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="userPass" required />
                        </div>
                        <button type="submit" class="btn-submit"><strong>Submit</strong></button>
                    </form>
                </div>
            </div>

        </main>

    </div>


    <script src="sidebar.js"></script>
</body>

</html>