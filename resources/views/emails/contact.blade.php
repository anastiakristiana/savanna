<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <h2 style="color: #333333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">New Contact Form Submission from Savanna Sumatera's Website</h2>

    <table style="width: 100%;">
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Name:</strong>
                <span style="font-size: 16px;">{{ $data['name'] }}</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Email:</strong>
                <span style="font-size: 16px;">{{ $data['email'] }}</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Phone:</strong>
                <span style="font-size: 16px;">{{ $data['phone'] }}</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Date Visit:</strong>
                <span style="font-size: 16px;">{{ $data['datevisit'] }}</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Time Visit:</strong>
                <span style="font-size: 16px;">{{ $data['timevisit'] }}</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <strong style="color: #333333; font-size: 16px;">Message:</strong>
                <p style="font-size: 16px;">{{ $data['body'] }}</p>
            </td>
        </tr>
    </table>

    <p style="font-size: 14px; margin-top: 30px;">Email sent automatically from Savana Sumatera's website.</p>
    <a href="https://refineri.id/"><p style="font-size: 14px;">Powered by Refineri.</p></a>

</body>
</html>
