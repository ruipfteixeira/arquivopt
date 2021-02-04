import json

with open('IniciativasXIII.json') as i:
  data = json.load(i)

dataparse = data['ArrayOfPt_gov_ar_objectos_iniciativas_DetalhePesquisaIniciativasOut']
iniciativas = dataparse['pt_gov_ar_objectos_iniciativas_DetalhePesquisaIniciativasOut']

# Return initiative by iniId
def get_initiatives_by_id(ini_id):
  for i in iniciativas:
    if i['iniId'] == ini_id:
      return i

# Print initiative by dataInicioleg
def get_initiatives_by_date(date_ini_leg):
  for i in iniciativas:
    if i['dataInicioleg'] == date_ini_leg:
      print(i)

# Return number of initiatives of a certain type
def get_count(ini_type):
    count = 0
    for i in iniciativas:
      if i['iniTipo'] == ini_type:
        count = count + 1
    return count

# Returns statistical summary of initiatives type
def get_stats():
    return "Apreciação Parlamentar: " + str(get_count("A")) + "\n" + "Projeto de Deliberação: " + str(get_count("D")) + "\n" + "Inquérito Parlamentar: " + str(get_count("I")) + "\n" + "Projeto de Lei: " + str(get_count("J")) + "\n" + "Proposta de Lei: " + str(get_count("P")) + "\n" + "Projeto de Resolução: " + str(get_count("R")) + "\n" + "Proposta de Resolução: " + str(get_count("S"))

# Print all initiatives of a certain type
def get_initiatives(ini_type):
  for i in iniciativas:
    if i['iniTipo'] == ini_type:
      print(i)

# Print everything on the document
def print_all():
   for i in iniciativas:
      print(i)
