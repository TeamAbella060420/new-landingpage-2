$(document).ready(function() {

	$(this).on('change','.form-select', function(){
	var divs =$(this).val();
	if($(this).val()=="all"){
	$("div:not(:has(select))").hide();
	}
	if($(this).val()=="div1"){
	 $("div:has(select), div:has(select) *").show();	
	$("#" + divs).show();
	$("div:has(select)").show();
        }
	if($(this).val()=="div2"){

        }
	if($(this).val()=="div3"){

        }
	if($(this).val()=="div4"){

        }
	if($(this).val()=="div5"){

        }
	if($(this).val()=="div6"){

        }
	});

	$(this).on('click','.btn_save_link',function(){
	var form_number= $(this).data('form_number');
	var formObj;
	if(form_number=="form1") formObj = $('.form1').serialize();
	if(form_number=="form2") formObj = $('.form2').serialize();
	if(form_number=="form3") formObj = $('.form3').serialize();
	if(form_number=="form4") formObj = $('.form4').serialize();
	if(form_number=="form5") formObj = $('.form5').serialize();
        if(form_number=="form6") formObj = $('.form6').serialize();        

	if(form_number=="form201") formObj = $('.form201').serialize();
	if(form_number=="form202") formObj = $('.form202').serialize();
	if(form_number=="form203") formObj = $('.form203').serialize();

	if(form_number=="form401") formObj = $('.form401').serialize();
	if(form_number=="form402") formObj = $('.form402').serialize();
	if(form_number=="form403") formObj = $('.form403').serialize();
	if(form_number=="form404") formObj = $('.form404').serialize();
	if(form_number=="form405") formObj = $('.form405').serialize();

	if(form_number=="form501") formObj = $('.form501').serialize();
	if(form_number=="form502") formObj = $('.form502').serialize();
	if(form_number=="form503") formObj = $('.form503').serialize();
	if(form_number=="form504") formObj = $('.form504').serialize();
	if(form_number=="form505") formObj = $('.form505').serialize();
	
	if(form_number=="form601") formObj = $('.form601').serialize();
	if(form_number=="form602") formObj = $('.form602').serialize();
	if(form_number=="form603") formObj = $('.form603').serialize();
	if(form_number=="form604") formObj = $('.form604').serialize();
	if(form_number=="form605") formObj = $('.form605').serialize();
	if(form_number=="form606") formObj = $('.form606').serialize();
	if(form_number=="form607") formObj = $('.form607').serialize();
	
	if(form_number=="form701") formObj = $('.form701').serialize();
	if(form_number=="form702") formObj = $('.form702').serialize();
	if(form_number=="form703") formObj = $('.form703').serialize();
	if(form_number=="form704") formObj = $('.form704').serialize();
	if(form_number=="form705") formObj = $('.form705').serialize();
	if(form_number=="form706") formObj = $('.form706').serialize();
	if(form_number=="form707") formObj = $('.form707').serialize();
	if(form_number=="form708") formObj = $('.form708').serialize();
	if(form_number=="form709") formObj = $('.form709').serialize();
	if(form_number=="form710") formObj = $('.form710').serialize();
	    $.ajax({
      		type: 'POST',
      		url: 'save.php',
      		data: formObj,
      		success: function(response) {
        		console.log(response);
        		alert('Data saved successfully!');
      		},
      		error: function(xhr, status, error) {
	        	console.log(xhr);
        		console.log(status);
      			console.log(error);
        		alert('Error saving data!');
    	  }
    	});
	});
     

        $(this).on('click', '.btn_save_model', function () {
  var form_number = $(this).data('form_number');
  var formObj;
  if (form_number == "formM01"){formObj = $('.formM01').serialize();}
  if (form_number == "formM02") formObj = $('.formM02').serialize();
  if (form_number == "formM03") formObj = $('.formM03').serialize();
  if (form_number == "formM04") formObj = $('.formM04').serialize();
  if (form_number == "formM05") formObj = $('.formM05').serialize();
  if (form_number == "formM06") formObj = $('.formM06').serialize();
  if (form_number == "formM07") formObj = $('.formM07').serialize();
  if (form_number == "formM08") formObj = $('.formM08').serialize();
  if (form_number == "formM09") formObj = $('.formM09').serialize();
  if (form_number == "formM010") formObj = $('.form010').serialize();
  if (form_number == "formM11") formObj = $('.form11').serialize();
  if (form_number == "formM12") formObj = $('.form12').serialize();
  if (form_number == "formM13") formObj = $('.form13').serialize();
  if (form_number == "formM14") formObj = $('.form14').serialize();

  var formData = new FormData(document.querySelector('.' + form_number));
  var fileInput = document.querySelector('input[type="file"]');
  formData.append('image', fileInput.files[0]);

		if (confirm("Are you sure you want to save"))
			$.ajax({
				type: 'POST',
				url: 'model_save.php',
				data: formData,
				contentType: false,
				cache: false,
				processData: false,
				success: function (response) {
					alert('Data saved successfully!');
					setTimeout(function() {
						 location.reload();
					}, 3000);
				},
				error: function (xhr, status, error) {
					console.log(xhr);
					console.log(status);
					console.log(error);
					alert('Error saving data!');
				}
			});
		else {
			return false;
		}  
});

     });
