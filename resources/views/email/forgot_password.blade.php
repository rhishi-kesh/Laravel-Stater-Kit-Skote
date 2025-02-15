<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            border: 1px solid #ddd;
        }

        h2 {
            color: #333;
        }

        .code {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin: 20px 0;
        }

        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hello {{ $user->name }},</h2>

        <p>We received a request to reset the password for your account.</p>

        <p>To proceed, please use the following OTP code:</p>

        <div class="code">{{ $code }}</div>

        <p>This OTP code is valid for 1 minutes. For security reasons, please do not share this code with anyone.</p>

        <p>If you did not request a password reset, please ignore this email. If you need further assistance, contact
            our support team.</p>

        <div class="footer">
            <p>Best regards,<br>
                [Company_Name]<br>
                [Contact_Information]
            </p>
        </div>
    </div>
</body>

</html>
