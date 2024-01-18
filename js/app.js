/* Animate Banner Headings
   ========================================================================== */

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

/* Toggle Sidebar
   ========================================================================== */

let sidebarVisible = false;

function toggleSideBar() {

  sidebarVisible = !sidebarVisible; // Check if sidebar is currently on screen.

  // Toggle visibility and width.
  $("#js-sidebar").css("visibility", sidebarVisible ? "visible" : "hidden");
  $("#js-sidebar").css("width", sidebarVisible ? "240px" : "0");
}

/* Form Validation
   ========================================================================== */

let errorMessage;

function validateForm() {

  let isFormValid = false;
  let formErrorEl = $('#js-error'); // Div for displaying error message.
  formErrorEl.hide(); // Hide initially to give feedback whenever submit button is clicked.

  // Get input fields.
  const firstNameEl = $("#js-form input[name='first_name']");
  const lastNameEl = $("#js-form input[name='last_name']");
  const emailEl = $("#js-form input[name='email']");
  const subjectEl = $("#js-form input[name='subject']");
  const messageEl = $("#js-form textarea[name='message']");

  // Check if values are valid.
  isEmailValid = isValid(emailEl);
  isFirstNameValid = isValid(firstNameEl);
  isLastNameValid = isValid(lastNameEl);
  isSubjectValid = isValid(subjectEl);
  isMessageValid = isValid(messageEl);

  // Check if all values are valid.
  isFormValid = isFirstNameValid && isLastNameValid && isEmailValid && isSubjectValid && isMessageValid;

  // Display error or confirmation message.
  if (!isFormValid) {

    formErrorEl.text(errorMessage);
    formErrorEl.fadeIn(1000);

  } else {
    alert("Your message has been sent.")
  }

  return isFormValid;
}

function isValid(input) {
  
  let error = false;

  // Check for valid email address.
  if ($(input).is('input[type="email"]')) {
    if (!isValidEmail(input.val())) {
      error = true;
      errorMessage = "Please enter a valid email address."
    }
  } 
    
  // Check for empty text field.
  if (isEmpty(input.val())) {
    error = true;
    errorMessage = "Please fill in all required fields."
  }

  // Add error class to input fields if errors are found.
  error ? input.addClass("error") : input.removeClass("error");

  return !error;
}

// Check email with regex.
function isValidEmail(value) {
  const regex = /^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
  return regex.test(value);
}

// Check if string is empty.
function isEmpty(value) {
  return value === '';
}
