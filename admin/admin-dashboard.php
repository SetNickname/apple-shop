<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="./dashboard.css">
</head>
<body>
    <?php 
        //links 
        $admin_sidebar_script = "./admin-sidebar-scripts.js";
        $dashboard = "./dashboard.js";

        require('../connection.php');

        $db = userdata::connect();

        // Total Sales (sum of completed order)
        $stmt = $db->prepare("SELECT SUM(amount) AS total_sales FROM Orders WHERE status = 'Completed'");
        $stmt->execute();
        $totalSales = $stmt->fetch(PDO::FETCH_ASSOC)['total_sales'] ?? 0;

        // New Orders (orders placed today)
        $stmt = $db->prepare("SELECT COUNT(*) AS new_orders FROM Orders WHERE order_date = CURDATE()");
        $stmt->execute();
        $newOrders = $stmt->fetch(PDO::FETCH_ASSOC)['new_orders'] ?? 0;

        // Total Customers (unique customer count)
        $stmt = $db->prepare("SELECT COUNT(DISTINCT cust_first_name, cust_last_name) AS total_customers FROM Orders");
        $stmt->execute();
        $totalCustomers = $stmt->fetch(PDO::FETCH_ASSOC)['total_customers'] ?? 0;

        // Pending Shipments (orders still processing)
        $stmt = $db->prepare("SELECT COUNT(*) AS pending_shipments FROM Orders WHERE status = 'Processing'");
        $stmt->execute();
        $pendingShipments = $stmt->fetch(PDO::FETCH_ASSOC)['pending_shipments'] ?? 0;

    ?>
    <div class="dashboard">

        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-icon">
                <i class="fa-brands fa-apple fa-2xl"></i>
                </div>
                <h1>Username</h1>
            </div>

            <!-- fix broken links # on js -->
            <ul class="nav-menu">
                <li class="nav-item" id="Dashboard">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-chart-bar"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item" id="Orders">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        Orders
                    </a>
                </li>
                <li class="nav-item" id="Products">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i>
                        Products
                    </a>
                </li>
                <li class="nav-item" id="Customers">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        Customers
                    </a>
                </li>
                <li class="nav-item" id="Reviews">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-comment"></i>
                        Reviews
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="profile-picture">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user-details">
                        <div class="user-name">Admin</div>
                        <div class="user-email">apple@gmail.com</div>
                    </div>
                    <a href="#" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <h2 class="dashboard-title">Dashboard</h2>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-label">Total Sales</div>
                    <div class="stat-value">₱<?php echo number_format($totalSales, 2); ?></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="stat-label">New Orders</div>
                    <div class="stat-value"><?php echo $newOrders; ?></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-label">Total Customers</div>
                    <div class="stat-value"><?php echo $totalCustomers; ?></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="stat-label"> Pending Shipments</div>
                    <div class="stat-value"><?php echo $pendingShipments; ?></div>
                </div>
            </div>

            <div class="recent-activity">
                <h3 class="activity-title">Recent Activity</h3>
                <div class="activity-item">
                    <div class="activity-details">
                        <div class="activity-type">New Order</div>
                        <div class="activity-description">Order #1234 placed by John Doe</div>
                    </div>
                    <div class="activity-time">5 minutes ago</div>
                </div>
                <div class="activity-item">
                    <div class="activity-details">
                        <div class="activity-type">Product Update</div>
                        <div class="activity-description">iPhone 13 stock updated</div>
                    </div>
                    <div class="activity-time">1 hour ago</div>
                </div>
                <div class="activity-item">
                    <div class="activity-details">
                        <div class="activity-type">Customer Signup</div>
                        <div class="activity-description">New customer registration</div>
                    </div>
                    <div class="activity-time">3 hours ago</div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo $admin_sidebar_script; ?>"></script>
    <script src="<?php echo $dashboard; ?>"></script>
</body>
</html>