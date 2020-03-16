<include href="views/header.html">

    <body class="newBody">

    <!-- Navigation bar -->
    <include href="views/navbar.html">

    <div class="form-group m-5">
        <h3 class="mb-2">Summary</h3>
        <hr>
        <br>
        <?php
        //Connect to db
        require ('/controller/connect.php');

        //Define the query
        $sql = 'SELECT s_id, fname, lname, phone, email, type, hours, location, hear, info
                FROM schedule';

        //Send the query to the database
        $result = mysqli_query($cnxn, $sql);

        //var_dump();
        ?>

        <table id="member-table" class="display">
            <thead>
            <tr>
                <th>Member id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type</th>
                <th>Hours</th>
                <th>Location</th>
                <th>How do you hear?</th>
                <th>Additional info</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //Print the results
            while ($row = mysqli_fetch_assoc($result)) {
                $member_id = $row['s_id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $phone = $row['phone'];
                $email = $row['email'];
                $type = $row['type'];
                $hours = $row['hours'];
                $location = $row['location'];
                $hear = $row['hear'];
                $info = $row['info'];

                echo "<tr>
                                      <td>$member_id</td>
                                      <td>$fname</td>
                                      <td>$lname</td>
                                      <td>$phone</td>
                                      <td>$email</td>
                                      <td>$type</td>
                                      <td>$hours</td>
                                      <td>$location</td>
                                      <td>$hear</td>
                                      <td>$info</td>
                                  </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="scripts/guestbook.js"></script>
    <script>
        $('#member-table').DataTable();
    </script>
    </body>