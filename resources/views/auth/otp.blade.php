<!-- resources/views/otp.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .otp-input {
            width: 40px;
            height: 40px;
            margin: 5px;
            font-size: 18px;
            text-align: center;
            border: 2px solid #fff;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        .otp-input:focus {
            border-color: #ffd700;
            outline: none;
        }
        .resend {
            color: #ffd700;
            text-decoration: none;
        }
        .resend:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Verification code</h2>
        <p>We have sent you a verification code to your email address. Please enter the code to continue.</p>
        <form action="/validate-otp" method="POST">
            @csrf
            <input type="text" name="otp1" maxlength="1" class="otp-input" required>
            <input type="text" name="otp2" maxlength="1" class="otp-input" required>
            <input type="text" name="otp3" maxlength="1" class="otp-input" required>
            <input type="text" name="otp4" maxlength="1" class="otp-input" required>
            <br><br>
            <button type="submit">Submit</button>
        </form>
        <p>Didn't receive OTP? <a href="#" class="resend">Resend here</a></p>
    </div>
    <script>
        const inputs = document.querySelectorAll('.otp-input');
        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });
        });
    </script>
</body>
</html>
