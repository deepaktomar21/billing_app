<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBillingApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #ffffff;
        color: #333;
    }

    header {
        background: #fff;
        padding: 20px 50px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 100;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: 700;
    }

    .logo span {
        color: orange;
    }

    .nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .nav ul li {
        position: relative;
    }

    .nav ul li a {
        text-decoration: none;
        color: #000;
        font-weight: 500;
        padding: 8px 12px;
        display: block;
    }

    .nav ul li ul {
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: none;
        min-width: 160px;
        flex-direction: column;
    }

    .nav ul li:hover ul {
        display: flex;
        flex-direction: column;
    }

    .nav ul li ul li a {
        padding: 10px;
        white-space: nowrap;
        font-weight: 400;
    }

    .nav-buttons a {
        margin-left: 10px;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: 600;
    }

    .link-btn {
        border: none;
        color: #000;
        background: none;
    }

    .main-btn {
        background: #000;
        color: #fff;
    }

    .hero {
        background: #4f3cc9;
        color: white;
        text-align: center;
        padding: 100px 20px 60px;
        background-size: cover;
        background-position: center;
    }

    .hero h1 {
        font-size: 42px;
        margin-bottom: 30px;
    }

    .hero-buttons a {
        text-decoration: none;
        padding: 12px 24px;
        margin: 0 10px;
        font-weight: 600;
        border-radius: 30px;
        display: inline-block;
    }

    .white {
        background-color: white;
        color: #4f3cc9;
    }

    .border-btn {
        border: 2px solid white;
        color: white;
    }

    .plan-text {
        margin-top: 20px;
        font-size: 16px;
    }
</style>

<header>
    <div class="nav">
        <div class="logo">my<span>Billing</span>App</div>
        <ul>
            <li>
                <a href="#">Pricing</a>
                <ul>
                    <li><a href="#">Plans</a></li>
                    <li><a href="#">Enterprise</a></li>
                    <li><a href="#">Custom Quote</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Features</a>
                <ul>
                    <li><a href="#">Invoicing</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Knowledge Center</a>
                <ul>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </li>
        </ul>
        <div class="nav-buttons">
            <a href="#" class="link-btn">Login</a>
            <a href="#" class="main-btn">Book Free Demo</a>
            <a href="#" class="main-btn">Create Invoice</a>
        </div>
    </div>
</header>

   

    <section class="hero">
        <h1>India's Best Invoicing Software</h1>
        <div class="hero-buttons">
            <a href="#" class="main-btn white">Start Free Billing</a>
            <a href="#" class="border-btn">Book Free Demo</a>
        </div>
        <p class="plan-text">Plans starting from ₹<strong>34</strong>/month</p>
    </section>

</body>

</html>
