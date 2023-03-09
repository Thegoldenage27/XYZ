// Importar el paquete mysql
const mysql = require('mysql');

// Crear una conexión a la base de datos
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'xyz'
});

// Conectar a la base de datos
connection.connect((error) => {
  if (error) {
    console.error('Error al conectarse a la base de datos:', error);
  } else {
    console.log('Conexión a la base de datos establecida correctamente.');
  }
});
