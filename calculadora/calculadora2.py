#Importando a biblioteca tkinter
#todos elementos sao importados
from tkinter import *

#A classe principal onde os elementos sao inserids
janela = Tk()

#Título da janela
janela.title('Jogo')
#cor da janela
janela['bg'] = 'MediumTurquoise'
#alturaxlargura
janela.geometry('900x300')
janela.minsize(width=900, height=300)
janela.maxsize(width=900, height=300)


lb= Label(janela,text='Resultado')
lb['bg'] = '#96b847'
lb.grid(column=0,row=0, columnspan=4)



bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=0,row=1)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=1,row=1)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=2,row=1)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=3,row=1)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=0,row=2)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=1,row=2)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=2,row=2)

bt1= Button(janela, text='Calculadora do IF')
bt1['bg']='#96b847'
bt1.grid(column=3,row=2)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=0,row=3)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=1,row=3)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=2,row=3)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=3,row=3)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=0,row=4)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=1,row=4)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=2,row=4)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=3,row=4)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=1,row=5)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=2,row=5)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=3,row=5)

bt1= Button(janela, text='Calculadora do IF')
bt1['width']=12
bt1['bg']='#96b847'
bt1.grid(column=0,row=5)

