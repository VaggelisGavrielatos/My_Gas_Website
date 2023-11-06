<!DOCTYPE html>
<html lang="enl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../pictures/gas-logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="main.js" defer></script>
    <title>Gass Appliance Solutions</title> 
    <style>
        /* main start*/
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

        /*slide-show start*/
        .slider {
            height: 570px;
            position: relative;
        }

        .slider img {
            width: 100%;
            height: 600px;
            position: absolute;
            top:0;
            left: 0;
            opacity: 0.6;
            transition: 0.8s;   
        } 
        /*slide-show end*/
        /*slide-show nav button start*/
        .navigation-button {
            text-align: center;
            position: relative;
        } 
        
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        } 
        
        .active, .dot:hover {
            background-color: #717171;
        }
        /*slide-show nav button end*/

        /*who we are start*/
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
            padding: 14px 16px;
            transition: 0.3s;
            transition: transform .2s;
            font-size: large;
            margin-right: 70px;
        }
        /*zoom in hover*/
        .tab button:hover {
            background-color: #ddd;
            transform: scale(1.5);
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
        /*tab style end*/

        .who-we-are-logo{
            float: left;
            width:49%;
        }

        .who-we-are-txt {
            float: left;
            padding: 50px 10px;
            width: 50%;
            font-size: 120%;
        }
        /*who we are end*/

        /*program start*/
        .program-container {
            overflow: hidden;
            background-color: inherit;
            text-align: center;
            padding: 15px 15px;
        }
        .underline {
            text-decoration: underline #36ecec;
            color: #36ecec;
            font-size: 97%;
        }

        .prog {
            max-width: 100%;
            height: auto;
        }
        #program1{
            display:inline;
            float:left;
            padding: 10px 14px;
            margin-left: 10px;
            max-width:24%;
            height: 100%;
        }
        #program2{
            display:inline;
            float:left;
            padding: 10px 14px;
            margin-left: 10px;
            max-width:24%;
            height: 100%;

        }
        #program3{
            display:inline;
            float:left;
            padding: 10px 14px;
            margin-left: 10px;
            max-width:24%;
            height: 100%;

        }
        #program4{
            display:inline;
            float:left;
            padding: 10px 14px;
            margin-left: 10px;
            max-width:24%;
            height: 100%;

        }
        .zoom:hover{
            background-color: #ddd;
            transform: scale(1.1);
        }
        .ref-button {
            display: flex;
            align-items: center;
            text-align: center;
            flex-direction: column;
            margin-top: 20px;
            margin-bottom: 10px;
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
        /*program end*/

        /*tips start*/
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /*tips end*/

        /*newsletter start*/
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
            font-size: 100%;
        }
        input[type="email"] {
            text-align: center;
            width: 500px;
            height: 40px;
            margin-top: 20px;
            font-size: 100%;
        }
        .submit {
            padding: 15px 30px;
            transition: 0.3s;
            transition: transform .2s;
            font-size: large;
        }
        /*newsletter end*/

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
                        <a class="now nav-link" href="../Interface 1 (main)/main.php">Αρχική Σελίδα</a>
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
            <div class="slider">
                <img id="img-1" src="../pictures/img-1.jpg" alt="Image 1"/>
                <img id="img-2" src="../pictures/img-2.jpg" alt="Image 2"/>
                <img id="img-3" src="../pictures/img-3.jpg" alt="Image 3"/>
                <img id="img-4" src="../pictures/img-4.jpg" alt="Image 4"/>
            </div>
            <div class="navigation-button">
                <span class="dot active" onclick="changeSlide(0)"></span>
                <span class="dot" onclick="changeSlide(1)"></span>
                <span class="dot" onclick="changeSlide(2)"></span>
                <span class="dot" onclick="changeSlide(3)"></span>
            </div>
            <div class="tab-container">
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'who_we_are')" id="defaultOpen">Ποιοι  Είμαστε?</button>
                    <button class="tablinks" onclick="openTab(event, 'programs')">Τα προγράμματα μας</button>
                    <button class="tablinks" onclick="openTab(event, 'hints')">Συμβουλές Εξοικονόμησης</button>
                    <button class="tablinks" onclick="openTab(event, 'newsletter')">Newsletter</button>
                </div>
                <div id="who_we_are" class="tabcontent">
                    <section class="who-we-are-logo">
                        <img src="../pictures/gas-logo.jpg" alt="Gas Appliance Solutions">
                    </section>
                    <section class="who-we-are-txt">
                        <p>Η <b>Gas Appliance Solutions</b> είναι εταιρεία που προμηθεύει φυσικό αέριο στην Ελλάδα, πραγματοποιώντας μεγάλη ενεργειακή επένδυση.</p><br>
                        <p>Η <b>Gas Appliance Solutions</b>, με πολύχρονη παρουσία στην ελληνική αγορά, είναι ένας σύγχρονος και ανταγωνιστικός όμιλος εταιρειών, 
                              με δυναμική παρουσία στον ενεργειακό τομέα και ουσιαστική συμβολή στην ανάπτυξη της ελληνικής οικονομίας, 
                              την προστασία του περιβάλλοντος και τη βελτίωση της ποιότητας ζωής των τοπικών κοινωνιών.</p><br>
                        <p>Με συνεχείς επεκτάσεις των αγωγών φυσικού αερίου, Η <b>Gas Appliance Solutions</b> φέρνει το φυσικό αέριο κοντά σε όλο και περισσότερες περιοχές της χώρας.</p><br>
                        <p>Με μακροχρόνιες συμβάσεις προμήθειας αερίου (μέσω αγωγών και LNG) στηρίζει την επάρκεια και ασφάλεια εφοδιασμού της χώρας, ενώ ταυτόχρονα αναπτύσσει σημαντικές 
                            πρωτοβουλίες, ώστε η Ελλάδα να έχει ουσιαστικό ρόλο ως κόμβος διαμετακόμισης φυσικού αερίου προς την Ευρώπη από χώρες με πλούσια κοιτάσματα φυσικού αερίου.</p>
                    </section>
                </div>
                <div id="programs" class="tabcontent">
                    <div class="program-container">
                        <section class="zoom" id="program1">
                            <h3 class="underline">Οικιακό Πρόγραμμα</h3>
                            <img class="prog" src="../pictures/home.jpg" alt="Home Program" height="400px" width="500px">
                            <p>Ζεσταθείτε με ευκολία και οικονομία!</p><br>
                            <p>&#x2713; Επιβράβευση Alpha Bank Bonus</p>
                            <p>&#x2713; Επείγουσα Τεχνική Βοήθεια</p>
                        </section>
                        <section class="zoom" id="program2">
                            <h3 class="underline">Επαγγελματικό Πρόγραμμα</h3>
                            <img class="prog" src="../pictures/company.jpg" alt="Company Program" height="400px" width="500px">
                            <p>Καλύψτε τις μικρές ή μεγάλες ανάγκες της επιχείρησής σας και εξοικονομήστε!</p><br>
                            <p>&#x2713; Επείγουσα Τεχνική Βοήθεια</p>
                        </section>
                        <section class="zoom" id="program3">
                            <h3 class="underline">Φοιτητικό Πρόγραμμα</h3>
                            <img class="prog" src="../pictures/student.jpg" alt="Student Program" height="400px" width="500px">
                            <p>Μόνο για Φοιτητές! 80€ Δωροεπιταγή Vodafone και 20% χαμηλότερη τιμή!</p><br>
                            <p>&#x2713; Επιβράβευση Alpha Bank Bonus</p>
                            <p>&#x2713; Επείγουσα Τεχνική Βοήθεια</p>
                        </section>
                        <section class="zoom" id="program4">
                            <h3 class="underline">Αγροτικό Πρόγραμμα</h3>
                            <img class="prog" src="../pictures/farm.jpg" alt="Farm Program" height="400px" width="500px">
                            <p>Με 20% χαμηλότερη τιμή στο Φυσικό Αέριο θα μείνετε ήσυχοι!</p><br>
                            <p>&#x2713; Επιβράβευση Alpha Bank Bonus</p>
                            <p>&#x2713; Επείγουσα Τεχνική Βοήθεια</p>
                        </section>
                    </div>
                    <div class="ref-button">
                        <a href="http://localhost/My_Gas_Website/Interface%202%20(profile)/profile.html" target="_blank">
                            <button class="btn">Προφίλ Εταιρίας -></button>
                        </a>
                    </div>
                </div>
                <div id="hints" class="tabcontent">
                    <h2>Θέρμανση και ψύξη</h2>
                    <p>&bull; <b>Μην υπερθερμαίνετε το νερό.</b> Ρυθμίστε τον λέβητά σας σε μέγιστη θερμοκρασία 60° C ώστε να λειτουργεί αποτελεσματικά και σύμφωνα με τους κανόνες υγιεινής.</p>
                    <p>&bull; <b>Χρησιμοποιείτε τον θερμοστάτη με σύνεση.</b> Γνωρίζετε ότι το σπίτι σας δεν θα ζεσταθεί πιο γρήγορα εάν αυξήσετε τη θερμοκρασία στον θερμοστάτη; Αυτό επηρεάζει μόνο τη μέγιστη θερμοκρασία στο σπίτι σας.</p>
                    <p>&bull; <b>Κλείνετε τις κουρτίνες ή τα παντζούρια σας τις ζεστές ημέρες </b>για να μειώνεται η ηλιακή ακτινοβολία που μπαίνει στο σπίτι σας.</p>
                    <p>&bull; <b>Χρησιμοποιείτε ανεμιστήρες για δροσιά.</b> Οι ανεμιστήρες καταναλώνουν πολύ λιγότερη ενέργεια από τα κλιματιστικά.</p><br>
                    <h2>Μόνωση</h2>
                    <p>&bull; <b>Αντικαταστήστε τα μονά τζάμια των παραθύρων με διπλά.</b> Τα διπλά τζάμια χάνουν 50-70 % λιγότερη θερμότητα.</p>
                    <p>&bull; <b>Δεν μπορείτε να εγκαταστήσετε διπλά τζάμια;</b> Οι χοντρές κουρτίνες ή τα μονωτικά πάνελ παραθύρων μειώνουν τη ροή κρύου αέρα στο σπίτι σας.</p>
                    <p>&bull; <b>Τα ρεύματα αέρα μπορεί να αποτελούν μεγάλη πηγή απώλειας θερμότητας.</b> Μπορείτε να εξοικονομήσετε ενέργεια μονώνοντας τα κενά γύρω από τα παράθυρα ή καλύπτοντας τα κενά κάτω από τις πόρτες ενάντια στα ρεύματα. Ακόμη και καλύπτοντας τις κλειδαρότρυπες και τα γραμματοκιβώτια μπορεί να δείτε διαφορά!</p>
                    <p>&bull; <b>Μονώστε τις δεξαμενές θερμού νερού, τους σωλήνες κεντρικής θέρμανσης και τις κοιλότητες των τοίχων.</b> Αν δεν μπορείτε να μονώσετε τις κοιλότητες των τοίχων, τοποθετήστε μονωτικούς ανακλαστήρες στους τοίχους πίσω από τα θερμαντικά σώματα.</p><br>
                    <h2>Στην κουζίνα</h2>
                    <p>&bull; <b>Αγοράζετε ενεργειακά αποδοτικές συσκευές.</b> Στην ΕΕ, πολλά προϊόντα καθημερινής χρήσης όπως ψυγεία, πλυντήρια πιάτων και φούρνοι φέρουν το ενεργειακό σήμα της ΕΕEN•••, ώστε να μπορείτε να επιλέγετε ενεργειακά αποδοτικά μοντέλα. Η βαθμολογία κυμαίνεται από το Α+++ (πιο αποδοτικό) έως το G (λιγότερο αποδοτικό). Για παράδειγμα, ένα πλυντήριο πιάτων της τάξης A+++ χρησιμοποιεί τη μισή ενέργεια από ό,τι ένα πλυντήριο πιάτων της τάξης D.</p>
                    <p>&bull; <b>Ελέγξτε εάν ο φούρνος σας είναι ερμητικά κλειστός.</b> Εάν πρέπει να αντικαταστήσετε τον φούρνο σας, διαλέξτε ένα μοντέλο της τάξης A. Έτσι θα εξοικονομήσετε περίπου 200 ευρώ κατά τον συνολικό χρόνο ζωής του σε σύγκριση με ένα μοντέλο της τάξης D.</p>
                    <p>&bull; <b>Μην πλένετε τα πιάτα στο χέρι εάν έχετε πλυντήριο πιάτων.</b> Τα σύγχρονα πλυντήρια πιάτων χρησιμοποιούν λιγότερο νερό και ενέργεια —και τα περισσότερα διαθέτουν πρόγραμμα «Eco»— αλλά πρέπει να τα βάζετε σε λειτουργία μόνο όταν είναι γεμάτα!</p>
                    <p>&bull; <b>Βράστε μόνο όσο νερό χρειάζεστε.</b> Εάν αφήσατε το ζεστό νερό στον βραστήρα μόνο για λίγα λεπτά, δεν χρειάζεται να το ξαναβράσετε.</p><br>
                    <h2>Έξυπνο πλύσιμο</h2>
                    <p>&bull; <b>Γεμίζετε το πλυντήριο ρούχων σας.</b> Μην πλένετε μόνο λίγα ρούχα. Περιμένετε μέχρι να γεμίσει το πλυντήριο —όμως μην υπερβαίνετε το μέγιστο επιτρεπόμενο βάρος.</p>
                    <p>&bull; <b>Επιλέγετε τη χαμηλότερη απαιτούμενη θερμοκρασία.</b> Τα απορρυπαντικά πλέον είναι τόσο αποτελεσματικά που τα ρούχα καθαρίζουν σε χαμηλές θερμοκρασίες.</p>
                    <p>&bull; <b>Παραλείψτε την πρόπλυση</b> εάν τα ρούχα σας δεν είναι πολύ βρώμικα.</p>
                    <p>&bull; <b>Αποφύγετε, αν μπορείτε, το στεγνωτήριο.</b> Ένα πρόγραμμα στο στεγνωτήριο μπορεί να καταναλώνει δύο φορές περισσότερη ενέργεια από ό,τι ένα μέσο πρόγραμμα πλυντηρίου ρούχων.</p><br>
                    <h2>Εξοικονόμηση ηλεκτρικής ενέργειας</h2>
                    <p>&bull; <b>Αντικαταστήστε τους λαμπτήρες πυράκτωσης ή αλογόνου με ενεργειακά αποδοτικούς λαμπτήρες.</b> Με έναν λαμπτήρα LED μπορείτε να εξοικονομήσετε πάνω από 100 ευρώ στα έξοδα ηλεκτρικής ενέργειας για το συνολικό χρόνο ζωής του που είναι περίπου 20 χρόνια.</p>
                    <p>&bull; <b>Σβήνετε τις συσκευές σας.</b> Οι συσκευές που συνδέονται στο διαδίκτυο, όπως οι έξυπνες τηλεοράσεις, οι εκτυπωτές και οι κονσόλες παιχνιδιών, πριν από το 2016 χρησιμοποιούσαν έως 80 Watt ηλεκτρικής ενέργειας σε λειτουργία αναμονής. Μπορείτε να χρησιμοποιείτε πολύμπριζα για να τις σβήνετε εύκολα όλες μαζί.</p>
                    <p>&bull; <b>Ζητήστε από τον πάροχο ενέργειας την εγκατάσταση έξυπνου μετρητή.</b> Τα έξυπνα συστήματα μέτρησης αερίου και ηλεκτρικής ενέργειας θα μπορούσαν να εξοικονομήσουν 3 % της ενέργειας που καταναλώνετε.</p>
                    <p>&bull; <b>Διαλέξτε πράσινη ενέργεια.</b> Οι περισσότεροι πάροχοι ενέργειας προσφέρουν τιμολόγια πράσινης ηλεκτρικής ενέργειας, γεγονός που στηρίζει την επέκταση της χρήσης ανανεώσιμων πηγών ενέργειας, όπως η αιολική και η ηλιακή. Εάν το σπίτι σας έχει στέγη, τοποθετήστε ηλιακά πάνελ για την παραγωγή του ηλεκτρικού ρεύματός σας.</p>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/4b8x4rKiAhE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="newsletter" class="tabcontent">
                    <h1>Φόρμα Εγγραφής Newsletter</h1>
                    <form action="main.php" method="POST">
                      <label for="username">Username:</label>
                      <input type="text" id="username" name="username" required><br><br>
                      
                      <label for="name">Όνομα:</label>
                      <input type="text" id="name" name="name" required><br><br>
                      
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required><br><br>
                      
                      <input type="submit" class="submit btn" value="Εγγραφή"><br><p></p>
                    </form>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //This ensures that the code runs only when the form is submitted via the POST method.
                            $username = $_POST['username'];
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            //It retrieves the form data using $_POST superglobal and assigns the values to respective variables
                            //These variables hold the user-submitted data from the form.

                            //It establishes a connection to the MySQL database using mysqli with the provided credentials                     
                            $conn = new mysqli('localhost', 'root', '', 'gasdb');
                            if ($conn -> connect_error) {
                                die("Σφάλμα κατά τη σύνδεση με τη βάση δεδομένων: " . $conn -> connect_error);
                            }else {
                                // Check if the username already exists in the database
                                $stmt = $conn -> prepare("SELECT * FROM subscribers WHERE username = ?");
                                $stmt -> bind_param("s", $username);
                                $stmt -> execute();
                                $result = $stmt -> get_result();
                                
                                if ($result->num_rows > 0) {
                                    // Username already exists, display error message
                                    echo '<script>alert("Το όνομα χρήστη υπάρχει ήδη!")</script>';
                                } else {
                                    // Username doesn't exist, insert the data into the database
                                    $stmt = $conn -> prepare("INSERT INTO subscribers (username, Όνομα, Email) VALUES (?, ?, ?)");
                                    $stmt -> bind_param("sss", $username, $name, $email);
                                    //This helps prevent SQL injection by automatically escaping special characters.
                                    $stmt -> execute();
                                    //The prepared statement is executed with the execute method, which inserts the form data into the database table.
                                    echo '<script>alert("Η εγγραφή σας ολοκληρώθηκε με επιτυχία!")</script>';
                                    //If the data insertion is successful, it displays a JavaScript alert message to notify the user that their request has been registered.

                                }

                                $stmt -> close();
                                $conn -> close();
                            }
                        }
                    ?>
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