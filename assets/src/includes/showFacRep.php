<?php
    function showFacRepClient($conn){
        $query = mysqli_query($conn, "SELECT * FROM table_facrep;");
        $image = "";
        while ($row = mysqli_fetch_array($query))
        {
            $facRep = new FacultyRep($conn,$row["facRep_title"]);
            echo '
                <div class="obearer demo-card-image mdl-card mdl-shadow--4dp facRep-Image" id="'.$row["id"].'">
                    <script>
                        $(".obearer.demo-card-image.mdl-card.facRep-Image#'.$row['id'].'").css({
                            "background-image": "url('.$row["facRep_image"].')",
                            "background-repeat" : "no-repeat",
                            "background-size": "cover"
                        });
                    </script>
                    <div class="mdl-card__title mdl-card--expand"></div>
                    <div class="mdl-card__actions">
                        <span class="demo-card-image__filename facRep-title">'.$facRep->get_Title().'</span>
                        <span class="demo-card-image__filename facRep-name">'.$facRep->get_Name().'</span>
                        <span class="demo-card-image__filename facRep-email">'.$facRep->get_Email().'</span>
                        <a class="fb_link" href="'.$facRep->get_FbLink().'" target="_blank">
                            <span class="demo-card-image__filename facRep-fb material-icons">face</span>
                        </a>
                        <span class="demo-card-image__filename facRep-tel">'.$facRep->get_Tel().'</span>
                    </div>
                </div>
            ';
        }
    }

    function showFacRepAdmin($conn){
        $query = mysqli_query($conn, "SELECT * FROM table_facrep;");
        $image = "";
        while ($row = mysqli_fetch_array($query))
        {
            $facRep = new FacultyRep($conn,$row["facRep_title"]);
            echo '
                <div class="obearer demo-card-image mdl-card mdl-shadow--4dp facRep-Image facRepAdminPage" id="'.$row["id"].'">
                    <script>
                        $(".obearer.demo-card-image.mdl-card.facRep-Image#'.$row['id'].'").css({
                            "background-image": "url('.$row["facRep_image"].')",
                            "background-repeat" : "no-repeat",
                            "background-size": "cover"
                        });
                    </script>
                    <div class="mdl-card__title mdl-card--expand"></div>
                    <div class="mdl-card__actions">
                        <form action="" method="POST" class="facRepForm" id="'.$row["id"].'">
                            <input type="text" id="facRep-title'.$row['id'].'" placeholder="'.$facRep->get_Title().'"value="'. $facRep->get_Title().'">
                            <input type="text" id="facRep-name'.$row['id'].'" placeholder="'.$facRep->get_Name().'"value="'. $facRep->get_Name().'">
                            <input type="text" id="facRep-email'.$row['id'].'" placeholder="'.$facRep->get_Email().'"value="'. $facRep->get_Email().'">
                            <input type="text" id="facRep-fb'.$row['id'].'" placeholder="'.$facRep->get_FbLink().'"value="'. $facRep->get_FbLink().'">
                            <input type="text" id="facRep-tel'.$row['id'].'" placeholder="'.$facRep->get_Tel().'"value="'. $facRep->get_Tel().'">
                            <input type="text" id="facRep-image'.$row['id'].'" placeholder="'.$facRep->get_Image().'"value="'. $facRep->get_Image().'">
                            <button style="margin-top: 1vh" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" type="button" onclick="saveFacRep('.$row["id"].')">Save</button>
                            <button style="margin-top: 1vh" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" type="button" onclick="deleteFacRep('.$row["id"].')">Delete</button>
                        </form>
                    </div>
                </div>
            ';
        }
    }
?>