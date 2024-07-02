CREATE TABLE procedimentos_exame (
    id_procedimentos_exame INT AUTO_INCREMENT PRIMARY KEY,
    id_tipo_procedimento INT,
    FOREIGN KEY (id_tipo_procedimento) REFERENCES tipos_procedimento(id_tipos_procedimento)
);