<?php
    require_once("../Connection.php");

    class User extends Connection
    {
        private $name;
        private $username;
        private $born;
        private $scholl;
        private $schollGrade;
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

        public function getScholl()
        {
            return $this->scholl;
        }

        public function setScholl($scholl)
        {
            $this->scholl = $scholl;
        }

        public function getSchollGrade()
        {
            return $this->schollGrade;
        }

        public function setSchollGrade($schollGrade)
        {
            $this->schollGrade = $schollGrade;
        }

        public function getEmail()
        {
            return $this->email;
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
        
        public function User($name, $username, $born, $scholl, $schollGrade, $email, $password)
        {
            $this->name = $name;
            $this->username = $username;
            $this->born = $born;
            $this->scholl = $scholl;
            $this->schollGrade = $schollGrade;
            $this->email = $email;
            $this->password = $password;

            /**$conn = Connection::getDb();
            $stmt = $conn->query("INSERT INTO usuarios(name, username, born_date, scholl, scholl_grade, email, password)
                                VALUES ('$this->name', '$this->username', '$this->born', '$this->scholl',
                                '$this->schollGrade', '$this->email', '$this->password')");
            
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }*/
        }
        
        public function getUser()
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("SELECT * FROM usuarios where username='$this->username'");
            $stmt-> execute();
            return $stmt;
        }

        public function deleteUser()
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("DELETE FROM usuarios where username='$this->username'");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return true;
                echo "delete";
            } else {
                return false;
            } 
            
        }

        public function editUser()
        {
            echo "edit info";
        }
    }

$user = new User('Nathally', 'nathytss', '1990/08/22', 'Adventista', '3º', 'nathy@eduimpulso1s.com.br', '123456');
$user->getUser();

print_r($user);
