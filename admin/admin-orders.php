<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="./orders.css">
        <title>Orders</title>
    </head>
    <body>
        <?php 
            //links
            $admin_sidebar_script = "./admin-sidebar-scripts.js";

            require('../connection.php');

            $db = userdata::connect();

            // Total Orders (count all orders)
            $stmt = $db->prepare("SELECT COUNT(*) AS total_orders FROM Orders");
            $stmt->execute();
            $totalOrders = $stmt->fetch(PDO::FETCH_ASSOC)['total_orders'] ?? 0;

            // Completed Orders
            $stmt = $db->prepare("SELECT COUNT(*) AS completed_orders FROM Orders WHERE status = 'Completed'");
            $stmt->execute();
            $completedOrders = $stmt->fetch(PDO::FETCH_ASSOC)['completed_orders'] ?? 0;

            // Pending Orders
            $stmt = $db->prepare("SELECT COUNT(*) AS pending_orders FROM Orders WHERE status = 'Processing'");
            $stmt->execute();
            $pendingOrders = $stmt->fetch(PDO::FETCH_ASSOC)['pending_orders'] ?? 0;

            // Total Revenue (sum of completed + processing orders)
            $stmt = $db->prepare("SELECT SUM(amount) AS total_revenue FROM Orders WHERE status IN ('Completed', 'Processing')");
            $stmt->execute();
            $totalRevenue = $stmt->fetch(PDO::FETCH_ASSOC)['total_revenue'] ?? 0;

            // get selected status from the dropdown (default is empty = show all)
            $filterStatus = isset($_GET['status']) ? $_GET['status'] : '';

            // Fetch all orders with corresponding product names
            $query = "
            SELECT 
                o.order_id, 
                CONCAT(o.cust_first_name, ' ', o.cust_last_name) AS customer_name, 
                p.product_name, 
                o.order_date, 
                o.amount, 
                o.status 
            FROM Orders o
            JOIN Products p ON o.product_id = p.product_id";
            
            // apply filter if a status is selected
            if (!empty($filterStatus)) {
                $query .= " WHERE o.status = :status";
            }

            $query .= " ORDER BY o.order_id DESC";  // Latest orders first

            $stmt = $db->prepare($query);

            // bind status if filter is applied
            if (!empty($filterStatus)) {
                $stmt->bindValue(':status', $filterStatus);
            }

            $stmt->execute();
            $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

            
        
        ?>
        <div class="orders">

            <aside class="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-icon">
                        <i class="fa-brands fa-apple fa-2xl"></i>
                        </div>
                    <h1>Username</h1>
                </div>
    
                <ul class="nav-menu">
                    <li class="nav-item" id="Dashboard">
                        <a href="#" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item" id="Orders">
                        <a href="#" class="nav-link active">
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
                <div class="content-header">
                    <h2 class="page-title">Orders</h2>
                    <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Search orders...">
                        <div class="filter-group">
                            <!-- <select class="filter-select">
                                <option value="">Status</option>
                                <option value="completed">Completed</option>
                                <option value="processing">Processing</option>
                                <option value="pending">Pending</option>
                                <option value="cancelled">Cancelled</option>
                            </select> -->
                            <form method="GET">
                                <select class="filter-select" name="status" onchange="this.form.submit()"> 
                                    <option value="">All Status</option>
                                    <option value="Completed" <?php echo ($filterStatus == 'Completed') ? 'selected' : ''; ?>>Completed</option>
                                    <option value="Processing" <?php echo ($filterStatus == 'Processing') ? 'selected' : ''; ?>>Processing</option>
                                    <option value="Cancelled" <?php echo ($filterStatus == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                                </select>
                            </form>
                            <button class="action-button">
                                <i class="fas fa-filter"></i>
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
            
                <div class="content-card">
                    <div class="order-summary">
                        <div class="summary-card">
                            <i class="fas fa-shopping-cart"></i>
                            <div class="summary-details">
                                <h3>Total Orders</h3>
                                <p><?php echo $totalOrders; ?></p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-check-circle"></i>
                            <div class="summary-details">
                                <h3>Completed</h3>
                                <p><?php echo $completedOrders; ?></p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-clock"></i>
                            <div class="summary-details">
                                <h3>Pending</h3>
                                <p><?php echo $pendingOrders; ?></p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-dollar-sign"></i>
                            <div class="summary-details">
                                <h3>Total Revenue</h3>
                                <p>₱<?php echo number_format($totalRevenue, 2); ?></p>
                            </div>
                        </div>
                    </div>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td><?php echo $order['order_id']; ?></td>
                                    <td><?php echo htmlspecialchars($order['customer_name']); ?></td>
                                    <td><?php echo htmlspecialchars($order['product_name']); ?></td>
                                    <td><?php echo $order['order_date']; ?></td>
                                    <td>₱<?php echo number_format($order['amount'], 2); ?></td>
                                    <td>
                                        <span class="status-badge 
                                            <?php echo ($order['status'] == 'Completed') ? 'status-active' : 
                                                        (($order['status'] == 'Processing') ? 'status-pending' : 'status-inactive'); ?>">
                                            <?php echo $order['status']; ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            
                    <div class="table-footer">
                        <div class="entries-info">
                            Showing 1 to 3 of 1,234 entries
                        </div>
                        <div class="pagination">
                            <button class="page-button"><i class="fas fa-chevron-left"></i></button>
                            <button class="page-button active">1</button>
                            <button class="page-button">2</button>
                            <button class="page-button">3</button>
                            <span class="pagination-ellipsis">...</span>
                            <button class="page-button">50</button>
                            <button class="page-button"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </main>

        <script src="<?php echo $admin_sidebar_script; ?>"></script>
    </body>
</html>