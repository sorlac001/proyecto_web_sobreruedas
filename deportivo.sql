CREATE USER adminbase with encrypted password 'garcam31110911';
ALTER ROLE clientetienda with SUPERUSER;

CREATE USER admintienda with encrypted password 'sorlac312320346';
ALTER ROLE clientetienda with NOSUPERUSER;
ALTER ROLE clientetienda with NOCREATEDB;
ALTER ROLE clientetienda with NOCREATEROLE;
ALTER ROLE clientetienda with CREATEUSER;

CREATE USER ventatienda with encrypted password '311120346';
ALTER ROLE clientetienda with NOSUPERUSER;
ALTER ROLE clientetienda with NOCREATEDB;
ALTER ROLE clientetienda with NOCREATEROLE;
ALTER ROLE clientetienda with NOCREATEUSER;

CREATE USER clientetienda with encrypted password 'sorlac0011';
ALTER ROLE clientetienda with LOGIN;

CREATE DATABASE sobreruedas OWNER adminbase;

\c sobreruedas


CREATE TABLE tipoUsuario (
	idTipoUsuario 	serial 		NOT NULL,
	nombre			VARCHAR(10)	NOT NULL,
	PRIMARY KEY (idTipoUsuario)
);

CREATE TABLE descuento (
	idDescuento	serial	NOT NULL,
	porcentaje	FLOAT	NOT NULL,
	PRIMARY KEY (idDescuento)
);

CREATE TABLE deporte (
	idDeporte	serial		NOT NULL,
	nombre		VARCHAR(30)	NOT NULL,
	PRIMARY KEY (idDeporte)
);

CREATE TABLE marca (
	idMarca		serial		NOT NULL,
	nombre		VARCHAR(30)	NOT NULL,
	PRIMARY KEY (idMarca)
);

CREATE TABLE usuario (
	idUsuario		serial		NOT NULL,
	nombre			VARCHAR(20)	NOT NULL,
	aPaterno		VARCHAR(20)	NOT NULL,
	aMaterno		VARCHAR(20),
	email			VARCHAR(30)	NOT NULL,
	telefono		CHAR(10)	NOT NULL,
	usuario			VARCHAR(30)	NOT NULL,
	contrasenia		VARCHAR(16)	NOT NULL,
	idTipoUsuario	serial		NOT NULL,
	PRIMARY KEY (idUsuario),
	FOREIGN KEY (idTipoUsuario) REFERENCES tipoUsuario (idTipoUsuario),
);

CREATE TABLE direccion (
	idDireccion	serial		NOT NULL,
	calle		VARCHAR(30)	NOT NULL,
	numExterior	VARCHAR(4)	NOT NULL,
	colonia		VARCHAR(20)	NOT NULL,
	codPostal	CHAR(5)		NOT NULL,
	idUsuario	serial		NOT NULL,
	PRIMARY KEY (idDireccion)
	FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario),
);

CREATE TABLE articulo (
	idArticulo		serial			NOT NULL,
	nombre			VARCHAR(20)		NOT NULL,
	descripcion		VARCHAR(255)	NOT NULL,
	inventario		BOOLEAN			NOT NULL,
	tipoArticulo	VARCHAR(20)		NOT NULL,
	precio			FLOAT			NOT NULL,
	idDeporte 		serial			NOT NULL,
	idMarca			serial			NOT NULL,
	PRIMARY KEY (idArticulo),
	FOREIGN KEY (idDeporte) REFERENCES deporte (idDeporte),
	FOREIGN KEY (idMarca) REFERENCES marca (idMarca),
	CHECK (precio > 0),
	CHECK(inventario >=0)
);

CREATE TABLE categoria (
	idCategoria	serial		NOT NULL,
	nombre		VARCHAR(10)	NOT NULL,
	idDeporte	serial		NOT NULL,
	PRIMARY KEY (idCategoria),
	FOREIGN KEY (idDeporte) REFERENCES deporte (idDeporte)
);

CREATE TABLE venta (
	idVenta		serial	NOT NULL,
	idUsuario	serial	NOT NULL,
	fecha 		date	NOT NULL,
	PRIMARY KEY (idVenta),
	FOREIGN KEY (idUsuario) REFERENCES usuario (idUsuario)
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

CREATE TABLE descuentoArticulo (
	idDescuento	serial	NOT NULL,
	idArticulo	serial	NOT NULL,
	cantidad	INT		NOT NULL,
	CHECK(cantidad > 0),
	FOREIGN KEY (idDescuento) REFERENCES descuento (idDescuento),
	FOREIGN KEY (idArticulo) REFERENCES articulo (idArticulo),
	PRIMARY KEY (idVenta, idDescuento)
);