saldo = 1000
debito = 300
credito = 1000

saldo_atual = saldo - debito + credito

if saldo_atual < 0:
    print(saldo_atual)
    print('Saldo negativo')

if saldo_atual > 0:
    print(saldo_atual)
    print('saldo positivo')