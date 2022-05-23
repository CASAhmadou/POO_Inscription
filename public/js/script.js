var li = document.createElement('li')
var a = document.createElement('a')
var spana = document.createElement('span')


spana.classList=element[`root`]
spana.innerHTML=element[`text`]

a.appendChild(spana)
li.appendChild(a)