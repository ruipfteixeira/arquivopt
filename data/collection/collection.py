from bs4 import BeautifulSoup
import requests
import json

url = 'https://www.arquivo.pt/textsearch?'
response = requests.get(url)
content = BeautifulSoup(response.content, "html.parser")

initial_date = 20200101
final_data = 20200131
name = 'António Costa'
site = 'http://www.publico.pt'
unity = '&'

# Function to get website
url = url + 'q=' + name + unity + 'siteSearch=' + site + unity + 'prettyPrint=true'

print(url)