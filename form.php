<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="min-vh-100 p-5">
    <main>
        <h1 class="mb-5">Find your hotel</h1>
        <form action="hotel.php" method="GET">
            <h5>Filters</h5>
            <div class="d-flex align-items-center gap-2 py-1">
                <label for="parking">Parking:</label>
                <input type="checkbox" name="parking" id="parking">
            </div>
            <div class="d-flex align-items-center gap-2 py-1">
                <label for="vote">Vote:</label>
                <input type="checkbox" name="vote" id="vote">
            </div>
            <button class="btn btn-success mt-3" type="submit">Find Hotel</button>
        </form>
    </main>
</body>
</html>