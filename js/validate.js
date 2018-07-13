$(document).ready(function(){

  // // NumbersOnly
  // $.validator.addMethod("numbers", function(value, element) {
  //   return this.optional(element) || /^[0-9\ \-\+]+$/i.test(value);
  // }, "Phone must contain only numbers, + and -.");

  $('.eduinsto-data-picker').datepicker();

  // Validation
  $(".eduinsto-validation-form").validate({
    rules: {
      name: "required",
      designation: "required",
      class: "required",
      section: "required",
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "The Name field is required",
      designation: "The Designation field is required",
      class: "The Class field is required",
      section: "The Section field is required",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
      }
    }
  });
});
