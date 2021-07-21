valor1 = int(input('escreva um numero1: '))
valor2 = int(input('escreva um numero2: '))
valor3 = int(input('escreva um numero3: '))

if valor1 < valor2 < valor3:
    print(valor1)
    print(valor2)
    print(valor3)

elif valor1 > valor2 > valor3:
    print(valor3)
    print(valor2)
    print(valor1)

elif valor2 < valor1 < valor3:
    print(valor2)
    print(valor1)
    print(valor3)

elif valor2 < valor3 < valor1:
    print(valor2)
    print(valor3)
    print(valor1)

elif valor3 < valor1 < valor2:
    print(valor3)
    print(valor1)
    print(valor2)

elif valor1 < valor3 < valor2:
    print(valor1)
    print(valor3)
    print(valor2)

elif valor3 < valor1 < valor2:
    print(valor3)
    print(valor1)
    print(valor2)

elif valor1 == valor2 == valor3:
    print('todos os valosres são iguais.')
    print(valor1)
    print(valor2)
    print(valor3)

elif valor1 > valor2 == valor3:
    print('valor2 e 3 são iguais.')
    print(valor1)
    print(valor2)
