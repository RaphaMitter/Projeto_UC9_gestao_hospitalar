CREATE TABLE consultas (
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    id_prontuario INT,
    id_funcionario_atendimento INT,
    detalhes VARCHAR(255),
    FOREIGN KEY (id_prontuario) REFERENCES prontuario(id_prontuario),
    FOREIGN KEY (id_funcionario_atendimento) REFERENCES funcionario_atendimento(id_funcionario_atendimento)
    
);
