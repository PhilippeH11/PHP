<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>JSON et PHP</title>
</head>
<body>
    <?php 
    $url='data.json';
    $data=file_get_contents($url);
    $character=json_decode($data,true)
    ?>
<table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Skill</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($character as $value): ?>
    </<tr>
        <<td><?php echo $value['name']?></td>
        <<td><?php echo $value['skill']?></td>
    </tr>
<?php endforeach ?>
</<tbody>
    </<table>

 
</body>
</html>