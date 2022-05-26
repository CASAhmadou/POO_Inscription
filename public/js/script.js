// var li = document.createElement('li')
// var a = document.createElement('a')
// var spana = document.createElement('span')


// spana.classList=element[`root`]
// spana.innerHTML=element[`text`]

// a.appendChild(spana)
// li.appendChild(a)

const barCanvas = document.getElementById("barcanvas");

const barChart =  new Chart(barCanvas, {
    type: "bar",
    data: {
        labels: ["Professeurs", "Etudiants", "Modules", "Classes"],
        datasets: [{
            data:[129,195,250,107],
            backgroundColor: [
                "crimson",
                "lightgreen",
                "lightblue",
                "violet"
            ]
        }]
    }
})