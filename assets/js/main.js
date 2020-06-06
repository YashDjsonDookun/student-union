$(window).on('load', function() {
    const dialog = document.querySelector('dialog');

    if (window.location.href.includes('/forum')) {
        $("nav#navHome").hide();
        $("nav.navForum").show();
    } else {
        $("nav#navHome").show();
        $("nav#navForum").hide();
        const bannerLeft = document.querySelector(".banner-left");
        const bannerRight = document.querySelector(".banner-right");
        $("body").removeClass("preload");
        bannerLeft.classList.add('animated', 'rollIn');
        bannerRight.classList.add('animated', 'zoomIn');

    }

    $('.mdl-dialog').hide();

    $('.mdl-navigation__link').click(function(e) {
        e.preventDefault();
    });

    // $('button#saveFacRep').click(function(e) {
    //     e.preventDefault();
    //     console.log("test");
    // });

    $('.pinkBtn').click(function(e) {
        e.preventDefault();
    });

    $('a#admin_button').click(function(e) {
        e.preventDefault();
        if ($(window).width() > 768) {
            $('.mdl-dialog').show();
            const dialog = document.querySelector('dialog');

            dialog.showModal();
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.querySelector('.close').addEventListener('click', function() {
                dialog.close();
            });
        } else {
            alert("Admin Page Only available on Desktop Devices!");
        }
    });

    $('button.login').click(function(e) {
        e.preventDefault();
        let username = $('#inputLogin').val();
        let password = $('#inputPassword').val();
        if (username.length > 0 && password.length > 0) {
            adminLogin(username, password);
            $('#inputLogin').val("");
            $('#inputPassword').val("");
            dialog.close();
        } else {
            alert("Make sure to fill both fields");
            $('#inputLogin').val("");
            $('#inputPassword').val("");
        }
    });

    $('.mdl-navigation__link#overview').click(function() {
        $('html, body').animate({
            scrollTop: $('section.sectionOne').offset().top
        }, 1000)
        const sectionOneLeftPortion = document.querySelector(".leftPortion");
        const sectionOneRightPortion = document.querySelector(".rightPortion");
        sectionOneLeftPortion.classList.add('animated', 'fadeInLeft');
        sectionOneRightPortion.classList.add('animated', 'fadeInRight');
        resetNavBarLinkColor();
        $("a#overview").css("color", "#429DD1");
    });

    $('.mdl-navigation__link#apply').click(function() {
        $('html, body').animate({
            scrollTop: $('section.section-appointment').offset().top
        }, 1000)
        resetNavBarLinkColor();
        $("a#apply").css("color", "#429DD1");
    });

    $('.mdl-navigation__link#facRepNavLink').click(function() {
        $('html, body').animate({
            scrollTop: $('section.section-facRep').offset().top
        }, 1000)
        resetNavBarLinkColor();
        $("a#facRepNavLink").css("color", "#429DD1");
    });

    $('#forum').click(function() {
        window.location.href = "./forum.php";
        resetNavBarLinkColor();
        $("a#forum").css("color", "#429DD1");
    });


    $('.mdl-navigation__link#ob').click(function() {
        $('html, body').animate({
            scrollTop: $('section.section-OfficeBearers').offset().top
        }, 1000)
        resetNavBarLinkColor();
        $("a#ob").css("color", "#429DD1");
    });

    $('.mdl-navigation__link#reachUs').click(function() {
        $('html, body').animate({
            scrollTop: $('section.wherearewe').offset().top
        }, 1000)
        resetNavBarLinkColor();
        $("a#reachUs").css("color", "#429DD1");
    });

    $('.mdl-navigation__link#home').click(function(e) {
        window.location.href = "./";
    });

    $('#learnMore-btn').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('section.sectionOne').offset().top
        }, 1000)
        const sectionOneLeftPortion = document.querySelector(".leftPortion");
        const sectionOneRightPortion = document.querySelector(".rightPortion");
        sectionOneLeftPortion.classList.add('animated', 'fadeInLeft');
        sectionOneRightPortion.classList.add('animated', 'fadeInRight');
        resetNavBarLinkColor();
        $("a#overview").css("color", "#429DD1");
    });

    $("#home").click(function(e) {
        resetNavBarLinkColor();
        $("a#home").css("color", "#429DD1");
    });

    keepStickyNav();

    function keepStickyNav() {
        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $("header").addClass('sticky');
            } else {
                $("header").removeClass('sticky');
            }
        });
    }

    const sectionOneTrigger = $('.sectionOne').waypoint({
        handler: function(direction) {
            const sectionOneLeftPortion = document.querySelector(".leftPortion");
            const sectionOneRightPortion = document.querySelector(".rightPortion");
            sectionOneLeftPortion.classList.add('animated', 'fadeInLeft');
            sectionOneRightPortion.classList.add('animated', 'fadeInRight');
            resetNavBarLinkColor();
            $("a#overview").css("color", "#429DD1");
        }
    })

    const homeTrigger = $('.banner').waypoint({
        handler: function(direction) {
            resetNavBarLinkColor();
            $("a#home").css("color", "#429DD1");
        }
    });
    reachedOB();
    reachedApplyNow();
    reachedFacRepSection();
    reachedFindUsSection();
});

function resetNavBarLinkColor() {
    $("a#home").css("color", "rgb(66,66,66)");
    $("a#overview").css("color", "rgb(66,66,66)");
    $("a#ob").css("color", "rgb(66,66,66)");
    $("a#apply").css("color", "rgb(66,66,66)");
    $("a#facRepNavLink").css("color", "rgb(66,66,66)");
    $("a#reachUs").css("color", "rgb(66,66,66)");
}

function reachedOB() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= $('.sectionOne').offset().top + $('.sectionOne').outerHeight() - window.innerHeight) {
            resetNavBarLinkColor();
            $("a#ob").css("color", "#429DD1");
        }
    });
}

function reachedApplyNow() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= $('.section-appointment').offset().top + $('.section-appointment').outerHeight() - window.innerHeight) {
            resetNavBarLinkColor();
            $("a#apply").css("color", "#429DD1");
        }
    });
}

function reachedFacRepSection() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= $('.enrolment').offset().top + $('.enrolment').outerHeight() - window.innerHeight) {
            resetNavBarLinkColor();
            $("a#facRepNavLink").css("color", "#429DD1");
        }
    });
}

function reachedFindUsSection() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= $('.section-facRep').offset().top + $('.section-facRep').outerHeight() - window.innerHeight) {
            resetNavBarLinkColor();
            $("a#reachUs").css("color", "#429DD1");
        }
    });
}

function applyCourse() {
    window.location.href = "https://www.uom.ac.mu/index.php/study-at-uom/prospective-students/programmes-courses-on-offer";
}

function updateSuggestions() {
    var suggestion = $(".suggestionBox textarea").val();

    $.post("./assets/src/includes/handlers/ajax/updateSuggestions.php", { suggestion: suggestion }, function(data) {
        if (data != "") {
            $(".forum-suggestions").html(data);
            $(".formContainer form textarea").val("");
            $(".formContainer form textarea").attr("placeholder", "Talk To Us...");
            const notifMessage = { message: 'Thank You For Your FeedBack' };
            ShowNotif(notifMessage);
        }
    });
}

function deleteSuggestion(id) {
    const prompt = confirm("Are you sure you want to delete this Suggestion?");
    if (prompt) {
        $.post("./assets/src/includes/handlers/ajax/deleteSuggestion.php", { id: id }, function(data) {
            if (data != "") {
                $(".forum-suggestions").html(data);
                const notifMessage = { message: 'Suggestion Deleted!!' };
                ShowNotif(notifMessage);
            }
        });
    }
}

function ShowNotif(data) {
    const snackbarContainer = document.querySelector('#demo-toast-example');
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
}

function adminLogin(promptUsername, promptPassword) {
    $.post("./assets/src/includes/handlers/ajax/adminLogin.php", { username: promptUsername, password: promptPassword }, function(data) {
        if (data != "") {
            if (data.match("Problem Logging In!")) {
                console.log(data);
            } else {
                window.open(data, '_blank');
                console.log(data);
            }
        }
    });
}

function deleteFBPost(id) {
    const prompt = confirm("Are you sure you want to delete this Post?");
    if (prompt) {
        $.post("./assets/src/includes/handlers/ajax/deleteFbPost.php", { id: id }, function(data) {
            if (data != "") {
                $(".unionFbPosts").html(data);
                const notifMessage = { message: 'Post Deleted!!' };
                ShowNotif(notifMessage);
            }
        });
    }
}