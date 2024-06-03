<?php
include 'db_config.php';

// Fetch data from the database
$sql = "SELECT id, first_name, last_name,  email_address, contact_no FROM registerations";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
   
    <style>
        .show-requests {
    width: 80%;
    min-height: 450px;
    margin: 20px auto;
}

/* table css */
.request-table {
    width: 100%;
    margin: 20px auto;
    border-collapse: collapse;
    text-align: center;
}
.request-table th, .request-table td {
    border: 1px solid #ddd;
    padding: 8px;
}
.request-table th {
    background-color: #f2f2f2;
    color: #333;
}
.request-table tr:nth-child(even) {
    background-color: #f9f9f9;
}
.request-table tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}
.request-table th, .request-table td {
    text-align: center;
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mynav">
        <div class="container-fluid">
            <img src="imgs/305645908_500657442063025_7187719797842487252_n.jpg" class="logo" alt="">
            <a class="navbar-brand mylogo" href="#">Standard <br>Group of Institute</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="homep.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutp.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="academic_achievements.html">Academic Achievement</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="admissionform.html">Admission Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="show-requests">
        <h1>Database Dashboard</h1>
        <table class="request-table">
            <tr>
                <th>Request ID</th>
                <th>Requester First Name</th>
                <th>Requester Last Name</th>
                <th>Requester Email Address</th>
                <th>Requester Phone</th>
            </tr>
            <?php
            include 'db_config.php';
            $sql = "SELECT id, first_name, last_name,  email_address, contact_no FROM registerations";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email_address']); ?></td>
                        <td><?php echo htmlspecialchars($row['contact_no']); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No requests found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>


<div>
<footer class="footer">
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">+92 335 1446822</a></li>
                        <li><a href="#">630 Umer Block, Allama Iqbal Town, Lahore</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="homep.html">Home</a></li>
                        <li><a href="aboutp.html">About Us</a></li>
                        <li><a href="academic achievements.html">Academic Achievement</a></li>
                        <li><a href="admissionform.html">Admission Form</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>

                    </div>
                </div>
            </div>

        </div>
        <p>Copyright ©2024 Standard Group of institutions.</p>

    </footer>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script>
</body>
</html>