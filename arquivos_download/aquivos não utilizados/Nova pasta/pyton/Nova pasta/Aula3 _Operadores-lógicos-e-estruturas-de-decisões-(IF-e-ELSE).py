var_verdadeiro = True  #Boolean
var_falso = False

print(type(var_verdadeiro), type(var_falso))

if var_verdadeiro == True:
    print('Var_verdadeiro é verdadeiro')

#comparações: == != > < >= <=
#comparações: and or

a = 20
b = 200
#se for
if a>b:
    print(a,' é maior que ',b)
#elif + if
elif a == b:
    print(a, ' é igual a' ,b)
#se não
else:
    print(a, ' não é maior nem igual a ', b)