function dd_intialize() {
    // Whatever instruction you want to run instantly after the page loads goes here
    console.log("This page is now active");
}

// Every other instructions, variables, functions that will run later goes below

// Setting default variables
var announcement_has_been_closed = false;

// The next button that changes the slider
function change_view(where) {
    
    // First we check who is the current view
    var current_element = dd(".current_view").select();

    // Then we get the next and previous elements
    var next_element = current_element.nextSibling;
    var prev_element = current_element.previousSibling;

    // Makes the whole screen blank so the change will be smooth
    // Then make changes behind the blank screen
    dd("#transition").fadeIn(500);

    // Wait for another 5 secs to display, making sure change is smooth
    setTimeout(function(){

        // First, remove current view
        current_element.classList.remove("current_view");

        // Then decide if to go to next or previous element
        if (where == "next") {
            next_element.classList.add("current_view");
        } else if (where == "previous") {
            prev_element.classList.add("current_view");
        }

        dd("#transition").fadeOut(500);
        dd("main").select().scrollIntoView();

    }, 1000)

    // Check if announcement has not been closed
    if (!announcement_has_been_closed) {
        close_announcement();
    }

}

function close_announcement() {

    dd("#announcement").fadeOut(500);
    announcement_has_been_closed = true;

    // The homepage needs to be adjusted if announcement is closed
    var top_description = dd("#top_description > div").select();
    if (getComputedStyle(top_description).top > "15%") {
        top_description.style.top = "20%";
        dd("#top_description").select().style.height = "700px";
    }
}

function cta(cta) {
    
    var current_cta = dd(".current_cta");
    var next_cta = dd('#'+cta).select();

    if (cta == 'no') {
        dd("#cta").fadeOut('500');
    }

    else {

        // First, fade out current cta
        current_cta.fadeOut(500);

        // Wait till fadeIn is complete
        setTimeout(function() {

            // Remove 'current_cta' class from the element it is currently on
            current_cta.select().classList.remove('current_cta');
            next_cta.classList.add('current_cta');

        }, 700);


    }
}

dd_load({
    url: "app/index/announcement",
    target: "#announcement",
    nodata: function() {
        close_announcement();
    }
})

dd_submit({
    target: "#submit_number > form",
    url: "app/index/submit_number",
    callback: function() {
        cta('cta_success');
        setTimeout(() => {
           cta('no'); 
        }, 5000);
    }
});

function open_admin() {

    if (dd("#admin_section").select()) {
        dd("#admin_section").fadeIn(500);
        return;
    }

    dd_ajax({
        url: 'admin',
        ready: function(data) {
            var container = document.createElement("div");
            container.innerHTML = data;
    
            var scripts = container.querySelectorAll("script");
            dd("main").select().appendChild(container);
    
            for (i=0; i < scripts.length; i++) {
                var url = scripts[i].src;
                loadScript(url);
            }
            
    
        }
    })
}

function loadScript(url) {
    var script = document.createElement("script"); // create a script tag
    script.src = url; // set the source of the script to your script
    dd("main").select().appendChild(script);
}