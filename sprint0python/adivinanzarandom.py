import random

const=0
adivinanza=[{
    "preg":"Adivina adivinanza que tiene el rey en la panza",
    "opciones":{"a":"Comida","b":"Ombligo","c":"manta"},
    "resultado":"b"
},{
    "preg":"Oro parece plata no es",
    "opciones":{"a":"Comida","b":"Oro ","c":"Platano"},
    "resultado":"c"
},{
    "preg":"Que es del tamaño de una nuez que sube la cuesta y no tiene pies ?",
    "opciones":{"a":"Caracol","b":"oruga","c":"gusano"},
    "resultado":"a"
}
]
#Donde se hace el num aleatorio
adivinanza_random=random.sample(adivinanza,2)

#Cada vez que entra en el bucle coje una adivinanza aleatoria
for adivinanza in adivinanza_random:
    print(adivinanza["preg"])
    for key,value in adivinanza["opciones"].items():#Aqui coje las opciones 
        print(f"{key}.{value}")
    respuesta=input("Cual es la correcta?")
    while (respuesta!="a")&(respuesta!="b")&(respuesta!="c"):#Verificamos que la respuesata está dentro de las opciones
        print("Eso no está dentro de las opciones")
        respuesta=input("Cual es la correcta?")
    if respuesta == adivinanza.get("resultado"):
        print("Correcto")
        const=const+10
    else:
        print("Error")
        const=const-5
    print("Puntuación: "+str(const))