<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/register.css">
    <link rel="shortcut icon" href="/assets/images/freelance.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="register-card">
            <div class="logo">
                <h1>YouGigs</h1>
                <p>Connect with top talent worldwide</p>
            </div>

            <form action="/auth/register" method="POST">
                <!-- {% if error %}
                <div class="error">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                        <path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zM7 4v6h2V4H7zm0 8v-2h2v2H7z" />
                    </svg>
                    {{ error }}
                </div>
                {% endif %} -->

                <div class="form-group">
                    <label for="firstname">Full Name</label>
                    <input
                        type="text"
                        id="firstname"
                        name="firstname"
                        placeholder="Enter your first name"
                        required>
                </div>

                <div class="form-group">
                    <label for="lastname">Full Name</label>
                    <input
                        type="text"
                        id="lastname"
                        name="lastname"
                        placeholder="Enter your last name"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a strong password"
                        required>
                </div>

                <div class="form-group">
                    <label for="role_name">Account Type</label>
                    <select id="role_name" name="role_name" required>
                        <option value="" disabled selected>Select your account type</option>
                        <option value="freelance">Freelance - Find Work</option>
                        <option value="client">Client - Hire Talent</option>
                    </select>
                </div>

                <button type="submit">Create Your Account</button>
            </form>

            <div class="login-link">
                Already have an account?<a href="/login">Sign In</a>
            </div>
        </div>
    </div>
</body>

</html>