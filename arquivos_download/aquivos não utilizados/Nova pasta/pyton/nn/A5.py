 import mysql.connector
def cadastrousuario(nome, sobrenome, email, senha):
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="aulapython"
    )
    mycursor = mydb.cursor()
    sql = "insert into usuario(nome, sobrenome, email, senha) values(%s, %s, %s, %s)"
    valor = (nome, sobrenome, email, senha)
    mycursor.execute(sql, valor)
    mydb.commit()

nomeUsuario = input('digite seu nome ')
sobrenomeusuario = input('digiite seu sobrenome ')
emailusuario = input('digite seu email ')
senhausuario = input('digite sua senha ')

cadastrousuario(nomeUsuario, sobrenomeusuario, emailusuario, senhausuario)