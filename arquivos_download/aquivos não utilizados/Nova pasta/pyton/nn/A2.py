class usuario:
    def __init__(self, nome, cpf, email, senha):
        self.nome= nome
        self.cpf= cpf
        self.email = email
        self.senha = senha

class exibiremail:
    def __init__(self, email):
        self.email = email
    def exibiremail(self):
        print("Meu email: " + self.email)

pessoa1= usuario("jorge", "01010101010", "jorge@gmail.com", "21345")


exibiremail = exibiremail(pessoa1.email)
exibiremail.exibiremail()