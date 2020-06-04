<?php
    function displayFBPostClient($conn){
        $query = mysqli_query($conn, "SELECT * FROM `table_fbposts`;");

        while ($row = mysqli_fetch_array($query))
        {
            echo '
                    <div class="fbPost" id='. $row['id'] .'>
                    <p style="margin-left: 3vh;">Post Id:'. $row['id'] .'</p>
                    '
                    . $row['fbPostLink'] .
                    '
                    </div>
                ';
        }
    }

    function displayFBPostAdmin($conn){
        $query = mysqli_query($conn, "SELECT * FROM `table_fbposts`;");

        while ($row = mysqli_fetch_array($query))
        {
            echo '
                    <div class="fbPost" id='. $row['id'] .'>
                    <p class="deleteSuggestionButton" onclick="deleteFBPost(\''.$row['id'].'\')"><u>Delete Post</u></p>
                    <p style="margin-left: 3vh;">Post Id:'. $row['id'] .'</p>
                    '
                    . $row['fbPostLink'] .
                    '
                    </div>
                ';
        }
    }
?>