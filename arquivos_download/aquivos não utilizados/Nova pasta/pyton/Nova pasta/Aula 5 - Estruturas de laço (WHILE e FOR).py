nomes = ['eduardo', 'jorge', 'bianca', 'fernanda', 'sara']

for nome in nomes:
    print(nome)

lista_numeros = range(1,6)

for i in lista_numeros:
    print(i)

#ou

#for i in range(1,6)
    #print(i)

for i in range(len(nomes)):
    print(nomes[i])

n = 0

while n < 10:
    print('n ainda é menor que 10: ', n)
    n= n + 1
    #ou n += 1
    if n == 10:
        print('n é igual a 10')