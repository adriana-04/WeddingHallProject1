<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card" style="width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Hall Registration</h3>

            <form action="{{ route('hall.register.submit') }}" method="POST" onsubmit="showLoadingButton(this)">
                @csrf

                <!-- Hall Name -->
                <div class="form-floating mb-3">
                    <input type="text" name="hall_name" class="form-control" id="hallName" placeholder="Grand Royal Hall" required>
                    <label for="hallName">Hall Name</label>
                </div>

                <!-- Location -->
                <div class="form-floating mb-3">
                    <input type="text" name="location" class="form-control" id="hallLocation" placeholder="Kuala Lumpur" required>
                    <label for="hallLocation">Location</label>
                </div>

                <!-- Submit -->
                <button id="hallRegisterBtn" type="submit" class="btn btn-primary w-100">
                    Register
                </button>
            </form>
        </div>
    </div>

    <script>
        function showLoadingButton(form) {
            const btn = document.getElementById("hallRegisterBtn");
            btn.disabled = true;
            btn.innerHTML = `
                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                <span role="status">Loading...</span>
            `;
        }
    </script>

</body>
</html>
