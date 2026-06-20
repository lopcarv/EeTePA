
from modelos.produto import Produto

produtos = []

def cadastrar(nome, quantidade):
    produto = Produto(nome, quantidade)
    produtos.append(produto)

def listar():
    for p in produtos:
        print(p)
