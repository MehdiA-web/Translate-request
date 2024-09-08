'if manager click correction he must write caption';

/* 
$("#txa_managerC").disableValidation();
$("#rad_managerA").setOnchange(function (newval, oldval) {
    if (newval == "1") {
        $("#txa_managerC").enableValidation();
    } else {
        $("#txa_managerC").disableValidation();
    }
}); 
*/

'for save and submit form with btn';

/*
$('#btn_submit').on('click', function () {
    $('form').saveForm();
    $('form').submitForm();
});
*/

'choose on checkbox horizantal';

/*
$(document).on('change', '#grd_translatorsC input[type="checkbox"]', function () {
    let rowNo = $(this).closest('.pmdynaform-grid-row').index() + 1;
    let colNo = $(this).closest('.form-group').parent().index();
    let colArray = [2, 3, 4, 5, 6];
    unsetOthers('grd_translatorsC ', colArray, rowNo, colNo);
});

function unsetOthers(gridId, colArray, rowNo, colNo) {

    let colNoExist = colArray.indexOf(colNo);

    if (colNoExist != -1) {
        colArray.splice(colNoExist, 1);
        colArray.forEach(element => {
            $('#' + gridId).setValue("0", rowNo, element);
        });
    }

}
*/

'if one of checkboxes clicked others unclick';

/*
$('body').on('change', '#grd_translatorsC input[type="checkbox"]', function () {
  if ($(this).is(':checked')) 
    $('#grd_translatorsC input[type="checkbox"]').not(this).prop('checked', false).val(0);
  }
});
*/

'find the check box that is clicked';

/*
$('#btn_submit').on('click', function () {
  for(let i = 0;i <= $('#grd_translatorsC').getNumberRows();i++){
    let value = $('#grd_translatorsC').getValue(i, 5);
    if(value == 1){
      $("#hid_current_select").setValue($('#grd_translatorsC').getValue(i, 6));
      console.log($("#hid_current_select").getValue());
      $('form').saveForm();
      $('form').submitForm();
    }
  }
});
*/
'';