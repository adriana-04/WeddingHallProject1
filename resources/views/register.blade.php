<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card" style="width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Registration Account</h3>
             
            <form action="{{ route('register.submit') }}" method="POST">
    @csrf

    <!-- Username -->
    <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="username" placeholder="johndoe" required>
        <label for="username">Username</label>
    </div>

    <!-- Email -->
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
    </div>

    <!-- Password -->
    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
    </div>

    <!-- Submit -->
    <button id="registerBtn" type="submit" class="btn btn-primary w-100">
        Register
    </button>
</form>

        </div>
    </div>

    <script>
        function showLoadingButton(form) {
            const btn = document.getElementById("registerBtn");
            btn.disabled = true;
            btn.innerHTML = `
                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                <span role="status">Loading...</span>
            `;
        }
    </script>

</body>
</html>
