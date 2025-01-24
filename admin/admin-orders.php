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
                            <select class="filter-select">
                                <option value="">Status</option>
                                <option value="completed">Completed</option>
                                <option value="processing">Processing</option>
                                <option value="pending">Pending</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
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
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-check-circle"></i>
                            <div class="summary-details">
                                <h3>Completed</h3>
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-clock"></i>
                            <div class="summary-details">
                                <h3>Pending</h3>
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-dollar-sign"></i>
                            <div class="summary-details">
                                <h3>Total Revenue</h3>
                                <p>NA</p>
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>$NA</td>
                                <td><span class="status-badge status-active">Completed</span></td>
                                <td>
                                    <div class="action-group">
                                        <button class="action-button">
                                            <i class="fas fa-eye"></i>
                                            View
                                        </button>
                                        <button class="action-button-secondary">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Doe</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>$NA</td>
                                <td><span class="status-badge status-pending">Processing</span></td>
                                <td>
                                    <div class="action-group">
                                        <button class="action-button">
                                            <i class="fas fa-eye"></i>
                                            View
                                        </button>
                                        <button class="action-button-secondary">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jeremiah Springfield</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>$NA</td>
                                <td><span class="status-badge status-inactive">Cancelled</span></td>
                                <td>
                                    <div class="action-group">
                                        <button class="action-button">
                                            <i class="fas fa-eye"></i>
                                            View
                                        </button>
                                        <button class="action-button-secondary">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
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