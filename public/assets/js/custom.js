

	

	$.ajaxSetup({
		cache:false
	});

	

	$("body").on('focus','.datepick',function(){
		$(this).datepicker({
			dateFormat : 'dd/mm/yy'
		});


		if($('.mask_phone').length > 0){
  			$(".mask_phone").mask("(999)999-9999");	
		};

	})

	
	
	
	$("#buttonAjax").click(function(){
		$("#ajaxDemo").html("<img src='http://localhost:70/med/public/assets/img/loading.gif'>").load("http://localhost:70/med/public/patient/create");

	})


	//TYpe head js
	$('#form_patientid').typeahead({
		    source: function (query, process) {
		        return $.get('http://localhost:70/med/public/test/list.json', { query: query }, function (data) {
		            return process(data.options);
		        });
		    }
		});

	


