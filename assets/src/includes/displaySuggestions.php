<?php
    function DisplaySuggestionClientSide($conn){
    $query = mysqli_query($conn, "SELECT * FROM table_suggestions ORDER BY id DESC;");
    while ($row = mysqli_fetch_array($query))
    {
        echo '
                    <div class="mdl-chip mdl-chip--contact suggestion-chip" id="'.$row['id'].'">
                        <span class="mdl-chip__contact mdl-color--pink mdl-color-text--white"><span class="demo-card-image__filename facRep-fb material-icons">account_circle</span></span>
                        <p style="margin-left: 2vh; color: black"><strong>Anonymous said:</strong></p>
                        <span class="mdl-chip__text">``'.$row['suggestion'].'``</span>
                    </div>
                ';
    }

    }

    function DisplaySuggestionAdminSide($conn){
        $query = mysqli_query($conn, "SELECT * FROM table_suggestions ORDER BY id DESC;");
        while ($row = mysqli_fetch_array($query))
        {
            echo '
                    <div class="mdl-chip mdl-chip--contact suggestion-chip" id="'.$row['id'].'">
                        <span class="mdl-chip__contact mdl-color--pink mdl-color-text--white"><span class="demo-card-image__filename facRep-fb material-icons">account_circle</span></span>
                        <p style="margin-left: 2vh; color: black"><strong>Anonymous said:</strong></p>
                        <span class="mdl-chip__text">``'.$row['suggestion'].'``</span>
                        <p class="deleteSuggestionButton" onclick="deleteSuggestion(\''.$row['id'].'\')"><u>Delete Comment</u></p>
                    </div>
                ';
        }
    }
?>