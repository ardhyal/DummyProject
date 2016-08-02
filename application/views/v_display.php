<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <?php for ($i = 0; $i < count($header); $i++): ?>
                        <th><?php echo $header[1]['A'] ?></th>
                        <th><?php echo $header[1]['B'] ?></th>
                        <th><?php echo $header[1]['C'] ?></th>
                        <th><?php echo $header[1]['D'] ?></th>
                        <th><?php echo $header[1]['E'] ?></th>
                    <?php endfor; ?>
                </tr>
            <tbody>
                <?php for ($i = 2; $i < count($values) + 2; $i++): ?>
                    <tr>
                        <td><?php echo $values[$i]['A'] ?></td>
                        <td><?php echo $values[$i]['B'] ?></td>
                        <td><?php echo $values[$i]['C'] ?></td>
                        <td><?php echo $values[$i]['D'] ?></td>
                        <td><?php echo $values[$i]['E'] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>

            </thead>
        </table>
    </div>
</body>
</html>