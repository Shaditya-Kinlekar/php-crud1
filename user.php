<?php
include 'connect.php';

if (isset($_POST['submit'])) {
  $teacher_names = array();
  for ($i = 1; $i <= 10; $i++) {
    $teacher_names[] = $_POST['teacher' . $i];
  }

  // bubble sort alogorithm to sort names in ascending order
  for ($i = 0; $i < count($teacher_names); $i++) {
    for ($j = 0; $j < count($teacher_names) - $i - 1; $j++) {
      if (strcmp($teacher_names[$j], $teacher_names[$j + 1]) > 0) {
        $temp = $teacher_names[$j];
        $teacher_names[$j] = $teacher_names[$j + 1];
        $teacher_names[$j + 1] = $temp;
      }
    }
  }

  $sql = "insert into `crud` (name) values ";
  foreach ($teacher_names as $name) {
    $sql .= "('" . $name . "'),";
  }

  $sql = rtrim($sql, ",");

  $result = mysqli_query($con, $sql);

  if ($result) {
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Crud Operations</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group mb-3">
        <label>Teacher 1: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher1" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 2: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher2" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 3: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher3" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 4: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher4" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 5: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher5" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 6: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher6" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 7: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher7" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 8: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher8" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 9: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher9" autocomplete="off">
      </div>
      <div class="form-group mb-3">
        <label>Teacher 10: </label>
        <input type="text" class="form-control" placeholder="Enter your name" name="teacher10" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>