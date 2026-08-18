<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0d0d12;
            color: #ffffff;
            min-height: 100vh;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 60px 30px;
        }

        .badge {
            display: inline-block;
            background: #251525;
            color: #ff5ca8;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }

        .left {
            flex: 1;
        }

        h1 {
            font-size: 55px;
            line-height: 1.05;
            margin-bottom: 20px;
        }

        h1 span {
            color: #ff5ca8;
        }

        .description {
            color: #aaa;
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .buttons a {
            text-decoration: none;
            display: inline-block;
            padding: 13px 22px;
            border-radius: 8px;
            margin-right: 10px;
            font-weight: bold;
        }

        .primary {
            background: #ff5ca8;
            color: #ffffff;
        }

        .secondary {
            border: 1px solid #444;
            color: #ffffff;
        }

        .card {
            width: 360px;
            background: #17171f;
            border: 1px solid #292934;
            border-radius: 15px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .card h2 {
            margin-bottom: 20px;
            color: #ffffff;
        }

        .info {
            margin-bottom: 16px;
        }

        .label {
            color: #777;
            font-size: 11px;
            text-transform: uppercase;
        }

        .value {
            margin-top: 5px;
            color: #eee;
        }

        footer {
            text-align: center;
            color: #555;
            margin-top: 70px;
            font-size: 12px;
        }

        @media(max-width: 750px) {
            .content {
                flex-direction: column;
                align-items: stretch;
            }

            .card {
                width: 100%;
            }

            h1 {
                font-size: 40px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="badge">● Student Mode: ON</div>

    <div class="content">

        <div class="left">
            <h1>
                Welcome to my<br>
                <span>Student Page.</span>
            </h1>

            <p class="description">
                Welcome to my student profile. Here you can view
                my basic information and student details.
            </p>

            <div class="buttons">
                <a href="/student/profile" class="primary">
                    View My Profile →
                </a>

                <a href="#" class="secondary">
                    Contact Me
                </a>
            </div>
        </div>

        <div class="card">
            <h2>Basic Info</h2>

            <div class="info">
                <div class="label">Student ID</div>
                <div class="value">2024-00067</div>
            </div>

            <div class="info">
                <div class="label">Name</div>
                <div class="value">Riza C. Anilao</div>
            </div>

            <div class="info">
                <div class="label">Course</div>
                <div class="value">BS Information Technology</div>
            </div>

            <div class="info">
                <div class="label">Year Level</div>
                <div class="value">3rd Year</div>
            </div>

            <div class="info">
                <div class="label">Section</div>
                <div class="value">3F2</div>
            </div>
        </div>

    </div>

    <footer>
        © 2026 Riza C. Anilao — Student Profile
    </footer>

</div>

</body>
</html>