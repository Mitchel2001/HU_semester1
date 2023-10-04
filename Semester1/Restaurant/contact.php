<?php include_once 'header.php';?>
<?php include_once 'connect.php';?>

<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["naam"])) {
        $errors[] = "Naam is verplicht.";
    }
    if (empty($_POST["email"])) {
        $errors[] = "E-mail is verplicht.";
    }
    if (empty($_POST["bericht"])) {
        $errors[] = "Bericht is verplicht.";
    }

   
    if (!empty($_POST["email"]) && strpos($_POST["email"], "@") === false) {
        $errors[] = "Voer een geldig e-mailadres in.";
    }

    if (!empty($errors)) {  

        
        foreach ($errors as $error) {
            echo "<div class='error'>$error</div>";
        }
    } else {
        $naam = $_POST["naam"];
        $email = $_POST["email"];
        $bericht = $_POST["bericht"];

        $stmt = $conn->prepare("INSERT INTO berichten (naam, email, bericht) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $naam, $email, $bericht);

        if ($stmt->execute()) {
            $success_message = "Bedankt voor uw bericht<br>wij zullen snel bij u terug komen";
            echo "<div class='success'>$success_message</div>";
        } else {
            $error_message = "Fout bij het toevoegen van het bericht: " . $stmt->error;
            echo "<div class='error'>$error_message</div>";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact met Loetje</title>
    <link rel="stylesheet" href="/css/style3.css">
</head>
<body>
    <header>Contact met Loetje</header>
    <form method="post" id="form" class="topBefore">
        <input id="name" name="naam" type="text" placeholder="NAME">
        <input id="email" name="email" type="text" placeholder="E-MAIL">
        <textarea id="message" name="bericht" type="text" placeholder="MESSAGE"></textarea>
        <input id="submit" type="submit" value="GO!">
    </form>
</body>
</html>


<style>
.success {
    background-color: green;
    color: white;
    text-align: center;
    padding: 10px;
}

.error {
    background-color: red;
    color: white;
    text-align: center;
    padding: 10px;
}
</style>

<?php include_once 'footer.php';?>