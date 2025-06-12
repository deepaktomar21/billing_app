<div class="container-fluid position-relative p-0 vh-100" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm"
        style="background-color: #ffffff; z-index: 1030;">
        <!-- Logo -->
        <style>
            .logo {
                font-size: 24px;
                font-weight: 700;
            }

            .logo span {
                color: orange;
            }
        </style>
        <a href="#home" class="navbar-brand p-0">
            <h1 class="logo m-0 text-dark">my<span>Billing</span>App</h1>
        </a>

        <!-- Divider -->
        <div class="vr mx-3 d-none d-lg-block" style="height: 40px; width: 1px; background-color: #000000;"></div>

        <!-- Toggle for mobile -->
        <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- LEFT: Nav links -->
            <ul class="navbar-nav me-auto py-0">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">Features</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark" href="#">Customised Invoices</a></li>
                        <li><a class="dropdown-item text-dark" href="#">All-in-one Billing</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Inventory Management</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Business Management</a></li>
                        <li><a class="dropdown-item text-dark" href="#">e-Invoicing & e-Way Billing</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Online Marketing</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Bonus Features</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#pricing" class="nav-link text-dark">Pricing</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">Knowledge
                        Center</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark" href="#">Blog</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Services</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Knowledge Base</a></li>
                    </ul>
                </li>
            </ul>

            <!-- RIGHT: Login + Buttons -->
            <div class="d-flex align-items-center gap-3">
                <a href="#login" class="nav-link text-dark">Login</a>
                <a href="#demo" class="btn btn-outline-secondary rounded-pill px-3 text-dark btn-no-hover">Book Free
                    Demo</a>
                <a href="#invoice"
                    class="btn btn-outline-secondary rounded-pill px-3 bg-dark text-white btn-no-hover">Create Free
                    Invoices</a>
            </div>
        </div>
    </nav>





    <div class="container-fluid bg-primary hero-header vh-100">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-dark mb-4 animated slideInDown">Best Billing & Invoicing <br> Software in India</h1>
                    <h5 class="text-dark pb-3 animated slideInDown">
                        <span style="color: #6200ff;">Join over 1 Crore Indian Small Businesses</span> who prefer
                        myBillingApp Invoicing Software for their GST Billing, Invoicing, e-Invoicing and e-Way Billing
                        needs.
                    </h5>
                    <br>
                    <div class="d-flex flex-wrap gap-3 mt-3">
                        <a href="#invoice"
                            class="btn btn-outline-secondary rounded-pill px-5 py-2 text-white fw-bold shadow-none"
                            style="min-width: 200px; border-width: 2px; background-color: #000000;">
                            Create Free Invoices
                        </a>
                        <a href="#demo"
                            class="btn btn-outline-secondary rounded-pill px-5 py-2 text-dark fw-bold shadow-none"
                            style="min-width: 200px; border-width: 2px;">
                            Book Free Demo
                        </a>
                    </div>



                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img class="img-fluid rounded animated zoomIn" src="{{ asset('frontend/img/7759211.jpg') }}"
                        alt="" style="max-height: 500px;">
                </div>

            </div>
        </div>
    </div>
</div>
