<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $faq_title = $row['faq_title'];
    $faq_banner = $row['faq_banner'];
}
?>

<!--<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $faq_banner; ?>);">
    <div class="inner">
        <h1><?php echo $faq_title; ?></h1>
    </div>
</div>-->

<div class="page" style="background-color: black;">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <div class="panel-group" id="faqAccordion">                    

                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_faq");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo $row['faq_id']; ?>">
                                <h4 class="panel-title">
                                    <?php echo $row['faq_title']; ?>
                                </h4>
                            </div>
                            <div id="question<?php echo $row['faq_id']; ?>" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">***</span></h5>
                                    <p>
                                        <?php echo $row['faq_content']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
                <br>
    <!--GAMBAR ACHIEVMENT -->
    <div class="container">
        <div class="row">
            <center><h2 style="color:white;">Achievment Of:</h2></center><br>
            <center>
                <img src="assets/uploads/achievment.jpg" style="width: 90%;">
                </center>
        </div>
    </div>
                    <div class="container">
                    <center><h2 style="color:white;">Partnership:</h2></center><br>
                        <center><div class="partner" style="background-color: white;">
                            <img src="assets/uploads/partnership/hino.png" style="width: 90px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/armindo.png" style="width: 90px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/cemaco.png" style="width: 70px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/auto2000.png" style="width: 100px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/arista.png" style="width: 100px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/indomobil.png" style="width: 110px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/nasmoco.png" style="width: 90px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/tejaberlian.png" style="width: 100px; margin-left: 22px;" class="zoom">
                            <img src="assets/uploads/partnership/dayaguna.png" style="width: 130px; height: 50px; margin-left: 22px;" class="zoom">
                        </center></div>
                    </div>    
            </div>
        </div>
    </div>
</div>



<?php require_once('footer.php'); ?>