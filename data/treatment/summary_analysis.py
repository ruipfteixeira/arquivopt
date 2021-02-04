import PyPDF2

reader = PyPDF2.PdfFileReader('1.pdf')

print(reader.numPages)

reader = reader.getPage(0)

print(reader.extractText())

# with open('summary_data.json') as json_summary:
#    print('Ok')