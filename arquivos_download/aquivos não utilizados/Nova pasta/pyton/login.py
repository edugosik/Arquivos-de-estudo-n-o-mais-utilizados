import mysql.connector
def login(email, senha):
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="pyusuario"
    )
    mycursor = mydb.cursor()
    sql = "select * from usuariopy where email = %s and senha = %s"
    valor = (email, senha)
    mycursor.execute(sql, valor)
    resultado =mycursor.fetchall()
    for X in resultado:
        print('ok, vc tem cadastro')
        print(X)

emailusuario = input('digite seu email: ')
senhausuario = input('digite sua senha: ')

login(emailusuario, senhausuario)