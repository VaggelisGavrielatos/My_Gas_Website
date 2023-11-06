<!DOCTYPE html>
<html lang="enl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../pictures/gas-logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="manage.js" defer></script>
    <title>Gass Appliance Solutions</title>
    <style>
        .main {
            overflow: hidden;
        }
        .main-container{
            overflow: hidden;
            height:100%;
            margin-top: 10px;
            max-width: 100%;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 15px;

        }
        .tab-container {
            height:100%;
            max-width: 100%;
            margin-top:20px;
            border:#000000 2px solid;
            background-color: #ffffff;
            overflow: hidden;
        }
        /*tab style start*/
        .tab {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border: 1 solid #ccc;
            border-bottom: #000000 2px solid;
            background-color: #f1f1f1;
            height: 63px;
        }
        .underline {
            text-decoration: underline #36ecec;
            color: #36ecec;
            font-size: 2vw;
        }
        form {
        margin:  20px;
        }
        label {
            font-size: 2vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 10px;    
        }
        input[type="text"] {
            text-align: center;
            width: 200px;
            height: 50px;
            margin-top: 20px;
            font-size: 60%;
        }
        button {
            margin-top: 10px;
        }
        #result {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            font-size: 2vw;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #336699;
            color: #ffffff;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn:hover {
            background-color: #2abdbd;
            transform: translateY(-3px);
        }
        .requests-table {
            border-collapse: collapse;
            width: 100%;
        }
        .requests-table th,
        .requests-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .requests-table th {
            background-color: #f2f2f2;
        }
        .requests-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .requests-table tbody tr:hover {
            background-color: #e9e9e9;
        }
        .requests-table td.message {
            max-width: 200px;
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header_content">
            <a href="../Interface 1 (main)/main.php">
                <img id="logo" src="../pictures/gas-logo.jpg" alt="Gas Appliance Solutions">
            </a>    

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link" href="../Interface 1 (main)/main.php">Αρχική Σελίδα</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Interface 2 (profile)/profile.html">Προφίλ Εταιρίας</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Interface 3 (cost)/cost.html">Υπολογισμός  Κόστους  Φυσικού  Αερίου</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Interface 4 (contact)/contact.php">Επικοινωνία</a>
                    </li>
                    <li class="nav-item">
                        <a class="now nav-link" href="../Interface 5 (manage)/manage.php">Σελίδα Διαχείρισης</a>
                    </li>
                </ul>
            </nav>

            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>
    
    <main class="main">
        <div class="main-container">
            <div class="tab-container">
                <div class="tab">
                    <h1>Σελίδα σύνδεσης διαχειριστών.</h1>
                </div>
                <form id="managerForm" action="manage.php" method="POST" >
                    <label>
                        Username:
                        <input type="text" id="username" name="username" required>
                    </label>
                    <label>
                        Password:
                        <input type="text" id="password" name="password" required>
                    </label>
                    <button class="btn" type="submit">Σύνδεση Διαχειριστή</button>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //This ensures that the code runs only when the form is submitted via the POST method.
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        //It retrieves the form data using $_POST superglobal and assigns the values to respective variables
                        //These variables hold the user-submitted data from the form.

                        if ($username == 'admin' && $password == 'Root123') {// Validate the username and password
                            displayRequestsTable();
                        } else { //If the credentials are not correct, an error message is displayed
                            echo '<script>alert("Λυπούμαστε, δεν είστε διαχειριστής της διαδικτυακής εφαρμογής.")</script>';
                        }
                    }

                    function displayRequestsTable() {
                        //a new mysqli object is created to establish a connection to the MySQL database.
                        $conn = new mysqli('localhost', 'root', '', 'gasdb');
                      
                        // checks if the connection to the database was successful 
                        if ($conn->connect_error) {
                          die('Απέτυχε η σύνδεση στη βάση δεδομένων: ' . $conn->connect_error); //If there was an error, display an error message and terminates the script 
                        } else {
                            // constructs an SQL query to select all rows from the 'requests' table. 
                            $sql = 'SELECT * FROM requests';
                            $result = $conn->query($sql);
                            // the result of the query is stored in the $result variable.
                        
                            if ($result->num_rows > 0) {
                            // If there are rows, it means there are requests to be displayed.

                            // generate an HTML table to display the requests. 
                            echo '<table class="requests-table">';
                            echo '<tr><th>Όνομα</th><th>Τηλέφωνο</th><th>Email</th><th>Τμήμα</th><th>Θέμα</th><th>Μήνυμα</th></tr>';
                        
                            while ($row = $result->fetch_assoc()) { // the code fetches each row from the 'requests' table using the fetch_assoc() method.
                                echo '<tr>
                                    <td>' . $row['Όνομα'] . '</td>
                                    <td>' . $row['Τηλέφωνο'] . '</td>
                                    <td>' . $row['Email'] . '</td>
                                    <td>' . $row['Τμήμα'] . '</td>
                                    <td>' . $row['Θέμα'] . '</td>
                                    <td class="message">' . $row['Μήνυμα'] . '</td>
                                    </tr>';
                            }
                        
                            echo '</table>';
                            } else {
                            // If there are no rows, display a message.
                            echo 'Δεν υπάρχουν αιτήματα.';
                            }
                        
                            // the connection to the database is closed 
                            $conn->close();
                        }
                    }
                ?>  
            </div>
        </div>
    </main>

    <footer class="footer">
        <div>
            <p>Call us at:
            <a style="text-decoration: underline;" href="tel:+302102103330">+302102103330</a></p>
            <p><b>Contact us with e-mail:</b>
                <a style="text-decoration: underline;" href="mailto:company@gmail.com">gasappliancesolutions@gmail.com</a></p>
            <p><b>Send us fax:</b>
            <a style="text-decoration: underline;" href="tel:+44-208-1234567">+44-208-1234567</a></p>
            <p><a href="https://www.google.com/maps/place/University+of+Piraeus/@37.9401134,23.6509969,17z/data=!4m6!3m5!1s0x14a1bbe5bb8515a1:0x3e0dce8e58812705!8m2!3d37.9415137!4d23.6528681!16zL20vMGQwOTA0">
            Company Address here</a></p>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of pireaus&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>   
    </footer>

</body>
</html>