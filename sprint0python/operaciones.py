def suma (a,b):
    return print(a + b)
def resta (a,b):
    return print(a - b)
def multiplicacion (a,b):
    return print(a * b)
def division (a,b):
    if b == 0:
        return print("Entre 0 no se vale")
    else:
        return print(a / b)

a=2
b=0
c=6

suma(a,c)
resta(a,c)
multiplicacion(a,c)
division (c,b)
division(c,a)