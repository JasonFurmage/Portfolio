let i = 0;
let heading = $('#heading').text(); // Get current page heading.

// Make heading empty and sub heading invisible to set up effects.
$('#heading').text("");
$('#sub-heading').css("opacity",  0);

function showBannerHeadings() {
  if (i < heading.length) {
    $("#heading").append(heading.charAt(i));
    i++;
    setTimeout(showBannerHeadings, 100);
  } else {
    $('#sub-heading').animate({opacity: 1}, 1000);
  }
}

let sidebarVisible = false;

function toggleSideBar() {

  sidebarVisible = !sidebarVisible; // Check if sidebar is currently on screen.

  // Toggle visibility and width.
  document.getElementById("js-sidebar").style.visibility = sidebarVisible ? "visible" : "hidden" ;
  document.getElementById("js-sidebar").style.width = sidebarVisible ? "240px" : "0" ;
}

showBannerHeadings();
