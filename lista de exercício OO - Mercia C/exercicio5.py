#Questão 5:
class Forma:
    def __init__(self):
        pass
    def calcularArea(self):
        pass
    def calcularPerimetro(self):
        pass

    
#Questão 6:
class Retangulo(Forma):
    def __init__(self,lado,altura):
        self.lado = lado
        self.altura = altura
        print("lado",self.lado)
        print("altura", self.altura)
        
#Questao 7:

class Circulo(Forma):
    def __init__(self,raio):
        self.raio = raio
        self.circuferencia = 2*3.14*raio
        print("raio =",self.raio)
        print("circufência =",self.circuferencia)

#Questao 8:

class Quadrado(Retangulo):
    def __init__(self,lado):
        self.lado = lado
        print("lado = ",self.lado)
        print("altura =",self.lado)
