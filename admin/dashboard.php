<!-- DASHBOARD (BACK OFFICE) -->

<!-- HEAD -->
<?php require_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], 'assets', 'components', 'back', 'head.php']) ?>
<title>Tableau de bord</title>

<?php

use App\Controllers\Authentication;
use App\Controllers\GeneralController;

// CHECK AUTH
Authentication::check();

// COUNT DATAS FROM DB
$skillsCount = GeneralController::countAllDatas('skill');
$projectsCount = GeneralController::countAllDatas('project');
$messagesCount = GeneralController::countAllDatas('message');
?>

<!-- HEADER -->
<?php require_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], 'assets', 'components', 'back', 'header.php']) ?>

<!-- MAIN CONTENT -->
<main>
    <div class="mb-2">
        <h4 class="text-center text-light py-2">TABLEAU DE BORD</h4>
    </div>
    <div class="content row mx-auto text-center justify-content-center py-4" style="border: 2px solid #666;">
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        };
        ?>

        <div class="col-5 p-0 m-3 shadow text-decoration-none text-danger" style="background:#EEF;max-width:400px;transition:300ms" onmouseout="this.style.transform='scale(1)'" onmouseover="this.style.transform='scale(1.05)'">
            <a href="./project" class="text-decoration-none text-dark d-block border border-secondary h-100 w-100 pt-4 pb-3 rounded" style="background:#EFF;">
                <h5>Nombre de réalisations</h5>
                <p class="fs-4"><?= $projectsCount ?></p>
                <p class="btn border border-secondary shadow" style="transition:300ms" onmouseout="this.style.color='initial';this.style.background='initial'" onmouseover="this.style.color='#FFF';this.style.background='#111'">Voir la liste</p>
            </a>
        </div>

        <div class="col-5 p-0 m-3 shadow text-decoration-none text-danger" style="background:#EEF;max-width:400px;transition:300ms" onmouseout="this.style.transform='scale(1)'" onmouseover="this.style.transform='scale(1.05)'">
            <a href="./skill" class="text-decoration-none text-dark d-block border border-secondary h-100 w-100 pt-4 pb-3 rounded" style="background:#FFE;">
                <h5>Nombre de compétences</h5>
                <p class="fs-4"><?= $skillsCount ?></p>
                <p class="btn border border-secondary shadow" style="transition:300ms" onmouseout="this.style.color='initial';this.style.background='initial'" onmouseover="this.style.color='#FFF';this.style.background='#111'">Voir la liste</p>
            </a>
        </div>

        <div class="col-5 p-0 m-3 shadow text-decoration-none text-danger" style="background:#EEF;max-width:400px;transition:300ms" onmouseout="this.style.transform='scale(1)'" onmouseover="this.style.transform='scale(1.05)'">
            <a href="./message" class="text-decoration-none text-dark d-block border border-secondary h-100 w-100 pt-4 pb-3 rounded" style="background:#EEF;">
                <h5>Nombre de messages</h5>
                <p class="fs-4"><?= $messagesCount ?></p>
                <p class="btn border border-secondary shadow" style="transition:300ms" onmouseout="this.style.color='initial';this.style.background='initial'" onmouseover="this.style.color='#FFF';this.style.background='#111'">Voir la liste</p>
            </a>
        </div>

        <div class="col-5 p-0 m-3 shadow text-decoration-none text-danger" style="background:#EEF;max-width:400px;transition:300ms" onmouseout="this.style.transform='scale(1)'" onmouseover="this.style.transform='scale(1.05)'">
            <a href="./account" class="text-decoration-none text-dark d-block d-flex flex-column justify-content-between align-items-center border border-secondary h-100 w-100 pt-4 pb-3 rounded" style="background:#FEE;">
                <h5>Mon compte</h5>
                <p class="fs-4">&#128209;</p>
                <p class="btn border border-secondary shadow" style="transition:300ms" onmouseout="this.style.color='initial';this.style.background='initial'" onmouseover="this.style.color='#FFF';this.style.background='#111'">Voir</p>
            </a>
        </div>

    </div>
</main>

<!-- FOOTER -->
<?php include join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], 'assets', 'components', 'back', 'footer.php']) ?>