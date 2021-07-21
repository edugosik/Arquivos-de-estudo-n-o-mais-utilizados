var nome= window.prompt('qual o seu nome:')

var idade= window.prompt('qual a sua idade:')

var n1= Number (window.prompt ('escreve um numero ai: '))

var n2= Number (window.prompt ('escreve um outro numero ai: '))


/*string > number (number[ele escolhe se é inteiro ou quebrado]; 
number.parseInt[numeros inteiro];number.parseFloat[numeros quebrados])*/
/*number > string (string{a}[o que estiver dentro é covertido para string];
n.toString[converte para string ao contrario]) */

var a= n1 + n2

var s= n1 - n2

var d= n1 / n2

var m= n1 * n2

var r= n1 % n2

var p= n1 ** n2

var med= (n1 + n2)/ 2

d.toFixed(2)
//window.alert(`${nome} que tem ${idade} de idade quer saber seus numeros:`)

window.alert('seu nome tem ' + nome.length + ' caracteres')
window.alert('seu nome em maiusculo ' + nome.toUpperCase())
window.alert('seu nome em minusculo ' + nome.toLowerCase())

window.alert(`seus numeros são ${n1} e ${n2}`)
//o $ faz a mesma coisa que o + mas precisa estar entre crase
window.alert('sua adição é ' + a )
window.alert('sua subtração é ' + s )
window.alert('sua divisão é ' + d )
window.alert('sua multiplicação é ' + m )
window.alert('o resto da divisão é ' + r)
window.alert('sua potencia é ' + p)
window.alert('sua média é ' + med)

/*
document.write('sua adição é ' + a)
document.write('sua subtração é ' + s)
document.write('sua divisão é ' + d )
document.write('sua multiplicação é ' + m)
*/