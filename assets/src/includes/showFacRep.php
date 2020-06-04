<?php
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
?>