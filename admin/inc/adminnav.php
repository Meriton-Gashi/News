<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link mt-3" href="index.php">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
            </a>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#userNav" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="userNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_user.php">Add User</a>
                    <a class="nav-link" href="users.php">View Users</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catNav" 
                aria-expanded="false" aria-controls="catNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    News        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="catNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_category.php">Add News</a>
                    <a class="nav-link" href="categories.php">View News</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postNav" 
                aria-expanded="false" aria-controls="postNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="postNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_post.php">Add Post</a>
                    <a class="nav-link" href="posts.php">View Posts</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Contacts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <nav class="sb-sidenav-menu-nested nav">
                        
                        <a class="nav-link" href="contacts.php">View Contacts</a>
                    </nav>

                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts</a
                    ><a class="nav-link" href="tables.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables</a
                    >
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>