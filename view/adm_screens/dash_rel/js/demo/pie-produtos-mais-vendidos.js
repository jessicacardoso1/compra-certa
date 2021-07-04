// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var request = 'http://localhost/compracerta/ajax-dashboard/'

function requisicao(){
  var dados = []

  $.ajax({
    url: request + 'produto_mais_vendido_relativo_as_vendas_totais',
    type:'POST',
    async: false,
    success: function(data){
      data = JSON.parse(data)

      for(let i = 0; i < Object.keys(data).length; i++){
        data[i] = data[i].toFixed(2)
      }
      
      dados = data
    },
  });

  console.log(dados)
  return dados
}

// Pie Chart Example
var ctx = document.getElementById("typePie-rel-produtos-mais-vendidos");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Tomate Orgânico", "Outros"],
    datasets: [{
      data: requisicao(),
      backgroundColor: ['#e74a3b'],
      hoverBackgroundColor: [],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
