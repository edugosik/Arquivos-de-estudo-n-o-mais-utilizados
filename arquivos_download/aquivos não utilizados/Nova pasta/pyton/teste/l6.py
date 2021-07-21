n = int(input('valor: '))
salario = 1500

if n < 1500:
    a = n * 0.03
    print(a)
    vs =  salario + a
    print(vs)

elif n >= 1500:
    a = n * 0.05
    print(a)
    vs = salario + a
    print(vs)