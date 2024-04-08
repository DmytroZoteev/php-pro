if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

echo "Ви ввели логін: " . $username . "<br>";
    echo "Ви ввели пароль: " . $password;
}
