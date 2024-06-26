<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Application</title>
</head>
<body>
<table style="width: 100%; max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; border-collapse: collapse;">
    <tr>
        <td style="padding: 20px; background-color: #f8f8f8; text-align: center;">
            <img src="{{ asset('path/to/your/logo.png') }}" alt="Your Logo" style="max-width: 150px; margin-bottom: 15px;">
            <h2 style="color: #333;">Welcome to Our Application!</h2>
            <p style="color: #666; font-size: 16px;">Dear {{ $user->name }},</p>
            <p style="color: #666; font-size: 16px;">Thank you for joining our community. Your account has been successfully created.</p>
            <p style="color: #666; font-size: 16px;">Here are your account details:</p>
            <ul style="list-style-type: none; padding: 0; margin: 15px 0;">
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Password:</strong> {{ $user->password }}</li>
            </ul>
            <p style="color: #666; font-size: 16px;">Please keep your password secure and do not share it with anyone.</p>
            <p style="color: #666; font-size: 16px;">If you have any questions or need assistance, feel free to <a href="{{ route('contact') }}" style="color: #007bff; text-decoration: none;">contact us</a>.</p>
            <p style="color: #666; font-size: 16px;">Best regards,<br>Your Application Team</p>
        </td>
    </tr>
    <tr>
        <td style="text-align: center; background-color: #007bff; padding: 10px;">
            <p style="color: #fff; margin: 0;">&copy; {{ date('Y') }} Your Application. All rights reserved.</p>
        </td>
    </tr>
</table>
</body>
</html>
