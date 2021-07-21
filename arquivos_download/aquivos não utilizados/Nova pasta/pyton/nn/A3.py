class usuario:
    def __init__(self, email, nome, idade, senha, nacionalidade):
        self.email = email
        self.nome = nome
        self.idade = idade
        self.senha = senha
        self.nacionalidade = nacionalidade
    def fazer_login(self, senha):
        if self.senha == senha:
            print('sucesso')
        else:
            print('falha')

class professor(usuario):
    def __init__(self, email, nome, idade, senha, nacionalidade, formação, local_de_nacimento, area_de_atuação):
        super().__init__( email, nome, idade, senha, nacionalidade)
        self.fermação = formação
        self.local_de_nacimento = local_de_nacimento
        self.area_de_atuação = area_de_atuação

p = professor('email@email.com', 'edu', '20', '123456', 'nacionalidade', 'area da saude', 'sampa', 'professor')
senha = input('digite sua senha: ')
p.fazer_login(senha)

