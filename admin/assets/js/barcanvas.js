

const barCanvas = document.getElementById("barCanvas");

const barChart = new Chart(barCanvas, {
    type: "bar",
    data: {
        labels: ["BEN", "UFHB"],
        datasets: [{
            data:[nbrCeeben, nbrCeeufhb],
            backgroundColor: [
                "blue",
                "green",
            ]
        }]
    },
    options:{
        scales: {
            y:{
                suggestedMax: 50,
                ticks:{
                    font: {
                        size: 18
                    }
                },
                grid: {
                    display: false
                }
            },
            x:{
                ticks:{
                    font:{
                        size: 18
                    }
                },
                grid: {
                    display: false
                }
            }
        }
    }
})


const pieCanvas = document.getElementById("pieCanvas");

const pieChart = new Chart(pieCanvas, {
    type: "pie",
    data: {
        labels: ["Frère", "Soeurs"],
        datasets: [{
            data:[nbrCeem, nbrCeef],
            backgroundColor: [
                "blue",
                "green"
            ]
        }]
    },
    hoverOffset: 40
    // options:{
    //     scales: {
    //         y:{
    //             suggestedMax: 150,
    //             ticks:{
    //                 font: {
    //                     size: 20
    //                 }
    //             }
    //         },
    //         x:{
    //             ticks:{
    //                 font:{
    //                     size: 18
    //                 }
    //             }
    //         }
    //     }
    // }
})

