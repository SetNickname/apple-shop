<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="./products.css">
        <title>Orders</title>
    </head>
    <body>
        <?php 
            //links
            $admin_sidebar_script = "./admin-sidebar-scripts.js";

        
        ?>
        <div class="products">

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
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item" id="Products">
                        <a href="#" class="nav-link active">
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
                    <h2 class="page-title">Products</h2>
                    <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Search products...">
                        <div class="filter-group">
                            <select class="filter-select">
                                <option value="">Sort by</option>
                                <option value="newest">Newest</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="stock">Stock Level</option>
                            </select>
                            <button class="action-button">
                                <i class="fas fa-plus"></i>
                                Add Product
                            </button>
                        </div>
                    </div>
                </div>
            
                <div class="content-card">
                    <div class="product-summary">
                        <div class="summary-card">
                            <i class="fas fa-box"></i>
                            <div class="summary-details">
                                <h3>NA</h3>
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-check-circle"></i>
                            <div class="summary-details">
                                <h3>NA</h3>
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-exclamation-circle"></i>
                            <div class="summary-details">
                                <h3>NA</h3>
                                <p>NA</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <i class="fas fa-times-circle"></i>
                            <div class="summary-details">
                                <h3>NA</h3>
                                <p>NA</p>
                            </div>
                        </div>
                    </div>

                    <div class="category-filters">
                        <button class="filter-button active">All Products</button>
                        <button class="filter-button">iPhone</button>
                        <button class="filter-button">iPad</button>
                        <button class="filter-button">Accessories</button>
                    </div>
            
                    <div class="product-grid">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/350/350" alt="iPhone 15 Pro">
                                <div class="product-badge">New</div>
                            </div>
                            <div class="product-details">
                                <h3>NA</h3>
                                <p class="product-price">NA</p>
                                <div class="product-meta">
                                    <span class="status-badge status-active">In Stock</span>
                                    <span class="stock-count">NA</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="action-button-secondary">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/350/350" alt="MacBook Air M3">
                            </div>
                            <div class="product-details">
                                <h3>NA</h3>
                                <p class="product-price"NA</p>
                                <div class="product-meta">
                                    <span class="status-badge status-warning">Low Stock</span>
                                    <span class="stock-count">NA</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="action-button-secondary">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/350/350" alt="AirPods Pro">
                            </div>
                            <div class="product-details">
                                <h3>NA</h3>
                                <p class="product-price">NA</p>
                                <div class="product-meta">
                                    <span class="status-badge status-inactive">Out of Stock</span>
                                    <span class="stock-count">NA</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="action-button-secondary">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="table-footer">
                        <div class="entries-info">
                            Showing 1 to 3 of 248 products
                        </div>
                        <div class="pagination">
                            <button class="page-button"><i class="fas fa-chevron-left"></i></button>
                            <button class="page-button active">1</button>
                            <button class="page-button">2</button>
                            <button class="page-button">3</button>
                            <span class="pagination-ellipsis">...</span>
                            <button class="page-button">12</button>
                            <button class="page-button"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </main>

        <script src="<?php echo $admin_sidebar_script; ?>"></script>
    </body>
</html>