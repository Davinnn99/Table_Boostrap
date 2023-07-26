<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>RANKING XI RPL</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light" id="navbar">
        <div class="container">
            <div class="row">
                <div class="col position-absoulute pt-3">
                    <a class="navbar-brand">NILAI KELAS XI RPL</a>
                </div> 
                <div class="col-5 position-absoulute pt-3">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <div class="col position-absoulute pt-3">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <hr>
                <h3 class="text-center text-success">Input Data</h3>
                <hr>
                <form method="POST" action=" ">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" name="nama" class="form-control" placeholder="enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="nilai">Nilai</label>
                        <input id="nilai" type="number" name="nilai" class="form-control" placeholder="enter your score ">
                    </div>
                    <button class="btn btn-success" type="submit">KIRIM</button>
                </form>
            </div>
            <div class="col-md-8">
                <hr>
                <h3 class="text-center text-success">Data Ranking</h3>
                <hr>
                <table class="table table-striped table-border"> 
                    <thead class="table-success text-center">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['scores'] ?></td>
                        </tr>  
                        <?php endforeach ?> 
                    </tbody>
                </table>
            </div>   
        </div>
    </div> 
    
</body>
</html>