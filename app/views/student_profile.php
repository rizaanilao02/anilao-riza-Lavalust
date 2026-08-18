<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0d0d12;
            color: white;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 55px 25px;
        }

        .small-title {
            color: #ff5ca8;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 30px;
        }

        .profile-card {
            background: #17171f;
            border: 1px solid #292934;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.35);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 30px;
            border-bottom: 1px solid #292934;
        }

        .avatar {
            width: 65px;
            height: 65px;
            background: #ff5ca8;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: bold;
        }

        .profile-header h2 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .profile-header p {
            color: #888;
            font-size: 13px;
        }

        .status {
            margin-left: auto;
            color: #57d68d;
            font-size: 11px;
            border: 1px solid #285c42;
            padding: 6px 10px;
            border-radius: 20px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 30px;
        }

        .detail-box {
            background: #101015;
            border: 1px solid #24242d;
            padding: 18px;
            border-radius: 10px;
        }

        .label {
            color: #777;
            font-size: 10px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .value {
            color: #eee;
            font-size: 15px;
        }

        .connect {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #292934;
        }

        .connect h3 {
            margin-bottom: 15px;
        }

        .connect p {
            color: #aaa;
            margin: 8px 0;
        }

        .back {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 20px;
            background: #ff5ca8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        @media(max-width: 650px) {
            .details {
                grid-template-columns: 1fr;
            }

            .profile-header {
                flex-wrap: wrap;
            }

            .status {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="small-title">MY DIGITAL IDENTITY</div>

    <h1>Student Profile ✦</h1>

    <div class="profile-card">

        <div class="profile-header">

            <div class="avatar">RA</div>

            <div>
                <h2>Riza C. Anilao</h2>
                <p>BS Information Technology</p>
            </div>

            <div class="status">● STUDENT</div>

        </div>

        <div class="details">

            <div class="detail-box">
                <div class="label">Student ID</div>
                <div class="value">2024-00067</div>
            </div>

            <div class="detail-box">
                <div class="label">Year Level</div>
                <div class="value">3rd Year</div>
            </div>

            <div class="detail-box">
                <div class="label">Section</div>
                <div class="value">3F2</div>
            </div>

            <div class="detail-box">
                <div class="label">Email</div>
                <div class="value">riza.anilao17@email.com</div>
            </div>

        </div>

        <div class="connect">
            <h3>Let's Connect ♡</h3>
            <p>📧 riza.anilao17@email.com</p>
            <p>📱 Student Contact</p>
            <p>📷 Instagram</p>
            <p>📘 Facebook</p>
        </div>

        <a href="/student" class="back">
            ← Back to Home
        </a>

    </div>

</div>

</body>
</html>