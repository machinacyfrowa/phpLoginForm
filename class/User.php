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
}
