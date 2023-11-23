from django.shortcuts import render
from django.http import HttpResponse, JsonResponse
from .models import Tjuegos, Tcomentarios
from django.views.decorators.csrf import csrf_exempt
import json
# Create your views here.
def pagina_de_prueba(request):
	return HttpResponse("<h1>Hola caracola!</h1>");

def devolver_juegos(request):
	lista=Tjuegos.objects.all()
	respuesta_final=[]
	for fila_sql in lista:
		diccionario={}
		diccionario['id']=fila_sql.id
		diccionario['nombre']=fila_sql.nombre
		diccionario['url_imagen']=fila_sql.url_imagen
		diccionario['año']=fila_sql.año
		diccionario['compañia']=fila_sql.compañia
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)

def devolver_juegos_por_id(request, id_solicitado):
	juego=Tjuegos.objects.get(id=id_solicitado)
	comentarios=juego.tcomentarios_set.all()
	lista_comentarios=[]
	for fila_comentario_sql in comentarios:
		diccionario={}
		diccionario['id']=fila_comentario_sql.id
		diccionario['comentario']=fila_comentario_sql.comentario
		lista_comentarios.append(diccionario)
		resultado={
			'id':juego.id,
			'nombre':juego.nombre,
			'fecha':juego.año,
			'comentarios':lista_comentarios
		}
		return JsonResponse(resultado,json_dumps_params={'ensure_ascii':False})

def guardar_comentario(request, juego_id):
	if request.method!='POST':
		return None
	json_peticion=json.loads(request.body)
	comentario=Tcomentarios()
	comentario.comentario=json_peticion['nuevo_comentario']
	comentario.juego=Tjuegos.objects.get(id=juego_id)
	comentario.save()
	return JsonResponse({"status":"ok"})