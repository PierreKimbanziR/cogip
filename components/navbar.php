<!--Navbar -->
<header class="text-center p-3">
    <img style="height:120px;" src="/cogip/static/img/cogip-logo2.png" alt="" srcset="">
</header>
<nav class="mb-1 navbar z-depth-2 scrolling-navbar sticky-top navbar-expand-lg navbar-dark grey darken-3 pb-0 pt-0">
    <a class="navbar-brand" href="/cogip/home">
        <img src="/cogip/static/img/cogip-logo3.png" height="40" alt="mdb logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($page_title == 'Home') ? 'active' : '' ?>">
                <a class="nav-link" href="/cogip/home">Home </a>
            </li>
            <li class="nav-item <?php echo ($page_title == 'Invoices') ? 'active' : '' ?>
">
                <a class="nav-link" href="/cogip/invoices">Invoices</a>
            </li>
            <li class="nav-item dropdown <?php echo ($page_title == 'Companies') ? 'active' : '' ?>
">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Companies
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/cogip/companies">All</a>
                    <a class="dropdown-item" href="/cogip/companies">Clients</a>
                    <a class="dropdown-item" href="/cogip/companies">Providers</a>
                </div>
            </li>
            <li class="nav-item <?php echo ($page_title == 'Contacts') ? 'active' : '' ?>">
                <a class="nav-link" href="/cogip/contacts">Contacts</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <?php if ($_SESSION['level'] == 3): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Admin
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/cogip/admin"><i class="fas fa-le fa-chart-line"></i> Dashboard</a>
                    <a class="dropdown-item" href="/cogip/contacts/create"><i class="fas fa-lg fa-user-circle"></i> New Contact</a>
                    <a class="dropdown-item" href="/cogip/invoices/create"><i class="fas fa-lg fa-file-invoice-dollar"></i> New Invoice</a>
                    <a class="dropdown-item" href="/cogip/companies/create"><i class="far fa-lg fa-building"></i> New Company</a>
                    <a class="dropdown-item" href="/cogip/admin/createUser"><i class="fas fa-lg fa-user-plus"></i> New User</a>
                </div>
            </li>
            <?php endif?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#"><i class="fas fa-lg fa-user-tie"></i> My Account</a>
                    <a class="dropdown-item" href="/cogip/auth/logout"><i class="fas fa-lg fa-sign-in-alt"></i> Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->