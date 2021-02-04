import xml.etree.ElementTree as ET

tree = ET.parse('IniciativasXIII.xml')
root = tree.getroot()

for child in root:
    for child1 in child.iter('iniTitulo'):
        print(child1.text)