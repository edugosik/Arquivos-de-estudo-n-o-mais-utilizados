class tabuada:
    def __init__(self, aux, valor):
        self.aux = aux
        self.valor = valor

    aux = 0
    valor = int(input('coloque um numero: '))

    print('Tabuada de {}'.format(valor))

    while(aux <= 10):
      print('{1} X {0} = {2}'.format(aux, valor, (aux * valor)))
      aux = aux + 1