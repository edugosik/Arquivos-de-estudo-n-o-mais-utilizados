import pymysql

class usuario():
    def __init__(self, nome, senha, email):

        self.nome = nome
        self.email = email
        self.senha = senha


    def CadUsuario(self):
        try:
            conexao = pymysql.connect(
                host ='localhost',
                user ='root',
                password ='',
                db ='aulapython',
                charset ='utf8mb4',
                cursorclass =pymysql.cursors.DictCursor
            )
        except:
            print('erro!!!!')

        sql = "insert into usuario  (nome, email, senha) values('Eduardo', 'Edu@gmail.com', '12345')"
        cursor = conexao.cursor()
        cursor.execute(sql)
        conexao.commit()
        conexao.close()

objetoUsuario = usuario('edu', 'edu@gmail.com', '1234')

objetoUsuario.CadUsuario()