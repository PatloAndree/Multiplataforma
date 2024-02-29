from bs4 import BeautifulSoup
import requests
import csv 
import re

# url="https://www.lifetechperu.com/productos"
# url="https://inkafarma.pe/buscador?keyword=pastillas"
# url="https://www.lacuracao.pe/curacao/lineablanca/lavander%C3%ADa/lavadoras#facet:&productBeginIndex:0&facetLimit:&orderBy:&pageView:grid&minPrice:&maxPrice:&pageSize:&"
url="https://www.oechsle.pe/tecnologia/telefonia"
page = requests.get(url)

soup = BeautifulSoup(page.content, 'html.parser')
lists = soup.find_all('div', class_="product") #importante poner la clase general de los DIV

headerList = [ 'id','nombre','marca','imagen','link','categoria','tienda','precio']

# Abre el archivo CSV en modo de escritura
with open('celus.csv', 'w', encoding='UTF8', newline='') as f:
    writer = csv.writer(f)
    
    # Escribe los encabezados en el archivo CSV
    writer.writerow(headerList)
    
    # Itera sobre cada producto y escribe los datos en el archivo CSV
    for list in lists:
        marca = list.find('span', class_="text text-gray-light fz-11 prod-brand text-left").text.strip()
        nombre_producto = list.find('span', class_="text fz-15 fz-lg-17 prod-name").text.strip()
        precio = list.find('span', class_="text fz-lg-15 fw-bold BestPrice").text.replace('S/. ', '')
        precio_actual = precio.replace('S/ ','')
        precio_actual = precio_actual.replace(',','')
        imagen = list.find('div', class_="productImage")
        image1 = imagen.find('img').get('src')
        link = list.find('div', class_="mt-5")
        nuevolink = link.find('a').get('href') 
        imagen_preview = re.search(r'ids/(\d+)-', image1)
        nombre_imagen = imagen_preview.group(1)

        # Crea una lista con los datos del producto
        info = ['',nombre_producto,marca,'https://oechsle.vteximg.com.br/arquivos/ids/'+nombre_imagen,nuevolink,1,18,precio_actual]
        
        # Escribe la lista en el archivo CSV
        writer.writerow(info)
