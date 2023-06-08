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

    ?>
    <main class="m-8">
        <h1 class="mb-5">Hotel</h1>
        <table class="table table-light table-striped border border-3">
            <thead>
                <tr>
                    <?php
                        foreach ($hotels[0] as $key => $value) {
                            echo "<th scope='col'>$key</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($hotels as $hotel) {
                        echo "<tr>";
                        foreach ($hotel as $key => $value) {
                            $value === false && $value = '&check;';
                            $value === true && $value = '&cross;';
                            echo "<td> $value </td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>



        </table>
    </main>
</body>
</html>