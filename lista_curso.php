<?php
/*session_start();
if(!isset($_SESSION['id_user'])){
    header("Location: index.php");
    exit;
}*/
require_once('./nav/menu.html');
?>
<main class="container d-flex justify-content-center align-items-center">
    <div class="row d-flex justify-content-center">
        <?php
            $json = file_get_contents("http://localhost/eduimpulso/servidor/apicourses.php");
            $data = json_decode($json, true);
            foreach ($data as $key => $row){
        ?>
            <div class="list-group col-12 m-1">
                <a href="./cursos_tecnicos.php?id<?php echo $row["id_curso"];?>" class="list-group-item list-group-item-action">
                    <?php echo $row["nome"];?>
                </a>
            </div>
        <?php
            }
        ?>
    </div>
</main>

<?php
require_once('./nav/footer.html');
?>
