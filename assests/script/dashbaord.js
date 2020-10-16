
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 $('.profile').click(function () {
    if(  
        $("#drop-down-profile").hasClass('row-sidebar-profile')){
        $("#drop-down-profile").addClass('row-sidebar-profile-display');
        $("#drop-down-profile").removeClass('row-sidebar-profile');
    }
    else{
        $("#drop-down-profile").addClass('row-sidebar-profile');
        $("#drop-down-profile").removeClass('row-sidebar-profile-display');
    }
});

// hover function only if width is above 768px
if( $( window ).width()>768){
    $('#sidebar').hover(function () {
        // alert("done");
       $(this).addClass('sidebar-opened');
       $(".row-sidebar-text").addClass('text-opened');
       $('.icon-sidebar').css('margin','0px');
       $('.row-sidebar').css('padding','0px 10px');
       }
      ,
      function (){
       $(this).removeClass('sidebar-opened');
       $(".row-sidebar-text").removeClass('text-opened');
       $(".dashboard-inner").removeClass('da');
       $('.icon-sidebar').css('margin','auto');
       $('.row-sidebar').css('padding','0px');
      } 
    );
       }



    //    sidebar open on click only if width is 768 or lower
    $('#floating').click(function () {
        if(  !$(".sidebar").hasClass('sidebar-opened')){
       $(".sidebar").addClass('sidebar-opened');
       $('.sidebar-inner').addClass('sidebar-inner-display');
       $('.sidebar-inner-display').removeClass('sidebar-inner');
       $(".row-sidebar-text").addClass('text-opened');
       $('.icon-sidebar').css('margin','0px');
       $('.row-sidebar').css('padding','0px 10px');
        }
        else{
       $(".sidebar").removeClass('sidebar-opened');
       $(".row-sidebar-text").removeClass('text-opened');
       $(".dashboard-inner").removeClass('da'); 
       $('.sidebar-inner-display').addClass('sidebar-inner');
       $('.sidebar-inner').removeClass('sidebar-inner-display');
       $('.icon-sidebar').css('margin','auto');
       $('.row-sidebar').css('padding','0px');
        }
    });
       
    


    // show all department progress on dashboard for User Type 1
    $('#text').click(function (){
        $('#show').css('display','block');
        $('#text').css('display','none');
        $('#texthide').css('display','block');
    });
    $('#texthide').click(function (){
        $('#show').css('display','none');
        $('#text').css('display','block');
        $('#texthide').css('display','none');
    });



     // show all department class conduction on dashboard for User Type 1
    $('#textclass').click(function (){
        $('#showclass').css('display','block');
        $('#textclass').css('display','none');
        $('#textclasshide').css('display','block');
    });
    $('#textclasshide').click(function (){
        $('#showclass').css('display','none');
        $('#textclass').css('display','block');
        $('#textclasshide').css('display','none');
    });






   
    
    


    // top display of chart of entire university....


   



// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








//////////////////////////---------------------- ALL DEPARTMENTS CHARTS--------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\





// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// dept of cse chart overall 
var CSEOverall = document.getElementById("CSEOverall").getContext('2d');
    
    var myChart = new Chart(CSEOverall, {
        type: 'line',
        data: {
            labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
            datasets: [{
                label: 'Series 1', // Name the series
                data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
                fill: false,
                borderColor: '#2196f3', // Add custom color border (Line)
                backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                borderWidth: 2 // Specify bar border width
            }]},
        options: {
          responsive: true, // Instruct chart js to respond nicely.
          maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
        }
    });
    

    

// dept of es chart overall 
var ESOverall = document.getElementById("ESOverall").getContext('2d');
    
var myChart = new Chart(ESOverall, {
    type: 'line',
    data: {
        labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
        datasets: [{
            label: 'Series 1', // Name the series
            data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 2 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});





// dept of ee chart overall 
var EEOverall = document.getElementById("EEOverall").getContext('2d');
    
    var myChart = new Chart(EEOverall, {
        type: 'line',
        data: {
            labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
            datasets: [{
                label: 'Series 1', // Name the series
                data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
                fill: false,
                borderColor: '#2196f3', // Add custom color border (Line)
                backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                borderWidth: 2 // Specify bar border width
            }]},
        options: {
          responsive: true, // Instruct chart js to respond nicely.
          maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
        }
    });
    


    // dept of In chart overall 
var INOverall = document.getElementById("INOverall").getContext('2d');
    
var myChart = new Chart(INOverall, {
    type: 'line',
    data: {
        labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
        datasets: [{
            label: 'Series 1', // Name the series
            data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 2 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});


// dept of aR chart overall 
var AROverall = document.getElementById("AROverall").getContext('2d');

var myChart = new Chart(AROverall, {
type: 'line',
data: {
    labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
    datasets: [{
        label: 'Series 1', // Name the series
        data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
        fill: false,
        borderColor: '#2196f3', // Add custom color border (Line)
        backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
        borderWidth: 2 // Specify bar border width
    }]},
options: {
  responsive: true, // Instruct chart js to respond nicely.
  maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
}
});


// dept of mm chart overall 
var MMOverall = document.getElementById("MMOverall").getContext('2d');

var myChart = new Chart(MMOverall, {
    type: 'line',
    data: {
        labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
        datasets: [{
            label: 'Series 1', // Name the series
            data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 2 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});


    // dept of TE chart overall 
    var TEOverall = document.getElementById("TEOverall").getContext('2d');
    
    var myChart = new Chart(TEOverall, {
        type: 'line',
        data: {
            labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
            datasets: [{
                label: 'Series 1', // Name the series
                data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
                fill: false,
                borderColor: '#2196f3', // Add custom color border (Line)
                backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                borderWidth: 2 // Specify bar border width
            }]},
        options: {
          responsive: true, // Instruct chart js to respond nicely.
          maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
        }
    });
    
    
    // dept of PG chart overall 
    var PGOverall = document.getElementById("PGOverall").getContext('2d');
    
    var myChart = new Chart(PGOverall, {
    type: 'line',
    data: {
        labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
        datasets: [{
            label: 'Series 1', // Name the series
            data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 2 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
    });
    
    
    // dept of ch chart overall 
    var CHOverall = document.getElementById("CHOverall").getContext('2d');
    
    var myChart = new Chart(CHOverall, {
        type: 'line',
        data: {
            labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
            datasets: [{
                label: 'Series 1', // Name the series
                data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555, 6811], // Specify the data values array
                fill: false,
                borderColor: '#2196f3', // Add custom color border (Line)
                backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                borderWidth: 2 // Specify bar border width
            }]},
        options: {
          responsive: true, // Instruct chart js to respond nicely.
          maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
        }
    });
    



    // //////////////////////////////////////////////////////////////////////
    // All of departments wise batch wise
    // /////////////////////////////////////////////////////////////////////

   


    // //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








//////////////////////////---------------------- ALL DEPARTMENTS CLOSED--------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\






var batch_17 = document.getElementById('batch_17').getContext('2d');
var chart = new Chart(batch_17, {
    // The type of chart we want to create
    type: 'doughnut',
    // The data for our dataset
    data: {
        labels: ["Iværksætter", "Forandringsagent"],
        datasets: [{
            label: "Din ledelsesstil",
            backgroundColor: [
                "#00ACFF", "#DBECF8"
            ],
            data: [54, 12],
        }]
    },

    // Configuration options go here
    options: {
      legend: {
            display: false,
        },
      tooltips: {
            enabled: true,
            mode: 'index',
           callbacks: {
            label: function (tooltipItems, data) {
                var i, label = [], l = data.datasets.length;
                for (i = 0; i < l; i += 1) {
                    label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                }
                return label;
            }
        }
      }
    }
});



// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




// teacher show on selection of teacher
$( "#teacher-selected" ).change(function() {
    $('#best-teacher-heading').css('display','none');
    $('#best-teacher-div').css('display','none');
    $('#teacher-heading').css('display','flex');
    $('#teacher-div').css('display','flex');
    
  });
  

// batch show on change of depart and/or batch  

$( "#selectDepart" ).change(function() {
    $('#best-batch-heading').css('display','none');
    $('#best-batch-div').css('display','none');
    $('#batch-heading').css('display','flex');
    $('#batch-div').css('display','flex');
    $('.dit-class-students').css('display', 'flex');
  });
  