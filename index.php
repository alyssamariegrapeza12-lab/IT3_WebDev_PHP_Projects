<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Junior Software Engineer</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f4f8;
            font-family: Arial, sans-serif;
        }

        .card {
            background: #ddc38c;
            width: 360px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }
        .profile-pic {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 15px;
    border: 3px solid #007bff;
}
        .bio {
            font-style: italic;
            color: #ee1c00;
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background: #76c7db;
            margin: 6px 0;
            padding: 8px;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .system-info {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>

<div class="card">
    <h1>Junior Software Engineer</h1>
    <img src="profile.jpg" alt="profile photo" class="profile-pic">
    <p><strong>Name:</strong> Alyssa Marie P. Grapeza</p>
    <p class="bio">" BSIT- 3B INTP"</p>

    <h3>Current Tech Stack</h3>
    <ul>
        <li>HTML5 & CSS3</li>
        <li>JavaScript (Basics)</li>
        <li>XAMPP Environment</li>
        
    </ul>

    <button id="initBtn">Initialize System</button>

    <div class="system-info">
        <h3>Server Status: Online</h3>
        <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
</div>

<script>
    document.getElementById("initBtn").addEventListener("click", function () {
        alert("Welcome to the team! System initialized successfully 🚀");
    });
</script>

</body>