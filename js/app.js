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

showBannerHeadings();
