
// Hide the form with ID '84826124966deb187c4a9b3033026112'
var formSettingId = '84826124966deb187c4a9b3033026112';
$('#' + formSettingId).hide();

// Save and submit the form when 'btn_submit' is clicked
$('#btn_submit').on('click', function () {
  $('form').saveForm();
  $('form').submitForm();
});

// Allow only one checkbox to be selected in the grid
$('body').on('change', '#grd_translatorsC input[type="checkbox"]', function () {
  if ($(this).is(':checked')) {
    $('#grd_translatorsC input[type="checkbox"]').not(this).prop('checked', false).val(0);
  }
});

// On submit, find the row where column 5 equals 1 and save column 6 value to 'hid_current_select'
$('#btn_submit').on('click', function () {
  for (let i = 0; i <= $('#grd_translatorsC').getNumberRows(); i++) {
    let value = $('#grd_translatorsC').getValue(i, 5);
    if (value == 1) {
      $("#hid_current_select").setValue($('#grd_translatorsC').getValue(i, 6));
      console.log($("#hid_current_select").getValue());
      $('form').saveForm();
      $('form').submitForm();
    }
  }
});

// Enable/disable validation for 'txa_managerCa' based on radio button 'rad_managerA' value
$('#txa_managerCa').disableValidation();
$("#rad_managerA").setOnchange(function (newval, oldval) {
  if (newval == "2") {
    $("#txa_managerCa").enableValidation();
  } else {
    $("#txa_managerCa").disableValidation();
  }
});

// On checkbox change in grid 'grd_translatorsC', determine the row and column of the clicked checkbox
$(document).on('change', '#grd_translatorsC input[type="checkbox"]', function () {
  let rowNo = $(this).closest('.pmdynaform-grid-row').index() + 1;  // Get row number
  let colNo = $(this).closest('.form-group').parent().index();  // Get column number
  let colArray = [2, 3, 4, 5, 6];  // Columns to affect
  unsetOthers('grd_translatorsC', colArray, rowNo, colNo);  // Call function to unset other checkboxes
});

// Function to unset other checkboxes in the same row but different columns
function unsetOthers(gridId, colArray, rowNo, colNo) {
  let colNoExist = colArray.indexOf(colNo);  // Check if the clicked column is in the array

  if (colNoExist != -1) {  // If it's in the array, remove it
    colArray.splice(colNoExist, 1);
    colArray.forEach(element => {
      $('#' + gridId).setValue("0", rowNo, element);  // Uncheck other checkboxes in the same row
    });
  }
}