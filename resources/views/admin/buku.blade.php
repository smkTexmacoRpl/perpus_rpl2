<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        /* Sidebar styling */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #343a40;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }

        #sidebar a:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        #sidebar.active {
            margin-left: -250px;
        }

        /* Content */
        #content {
            transition: all 0.3s;
            width: 100%;
        }

        #content.active {
            margin-left: 0;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark">
            <div class="p-3">
                <h4 class="text-white">Admin Panel</h4>
                <hr class="bg-secondary" />
                <ul class="list-unstyled">
                    <li><a href="#" class="d-block py-2 px-3"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                    <li><a href="#" class="d-block py-2 px-3"><i class="bi bi-people me-2"></i> Users</a></li>
                    <li><a href="#" class="d-block py-2 px-3"><i class="bi bi-box me-2"></i> Products</a></li>
                    <li><a href="#" class="d-block py-2 px-3"><i class="bi bi-bar-chart me-2"></i> Reports</a></li>
                    <li><a href="#" class="d-block py-2 px-3"><i class="bi bi-gear me-2"></i> Settings</a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="content" class="flex-grow-1">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <button class="btn btn-outline-dark" id="sidebarToggle">
                        <i class="bi bi-list"></i>
                    </button>
                    <h5 class="ms-3 mb-0">Dashboard</h5>

                    <div class="ms-auto d-flex align-items-center">
                        <div class="dropdown">
                            <a class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" href="#"
                                id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://via.placeholder.com/32" alt="user" class="rounded-circle me-2">
                                <strong>Admin</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="container-fluid py-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h6>Total Users</h6>
                                <h3>1,245</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h6>Sales</h6>
                                <h3>$12,450</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h6>Products</h6>
                                <h3>320</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h6>Feedback</h6>
                                <h3>87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4 shadow-sm border-0">
                    <div class="card-body">
                        <h5>Recent Activity</h5>
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Action</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Added a new product</td>
                                    <td>2025-11-05</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>Updated profile</td>
                                    <td>2025-11-04</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('active');
    });
    </script>
</body>

</html>