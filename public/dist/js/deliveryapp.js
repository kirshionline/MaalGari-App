$('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
$('#exp_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
$('#issued_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })


$('#pexp_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

$('#cissued_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

$('#inissued_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
$('#joining_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

$('#li_issued_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
$(document).ready(function(){
 //  $("#bank_detail_selected option[selected]").removeAttr("selected");   



$("#section_start_btn").click(function (e) {


	e.preventDefault();

	var file_size = document.getElementById("profile_img");


	var reqlength = $('.tab_first .form-control').length;
	console.log(reqlength);
	var value = $('.tab_first .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else if (file_size.files.length == 0) {

		alert("Choose Profile Picture");
	} else {

		$('[href="#section_one"]').tab('show');

	}

});


$("#section_one_btn").click(function (e) {


	e.preventDefault();
	var reqlength = $('.tab_sec .form-control').length;
	console.log(reqlength);
	var value = $('.tab_sec .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else {

		$('[href="#section_two"]').tab('show');


	}

});


$("#section_two_btn").click(function (e) {

	e.preventDefault();
	var file_size = document.getElementById("registration");
	var reqlength = $('.tab_third .form-control').length;
	console.log(reqlength);
	var value = $('.tab_third .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else if (file_size.files.length == 0) {

		alert("Choose registration certificate");
	} else {

		$('[href="#section_three"]').tab('show');


	}


});

$("#section_three_btn").click(function (e) {

	e.preventDefault();
	var file_size = document.getElementById("licence");
	var reqlength = $('.tab_four .form-control').length;
	console.log(reqlength);
	var value = $('.tab_four .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else if (file_size.files.length == 0) {

		alert("Choose licence file");
	} else {

		$('[href="#section_four"]').tab('show');

	}

});

$("#section_four_btn").click(function (e) {
	e.preventDefault();

	var reqlength = $('.tab_five .form-control').length;
	console.log(reqlength);
	var value = $('.tab_five .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else {

		$('[href="#section_five"]').tab('show');

	}

});

$("#section_five_btn").click(function (e) {
	e.preventDefault();
	var file_size = document.getElementById("cirminal_certificate");
	var reqlength = $('.tab_six .form-control').length;
	console.log(reqlength);
	var value = $('.tab_six .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else if (file_size.files.length == 0) {

		alert("Choose cirminal certificate");
	} else {

		$('[href="#section_six"]').tab('show');


	}

});


$("#form_submit").click(function (e) {

	e.preventDefault();
	var file_size = document.getElementById("id_card");
	var reqlength = $('.tab_last .form-control').length;
	console.log(reqlength);
	var value = $('.tab_last .form-control').filter(function () {
		return this.value != '';
	});

	if (value.length >= 0 && (value.length !== reqlength)) {

		alert('Please fill out all required fields.');
	} else if (file_size.files.length == 0) {

		alert("Choose id card image");
	} else {

		$("#drivers").submit();

	}
});

















    $("#bank_detail_selected").change(function(){
        $("#driver_bank_detail_form").submit();

    });
    $("#vehicle_status_selected").change(function(){
        $("#driver_vehicle_form").submit();
    });
    $("#driver_licence_selected").change(function(){
        $("#driver_licence_form").submit();
    });
    $("#residence_status_selected").change(function(){
       $("#residence_status_form").submit();

    });
      $("#criminal_status_selected").change(function(){
       $("#Criminal_status_form").submit();

    });

       $("#company_status_selected").change(function(){
       $("#company_status_form").submit();

    });

});