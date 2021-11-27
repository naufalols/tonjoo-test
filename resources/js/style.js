// $(document).on("click", "#addMoreTransaction", function () {
//     $('addTransaction')
// });
window.iniciateUserChoiceBool = false;
var multipleTransaction = 0;

$("#addMoreTransaction").on("click", function () {
    multipleTransaction++;
    $("#moreTransaction").append(
        "<div id='multipleTransaction" + multipleTransaction + "' class='border border-1 mb-2 p-2'><button type='button' onClick='removeTransaction(" + multipleTransaction + ")' class='btn-close float-end' aria-label='Close'></button><div class='mb-3 row'><label for='inputPassword' class='col-sm-2 col-form-label'>Category</label><div class='col-sm-3'><select name='category[" + multipleTransaction + "]' class='form-select' aria-label='Default select example'><option selected>-- select category --</option><option value='1'>Income</option><option value='2'>Expense</option></select></div></div><div class='row'><div class='col-md-10 offset-md-2'><table class='table table-responsive-md table-bordered' data-id='" + multipleTransaction + "'><thead><tr id='rowTransactionTable1_" + multipleTransaction + "><th scope='col'>Transaction Name</th><th scope='col'>Nominal (IDR)</th><th scope='col'></th></tr></thead><tbody><tr><td><input name='transactionName[" + multipleTransaction + "][0]' type='text' class='form-control'></td><td><input name='nominal[" + multipleTransaction + "][0]' type='text' class='form-control'></td><td><button type='button' class='btn btn-primary btn-sm addMoreTransactionTable text-white'><i class='bi bi-plus-square'></i></button></td></tr></tbody></table></div></div></div>");

});



window.removeTransaction = function (code) {
    $("#multipleTransaction" + code).remove();
}

var multipleTransactionTable = 0;
$(document.body).on('click', '.addMoreTransactionTable', function () {
    var id = $(this).closest('table').data("id");
    multipleTransactionTable++;
    var row = $(this).closest('tbody').last().append(
        "<tr id='rowTransactionTable1_" + multipleTransactionTable + "'><td><input name='transactionName[" + id + "][" + multipleTransactionTable + "]' type='text' class='form-control'></td><td><input name='nominal[" + id + "][" + multipleTransactionTable + "]' type='text' class='form-control'></td><td><button type='button' class='btn btn-danger btn-sm minusMoreTransactionTable text-white'id='minusMoreTransactionTable'><i class='bi bi-dash'></i></button></td></tr>"
    )
    // var id = $(this).closest('table').data("id");
});

$(document.body).on('click', '.minusMoreTransactionTable', function () {
    $(this).closest('tr').remove();
});
