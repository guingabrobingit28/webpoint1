<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admstyles.css">
    <title>Products</title>
</head>
<body>
<div class="container-fluid position-relative d-flex p-0">
    <!--side bar section-->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar sidebarGraColor navbar-dark">
            <a href="index.php" class="navbar-brand mx-4 mb-3">
                <img src="icon/webpoint.png" width="175">
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="miguel mangulabnan.jpg" alt="" style="width: 40px; height: 40px;">
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Miguel Mangulabnan</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Transactions</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="POS.php" class="dropdown-item"><b>POS</b></a>
                            <a href="#" class="dropdown-item"><b>History</b></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Inventory</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sproduct.php" class="dropdown-item"><b>Add Product</b></a>
                            <a href="mInventory.php" class="dropdown-item"><b>Manage Inventory</b></a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Track Orders</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="icon/repairing-service.png" width="35" class="imageInverter">&emsp;Services</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="#" class="dropdown-item"><b>Active Appointments</b></a>
                                <a href="addAppointment.php" class="dropdown-item"><b>Scheduling</b></a>
                            </div>
                        </div>
                <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Reports</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-wrench me-2"></i>Maintenance</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="category.php" class="dropdown-item"><b>Category</b></a>
                            <a href="subcategory.php" class="dropdown-item"><b>subcategory</b></a>
                            <a href="sproduct.php" class="dropdown-item"><b>Products</b></a>
                            <a href="supplier.php" class="dropdown-item"><b>Supplier</b></a>
                            <a href="status.php" class="dropdown-item"><b>Status</b></a>
                            <a href="delivermethod.php" class="dropdown-item"><b>Deliver Method</b></a>
                            <a href="paymethod.php" class="dropdown-item"><b>Payment Method</b></a>
                            <a href="qrpayment.php" class="dropdown-item"><b>QRcode Payment</b></a>
                            <a href="#" class="dropdown-item"><b>Back up</b></a>
                            <a href="#" class="dropdown-item"><b>Terms and Condition</b></a>
                        </div>
                </div> 
            </div>
        </nav>
    </div>
    
    <div class="content">
        <!--Nav bar Section-->
        <nav class="navbar navbar-expand navGraColor navbar-dark sticky-top px-4 py-0">
            <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notification</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end sidebarGraColor border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <!--nav Admin section-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="miguel mangulabnan.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">Miguel Mangulabnan</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end sidebarGraColor border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!--product maintenance-->
        <div class="container-fluid pt-0 px-4">
            <div class="row vh-120 sidebarGraColor rounded align-items-center justify-content-between mx-0">
                <form action="./php/updateFunc.php" method="post" id="product" name="product" enctype="multipart/form-data">
                <div class="col-xl-10">
                <h3 class="mb-4"><b></b>Add Product</b></h3>
                <div class="mb-3">
                    <label for="formFile" class="form-label"><b>Product Image</b></label>
                    <input class="imgfile bg-transparent" type="file" id="formFile" name="imagefile" value="<?php echo $productname; ?>" required>
                </div>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Product Name</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" name="productname" placeholder="ProductName" required>
                        <label for="floatingText">Enter Product Name</label>
                    </div>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Price</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="price" id="floatingText" placeholder="Price" required>
                        <label for="floatingText">Price</label>
                    </div>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Quantity</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="quantity" id="floatingText" placeholder="Quantity" required>
                        <label for="floatingText">Quantity</label>
                    </div>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Category</h5>
                    <select class="form-select mb-3 " name="category" aria-label=".form-select-sm example">
                        <option value="" >--Select a Category--</option>
                        <?php
                        // Retrieve the list of categories from the database
                        $category_query = "SELECT category_id, category_name FROM tblcategory";
                        $category_result = $conn->query($category_query);
                        
                        // Loop through the categories and add them as options in the dropdown
                        while ($category_row = $category_result->fetch_assoc()) {
                            $selected = ($category_row['category_id'] == $category) ? "selected" : "";
                            echo "<option value=\"{$category_row['category_id']}\" $selected>{$category_row['category_name']}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">SubCategory</h5>
                    <select class="form-select mb-3" name="subcategory" aria-label=".form-select-sm example">
                        <option value="">--Select a SubCategory--</option>
                    </select>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Supplier</h5>
                    <select class="form-select mb-3" name="supplierid" aria-label=".form-select-sm example">
                        <option value="1">None</option>
                    </select>
                </div>
                <div class="col-xl-10">
                    <h5 class="mb-3">Status</h5>
                    <select class="form-select mb-3" name="status" aria-label=".form-select-sm example">
                        <option value="1">Available</option>
                        <option value="2">Not Available</option>
                    </select>
                </div>
                <div class="col-xl-10">
                    <button type="submit" name="update" value="Upload" class="btn btn-primary rounded-pill m-2">Update</button>
                    <button type="button" class="btn btn-primary rounded-pill m-2">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <?php 
        if(isset($_SESSION['status'])){
            $message = $_SESSION['status'];
            echo "<script type='text/javascript'>alert('$message');</script>";
            unset($_SESSION['status']); 
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admjs.js" type="text/javascript"></script>
</body>

</html>