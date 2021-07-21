class usuario:
    def __init__(self, nome, senha, email, idade):
        self.nome = nome
        self.senha = senha
        self.email = email
        self.idade = idade
    def cadastro(self):
        print('nome: ',self.nome)
        print('email: ',self.email)
        print('senha: ',self.senha)
        print('idade: ', self.idade)
        print('parabens voce cadastro com suce')

nome = input('diga o seu nome: ')
senha = input('diga o sua senha: ')
email = input('diga o seu email: ')
idade = input('diga o sua idade: ')

pessoa = usuario(nome, senha, email, idade)

print( pessoa.usuario)