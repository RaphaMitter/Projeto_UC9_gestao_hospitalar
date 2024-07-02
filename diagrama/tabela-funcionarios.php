CREATE TABLE funcionarios (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30),
    sobrenome VARCHAR(30),
    id_cargo INT,
    id_status INT,
    FOREIGN KEY (id_cargo) REFERENCES cargo (id_cargo),
    FOREIGN KEY (id_status) REFERENCES status (id_status)
    
);
