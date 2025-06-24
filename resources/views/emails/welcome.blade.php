<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Email Verification</title>
  </head>
  <body style="margin:0; padding:0; background-color:#f6f9fc; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div style="max-width:600px; margin:40px auto; background-color:#ffffff; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.05); overflow:hidden;">
      
      <!-- Header -->
      <div style="background-color:#083F91; color:#ffffff; padding:30px 20px;">
        <h1 style="margin:0; font-size:24px;">Welcome to AstrooGrid</h1>
      </div>

      <!-- Content -->
      <div style="padding:30px 20px; color:#333333;">
        <p style="font-size:16px;">Hi <strong>{{ ucfirst($user['name']) }}</strong>,</p>
        <p style="font-size:16px; margin-top:10px;">Thanks for signing up! Please use the verification code below to complete your email verification.</p>
        
        <!-- Code Box -->
        <div style="background-color:#f1f3f5; color:#BEA30E; font-size:32px; font-weight:bold; padding:20px; border-radius:8px; margin:20px auto; display:inline-block; letter-spacing:4px;">
          {{ $user['code'] }}
        </div>

        <p style="font-size:14px; color:#555;">This code is valid for the next 10 minutes.<br />Please do not share it with anyone.</p>

        <!-- Button -->
        <a href="#" style="display:inline-block; margin-top:20px; padding:12px 24px; background-color:#083F91; color:#ffffff; border-radius:6px; text-decoration:none; font-weight:bold; font-size:14px;">
          Verify Now
        </a>
      </div>

      <!-- Footer -->
      <div style="background-color:#f6f9fc; line-height: 22px; padding:20px; text-align:center; font-size:12px; color:#999999;">
        If you didn’t request this, please ignore this email.<br />
        &copy; 2025 Agrid. All rights reserved.
      </div>
      
    </div>
    </body>
</html>
