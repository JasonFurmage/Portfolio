let i = 0;
let heading = $('#js-heading').text(); // Get current page heading.

// Make heading empty and sub heading invisible to set up effects.
$('#js-heading').text("");
$('#js-subheading').css("opacity",  0);

function showBannerHeadings() {
  if (i < heading.length) {
    $("#js-heading").append(heading.charAt(i));
    i++;
    setTimeout(showBannerHeadings, 100);
  } else {
    $('#js-subheading').animate({opacity: 1}, 1000);
  }
}

showBannerHeadings();