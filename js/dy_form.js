$(function(){
$('#year').keyup(function(){
  var year=$('#year').val();
  $('#uName').val('');
  $('#uAdd').val('');
  $('#uNum').val('');
  $('#uEmail').val('');
  $('#uWeb').val('');
  $('#uLand').val('');
  $('#uOwn').val('');
  $('#uRent').val('');
  $('#uNumSchool').val('');
  $('#uNumDepartment').val('');

    $.post('search/uniInfoSearch.php',{input:year},function(data){
      var data1= JSON.parse(data);
      console.log(data);
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

$('#teacheryear').keyup(function(){
  var teacheryear1=$('#teacheryear').val();

    $.post('search/teacherinfosearch.php',{tinput:teacheryear1},function(data12){
      var data2= JSON.parse(data12);

       $('#NoOfTeachers').val(data2[0].Total_Teacher);
       $('#noofAdjunctteachers').val(data2[0].Total_Teacher_Adjunct);
       $('#noofPHD').val(data2[0].Total_Teacher_grad_PhD);
       $('#noofprof').val(data2[0].Professor);
       $('#noofAssocProf').val(data2[0].Associate_Professor);
       $('#noofassProf').val(data2[0].Assistant_Professor);
       $('#noofLect').val(data2[0].Lecturer);

    });})
$('#stdyear').keyup(function(){
      var stdyear1=$('#stdyear').val();
        $.post('search/stdinfosearch.php',{sinput:stdyear1},function(data13){
          console.log(data13);
           var data3= JSON.parse(data13);

            $('#stdadmitted').val(data3[0].Admitted_Student);
            $('#stdfemaleadmitted').val(data3[0].Female_Student);
            $('#stdstud').val(data3[0].Total_Student_Studying);
            $('#stfemstud').val(data3[0].Total_Female_Student_Studying);
            $('#noofstdUND').val(data3[0].Undergraduate_pass);
            $('#noOFstudUNDhons').val(data3[0].Undergraduate_Hons);
            $('#stdpassUND').val(data3[0].Undergraduate_Passed_Student_Normal);
            $('#stdpassHons').val(data3[0].Undergraduate_Passed_Student_Hons);
            $('#stdpassENG').val(data3[0].Undergraduate_Passed_Student_Eng_tech);
            $('#stdpassgrad').val(data3[0].Graduate_Passed_Student_Normal);
            $('#stdpassgradENG').val(data3[0].Graduate_Passed_Student_Eng_tech);
            $('#povertystd').val(data3[0].Student_Proverty);
            $('#ffstd').val(data3[0].Student_Freedom_Fighter);


        });

});
$('#RPyear').keyup(function(){
  var rpyear1=$('#RPyear').val();
    $.post('search/RPinfosearch.php',{rinput:rpyear1},function(data14){
      console.log(data14);
      // var dataRP1= JSON.parse(datarp);
      //
      //  $('#noofRP').val(dataRP1[0].Research_Journal);
      //  $('#RPCom').val(dataRP1[0].Research_Project_Completed);
      //  $('#forRPpub').val(dataRP1[0].Published_Journal_Foreign);
      //  $('#locRPpub').val(dataRP1[0].Publish_Journal_Local);
      //  $('#noofPRPpub').val(dataRP1[0].Publish_Journal_Peer_review);


    });})
    $('#Fyear').keyup(function(){
          var finyear1=$('#Fyear').val();
            $.post('search/Fininfosearch.php',{finput:finyear1},function(dataf){
              console.log(dataf);
               var fdata3= JSON.parse(dataf);
               console.log(dataf);
                $('#Fincome').val(fdata3[0].Admitted_Student);
                $('#Ffincome').val(fdata3[0].Female_Student);
                $('#Fexpense').val(fdata3[0].Total_Student_Studying);
                $('#FExpenseEd').val(fdata3[0].Total_Female_Student_Studying);
                $('#FExpRes').val(fdata3[0].Undergraduate_pass);
                $('#FExpSal').val(fdata3[0].Undergraduate_Hons);
                $('#FExpSchol').val(fdata3[0].Undergraduate_Passed_Student_Normal);
                $('#FExpTrans').val(fdata3[0].Undergraduate_Passed_Student_Hons);
                $('#FExpElec').val(fdata3[0].Undergraduate_Passed_Student_Eng_tech);
                $('#FExpInf').val(fdata3[0].Graduate_Passed_Student_Normal);
                $('#FExpMed').val(fdata3[0].Graduate_Passed_Student_Eng_tech);
                $('#FExpMis').val(fdata3[0].Student_Proverty);


            });

    })

});
