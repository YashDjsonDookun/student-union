<?php require_once("./assets/src/includes/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
    <?php require_once("assets/src/includes/header.php");?>
                <main class="mdl-layout__content">
                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="forum-container preloader">
                            <center><h3><strong><u>UOM Student Union POSTS & FORUM</u></strong></h3></center>
                            <div class="unionFbPosts">
                                <?php require_once('./assets/src/includes/displayFacebookPost.php'); displayFBPostClient($conn); ?>
                            </div>
                            <center><h3><strong><u>GOT QUESTIONS OR SUGGESTIONS?</u></strong></h3></center>
                            <center><h5><strong>We Value All Your Input! Leave your questions below, We allow you to stand for yourself and ask your questions/feedbacks anonymously!</strong></h5></center>
                            <center><h5><strong>Help Us Help You!</strong></h5></center>
                            <section class="anonymous-section">
                                <div class="formContainer">
                                    <form action="forum.php" method="POST">
                                        <div class="mdl-textfield mdl-js-textfield suggestionBox">
                                            <textarea class="mdl-textfield__input" type="text" rows= "9" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Talk To Us...</label>
                                        </div>
                                        <button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pinkBtn" onclick="updateSuggestions()">
                                            SUBMIT
                                        </button>
                                    </form>
                                </div>
                            </section>
                            <section class="forum-suggestions">
                                <?php
                                    require_once("./assets/src/includes/displaySuggestions.php");
                                    DisplaySuggestionClientSide($conn);
                                ?>
                            </section>
                        </div>
                        <div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
                            <div style="margin: auto;" class="mdl-snackbar__text"></div>
                            <button class="mdl-snackbar__action" type="button"></button>
                        </div>
                        <section class="footer">
                            <?php require_once("./assets/src/includes/footer.php")?>
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
</html>