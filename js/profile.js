$(document).ready(function () {

    $( "#navitem .nav-item" ).bind( "click", function(event) {
       var clickedItem = $( this );
       $( "#navitem .nav-item" ).each( function() {
             $( this ).removeClass( "active" );
       });
       clickedItem.addClass( "active" );
    });

    $('#profileSettings').on('click',function(){
      $('#servicesDiv').hide();
      $('#profileDiv').show();
    });

    $('#servicesAvailed').on('click',function(){
      $('#profileDiv').hide();
      $('#servicesDiv').show();
    });

    $( "#servicesnav div" ).bind( "click", function(event) {
       var clickedItem = $( this );
       $( "#servicesnav div" ).each( function() {
             $( this ).removeClass( "active" );
       });
       clickedItem.addClass( "active" );
    });

    $('#gst').on('click',function(){
      $('#udyamtable').hide();
      $('#socialtable').hide();
      $('#gsttable').show();
    });

    $('#udyam').on('click',function(){
      $('#gsttable').hide();
      $('#socialtable').hide();
      $('#udyamtable').show();
    });

    $('#social').on('click',function(){
      $('#gsttable').hide();
      $('#udyamtable').hide();
      $('#socialtable').show();
    });

    $('#inputState').focus(function() {
      $(this).hide();
      $('#formState').show();
    });
  
    // when the select is changed, update the input and hide the select
    $('#formState').change(function() {
      $('#inputCity').hide();
      $('#formCity').show();
      var selectedOption = $(this).find('option:selected').text();
      $('#inputState').val(selectedOption);
      $(this).hide();
      $('#inputState').show();
    });

    $('#formCity').change(function() {
      var selectedOption = $(this).find('option:selected').text();
      $('#inputCity').val(selectedOption);
      $(this).hide();
      $('#inputCity').show();
    });
  
    // when the user clicks outside the input and select, hide the select and show the input
    $(document).mouseup(function(e) {
      var container = $('#stateDiv');
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        $('#formState').hide();
        $('#inputState').show();
      }
    });

    //If image edit link is clicked
    $("#profile-img").on('click', function(e){
       e.preventDefault();
       $("#fileInput:hidden").trigger('click');
    });

    //On select file to upload
    $("#fileInput").on('change', function(){
       var image = $('#fileInput').val();
       var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
       
       //validate file type
       if(!img_ex.exec(image)){
             alert('Please upload only .jpg/.jpeg/.png/.gif file.');
             $('#fileInput').val('');
             return false;
       }else{
             $( "#picUploadForm" ).submit();
       }
    });
 });

 //After completion of image upload process
 function completeUpload(success, fileName) {
    if(success == 1){
       $('#profile-img').attr("src", "");
       $('#profile-img').attr("src", fileName);
       $('#fileInput').attr("value", fileName);
       alert('Profile Pic Changed');
    }else{
       alert('There was an error during file upload!');
    }
    return true;
 }