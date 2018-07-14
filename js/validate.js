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
      class_id: "required",
      class_numeric: "required",
      category: "required",
      capacity: "required",
      description: "required",
      title: "required",
      user_id: "required",
      type: "required",
      pass_mark: "required",
      final_mark: "required",
      subject: "required",
      subject: "required",
      code: "required",
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "The Name field is required",
      designation: "The Designation field is required",
      class: "The Class field is required",
      class_id: "The Class field is required",
      class_numeric: "The Class Numeric field is required",
      category: "The Category field is required",
      capacity: "The Capacity field is required",
      description: "The Description field is required",
      title: "The Title field is required",
      user_id: "The Teacher field is required",
      type: "The Type field is required",
      pass_mark: "The Pass Mark field is required",
      final_mark: "The Final Mark field is required",
      subject: "The Subject field is required",
      code: "The Subject Code field is required",
      section: "The Section field is required",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
      }
    }
  });
});
