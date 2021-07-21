lista = ['edu', 'rafa', 'maria'] #LISTA (list)

tupla = ('edu', 'rafa', 'maria') #TUPLA (tuple) não mutavel se for substituir tem que ela toda

dicionario = {'fruta': 'banana, maça, pera, uva', 'roupa': 'camisa, calças, meias', 'nome': 'edu, rafa, maria'} #dicionario (dict)
    print(dicionario['fruta'])

conjunto =  {'edu', 'rafa', 'maria'} #sem repetições conjunto (set)

nome = input('nome: ')

if nome in tupla:  #se esta dentro de
    print( nome,'está dentro de tupla')

else:
    print(nome, 'não está dentro de tupla')

