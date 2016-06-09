$(document).ready(function() {
    //$('#example').DataTable();
    //$('#example').DataTable( {
      //"processing": false
      /*"serverSide": true,
      ajax: 'http://hariramnandagopal.com/cq/services.php'*/
    //});

    
    $("#example").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
    });

    $(".formclear").on("click",function(){
        $("input").val("").removeClass("has-error").removeClass("has-success");
        $("input").removeAttr("disabled");
    	$("select").val(0);
    });

    /* validation */

    $('input[data-define="phonenumber"]').on("keypress", function (e) {
       // var charCode = (typeof e.which === "number") ? e.which : e.keyCode;
        //if (String.fromCharCode(charCode).match(/[^0-9-]/g)) return false;
		if (e.ctrlKey || e.altKey) {
								e.preventDefault();
							} else {
								var key = e.charCode? e.charCode : e.keyCode;
								//alert(key);
								if (!((key == 8) || (key == 9) || (key >= 35 && key <= 40) || (key == 45) || (key == 46) || (key >= 48 && key <= 57))) {
									e.preventDefault();
								}
							}
    });

    $('input[data-define="number"]').on("keydown", function (e) {

        if (e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 9) || (key == 46) || (key >= 35 && key <= 40) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
                e.preventDefault();
            }
        }

    });

    $('input[data-define="numberdot"]').on("keydown", function (e) {

        if (e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;			
            if (!((key == 8) || (key == 9) || (key == 110) || (key == 190) || (key == 46) || (key >= 35 && key <= 40) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
                e.preventDefault();
            }
        }


    });

    $('input[data-define="letternumber"]').on("keypress", function (e) {

        var charCode = (typeof e.which === "number") ? e.which : e.keyCode;
        
        //if (String.fromCharCode(charCode).match(/[^a-zA-Z0-9-]/g)) return false;
		if (e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.charCode? e.charCode : e.keyCode;
			//alert(key);
            if (!((key == 8) || (key == 9) || (key == 46) || (key >= 35 && key <= 40) || (key >= 48 && key <= 57) || (key >= 65 && key <= 122))) {
                e.preventDefault();
            }
        }
    });


    processModal = function (title,body) {

	    $('#myModal').find(".modal-title").html(title);
	    $('#myModal').find(".modal-body").html(body);

	    $('#myModal').modal();

	 }

     processErrorInline = function (body,state) {

        if(state=="")
            $('#showerror').removeClass('hidden');
        else
            $('#showerror').addClass('hidden');    

        $('#showerror').find(".msg").html(body);

     }

	 processAjaxCalls = function(url,params,callback){

	    $.ajax({
	          type: "POST",
	          url: url,
	          data: params,
	          success: function (msg) {

	            callback(msg);
	              
	          }
	    });
	    
	}

});
