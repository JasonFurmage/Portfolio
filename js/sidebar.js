let sidebarVisible = false;

function toggleSideBar() {

  sidebarVisible = !sidebarVisible; // Check if sidebar is currently on screen.

  // Toggle visibility and width.
  $("#js-sidebar").css("visibility", sidebarVisible ? "visible" : "hidden");
  $("#js-sidebar").css("width", sidebarVisible ? "240px" : "0");
}

// Set hamburger to active for animation and toggle sidebar.
$(document).ready(function() {
  $('.hamburger').on('click', function() {
    $(this).toggleClass('active');
    toggleSideBar();
  });
});