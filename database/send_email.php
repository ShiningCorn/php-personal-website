<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $sql = "INSERT INTO my_email (name, email, message)
          VALUES ('" . $_POST['name'] . "','"
                     . $_POST['email'] . "','"
                     . $_POST['message'] . "')";

  $results = mysqli_query($conn, $sql);

  if ($results === false) {

      echo mysqli_error($conn);

  } else {

      $id = mysqli_insert_id($conn);
      echo "We got your message!  ID: $id";

  }

}