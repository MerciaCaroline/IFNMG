class Chocolate():
    def __init__(self,m,s,pe,p,v):
        self.marca = "Marca:"+ m
        self.sabor = "Sabor:"+ s
        self.peso = "Peso:" + pe
        self.preco = "Preço: R$"+ p
        self.validade = "Valido até:"+ v
        print("Está a vendo um chocholate:",self.marca,",",self.sabor,",",self.peso,",",self.preco,",",self.validade)

print("Supermercado Bom Preço. Cadastrando o produto")
m=input("Digite a marca:")
s=input("Digite o sabor:")
pe=input("Digite o peso:")
p=input("Digite o preço:")
v=input("Digite a data de validade:")
c1 = Chocolate(m,s,pe,p,v)

