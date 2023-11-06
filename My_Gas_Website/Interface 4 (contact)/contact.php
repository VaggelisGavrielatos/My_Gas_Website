<!DOCTYPE html>
<html lang="enl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../pictures/gas-logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"/>
    <script src="contact.js" defer></script>
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
        .tab button {
            background-color: inherit;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 20px;
            margin: 0 60px;
            transition: 0.3s;
            transition: transform .2s;
            font-size: large;
            display: grid;
            place-items: center;
        }
        /*zoom in hover*/
        .tab button:hover {
            background-color: #ddd;
            transform: scale(1.2);
        }
        /* styling underline on hover */
        .tab button:hover:after { 
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #36ecec;
        }
        .tab button.active {
        background-color: #ccc;
        color: #45b9b9;
        transition: 0.3s;
        transform: scale(1.5);
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
            width: 500px;
            height: 40px;
            margin-top: 20px;
            font-size: 60%;
        }
        #departments {
            text-align: center;
            width: 500px;
            height: 40px;
            font-size: 50%;
        }
        .notesheet {
            width: 500px;
            height: 300px;
            margin-top: 20px;
            font-size: 70%;
        }
        button {
            margin-top: 10px;
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
        .adr {
            text-decoration: underline; 
            font-size: 150%;
            font-weight: bold;
            color: blue;
            margin-top: 5px;
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
                        <a class="now nav-link" href="../Interface 4 (contact)/contact.php">Επικοινωνία</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Interface 5 (manage)/manage.php">Σελίδα Διαχείρισης</a>
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
                    <button class="tablinks" onclick="openTab(event, 'request')" id="defaultOpen">Φόρμα  Αιτημάτων</button>
                    <button class="tablinks" onclick="openTab(event, 'contact')">Στοιχεία επικοινωνίας της εταιρίας</button>
                </div>
                <div id="request" class="tabcontent">
                    <form id="requestForm" action="contact.php" method="POST">
                        <label>
                            Όνομα:
                            <input type="text" id="NameInput" name="name" required>
                        </label>
                        <label>
                            Τηλέφωνο:
                            <input type="text" id="phoneInput" name="phone" required>
                        </label>
                        <label>
                            Email:
                            <input type="text" id="emailInput" name="email" required>
                        </label>
                        <label>
                            Αρμόδιο Τμήμα:
                            <select id="departments" name="departments">
                                <option value="" selected disabled hidden>Επιλέξτε Τμήμα</option>
                                <option value="Τμήμα Υποστήριξης">Τμήμα Υποστήριξης</option>
                                <option value="Τμήμα Πωλήσεων">Τμήμα Πωλήσεων</option>
                                <option value="Τμήμα Βλαβών">Τμήμα Βλαβών</option>
                                <option value="Τμήμα Λογιστηρίου">Τμήμα Λογιστηρίου</option>
                            </select>
                        </label>
                        <label>
                            Θέμα:
                            <input type="text" id="subjectInput" name="subject" required>
                        </label>
                        <label>
                            Μήνυμα:
                            ​<textarea id="messageInput" class="notesheet" name="message"></textarea>
                        </label>
                        <button class="btn" type="submit">Στείλε το Αίτημα !</button>
                    </form>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //This ensures that the code runs only when the form is submitted via the POST method.
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $departments = $_POST['departments'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                            //It retrieves the form data using $_POST superglobal and assigns the values to respective variables
                            //These variables hold the user-submitted data from the form.
                                            
                            //It establishes a connection to the MySQL database using mysqli with the provided credentials
                            $conn = new mysqli('localhost', 'root', '', 'gasdb');
                            if ($conn -> connect_error) {
                                die("Σφάλμα κατά τη σύνδεση με τη βάση δεδομένων: " . $conn -> connect_error);
                            }else {
                                $stmt = $conn -> prepare("INSERT INTO requests (Όνομα, Τηλέφωνο, Email, Τμήμα, Θέμα, Μήνυμα) VALUES (?, ?, ?, ?, ?, ?)");
                                //If the connection is successful, it prepares an SQL INSERT statement using a prepared statement.
                                $stmt -> bind_param("ssssss", $name, $phone, $email, $departments, $subject, $message);
                                //This helps prevent SQL injection by automatically escaping special characters.
                                $stmt -> execute();
                                //The prepared statement is executed with the execute method, which inserts the form data into the database table.
                                echo '<script>alert("Το αίτημά σας καταχωρήθηκε!")</script>';
                                //If the data insertion is successful, it displays a JavaScript alert message to notify the user that their request has been registered.
                            }

                            $stmt -> close();
                            $conn -> close();
                        }
                        
                    ?>
                </div>
                <div id="contact" class="tabcontent">
                    <br><h1>Διεύθυνση Εταιρίας: </h1>
                    <p class="adr"><a href="https://www.google.com/maps/place/University+of+Piraeus/@37.9401134,23.6509969,17z/data=!4m6!3m5!1s0x14a1bbe5bb8515a1:0x3e0dce8e58812705!8m2!3d37.9415137!4d23.6528681!16zL20vMGQwOTA0">
                    Καραολή και Δημητρίου 80, Πειραιάς 185 34</a></p><br>
                    <h1>Τηλέφωνο Εταιρίας: </h1>
                    <p class="adr"><a href="tel:+302102103330">+302102103330</a></p><br>
                    <h1>Email Εταιρίας: </h1>
                    <p class="adr"><a href="mailto:company@gmail.com">gasappliancesolutions@gmail.com</a></p><br>
                </div>
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