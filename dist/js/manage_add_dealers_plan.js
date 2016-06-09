$(function() {
  // Handler for .ready() called.
  
  var placeAPI = "api/processplaces.php";
  var processPlaceAction = false;
  var isAlreadyExist = false;
  var refreshPage = false;
  var pincodeExist = false;
  var isEdit = false;
  var isDirty = false;
  var currentEditId , currentLocationDeleteId , currentAreaID;


  $("#modeofcommission").on("change",function(){
    
    var currentVal = $.trim($("#modeofcommission option:selected").text()).toLowerCase();
    
    console.log(currentVal);

    if(currentVal == "fixed") {
      $("#commamt").removeAttr("disabled");
      $("#percentage").attr("disabled","disabled");
      $("#percentage").val("");
    }
    else {
      $("#percentage").removeAttr("disabled");;
      $("#commamt").attr("disabled","disabled");
      $("#commamt").val("");
    }

  });

  $("#plantype").on("change",function(){
    
    var currentVal = $.trim($("#plantype option:selected").text()).toLowerCase();
    
    console.log(currentVal);

    if(currentVal == "free") 
      $("#planfare").attr("disabled","disabled");
    else 
      $("#planfare").removeAttr("disabled");
    

  });

  $("#planname").on("keyup",function(){

    var data = {};
    data.mode = "planname_autosuggest";
    data.val = $.trim($(this).val()).toLowerCase();
      
    processAjaxCalls(placeAPI,data,plannameAutoSuggestSuccessCallback);    
  
  });


  plannameAutoSuggestSuccessCallback = function(response){

    if(response == 1) {
          processPlaceAction = false;
          isAlreadyExist = true;
          $("#locationentry").parent().addClass("has-error").removeClass("has-success");
        }
        else {
          processPlaceAction = true;
          isAlreadyExist = false;
          $("#locationentry").parent().addClass("has-success").removeClass("has-error");
        }

  };

  $("#createplan").on("click",function(){
    
    var data = $('#add_dealers_plan').serializeArray();
    
    var chkTextNameArray = ["#planname","#postingperday","#postingperweek","#postingpermonth","#plantype",
                            "#planfare","#refundbooking","#planconsole","#modeofcommission","#percentage",
                            "#commamt","#validityindays"];

    var chkTextNameArrayMsg = ["Please Plan name","Please Per Day",
                               "Please Per Week","Please Per Month",
                               "Please Select the Plan type","Please enter Plan fare",
                               "Please Select the Refund Booking Preference","Please select the console type",
                               "Please select the Commission","Please select the Commission Percentage",
                               "Please select the Commission Amount","Please select days in validity"];

    var emptyMsgForTitle = "Add Dealers Plan !!!";
    var validationPass = true;
    
    $.each(chkTextNameArray,function(i,v){
      
      if(!$(chkTextNameArray[i]).prop('disabled')) {

        if( $.trim($(chkTextNameArray[i]).val()) == "" ) {
            console.log(chkTextNameArray[i]);
            processErrorInline(chkTextNameArrayMsg[i],"");  
            $(chkTextNameArray[i]).focus(); 
            processPlaceAction = false;
            return false;
        } else {
            processErrorInline(chkTextNameArrayMsg[i],"hidden");      
            processPlaceAction = true;
        }

     }

    });

    var myform = $('#add_dealers_plan');

    // Find disabled inputs, and remove the "disabled" attribute
    var disabled = myform.find(':input:disabled').removeAttr('disabled');

    // serialize the form
    var serialized = myform.serializeArray();

    // re-disabled the set of inputs that you previously enabled
    disabled.attr('disabled','disabled');
    
    var data = {};
    data.mode = (isEdit) ? "update_dealer_plan" : "add_dealer_plan";
    data.val = serialized;
    

    if(isEdit)
      data.editid = currentEditId;
    
    if(processPlaceAction)
      processAjaxCalls(placeAPI,data,addDealerPlanSuccesCallback);
    

  });

  $('#myModal').on('hidden.bs.modal', function (e) {
      
      if(refreshPage)
        window.location.href = window.location.href;
  });

  addDealerPlanSuccesCallback = function(response){
    
    if (response == 200) {
        refreshPage = true;

        var msgForAreaTitle = "Manage Dealers Plan";
        var msgForAreaBody = (isEdit) ? "Successfully Updated." : "Successfully Created.";
        
        processModal(msgForAreaTitle,msgForAreaBody);
        //window.location.href = window.location.href;
    } 

  }

  

  

});