$(function(){
$('#year').keyup(function(){
  var year=$('#year').val();
    $.post('search/uniInfoSearch.php',{input:year},function(data){
      var data1= JSON.parse(data);
      $('#uName').val(data1[0].University_Name);
      $('#uAdd').val(data1[0].University_Address);
      $('#uNum').val(data1[0].University_Contact);
      $('#uEmail').val(data1[0].University_Email);
      $('#uWeb').val(data1[0].University_Website);
      $('#uLand').val(data1[0].University_land_Acre);
      $('#uOwn').val(data1[0].University_Physical_Structure_owned_acre);
      $('#uRent').val(data1[0].University_Physical_Structure_rented);
      $('#uNumSchool').val(data1[0].No_Of_Schools);
      $('#uNumDepartment').val(data1[0].Department);
    });

});


});
