<?php 
include("conectar_bd.php");

$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255808507', 'Amoladora Makita', 'GA4530R', '80.23'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255605731', 'Amoladora Makita', 'GA9020R', '162.50'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255804622', 'Taladro Combinado Makita', 'DHP482RME18', '413.57'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255043212', 'Taladro Makita', 'HP2050', '174.85'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255890878', 'Atornillador Impacto Makita', 'DTD1', '119.30'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102100204', 'Azada', '1-B', '18.92'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102100907', 'Azada', '3-C', '29.19'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102501605', 'Pala Cuadrada Bellota', '5502-4 MA', '35.87'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102500707', 'Pala Punta Bellota', '5501-4 MA', '28.97'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004644241', 'Hacha Mango Bellota', '8130-1500N', '47.46'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102156201', 'Horca Tubo', '901-5', '25.20'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6702832094', 'Llave Fija Plana', 'BAHCO', '7.36'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5533277940', 'Destornillador', 'Fit b BAHCO', '8.20'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('1284000001', 'Tijera Electrica', 'F3015', '1660.95'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5533327522', 'Tijera Electrica', 'BCL22', '1361.25'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5102690750', 'Tijera Electrica', 'EPR137P 37', '790.00'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255699976', 'Tijera Poda Electrica', 'DUP361P', '1252.35'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004999203', 'Mesa Plegable Resina', 'TY540 182X70', '63.86'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004364292', 'Conjunto Ratan', 'CZ C2-0168', '805.71'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004961057', 'Cenador Acero 3x3', 'Profer', '352.85'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004036933', 'Banco Madera Jardin', 'Profer', '67.59'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004212709', 'Casco obra colores', '5rg', '7.80'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004154967', 'Protector auditivo', 'SNR21', '5.71'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004043720', 'Chaleco A.Visivilidad', 'STARTE', '3.56'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('43080315', 'Gafas Seguridad', 'GAF_401', '1.75'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5875006354', 'Guante Showa', '370', '5.43'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5004213492', 'Mascarilla FFP3', 'Climax', '3.25'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('3086214', 'Mascara Protectora', '756A', '29.26'); ";
$insertar = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('5872025856', 'Zapato Diamante', 'Plus PU/TPU', '55.64'); ";

if (mysqli_query($conexion, $insertar)) {
    echo "Se han introducido los datos correctamente.";
}else {
    echo "Ha habido un error.";
}
?>