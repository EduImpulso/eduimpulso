<?php
session_start();
if(!isset($_SESSION['id_user'])){
    header("Location: cadastro.php");
    exit;
}
require_once('./nav/menu.php');
?>
<div class="cotainer-fluid">
    <div class="d-flex align-items-center justify-content-center my-3">
        <h3>Carreiras 👨‍🚀</h3>
    </div>
<div class="linha mx-auto"></div>
<div class="container d-flex justify-content-center align-items-center my-3">
    <div class="row d-flex justify-content-center">
    <?php
            $json = file_get_contents("http://localhost/eduimpulso/servidor/apicourses.php");
            $data = json_decode($json, true);
            foreach ($data as $key => $row){
                $id = $row['id_curso']
        ?>
        <div class="list-group col-12 m-1">
            <a href="<?php echo"./servidor/course.php?id=$id";?>" class="btnCarreira list-group-item">
                    <?php echo $row["nome"];?>
                </a>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>

<?php
require_once('./nav/footer.html');
?>
