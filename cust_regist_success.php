<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>Registration Successful | St.Lawrence-Cafeteria</title>
    <style>
        .success-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .success-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #28a745, #20c997);
        }
        
        .success-icon {
            color: #28a745;
            font-size: 5rem;
            margin-bottom: 1.5rem;
            animation: pulse 1.5s ease-in-out;
        }
        
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffc107;
            animation: fall 3s ease-in-out infinite;
            opacity: 0.7;
        }
        
        .confetti:nth-child(2n) {
            background-color: #fd7e14;
            width: 7px;
            height: 7px;
            animation-delay: 0.4s;
            left: 15%;
        }
        
        .confetti:nth-child(3n) {
            background-color: #20c997;
            width: 12px;
            height: 12px;
            animation-delay: 0.8s;
            left: 30%;
        }
        
        .confetti:nth-child(4n) {
            background-color: #e83e8c;
            width: 8px;
            height: 8px;
            animation-delay: 1.2s;
            left: 75%;
        }
        
        .confetti:nth-child(5n) {
            background-color: #6f42c1;
            width: 10px;
            height: 10px;
            animation-delay: 1.6s;
            left: 60%;
        }
        
        .confetti:nth-child(6n) {
            background-color: #0dcaf0;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            left: 85%;
        }
        
        @keyframes fall {
            0% {
                top: -50px;
                transform: rotate(0deg);
            }
            100% {
                top: 100%;
                transform: rotate(360deg);
            }
        }
        
        @keyframes pulse {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .success-title {
            font-size: 2rem;
            font-weight: 600;
            color: #28a745;
            margin-bottom: 1rem;
        }
        
        .success-message {
            font-size: 1.1rem;
            color: #4a4a4a;
            margin-bottom: 2rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        
        .btn-home {
            padding: 0.6rem 2rem;
            font-size: 1.1rem;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(40, 167, 69, 0.2);
            transition: all 0.3s ease;
        }
        
        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(40, 167, 69, 0.3);
        }
        
        .btn-menu {
            padding: 0.6rem 2rem;
            font-size: 1.1rem;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            background-color: #6c757d;
            color: white;
            box-shadow: 0 4px 8px rgba(108, 117, 125, 0.2);
            transition: all 0.3s ease;
        }
        
        .btn-menu:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(108, 117, 125, 0.3);
            background-color: #5a6268;
            color: white;
        }
        
        .badge-container {
            margin: 2rem 0;
            position: relative;
        }
        
        .badge-new {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            border-radius: 30px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <header class="navbar navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="img/Logo.png" width="80" class="me-2" alt="st. lawrence Logo">
            </a>
        </div>
    </header>
    
    <div class="container mt-5 pt-5 flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="success-container text-center position-relative">
            <!-- Animated confetti elements -->
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            
            <i class="bi bi-check-circle-fill success-icon"></i>
            
            <h2 class="success-title">Registration Successful!</h2>
            
            <div class="badge-container">
                <span class="badge-new">
                    <i class="bi bi-person-check me-2"></i>New Member
                </span>
            </div>
            
            <p class="success-message">
                Welcome to St.Lawrence-Cafeteria! Your account has been successfully created.
                <br>Start exploring our delicious menu and enjoy your food journey with us.
            </p>
            
            <div class="action-buttons">
                <a class="btn btn-success btn-home" href="index.php">
                    <i class="bi bi-house-door me-2"></i>Home
                </a>
                <a class="btn btn-menu" href="shop_list.php">
                    <i class="bi bi-menu-button-wide me-2"></i>Menu
                </a>
            </div>
        </div>
    </div>

    <?php include('footer.php')?>
</body>

</html>