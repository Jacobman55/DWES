from operaciones import suma,resta,multiplicacion,division

if __name__=="__main__":
    off="no"
    while off=="no":
        try:
            num1=int(input("Introduzca el primer numero"))
            num2=int(input("Introduzca el segundo numero"))
        except ValueError:
            print("Solo numeros")
        else:
            off="si"

    off=="no"
    op=5
    while(op<5)|(op>1):
        print("""
            1-Suma
            2-Resta
            3-Multiplicacion
            4-División
            5-salir""")
        op=int(input("Que opción quieres?"))
        while (op!=1)&(op!=2)&(op!=3)&(op!=4)&(op!=5):
            print("Eso no está dentro de las opciones")
            respuesta=input("Que opción quieres?")
        if op == 1:#Cojemos la opcion que quiera el usuario y se lo mandamos a la otra clas para que realice las operaciones
            suma(num1, num2)
        elif op == 2:
            resta(num1, num2)
        elif op == 3:
            multiplicacion(num1, num2)
        elif op == 4:
            division(num1, num2)
        elif op == 5:
            off="si"