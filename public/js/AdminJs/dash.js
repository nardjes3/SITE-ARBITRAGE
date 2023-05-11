  
  let customChart = document.getElementById("custom-chart").getContext("2d");

let programmingChart = new Chart(customChart, {
  type: "bar",
  data: {
    labels: ["France", "Argentina", "England", "Portugal", "Netherlands", "Spain", "Brazil", "Croitia", "Germany", "Morocco", "South Korea", "Ghana", "Japan", "Serbia", "Swiss", "Senegal", "Australia", "Cameroon", "Ecuador", "Iran"],
    datasets: [
      {
        
        data: [16, 15, 13, 12, 10, 9, 8, 8, 6, 6, 5, 5, 5, 5, 5, 5, 4, 4, 4, 4 ],
        backgroundColor: [
          "rgba(0, 176, 255, 0.6)",
          "rgba(164, 118, 255, 0.6)",
          "rgba(255, 240, 0, 0.6)",
          "rgba(255, 0, 89, 0.6)",
          "rgba(17, 240, 80, 0.6)",
          "rgba(14, 120, 0, 0.6)",
          "rgba(164, 20, 10, 0.6)",
          "rgba(255, 255, 100, 0.6)",
          "rgba(0, 255, 0, 0.6)",
          "rgba(10, 0, 0, 0.6)",
          "rgba(97, 3, 1, 0.6)",
          "rgba(140, 120, 0, 0.6)",
          "rgba(170, 255, 255, 0.6)",
          "rgba(11, 80, 255, 0.6)",
          "rgba(210, 240, 5, 0.6)",
          "rgba(150, 140, 40, 0.6)",
          "rgba(20, 120, 253, 0.6)",
          "rgba(252, 124, 11, 0.6)",
          "rgba(134, 215, 37, 0.6)",
          "rgba(7, 105, 48, 0.6)",
          "rgba(16, 184, 220, 0.6)",



        ],
        borderColor: [
          "rgba(0, 176, 255, 1)",
          "rgba(164, 118, 255, 1)",
          "rgba(255, 240, 0, 1)",
          "rgba(255, 0, 89, 1)",
          "rgba(17, 240, 80, 1)",
          "rgba(14, 120, 0, 1)",
          "rgba(164, 20, 10, 1)",
          "rgba(255, 255, 100, 1)",
          "rgba(0, 255, 0, 1)",
          "rgba(10, 0, 0, 1)",
          "rgba(97, 3, 1, 1)",
          "rgba(140, 120, 0, 1)",
          "rgba(170, 255, 255, 1)",
          "rgba(11, 80, 255, 1)",
          "rgba(210, 240, 5, 1)",
          "rgba(150, 140, 40, 1)",
          "rgba(20, 120, 253, 1)",
          "rgba(252, 124, 11, 1)",
          "rgba(134, 215, 37, 1)",
          "rgba(7, 105, 48, 1)",
          "rgba(16, 184, 220, 1)",

        ],
        borderWidth: 2,
      },
    ],
  },

  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
  },
});

const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {
            let initial_count = 0;
            const final_count = counter.dataset.count;
            // console.log(final_count);

            let  counting = setInterval(updateCounting, 1);

           function updateCounting() {

                if (initial_count < 1000) {
                    initial_count += 1;
                    counter.innerText = initial_count;
                }

                if (initial_count >= 1000) {
                    initial_count += 100;
                    counter.innerText = (initial_count / 1000).toFixed(1) + 'K+';
                }

                if (initial_count >= 10000) {
                    initial_count += 5000;
                }

                if (initial_count >= 1000000) {
                    initial_count += 500000;
                    counter.innerText = (initial_count / 1000000).toFixed(1) + 'M+';
                }

                if (initial_count >= final_count) {
                    clearInterval(counting);
                }
            }
        })

