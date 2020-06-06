<?php
    require_once("./assets/src/includes/config.php");
    require_once("./assets/src/includes/handlers/logout-handler.php");
    require_once("./assets/src/includes/classes/Admin.php");
    require_once("./assets/src/includes/classes/OfficeBearer.php");
    require_once("./assets/src/includes/handlers/updateObDetails-handler.php");
    require_once("./assets/src/includes/classes/FacultyRep.php");
    if (isset($_SESSION['userLoggedIn']))
        {
            $userLoggedIn = $_SESSION['userLoggedIn'];
            echo "<script>
                    alert('Logged In As: $userLoggedIn')
                </script>";
        }
    else {
        echo "
            <script>
                alert('You should be Logged In as an Administrator first before accessing the Admin Page!');
                window.location = './index.php';
            </script>
        ";
        exit();
    }
    $adminConnection = new Admin($conn);
    $adminBadge = $adminConnection->get_adminBadge($userLoggedIn);
    $adminId = $adminConnection->get_adminId($userLoggedIn);
    $adminEmail = $adminConnection->get_adminEmail($userLoggedIn);
    $adminFullName = $adminConnection->get_adminFullName($userLoggedIn);
    $adminPassword = $adminConnection->get_adminPassword($userLoggedIn);
    $President = new OfficeBearer($conn, "President");
    $Vpresident = new OfficeBearer($conn, "Vice-President");
    $Treasurer = new OfficeBearer($conn, "Treasurer");
    $Secretary = new OfficeBearer($conn, "Secretary");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-cyan.min.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="./assets/js/node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="./assets/js/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <header class="mdl-layout__header" style="background-color: #429DD1;">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title adminPageTitle" style="color: #fff;">
                        <strong><u><h3>UOM Student Union - Admin Panel</h3></u></strong>
                </span>
            </div>
            <div class="adminTopSection">
                <div class="AdminUsername">
                    <h5><strong>Logged In As: <u><?php echo $userLoggedIn;?></u></strong></h5>
                    <h6>Full Name: <?php echo $adminFullName ?></h6>
                    <h6 class="role">Role: ADMIN <span class="demo-card-image__filename material-icons"><?php echo $adminBadge ?></span></h6>
                    <h6>Email: <?php echo $adminEmail ?></h6>
                </div>
                <form action="" method="POST" id="logoutBtnForm"><button type="submit" name="logout-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn">LOGOUT</button></form>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #429DD1;">
                <a href="#fixed-tab-1" class="mdl-layout__tab is-active" style="color: white">| Office Bearers |</a>
                <a href="#fixed-tab-2" class="mdl-layout__tab" style="color: white">| Faculty Representatives |</a>
                <a href="#fixed-tab-3" class="mdl-layout__tab" style="color: white">| Forum Posts & Suggestions |</a>
            </div>
        </header>
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
                <div class="page-content ob">
                    <!-- Your content goes here -->
                    <form action="" method="POST" class="obForm">
                        <h3><strong>President Details</strong></h3>
                        <label for="PresidentName">Name:</label>
                        <input type="text" name="presidentName" placeholder="<?php echo $President->getOB_Name(); ?>" value="<?php echo $President->getOB_Name(); ?>">
                        <label for="presidentTitle">Title:</label>
                        <input type="text" name="presidentTitle" style="text-align: center;" placeholder="<?php echo $President->getOB_Title(); ?>" disabled>
                        <label for="presidentFb">Fb Link:</label>
                        <input type="text" name="presidentFb" placeholder="<?php echo $President->getOB_fbLink(); ?>" value="<?php echo $President->getOB_fbLink(); ?>">
                        <label for="presidentTel">Tel:</label>
                        <input type="text" name="presidentTel" placeholder="<?php echo $President->getOB_Tel(); ?>" value="<?php echo $President->getOB_Tel(); ?>">
                        <label for="presidentImage">Image Link:</label>
                        <input type="text" name="presidentImage" placeholder="<?php echo $President->getOB_Image(); ?>" value="<?php echo $President->getOB_Image(); ?>">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" name="savePresident">Save President</button>
                    </form>
                    <form action="" method="POST" class="obForm">
                        <h3><strong>Vice President Details</strong></h3>
                        <label for="vicePresidentName">Name:</label>
                        <input type="text" name="vicePresidentName" placeholder="<?php echo $Vpresident->getOB_Name(); ?>" value="<?php echo $Vpresident->getOB_Name(); ?>">
                        <label for="vicePresidentTitle">Title:</label>
                        <input type="text" name="vicePresidentTitle" style="text-align: center;" placeholder="<?php echo $Vpresident->getOB_Title(); ?>" disabled>
                        <label for="vicePresidentFb">Fb Link:</label>
                        <input type="text" name="vicePresidentFb" placeholder="<?php echo $Vpresident->getOB_fbLink(); ?>" value="<?php echo $Vpresident->getOB_fbLink(); ?>">
                        <label for="vicePresidentTel">Tel:</label>
                        <input type="text" name="vicePresidentTel" placeholder="<?php echo $Vpresident->getOB_Tel(); ?>" value="<?php echo $Vpresident->getOB_Tel(); ?>">
                        <label for="vicePresidentImage">Image Link:</label>
                        <input type="text" name="vicePresidentImage" placeholder="<?php echo $Vpresident->getOB_Image(); ?>" value="<?php echo $Vpresident->getOB_Image(); ?>">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" name="saveVicePresident">Save Vice President</button>
                    </form>
                    <form action="" method="POST" class="obForm">
                        <h3><strong>Treasurer Details</strong></h3>
                        <label for="treasurerName">Name:</label>
                        <input type="text" name="treasurerName" placeholder="<?php echo $Treasurer->getOB_Name(); ?>" value="<?php echo $Treasurer->getOB_Name(); ?>">
                        <label for="treasurerTitle">Title:</label>
                        <input type="text" name="treasurerTitle" style="text-align: center;" placeholder="<?php echo $Treasurer->getOB_Title(); ?>" disabled>
                        <label for="treasurerFb">Fb Link:</label>
                        <input type="text" name="treasurerFb" placeholder="<?php echo $Treasurer->getOB_fbLink(); ?>" value="<?php echo $Treasurer->getOB_fbLink(); ?>">
                        <label for="treasurerTel">Tel:</label>
                        <input type="text" name="treasurerTel" placeholder="<?php echo $Treasurer->getOB_Tel(); ?>" value="<?php echo $Treasurer->getOB_Tel(); ?>">
                        <label for="treasurerImage">Image Link:</label>
                        <input type="text" name="treasurerImage" placeholder="<?php echo $Treasurer->getOB_Image(); ?>" value="<?php echo $Treasurer->getOB_Image(); ?>">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" name="saveTreasurer">Save Treasurer</button>
                    </form>
                    <form action="" method="POST" class="obForm">
                        <h3><strong>Secretary Details</strong></h3>
                        <label for="secretaryName">Name:</label>
                        <input type="text" name="secretaryName" placeholder="<?php echo $Secretary->getOB_Name(); ?>" value="<?php echo $Secretary->getOB_Name(); ?>">
                        <label for="secretaryTitle">Title:</label>
                        <input type="text" name="secretaryTitle" style="text-align: center;" placeholder="<?php echo $Secretary->getOB_Title(); ?>" disabled>
                        <label for="secretaryFb">Fb Link:</label>
                        <input type="text" name="secretaryFb" placeholder="<?php echo $Secretary->getOB_fbLink(); ?>" value="<?php echo $Secretary->getOB_fbLink(); ?>">
                        <label for="secretaryTel">Tel:</label>
                        <input type="text" name="secretaryTel" placeholder="<?php echo $Secretary->getOB_Tel(); ?>" value="<?php echo $Secretary->getOB_Tel(); ?>">
                        <label for="secretaryImage">Image Link:</label>
                        <input type="text" name="secretaryImage" placeholder="<?php echo $Secretary->getOB_Image(); ?>" value="<?php echo $Secretary->getOB_Image(); ?>">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" name="saveSecretary">Save Secretary</button>
                    </form>
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="fixed-tab-2">
                <div class="page-content facRep section-facRep-tile">
                    <?php
                        include("./assets/src/includes/showFacRep.php");
                        showFacRepAdmin($conn);
                    ?>
                    <script>
                            function saveFacRep(id){
                                const faculty = $('#facRep-title' + id).val();
                                const name = $('#facRep-name' + id).val();
                                const email = $('#facRep-email' + id).val();
                                const fbLink = $('#facRep-fb' + id).val();
                                const tel = $('#facRep-tel' + id).val();
                                const image = $('#facRep-image' + id).val();

                                $.post("./assets/src/includes/handlers/ajax/updateFacRepDetails.php", {
                                    id: id,
                                    faculty: faculty,
                                    name: name,
                                    email: email,
                                    fbLink: fbLink,
                                    tel: tel,
                                    image: image
                                }, function(data) {
                                    if(data != ""){
                                        const notifMessage = { message: data };
                                        ShowNotif(notifMessage);
                                    }
                                });
                            }

                            function deleteFacRep(id){
                                const prompt = confirm("Are you sure you want to delete this Faculty? THIS ACTION CANNOT BE UNDONE!")
                                if (prompt){
                                    $.post("./assets/src/includes/handlers/ajax/deleteFacRep.php", {
                                    id: id,
                                    }, function(data) {
                                        if(data != ""){
                                            const notifMessage = { message: "Faculty Removed Successfully!" };
                                            ShowNotif(notifMessage);
                                            window.location.href = data;
                                        }
                                    });
                                }
                            }
                    </script>
                </div>
                <div class="addNewFaculty">
                    <div class="addNewFaculty-contents">
                        <label for="facultyName">Faculty Name:</label>
                        <input class="addFR" type="text" name="facultyName" id="facultyName" placeholder="Faculty Of bla bla">
                        <label for="facultyRepName">Faculty Representative:</label>
                        <input class="addFR" type="text" name="facultyRepName" id="facultyRepName" placeholder="John Doe">
                        <label for="facultyRepEmail">FacRep Email:</label>
                        <input class="addFR" type="text" name="facultyRepEmail" id="facultyRepEmail" placeholder="John.Doe@mail.com">
                        <label for="facultyRepFb">FacRep Facebook:</label>
                        <input class="addFR" type="text" name="facultyRepFb" id="facultyRepFb" placeholder="https://www.facebook.com/johndoe">
                        <label for="facultyRepTel">FacRep Tel:</label>
                        <input class="addFR" type="text" name="facultyRepTel" id="facultyRepTel" placeholder="5-777 7777">
                        <label for="facultyRepImage">FacRep Image:</label>
                        <input class="addFR" type="text" name="facultyRepImage" id="facultyRepImage" placeholder="https://www.website.com/image.png">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" id="addFaculty">Add New Faculty</button>
                        <script>
                            $('button#addFaculty').click(function() {
                                const facultyName = $('#facultyName').val();
                                const facultyRepName = $('#facultyRepName').val();
                                const facultyRepEmail = $('#facultyRepEmail').val();
                                const facultyRepFb = $('#facultyRepFb').val();
                                const facultyRepTel = $('#facultyRepTel').val();
                                const facultyRepImage = $('#facultyRepImage').val();

                                $.post('./assets/src/includes/handlers/ajax/addNewFaculty.php', {
                                    facultyName: facultyName,
                                    facultyRepName: facultyRepName,
                                    facultyRepEmail: facultyRepEmail,
                                    facultyRepFb: facultyRepFb,
                                    facultyRepTel: facultyRepTel,
                                    facultyRepImage: facultyRepImage
                                }, function(data) {
                                    if (data != "") {
                                        $('#facultyName').val("");
                                        $('#facultyRepName').val("");
                                        $('#facultyRepEmail').val("");
                                        $('#facultyRepFb').val("");
                                        $('#facultyRepTel').val("");
                                        $('#facultyRepImage').val("");
                                        const notifMessage = { message: data };
                                        ShowNotif(notifMessage);
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="fixed-tab-3">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <div class="post-part">
                        <form action="" method="POST" id="fbPostsFormAdmin-add">
                            <div class="addTitle">
                                <h5><label for="link">Add New FB POST:</label></h5>
                                <h5><input type="text" id="link" placeholder="Link:" name="link"></h5>
                            </div>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" type="submit" name="add" id="addBtn">Add Post</button>
                            <?php require_once("./assets/src/includes/handlers/addnewPost.php"); ?>
                        </form>
                    </div>
                    <hr>
                    <div class="post-part">
                        <div class="unionFbPosts">
                                <?php require_once('./assets/src/includes/displayFacebookPost.php'); displayFBPostAdmin($conn); ?>
                        </div>
                    <hr>
                    <div class="suggestion-part">
                        <button name="submitRefresh" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" id="refreshBtn">
                        Refresh Suggestions
                        </button>
                        <script>
                            $("button#refreshBtn").click(function(button){
                                $.post("./assets/src/includes/handlers/ajax/refreshSuggestionsAdminSide.php", {}, function(data) {
                                    if(data != ""){
                                        $(".forum-suggestions").html(data);
                                    }
                                });
                            });
                        </script>
                        <section class="forum-suggestions" id="suggestionsAdminPage">
                            <?php
                                require_once("./assets/src/includes/displaySuggestions.php");
                                DisplaySuggestionAdminSide($conn);
                            ?>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        <section class="footer">
            <footer>
                <div class="footer-top">
                    <a href="" id="home" class="footer-link"><p>Home</p></a>
                    <p>|</p>
                    <a href="https://www.uom.ac.mu/index.php/disclaimercopyright"class="footer-link"><p>Disclaimer & Copyrights</p></a>
                    <p>|</p>
                    <a href="https://www.uom.ac.mu/"class="footer-link"><p>University Of Mauritius</p></a>
                </div>
                <div class="footer-bottom">
                    <p>Designed & Developed for LLC 2060 - Mini-Project</p>
                </div>
            </footer>
        </section>
        <div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
            <div style="margin: auto;" class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
        </div>
    </div>
</html>