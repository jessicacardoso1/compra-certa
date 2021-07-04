// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var request = 'http://localhost/compracerta/ajax-dashboard/'

function requisicao(chave){
  var dados = []

  $.ajax({
    url: request + 'categorias_mais_vendidas',
    type:'POST',
    async: false,
    success: function(data){
      data = JSON.parse(data)

      var i = 0
      data.forEach(element => {
        dados[i] = chave == 'NOME' ? element[chave] : element[chave].toFixed(2) * 100

        i++
      });
    },
  });

  return dados
}

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: requisicao('NOME'),
    datasets: [{
      data: requisicao('QUANTIDADE'),
      backgroundColor: ['#e74a3b', '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
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
