def calcular_media(nota1, nota2, nota3):
	"""
	Recebe três notas e retorna a média aritmética.
	"""
	soma = nota1 + nota2 + nota3
	media = soma / 3
	return media



resultado = calcular_media(7.5, 8.0, 6.5)
print("Média:", resultado)
