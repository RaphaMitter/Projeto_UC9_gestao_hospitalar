CREATE TABLE exames (
    id_exame INT AUTO_INCREMENT PRIMARY KEY,
    id_prontuario INT,
    id_funcionario_solicitante INT,
    id_procedimentos_exame INT,
    data_solicitacao DATETIME,
    FOREIGN KEY (id_prontuario) REFERENCES prontuarios(id_prontuario),
    FOREIGN KEY (id_funcionario_solicitante) REFERENCES funcionarios(id_funcionario),
    FOREIGN KEY (id_procedimentos_exame) REFERENCES procedimentos_exame(id_procedimentos_exame)
);
