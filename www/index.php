<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <title>PHP / SQL Demo</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap');

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #212134;
      color: white;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      width: 100%;
      height: 100vh;
      font-size: 2rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    tr {
      border-bottom: 1px solid;
    }

    tbody tr:last-child {
      border-bottom: none;
    }

    td,
    th {
      padding: 0.5em 0;
    }

    .header {
      margin-bottom: 20px;
    }

    .center {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 100%;
      max-width: 50rem;
    }
  </style>
</head>

<body class="center">
  <div class="container">
    <h1 class="header">PHP / SQL Demo</h1>

    <div>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Points</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = mysqli_connect('db', 'user', 'root', "db");
          $result = mysqli_query($conn, 'SELECT * From person');

          while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr>';
            foreach ($value as $element) {
              echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
          }

          $result->close();
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>