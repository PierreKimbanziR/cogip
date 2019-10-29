<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange darken-1">
    <a class="navbar-brand" href="/cogip/home">
        <img src="img/cogip-logo.png" height="40" alt="mdb logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active" href="/cogip/home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cogip/invoices">Invoices</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Companies
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/cogip/companies">All</a>
                    <a class="dropdown-item" href="/cogip/companies">Clients</a>
                    <a class="dropdown-item" href="/cogip/companies">Providers</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cogip/contacts">Contacts</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Admin
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">New Contact</a>
                    <a class="dropdown-item" href="#">New Invoice</a>
                    <a class="dropdown-item" href="#">New Company</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">My Account</a>
                    <a class="dropdown-item" href="/cogip/auth/logout">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->