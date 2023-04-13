CREATE TABLE sucos(
	id INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    valor DEC(4,2) NOT NULL,
    acomp_fk INT NOT NULL,
    FOREIGN KEY (acomp_fk) REFERENCES acompanhamento(id)
);

CREATE TABLE Frutas(
	id INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    valor_Kg DEC(4,2) NOT NULL
);

CREATE TABLE peso(
	id INT PRIMARY KEY,
    peso DEC(3,3) NOT NULL
);

CREATE TABLE create_juice(
	id INT PRIMARY KEY,
    nome_fk INT NOT NULL,
    peso_fk INT NOT NULL,
    valor DECIMAL(3,3),
    FOREIGN KEY (nome_fk) REFERENCES frutas(id),
    FOREIGN KEY (peso_fk) REFERENCES peso(id)
);

