<?php
    require_once('./Connection.php');

    class Courses extends Connection
    {
        public$id;

        public static function getAll()
        {
            $conn = Connection::getDb();

            $i=0;

            $stmt = $conn->prepare("SELECT cursos.id_curso, cursos.nome, schools.name, cursos.periodo, cursos.duracao_sem, schools.cep, cursos.sal_ini, cursos.sal_med, cursos.sal_exp FROM cursos JOIN schools ON cursos.fk_idscholl = schools.id_scholl");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $json[$i]= 
                    $row
                ;
                $i++;
            }

            header('Access-Control-Allow-Origin: *');
            header('Content-type: application/json');
            echo json_encode($json);
        }

        public static function getCourse($id)
        {
            $conn = Connection::getDb();

            $i=0;

            $stmt = $conn->prepare("SELECT cursos.id_curso, cursos.nome, cursos.descricao, schools.name, cursos.periodo, cursos.duracao_sem, schools.cep, cursos.sal_ini, cursos.sal_med, cursos.sal_exp FROM cursos JOIN schools ON cursos.fk_idscholl = schools.id_scholl WHERE cursos.id_curso = '$id'");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
