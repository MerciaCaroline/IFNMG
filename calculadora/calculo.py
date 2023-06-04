from tkinter import *

def limpar():
    tela.delete(0,END)

def mais_menos():
    pass

def divisao():
    x = float(tela.get())

def sete ():
    t = len(tela.get())
    tela.insert(t,"7")

def oito ():
    t = len(tela.get())
    tela.insert(t,"8")
    
def nove ():
    t = len(tela.get())
    tela.insert(t,"9")
    
def quatro ():
    t = len(tela.get())
    tela.insert(t,"4")

def cinco ():
    t = len(tela.get())
    tela.insert(t,"5")

def seis ():
    t = len(tela.get())
    tela.insert(t,"6")

def um ():
    t = len(tela.get())
    tela.insert(t,"1")

def dois ():
    t = len(tela.get())
    tela.insert(t,"2")

def tres ():
    t = len(tela.get())
    tela.insert(t,"3")

def zero ():
    t = len(tela.get())
    tela.insert(t,"0")

def ponto ():
    t = len(tela.get())
    tela.insert(t,".")


janela = Tk()
janela['bg'] = '#FFFFFF'
janela.geometry('260x170')
janela.title('Interface gráfica')
#linha 0
tela = Entry(janela,text="",width =32)
tela.grid(column=0,row=0,columnspan=4)


#linha 1
bt_limpar = Button(janela,text="C", width = 4, command = limpar)
bt_limpar.grid(column=0,row=1)

bt_maismenos = Button(janela,text="+/-", width = 4)
bt_maismenos.grid(column=1,row=1)

bt_dividir = Button(janela,text="/", width = 4)
bt_dividir.grid(column=2,row=1)

bt_multiplicar = Button(janela,text="*", width = 4)
bt_multiplicar.grid(column=3,row=1)

#linha 2
bt_7 = Button(janela,text="7", width = 4, command = sete )
bt_7.grid(column=0,row=2)

bt_8 = Button(janela,text="8", width = 4, command = oito)
bt_8.grid(column=1,row=2)

bt_9 = Button(janela,text="9", width = 4, command =nove)
bt_9.grid(column=2,row=2)

bt_subtracao = Button(janela,text="-", width = 4)
bt_subtracao.grid(column=3,row=2)

#linha 3
#width serve para definir a larguna do
bt_4= Button(janela,text="4", width = 4, command = quatro )
bt_4.grid(column=0,row=3)

bt_5 = Button(janela,text="5", width = 4, command = cinco )
bt_5.grid(column=1,row=3)

bt_6 = Button(janela,text="6", width = 4, command = seis )
bt_6.grid(column=2,row=3)

bt_somar = Button(janela,text="+", width = 4)
bt_somar.grid(column=3,row=3)

#linha 4

bt_1 = Button(janela,text="1", width = 4, command = um )
bt_1.grid(column=0,row=4)

bt_2 = Button(janela,text="2", width = 4, command = dois )
bt_2.grid(column=1,row=4)

bt_3 = Button(janela,text="3", width = 4, command = tres )
bt_3.grid(column=2,row=4)

bt_resultado = Button(janela,text="=", width = 4)
bt_resultado.grid(column=3,row=4,rowspan = 2, sticky = N+S )

#linha 5

bt_0 = Button(janela,text="0", width = 4, command = zero)
bt_0.grid(column=0,row=5,columnspan = 2, sticky = W+E)

bt_ponto = Button(janela,text=".", width = 4, command = ponto)
bt_ponto.grid(column=2,row=5)







janela.mainloop()
