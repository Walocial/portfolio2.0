$(document).ready(function() {
    // Event listener for click and keypress on Settings Button
    $('#settingsBtn').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            toggle_settings();
        }
    });

    // Event listener for click and keypress on Settings Chevron
    $('#settingsChevron').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            toggle_settings();
        }
    });

    function toggle_settings() {
        const subIcons = $('.subIcon'); // Vælg alle subIcons
        const isHidden = subIcons.css('visibility') === 'hidden'; // Tjek om de er skjult

        if (isHidden) {
            // Vis subIcons og rul dem ud
            subIcons.each(function(index) {
                $(this).css('visibility', 'visible') // Gør synlige
                .delay(index * 50) // Tilføj en lille forsinkelse mellem hver
                    .animate({ right: `${5 + (index*2)}em` }, 100); // Animer "right" til 1.5em
            });
            $('#settingsBtn').css('transform', 'rotate(-315deg)');
            $('#settingsChevron').css('transform', 'rotate(-180deg)');
        } else {
            // Skjul subIcons og rul dem ind
            subIcons.each(function(index) {
                $(this).delay(index * 50) // Tilføj en lille forsinkelse mellem hver
                    .animate({ right: '0.55em' }, 100, function() {
                        $(this).css('visibility', 'hidden'); // Gør usynlige efter animationen
                    });
            });
            $('#settingsBtn').css('transform', 'rotate(0deg)');
            $('#settingsChevron').css('transform', 'rotate(0deg)');
        }
    }


    // Event listener for click and keypress on Theme Change
    $('#themeChange').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            change_theme($(this));
        }
    });

    // Function to change theme
    function change_theme(element) {
        if (element.hasClass('fa-sun')) {
            toggle_light_mode(element);
        } else if (element.hasClass('fa-moon')) {
            toggle_default_mode(element);
        }
    }

    // Function to toggle to light mode
    function toggle_light_mode(element) {
        element.removeClass('fa-sun').addClass('fa-moon');
        document.documentElement.className = 'light_theme';
        localStorage.setItem('theme', 'light_theme');
        $('#logo_default').attr('srcset', './assets/media/tjmLogo_light_mode.png');
        $('#logo_app').attr('src', './assets/media/tjmLogo_light_mode_app.png');
    }

    // Function to toggle to default mode
    function toggle_default_mode(element) {
        element.removeClass('fa-moon').addClass('fa-sun');
        document.documentElement.className = 'default';
        localStorage.setItem('theme', 'default');
        $('#logo_default').attr('srcset', './assets/media/tjmLogo_default.png');
        $('#logo_app').attr('src', './assets/media/tjmLogo_default_app.png');
    }



    // Event listener for click and keypress on Animation Stop
    $('#animationStop').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            toggle_animations();
        }
    });

    let playAnimations = true;

    // Funktion til at skifte eller indlæse animationsstatus
    function toggle_animations(shouldPlay) {
        if (typeof shouldPlay === 'boolean') {
            playAnimations = shouldPlay; // Indstil til den angivne værdi
        } else {
            // Skift status, hvis ingen værdi gives
            playAnimations = !playAnimations;
        }

        if (playAnimations) {
            $('.left_btn, .right_btn, .progress, .timeline-item').removeClass('no-animation');
            $('#animationStop')
                .removeClass('fa-play').addClass('fa-pause')
                .attr('title', 'Stop animationer')
                .attr('aria-label', 'Stop animationer');
            localStorage.setItem('playAnimations', true);
        } else {
            $('.left_btn, .right_btn, .progress, .timeline-item').addClass('no-animation');
            $('#animationStop')
                .removeClass('fa-pause').addClass('fa-play')
                .attr('title', 'Afspil animationer')
                .attr('aria-label', 'Afspil animationer');
            localStorage.setItem('playAnimations', false);
        }
    }
    
    function load_animation_preference() {
        const storedValue = localStorage.getItem('playAnimations');
        // Hvis der ikke er en gemt værdi, sæt standarden til true
        const shouldPlay = storedValue === null ? true : storedValue === 'true';
        toggle_animations(shouldPlay); // Indstil animationsstatus baseret på værdi
    }


    // Event listener for click and keypress on close dialogue
    $('#closeDialogue').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            $('#landingPageH1').toggle();
            $('#openDialogue').css("display", "flex");
        }
    });

    // Event listener for click and keypress on open dialogue
    $('#openDialogue').on('click keypress', function(event) {
        if (event.type === 'click' || event.key === ' ' || event.key === 'Enter') {
            $('#landingPageH1').toggle();
            $('#openDialogue').toggle();
        }
    });


    // Gem den oprindelige værdier for header/h1
    let originalSize = $("#aboutMeH1").css("font-size"); 
    let originalHeight = $('body > header').css('height');
    let originalSection = $('.fullScreenSection').css('height');
    let originalPadding = $('#aboutMeSection').css('padding-block');
    let originalCog = $('.headerIcon').css('font-size');
    let originalLogoSource = $('.responsiveLogo picture source').prop('outerHTML');

    // Ændrer størrelsen på header på tablet og desktop - mini og default
    function resizeHeader(size) {
        if ($(window).width() <= 725) return;
        if(size && size == 'mini') {
            $('body > header').css({'height': '65px'});
            $('.responsiveLogo picture source').remove();
            $('.responsiveLogo img').attr('src', './assets/media/tjmLogo_default_app.png')
                            .attr('width', '50')
                            .attr('height', '55');
            $('.fullScreenSection').css({'height': 'calc(100% - 65px);'});
            $('#aboutMeSection').css({'padding-block': '65px 5px'});
            $('#logo_default').show();
            $('.headerIcon').css('font-size', '30px');
            $('#tagLine').hide();
        } else if(size && size == 'default') {
            $('body > header').css({'height': originalHeight});
            $('.responsiveLogo picture').prepend(originalLogoSource);
            $('.fullScreenSection').css({'height': originalSection});
            $('#aboutMeSection').css({'padding-block': originalPadding});
            $('.headerIcon').css('font-size', originalCog);
            $('#tagLine').fadeIn(1000);
        } else {
            return;
        }

    }

    // Gør H1 mindre på scroll, og normal størrelse ved ingen scroll
    $("#infoCard-Container").on("scroll", function() {
        if ($(this).scrollTop() > 0) {
            resizeHeader('mini');
            $("#aboutMeH1").css({"font-size": "18px", 'margin-top': '0', });
            $("#Scroll_to_top").fadeIn();
            setSkillLevels();
        } else {
            resizeHeader('default');
            $("#aboutMeH1").css({"font-size": originalSize, 'margin-top': '20px'});
            $("#Scroll_to_top").fadeOut();
        }
        revealTimelineItems();
    });

    // Scroll til toppen af infocard-Container eller window
    $('#Scroll_to_top').on("click", function () {
    const $target = $('#infoCard-Container').length 
        ? $('#infoCard-Container') 
        : $('html, body');

    $target.animate({ scrollTop: 0 }, 400);
    });


    //Funktion til at opdatere tekst på et element, med mulighed for at skifte tilbage
    //Element parameter er optionel, men ændrer som default dialogboksens content hvis ikke angivet
    function updateText(displayNewText, newText, element) {
        if (!element || element === "") element = '.dialogueBox-content';
        const originalText = 'Velkommen til min portefølje';
        return $(element).text(displayNewText? newText : originalText); 
    }

    //Bruger data attributtet fra de 4 main CTA knapper til at opdatere teksten
    $('.link_list_item a')
    .on("focus mouseenter", function () {
        const hoverText = $(this).closest('.link_list_item').data('hovertext');
        updateText(true, hoverText);
    })
    .on("blur mouseleave", function () {
        updateText(false);
    });


    // Funktion der vælger et hover_text element baseret på det hoveret element
    function toggleHoverText(element, show) {
        const linkedHoverText = '#' + $(element).attr('id') + '_hover_text';
        $(linkedHoverText).css('transform', show ? 'translateX(0)' : 'translateX(-100%)');
    }

    // toggleHoverText() er brugt for at undgå redeklaration af linkedHoverText
    $('.social_button')
    .on("focus mouseenter", function () {
        toggleHoverText(this, true);
    })
    .on("blur mouseleave", function () {
        toggleHoverText(this, false);
    });

    
    function setSkillLevels() {
        let skills = [
            { id: "html", level: 100 },
            { id: "css", level: 100 },
            { id: "js", level: 94 },
            { id: "jq", level: 90 },
            { id: "ts", level: 75 },
            { id: "react", level: 60 },
            { id: "wp", level: 75 },
            { id: "uiux", level: 90 },
            { id: "seo", level: 85 },
            { id: "njs", level: 75 },
            { id: "ejs", level: 70 },
            { id: "mdb", level: 65 },
            { id: "sql", level: 60 },
            { id: "dint", level: 65 },
            { id: "dsec", level: 70 },
            { id: "git", level: 85 },
            { id: "devops", level: 70 },
        ];
    
        skills.forEach(skill => {
            let { color, text } = getSkillAttributes(skill.level);
    
            let $skillElem = $(`#${skill.id}-skill`);
            $skillElem.css({ "width": `${skill.level}%`, "background-color": color });
            $skillElem.attr("data-experience", text);
    
            // Opret et span inde i .skill med teksten
            let $tooltip = $("<span>").addClass("skill-tooltip").text(text);
            $skillElem.find(".skill-tooltip").remove(); // Fjern eksisterende, hvis der er en
            $skillElem.append($tooltip);
        });
    }
    
    function getSkillAttributes(level) {
        if (level >= 95) return { color: "var(--progress-best)", text: "Ekspert" };
        if (level >= 85) return { color: "var(--progress-good)", text: "Øvet" };
        if (level >= 75) return { color: "var(--progress-average)", text: "Erfaren" };
        if (level >= 60) return { color: "var(--progress-okay)", text: "Mindre Erfaren" };
        if (level >= 50) return { color: "var(--progress-subpar)", text: "Begrænset Erfaring" };
        return { color: "var(--progress-weak)", text: "Mangler Erfaring" };
    }
    
    function revealTimelineItems() {
        // Hvis animationspræferencen er slået fra, vises tidslinjen altid
        if(!playAnimations) {
            return $(".timeline-item").css("opacity", "1");
        } else {
            $(".timeline-item").css("opacity", "");
        }
        $(".timeline-item").each(function () {
            let itemRect = this.getBoundingClientRect();
            let containerRect = $("#infoCard-Container")[0].getBoundingClientRect();
    
            // Tjek om elementet er inden for containerens synlige område
            if (itemRect.top >= containerRect.top && itemRect.bottom <= containerRect.bottom) {
                $(this).addClass("visible");
            } else {
                // $(this).removeClass("visible");
                return;
            }
        });
    }


    // Apply stored theme on page load
    const storedTheme = localStorage.getItem('theme');
    switch(storedTheme) {
        case 'default':
            toggle_default_mode($('#themeChange'));
            break;
        case 'light_theme':
            toggle_light_mode($('#themeChange'));
            break;
    }

    load_animation_preference();

    if($(".timeline")){
        revealTimelineItems();
    }
});
