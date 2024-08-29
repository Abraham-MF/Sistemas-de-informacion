import mysql.connector

conexion = mysql.connector.connect(
    user = 'root', 
    password = '', 
    host = '127.0.0.1', 
    database = 'sistema_informacion',
)

print(conexion)


cursor = conexion.cursor()

usuario = input('ingresa tu nombre: ')

consulta = 'INSERT INTO persona (nombre_usuario) VALUES (%s)'

cursor.execute(consulta, (usuario,))

conexion.commit()

print('Registro guardado')

consulta_count = 'SELECT COUNT(*) FROM persona WHERE nombre_usuario = %s'

cursor.execute(consulta_count, (usuario,))

resultado = cursor.fetchone()

if resultado:
    cantidad = resultado[0]
    print(f'El nombre "{usuario}" se ha registrado {cantidad} veces.')
else:
    print('No se pudo obtener el conteo.')

conexion.close

with open("S.I.txt", "w") as archivo:
    archivo.write(usuario)

