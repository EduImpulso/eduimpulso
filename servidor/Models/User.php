<?php
    require_once("./Connection.php");

    class User extends Connection
    {
        private $name;
        private $username;
        private $born;
        private $scholling;
        private $gender;
        private $email;
        private $password;

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function setUsername($username)
        {
            $this->username = $username;
        }

        public function getBorn()
        {
            return $this->born;
        }

        public function setBorn($born)
        {
            $this->born = $born;
        }

        public function getGender()
        {
            return $this->gender;
        }

        public function setGender($gender)
        {
            $this->gender = $gender;
        }

        public function getScholling()
        {
            return $this->scholling;
        }

        public function setScholling($scholling)
        {
            $this->scholling = $scholling;
        }

        public static function getEmail($email)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email'");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }
        
        public function User($name, $username, $born, $scholling, $gender, $email, $password)
        {
            $this->name = $name;
            $this->username = $username;
            $this->born = $born;
            $this->scholling = $scholling;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;

            $conn = Connection::getDb();
            $stmt = $conn->prepare("INSERT INTO usuarios(name, username, born_date, scholling, gender, email, password)
                                VALUES ('$this->name', '$this->username', '$this->born', '$this->scholling', '$this->gender',
                                '$this->email', '$this->password')");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public static function editUser($id, $name, $username, $scholling, $gender, $email, $password)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("UPDATE usuarios SET name='$name', username='$username', scholling='$scholling', gender='$gender', email='$email', password='$password' WHERE id_user=$id");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Dados alterados'); location.href = '../index.html'</script>";
            } else {
                echo"<script>alert('Erro ao editar informações'); location.href = '../index.html'</script>";
            }

        }
        
        public static function getUser($username)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("SELECT * FROM usuarios where username='$username'");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
            
        }

        public static function getInfo($email)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email'");
            $stmt-> execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        }

        public static function login($email, $password)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email' and password='$password'");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
            
        }

        public static function deleteUser($id)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("DELETE FROM usuarios where id_user='$id'");
            $stmt-> execute();
            $stmt = $conn->prepare("SELECT * FROM usuarios where id_user='$id'");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
            
        }
    }
