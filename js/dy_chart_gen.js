$(function(){
gen_bar1();
gen_line1();
gen_line2();
gen_pie1();
//function for total student studying
function gen_bar1(){
  var year=$('#year1 option:selected').val();
  $.post('chart/bar1.php',{input:year},function(data){

        var data1=JSON.parse(data);
        var bar1=[];
        var bar2=[];


        for (var i = 0 ; i < data1.length ; i++) {
        bar1[i]=data1[i]["University_Name"];

        bar2[i]=data1[i]["Total_Student_Studying"];
        }
        barChart1(bar1,bar2);
   });

}
//function Growth of Admitted Student
function gen_line1(){
  var uni1=$('#selUni1 option:selected').val();
  var uni2=$('#selUni2 option:selected').val();

  $.post('chart/line1.php',{uni1:uni1,uni2:uni2},function(line_data){

        var data=JSON.parse(line_data);
        var uniYear=data.year;
        var uni1Data=data.uni1Data;
        var uni2Data=data.uni2Data;
       lineChart1(uni1,uni2,uniYear,uni1Data,uni2Data);
   });
}

//function Income/Expense over the years
function gen_line2(){
  var uni1=$('#selLine2 option:selected').val();
  $.post('chart/line2.php',{uni1:uni1},function(line_data){

        var data=JSON.parse(line_data);
        var uniYear=data.year;
        var income=data.income;
        var expense=data.expense;
      lineChart2(uniYear,income,expense);
   });
}
//function Student Distribution
function gen_pie1(){
  var selyear=$('#sel1pie1 option:selected').val();
  var uni1=$('#sel2pie1 option:selected').val();
  $.post('chart/pie1.php',{uni1:uni1,year:selyear},function(pie_data){
        var data=JSON.parse(pie_data);
        console.log(data);

      myPieChart1(data);
   });
}


//calling function for total student studying
  $('#year1').change(function(){
    gen_bar1();

  });
//function for growth of Student

  $('#selUni1').change(function(){
    gen_line1();

  });

  $('#selUni2').change(function(){
    gen_line1();

  });

  $('#selLine2').change(function(){
    gen_line2();

  });

  $('#sel1pie1').change(function(){
    gen_pie1();

  });

  $('#sel2pie1').change(function(){
    gen_pie1();

  });

// print bar1 chart
  function barChart1(bar1,bar2){
    $("canvas#myChart").remove();
    $("div#bar1").append('<canvas id="myChart"  width="400" height="400"></canvas>');
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: bar1,
            datasets: [{
                label: ["Number of Student"],
                data: bar2 ,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 159, 64, 0.6)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  }

  //charts
  //Draw line chart Growth of Admitted_Student
  function lineChart1(uniName1,uniName2,uniYear,uni1Data,uni2Data){
    $("canvas#myLineChart").remove();
    $("div#line1").append('<canvas id="myLineChart"  width="400" height="300"></canvas>');
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: uniYear ,
            datasets: [{
                label: uniName1,
                data: uni1Data,
                fill: false,
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ]},
                {
                label: uniName2,
                data: uni2Data,
                fill: false,
                borderColor: [
                    'rgba(28, 221, 1, 1)'
                ],
            }],
        },
        options: {
          //add
        }
    });

  }

  //Draw line chart Income/Expense over the years
  function lineChart2(uniYear,income,expense){
    $("canvas#myLineChart2").remove();
    $("div#line2").append('<canvas id="myLineChart2"  width="400" height="300"></canvas>');

    var ctx = document.getElementById('myLineChart2').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: uniYear ,
            datasets: [{
                label: 'Income',
                data: income,
                fill: false,
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ]},
                {
                label: 'Expense',
                data: expense,
                fill: false,
                borderColor: [
                    'rgba(28, 221, 1, 1)'
                ],
            }],
        },
        options: {
          //add
        }
    });

  }
  function myPieChart1(piedata){
    $("canvas#myPieChart1").remove();
    $("div#pie1").append('<canvas id="myPieChart1"  width="300" height="250"></canvas>');

    var ctx = document.getElementById('myPieChart1').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Female Student','Undergraduate pass'
                      ,'Undergraduate Hons','Undergraduate Passed Student Normal'
                      ,'Undergraduate Passed Student Hons','Undergraduate Passed Student Eng tech'
                      ,'Graduate Passed Student Normal','Graduate Passed Student Eng tech'
                      ,'Student Poverty'
                      ,'Student Freedom Fighter'],
            datasets: [{
                data: piedata,
                backgroundColor: [
                  'rgba(250, 109, 4,0.6)',
                  'rgba(23, 33, 229, 0.6)',
                  'rgba(127, 218, 59, 0.6)',
                  'rgba(202, 158, 6, 0.6)',
                  'rgba(59, 237, 159, 0.6)',
                  'rgba(59, 232, 237, 0.6)',
                  'rgba(116, 59, 237, 0.6)',
                  'rgba(213, 59, 237, 0.6)',
                  'rgba(255, 106, 106, 0.6)',
                  'rgba(237, 59, 145, 0.6)'
                ],
                borderColor: [
                  'rgba(250, 109, 4,1)',
                  'rgba(23, 33, 229,  1)',
                  'rgba(127, 218, 59, 1)',
                  'rgba(202, 158, 6, 1)',
                  'rgba(59, 237, 159, 1)',
                  'rgba(59, 232, 237 1)',
                  'rgba(116, 59, 237, 1)',
                  'rgba(213, 59, 237, 1)',
                  'rgba(255, 106, 10, 1)',
                  'rgba(237, 59, 145,1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
        }
    });


  }











});
