<?php
class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    public function __construct(string $email, string $password)
    {
        //otwieramy połączenie do bazy danych
        $db = new mysqli("localhost", "root", "", "phploginform");
        //przygotowujemy zapytanie
        $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        //wysyłamy zapytanie do bazy
        $result = $db->query($sql);
        if ($result->num_rows == 1) {
            //znaleźliśmy jednego użytkownika
            //wyciągamy dane z tego użytkownika
            $row = $result->fetch_assoc();
            //sprawdzamy czy hasło podane w formularzu pasuje do hasła z bazy
            if (password_verify($password, $row['password'])) {
                //zapisujemy dane z bazy do lokalnych zmiennych obiektu
                $this->id = $row['id'];
                $this->email = $row['email'];
                $this->firstName = $row['firstname'];
                $this->lastName = $row['lastname'];
                $db->close();
            } else {
                //niepoprawne hasło
                die("Błąd konstruktora - niepoprawne hasło");
            }
        } else {
            //nie ma takiego użytkownika 
            die("Błąd konstruktora - nie ma takiego użytkownika");
        }
    }
    public function registerSession() {
        $_SESSION['user'] = $this;
    }
    public function getEmail() : string {
        return $this->email;
    }
    public static function register(string $email, string $password,
                                    string $firstName = "", string $lastName = "") {
        //otwieramy połączenie do bazy danych
        $db = new mysqli("localhost", "root", "", "phploginform");
        //zaszyfruj hasło używając argon2i
        $password = password_hash($password, PASSWORD_ARGON2I);
        //przygotuj kwerendę
        $sql = "INSERT INTO user (email, password, firstname, lastname) 
                        VALUES ('$email','$password','$firstName','$lastName')";
        //wyślij kwerendę do bazy
        $result = $db->query($sql);
    }
    public function getFirstName() : string {
        return $this->firstName;
    }
    public function getLastName() : string {
        return $this->lastName;
    }
    public function updateProfile(string $firstName, string $lastName) : bool {
        //zapisz nowe dane do obiektu
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        //otwieramy połączenie do bazy danych
        $db = new mysqli("localhost", "root", "", "phploginform");
        //przygotuj kwerendę
        $sql = "UPDATE user SET firstname='$firstName', lastname='$lastName' WHERE id='$this->id'";
        //wyślij kwerendę do bazy
        $result = $db->query($sql);
        if($result) {
            //zapisano poprawnie zmiany
            return true;
        } else {
            //błąd zapisu
            throw new Exception("Błąd zapisu do bazy danych");
        }
    }
    public function updatePassword(string $newPassword) : bool {
        //zaszyfruj nowe hasło
        $passwordHash = password_hash($newPassword, PASSWORD_ARGON2I);
        //otwieramy połączenie do bazy danych
        $db = new mysqli("localhost", "root", "", "phploginform");
        //przygotuj kwerendę
        $sql = "UPDATE user SET password='$passwordHash' WHERE id='$this->id'";
        //wyślij kwerendę do bazy
        $result = $db->query($sql);
        if($result) {
            //zapisano poprawnie zmiany
            return true;
        } else {
            //błąd zapisu
            throw new Exception("Błąd zapisu do bazy danych");
        }
    }
    public static function checkAuth() {
        if(!isset($_SESSION['user'])) {
            header('Location: login');
            exit();
        }
    }
}
