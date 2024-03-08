const formEL = document.getElementById('js-form');
const firstNameEl = $("#js-form input[name='first_name']");
const lastNameEl = $("#js-form input[name='last_name']");
const emailEl = $("#js-form input[name='email']");
const subjectEl = $("#js-form input[name='subject']");
const messageEl = $("#js-form textarea[name='message']");

var selectedInputs = $('.form-text-field, .form-text-area');

// Remove invalid class from input fields on focus.
selectedInputs.on('focus', function() {
  $(this).removeClass("invalid");
});

let errorMessage;

formEL.addEventListener("submit", function(event) {
  let isFormValid = false;

  // Remove any existing form messages added with PHP.
  let phpMessageEl = $('#php-message');
  if (phpMessageEl) phpMessageEl.remove();

  // Hide form error div initially to give feedback whenever submit button is clicked.
  let formErrorEl = $('#js-message');
  formErrorEl.hide();

  // Check if values are valid.
  isEmailValid = isValid(emailEl);
  isFirstNameValid = isValid(firstNameEl);
  isLastNameValid = isValid(lastNameEl);
  isSubjectValid = isValid(subjectEl);
  isMessageValid = isValid(messageEl);

  // Check if all values are valid.
  isFormValid = isFirstNameValid && isLastNameValid && isEmailValid && isSubjectValid && isMessageValid;

  // If form is not valid display error message and prevent submission.
  if (!isFormValid) {
    formErrorEl.addClass("error");
    formErrorEl.text(errorMessage);
    formErrorEl.fadeIn(1000);
    event.preventDefault();
  }
});

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

  // Add invalid class to input fields if errors are found.
  error ? input.addClass("invalid") : input.removeClass("invalid");

  return !error;
}

// Check email with regex.
function isValidEmail(value) {
  const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(value);
}

// Check if string is empty.
function isEmpty(value) {
  return value === '';
}

// Clear all inputs fields
function clearFields() {
  firstNameEl.val("");
  lastNameEl.val("");
  emailEl.val("");
  subjectEl.val("");
  messageEl.val("");
}
