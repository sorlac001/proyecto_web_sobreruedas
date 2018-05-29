CREATE USER admintienda with encrypted password 'danngarcam0911';
CREATE USER ventatienda with encrypted password 'sorlac3123';
CREATE USER clientetienda with encrypted password 'contra1234';


CREATE DATABASE sobreruedas OWNER admintienda;

\q

psql -h 127.0.0.1 -U admintienda -d sobreruedas

CREATE TABLE tipoUsuario (
	idTipoUsuario 	serial 	NOT NULL,
	tipo			CHAR(1)	NOT NULL,
	PRIMARY KEY (idTipoUsuario)
);

CREATE TABLE usuario (
	idUsuario		serial		NOT NULL,
	nombre			VARCHAR(30)	NOT NULL,
	aPaterno		VARCHAR(30)	NOT NULL,
	aMaterno		VARCHAR(30),
	correo			VARCHAR(30)	NOT NULL,
	telefono		CHAR(10)	NOT NULL,
	usuario			VARCHAR(20)	NOT NULL,
	contrasena		VARCHAR(30)	NOT NULL,
	idTipoUsuario	serial		NOT NULL,
	PRIMARY KEY (idUsuario),
	FOREIGN KEY (idTipoUsuario) REFERENCES tipoUsuario (idTipoUsuario),
	UNIQUE (usuario),
	UNIQUE (contrasena)
);

CREATE TABLE direccion (
	idDireccion	serial		NOT NULL,
	calle		VARCHAR(100)	NOT NULL,
	numExterior	VARCHAR(10)	NOT NULL,
	colonia		VARCHAR(100)	NOT NULL,
	codPostal	CHAR(5)		NOT NULL,
	idUsuario	serial		NOT NULL,
	PRIMARY KEY (idDireccion),
	FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario),
	UNIQUE (idUsuario)
);

CREATE TABLE deporte (
	idDeporte	serial		NOT NULL,
	nombre		VARCHAR(30)	NOT NULL,
	PRIMARY KEY (idDeporte)
);

CREATE TABLE categoria (
	idCategoria	serial		NOT NULL,
	nombre		VARCHAR(30)	NOT NULL,
	idDeporte	serial		NOT NULL,
	PRIMARY KEY (idCategoria),
	FOREIGN KEY (idDeporte) REFERENCES deporte (idDeporte)
);

CREATE TABLE marca (
	idMarca		serial		NOT NULL,
	nombre		VARCHAR(40)	NOT NULL,
	PRIMARY KEY (idMarca)
);

CREATE TABLE descuento (
	idDescuento	serial	NOT NULL,
	porcentaje	FLOAT	NOT NULL,
	PRIMARY KEY (idDescuento)
);

CREATE TABLE articulo (
	idArticulo		serial		 NOT NULL,
	nombre			VARCHAR(100) NOT NULL,
	descripcion		VARCHAR(200) NOT NULL,
	inventario		SMALLINT	 NOT NULL,
	precio			FLOAT		 NOT NULL,
	idDeporte 		serial		 NOT NULL,
	idMarca			serial		 NOT NULL,
	idDescuento		serial		 NOT NULL,
	PRIMARY KEY (idArticulo),
	FOREIGN KEY (idDeporte) REFERENCES deporte (idDeporte),
	FOREIGN KEY (idMarca) REFERENCES marca (idMarca),
	FOREIGN KEY (idDescuento) REFERENCES descuento (idDescuento),
	CHECK (precio > 0),
	CHECK(inventario >=0)
);

CREATE TABLE formaPago
(
	idFormaPago	serial	NOT NULL,
	tipo		CHAR(1)	NOT NULL,
	PRIMARY KEY (idFormaPago)
);

CREATE TABLE venta (
	idVenta		serial	NOT NULL,
	idUsuario	serial	NOT NULL,
	fecha 		DATE	NOT NULL,
	total		FLOAT	NOT NULL,
	PRIMARY KEY (idVenta),
	FOREIGN KEY (idUsuario) REFERENCES usuario (idUsuario),
	CHECK (total > 0)
);

CREATE TABLE ventaArticulo (
	idVenta		serial	NOT NULL,
	idArticulo	serial	NOT NULL,
	cantidad	INT		NOT NULL,
	CHECK(cantidad > 0),
	FOREIGN KEY (idVenta) REFERENCES venta (idVenta),
	FOREIGN KEY (idArticulo) REFERENCES articulo (idArticulo),
	PRIMARY KEY (idVenta, idArticulo)
);

GRANT ALL PRIVILEGES ON tipoUsuario TO admintienda;
GRANT ALL PRIVILEGES ON usuario TO admintienda;
GRANT ALL PRIVILEGES ON direccion TO admintienda;
GRANT ALL PRIVILEGES ON deporte TO admintienda;
GRANT ALL PRIVILEGES ON categoria TO admintienda;
GRANT ALL PRIVILEGES ON marca TO admintienda;
GRANT ALL PRIVILEGES ON descuento TO admintienda;
GRANT ALL PRIVILEGES ON articulo TO admintienda;
GRANT ALL PRIVILEGES ON formaPago TO admintienda;
GRANT ALL PRIVILEGES ON venta TO admintienda;
GRANT ALL PRIVILEGES ON ventaArticulo TO admintienda;
GRANT insert ON venta TO ventatienda;
GRANT select ON venta TO ventatienda;
GRANT delete ON venta TO ventatienda;
GRANT update ON venta TO ventatienda;
GRANT select ON tipoUsuario TO clientetienda;
GRANT insert ON usuario TO clientetienda;
GRANT select ON usuario TO clientetienda;
GRANT delete ON usuario TO clientetienda;
GRANT update ON usuario TO clientetienda;
GRANT select ON marca TO clientetienda;
GRANT select ON articulo TO clientetienda;
GRANT select ON formaPago TO clientetienda;
GRANT insert ON venta TO clientetienda;
GRANT select ON venta TO clientetienda;
GRANT delete ON venta TO clientetienda;
GRANT update ON venta TO clientetienda;
GRANT insert ON ventaArticulo TO clientetienda;
GRANT select ON ventaArticulo TO clientetienda;
GRANT delete ON ventaArticulo TO clientetienda;
GRANT update ON ventaArticulo TO clientetienda;

INSERT INTO tipoUsuario(tipo) VALUES('A');
INSERT INTO tipoUsuario(tipo) VALUES('V');
INSERT INTO tipoUsuario(tipo) VALUES('C');

INSERT INTO deporte(nombre) VALUES('ciclismo');
INSERT INTO deporte(nombre) VALUES('skateboard');
INSERT INTO deporte(nombre) VALUES('patinaje');
INSERT INTO deporte(nombre) VALUES('motociclismo');

INSERT INTO categoria(nombre, idDeporte) VALUES('all mountain', 1);
INSERT INTO categoria(nombre, idDeporte) VALUES('cross country', 1);
INSERT INTO categoria(nombre, idDeporte) VALUES('ruta', 1);
INSERT INTO categoria(nombre, idDeporte) VALUES('urbano', 1);
INSERT INTO categoria(nombre, idDeporte) VALUES('downhill', 2);
INSERT INTO categoria(nombre, idDeporte) VALUES('park', 2);
INSERT INTO categoria(nombre, idDeporte) VALUES('velocidad', 3);
INSERT INTO categoria(nombre, idDeporte) VALUES('derby', 3);
INSERT INTO categoria(nombre, idDeporte) VALUES('motocross', 4);
INSERT INTO categoria(nombre, idDeporte) VALUES('supermoto', 4);

INSERT INTO formaPago(tipo) VALUES('T');
INSERT INTO formaPago(tipo) VALUES('E');

INSERT INTO usuario(nombre, aPaterno, aMaterno, correo, telefono, usuario, contrasena, idTipoUsuario) VALUES('Daniela', 'Camacho', 'Garduño', 'soy.donny@gmail.com', '5518377330', 'DannGarcam', 'ilovepancer', 1);
INSERT INTO usuario(nombre, aPaterno, aMaterno, correo, telefono, usuario, contrasena, idTipoUsuario) VALUES('Carlos', 'Garcia', 'Martinez', 'carlos.cg242@gmail.com', '5540318268', 'sorlac001', 'carlos3123', 2);
INSERT INTO usuario(nombre, aPaterno, aMaterno, correo, telefono, usuario, contrasena, idTipoUsuario) VALUES('Andre Ricardo', 'Padilla', 'Guevara', 'nomeacuerdo@gmail.com', '551122344', 'omegaSalud', '1000house', 3);