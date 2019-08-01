use sistema_solos;

show tables;

CREATE TABLE if not exists enderecos(
	id INT NOT NULL AUTO_INCREMENT,
    cidade VARCHAR(255),
    propriedade VARCHAR(255),
    estado VARCHAR (2),
    cep VARCHAR (8),
    
    PRIMARY KEY (id)
    
);


CREATE TABLE categorias(
	id INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR (255),
    
    PRIMARY KEY (id)
);


CREATE TABLE tipo_analise(
	id INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(255),
    valor DECIMAL(6,2),
	
    PRIMARY KEY(id)
);



CREATE TABLE situacao(
	id INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(255),
	
    PRIMARY KEY(id)
);


CREATE TABLE funcionarios(
	siap VARCHAR(11) NOT NULL,
    nome VARCHAR (255),
    sobrenome VARCHAR (255),
    senha VARCHAR(255),
    email VARCHAR(255),
    cod_categoria INT NOT NULL,
    
    PRIMARY KEY(siap),
    
    FOREIGN KEY (cod_categoria)
    REFERENCES categorias(id)    
);



CREATE TABLE clientes(
	identificador VARCHAR(14) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cod_endereco INT NOT NULL,
	
    PRIMARY KEY (identificador),
    
    FOREIGN KEY (cod_endereco)
    REFERENCES enderecos(id)
);


CREATE TABLE amostras(
	identificador VARCHAR(255) NOT NULL,
    data_entrada DATE,
    id_situacao INT NOT NULL,
	identificador_cliente_amostras VARCHAR(14) NOT NULL,
    id_tipo_analise INT NOT NULL,
    
    PRIMARY KEY(identificador),
    
    FOREIGN KEY (id_situacao)
	REFERENCES situacao(id),
    
    FOREIGN KEY (id_situacao)
	REFERENCES situacao(id),
    
    FOREIGN KEY (identificador_cliente_amostras)
	REFERENCES clientes(identificador),
    
    FOREIGN KEY (id_tipo_analise)
	REFERENCES tipo_analise(id)   
);

	
CREATE TABLE resultados(
	id INT NOT NULL AUTO_INCREMENT,
    identificador_amostra VARCHAR(255) NOT NULL,
    observacao TEXT,
    pdf TEXT NOT NULL,
    `data` DATE,
	identificador_cliente_resultados VARCHAR(14) NOT NULL,
		
    PRIMARY KEY (id),
    
    FOREIGN KEY (identificador_amostra)
	REFERENCES amostras(identificador),
    
    FOREIGN KEY (identificador_cliente_resultados)
	REFERENCES clientes(identificador)
);


