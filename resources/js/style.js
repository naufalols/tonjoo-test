// $(document).on("click", "#addMoreTransaction", function () {
//     $('addTransaction')
// });

var multipleTransaction = 1;

$("#addMoreTransaction").on("click", function () {
    multipleTransaction++;
    $("#moreTransaction").append(
        "<div id='multipleTransaction" + multipleTransaction + "' class='border border-1 mb-2 p-2'><button type='button' onClick='removeTransaction(" + multipleTransaction + ")' class='btn-close float-end' aria-label='Close'></button><div class='mb-3 row'><label for='inputPassword' class='col-sm-2 col-form-label'>Category " + multipleTransaction + "</label><div class='col-sm-3'><select class='form-select' aria-label='Default select example'><option selected>-- select category --</option><option value='1'>Income</option><option value='2'>Expense</option></select></div></div><div class='row'><div class='col-md-10 offset-md-2'><table class='table table-responsive-md table-bordered'><thead><tr><th scope='col'>#</th><th scope='col'>Transaction Name</th><th scope='col'>Nominal (IDR)</th><th scope='col'></th></tr></thead><tbody><tr><th scope='row'>1</th><td><input type='text' class='form-control'></td><td><input type='text' class='form-control'></td><td><button class='btn btn-primary btn-sm text-white'><i class='bi bi-plus-square'></i></button></td></tr></tbody></table></div></div></div>");

});



window.removeTransaction = function (code) {
    $("#multipleTransaction" + code).remove();
}
