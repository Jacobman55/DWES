if __name__=="__main__":
    const =0;
    print("Adivina adivinanza que tiene el rey en la panza")#pintamos la adivinanza
    print("a- Comida")
    print("b- Ombligo")
    print("c- manta")
    respuesta=input("Cual es la correcta?")
    while (respuesta!="a")&(respuesta!="b")&(respuesta!="c"):#Verificamos que la respuesata está dentro de las opciones
        print("Eso no está dentro de las opciones")
        respuesta=input("Cual es la correcta?")
    if respuesta == "b":
        print("Correcto")
        const=const+10
    else:
        print("Error")
        const=const-5
    
    print("Oro parece plata no es")
    print("a- Comida")
    print("b- Cro")
    print("c- Platano")
    respuesta=input("Cual es la correcta?")
    while (respuesta!="a")&(respuesta!="b")&(respuesta!="c"):
        print("Eso no está dentro de las opciones")
        respuesta=input("Cual es la correcta?")
    if respuesta == "c":
        print("Correcto")
        const=const+10
    else:
        print("Error")
        const=const-5
    
    print("Que es del tamaño de una nuez que sube la cuesta y no tiene pies ?")
    print("a- Caracol")
    print("b- oruga")
    print("c- gusano")
    respuesta=input("Cual es la correcta?")
    while (respuesta!="a")&(respuesta!="b")&(respuesta!="c"):
        print("Eso no está dentro de las opciones")
        respuesta=input("Cual es la correcta?")
    if respuesta == "a":
        print("Correcto")
        const=const+10
    else:
        print("Error")
        const=const-5

    print("Tu puntuacion es de:")
    print(const)
