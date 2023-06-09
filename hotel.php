<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="min-vh-100 p-5">
    <?php

    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    $hotels_filtered = [];


    foreach ($hotels as $hotel) {
        if (isset($_GET['parking']) && isset($_GET['vote'])) {
            if ($_GET['parking'] == 'on' && $hotel['parking'] == false) {
                continue;
            };
            if ($hotel['vote'] < $_GET['vote']) {
                continue;
            };
        }
        $hotels_filtered[] = $hotel;
    }

    ?>
    <main class="d-flex flex-column gap-5">
        <div>
            <h1 class="mb-5">Find your hotel</h1>
            <form action="hotel.php" method="GET">
                <h5>Filters</h5>
                <div class="d-flex align-items-center gap-2 py-1">
                    <label for="parking">Parking:</label>
                    <input class="form-check-input" type="checkbox" name="parking" id="parking">
                </div>
                <div class="d-flex align-items-center gap-2 py-1">
                    <label for="vote">Vote:</label>
                    <input class="form-control w-auto" type="number" name="vote" id="vote" min="0" max=5>
                </div>
                <button class="btn btn-warning mt-3" type="reset">Reset</button>
                <button class="btn btn-success mt-3" type="submit">Find Hotel</button>
            </form>
        </div>
        <div>
            <table class="table table-light table-striped border border-3">
                <thead>
                    <tr>
                        <?php foreach ($hotels[0] as $key => $value) { ?>
                            <th scope='col'><?php echo $key;
                                        } ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($hotels_filtered as $hotel) {
                        echo "<tr>";
                        foreach ($hotel as $key => $value) {
                            $value === false && $value = '&cross;';
                            $value === true && $value = '&check;';
                            echo "<td> $value </td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
        </div>


        <?php
        // var_dump($_GET['parking']);
        // var_dump($_GET['vote']);
        ?>


        </table>
    </main>
</body>

</html>