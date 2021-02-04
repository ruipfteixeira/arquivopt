import xml.etree.ElementTree as ET

tree = ET.parse('IniciativasXIII.xml')
root = tree.getroot()

# Return number of initiatives of a certain type
def get_count(ini_type):
    count = 0
    for child in root.iter('iniTipo'):
        if child.text == ini_type:
            count = count + 1
    return count

# Returns statistical summary of initiatives type
def get_stats():
    return "Apreciação Parlamentar: " + str(get_count("A")) + "\n" + "Projeto de Deliberação: " + str(get_count("D")) + "\n" + "Inquérito Parlamentar: " + str(get_count("I")) + "\n" + "Projeto de Lei: " + str(get_count("J")) + "\n" + "Proposta de Lei: " + str(get_count("P")) + "\n" + "Projeto de Resolução: " + str(get_count("R")) + "\n" + "Proposta de Resolução: " + str(get_count("S"))

# Returns initiative of a certain type
def get_initiatives(ini_type):
    for child in root.iter('iniTipo'):
        if child.text == ini_type:
            print(child.text)

# Print everything on the document
def print_all():
    for child in root.iter():
        print(child.text)