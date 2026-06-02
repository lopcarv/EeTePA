class Produto:
    def __init__(self, nome, estoque, minimo):
        self.nome = nome
        self.estoque = estoque
        self.minimo = minimo

    def estoque_critico(self):
        return self.estoque < self.minimo