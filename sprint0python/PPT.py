import random

resul=int;
puntu=int(0);
puntm=int(0);
cont=0
def play(jug): #Aqui se recoje la opcion del usuario y se comapra con el random de la maquina
    opciones=["piedra","papel","tijera"]
    maquina = random.choice(opciones)
    usuario = jug
    if(usuario=="piedra")&(maquina=="piedra"):
        print("Tablas la maquina saco piedra")
        resul=3
    if(usuario=="piedra")&(maquina=="papel"):
        print("La maquina saco papel perdiste")
        resul=2
    if(usuario=="piedra")&(maquina=="tijera"):
        print("La maquina saco tijeras ganaste")
        resul=1
    if(usuario=="papel")&(maquina=="papel"):
        print("Tablas la maquina saco papel")
        resul=3
    if(usuario=="papel")&(maquina=="piedra"):
        print("La maquina saco piedra ganaste")
        resul=2
    if(usuario=="papel")&(maquina=="tijera"):
        print("La maquina saco tijeras perdiste")
        resul=1
    if(usuario=="tijera")&(maquina=="tijera"):
        print("Tablas la maquina saco tijeras")
        resul=3
    if(usuario=="tijeras")&(maquina=="piedra"):
        print("La maquina saco piedra perdiste")
        resul=2
    if(usuario=="tijeras")&(maquina=="papel"):
        print("La maquina saco papel ganaste")
        resul=1
    return(resul);

if __name__=="__main__":
    print("Bienvenido al juego de piedra papel y tijera, juguemos")
    while (cont!=5):
        jugada=""
        print("Maquina")
        print(puntm)
        print("Usuario")
        print(puntu)
        pasa="no"
        while pasa =="no":
            jugada=input("Que vas a sacar?")
            if (jugada=="piedra")|(jugada=="papel")|(jugada=="tijera"):
                pasa=="si"
        puntos=play(jugada)
        if puntos==1:
            puntu=puntu+1
            cont=cont+1
        elif puntos==2:
            puntm=puntm+1
            cont=cont+1