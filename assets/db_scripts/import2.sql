-- Cidadaos
INSERT INTO cidadaos (cpfcnpj, tipo, nome, produtorRural, email, telefone1, telefone2, horas_servico, inscricao_prod_rural)
VALUES ('987.654.321-52', 1, 'João Pedro Fidelis', 1,'joao@gmail.com', '(49) 9956-65427', NULL, 2004, '124524867');
INSERT INTO cidadaos (cpfcnpj, tipo, nome, produtorRural, email, telefone1, telefone2, horas_servico, inscricao_prod_rural)
VALUES ('123.456.789-12', 1,'Mateus Rodrigo Matias', 1, 'mateus@mateus.com', '(49) 9963-85472', NULL, 54210, '485632981');

-- Users
INSERT INTO users (name, email, password, acesso, remember_token, cidadao_id, tipo_id) 
VALUES ('Mateus Rodrigo Matias', 'mateus@mateus.com', '123456', '1', '123456', '2', '2');
INSERT INTO users (name, email, password, acesso, remember_token, cidadao_id, tipo_id) 
VALUES ('João Pedro Fidelis', 'joao@joao.com', '654321', '1', '654321', '3', '2');

-- Tipos Logradouros
INSERT INTO tipo_logradouros (nome) VALUES ('Rua');
INSERT INTO tipo_logradouros (nome) VALUES ('Avenida');
INSERT INTO tipo_logradouros (nome) VALUES ('Linha');
INSERT INTO tipo_logradouros (nome) VALUES ('Rodovia');

-- Enderecos
INSERT INTO enderecos (numero, cep, complemento, estado, cidade, bairro, logradouro, cidadao_id)
VALUES ('180', '89560-000', 'Prefeitura Municipal de Videira', 'Santa Catarina', 'Videira', 'Alvorada', 'Av. Manoel Roque', '1');
INSERT INTO enderecos (numero, cep, complemento, estado, cidade, bairro, logradouro, cidadao_id)
VALUES ('123', '89560-000', NULL, 'Santa Catarina', 'Videira', 'Aeroporto', 'Rua das Videiras', '2');
INSERT INTO enderecos (numero, cep, complemento, estado, cidade, bairro, logradouro, cidadao_id)
VALUES ('321', '89560-000', 'Ap 102', 'Santa Catarina', 'Videira', 'Carboni', 'Rua José Bouitex', '3');

-- Meios
INSERT INTO meios (nome) VALUES ('Presencial');
INSERT INTO meios (nome) VALUES ('Telefone');

-- Parametros
INSERT INTO `parametros` (`id`, `parametro`, descricao, `valor`) VALUES (NULL, 'email_secretario', 'Email do Secretario de Infraestrutura', 'admin@admin.com');
INSERT INTO `parametros` (`id`, `parametro`, descricao, `valor`) VALUES (NULL, 'max_horas_servico', 'Máximo de Horas de Serviço anual para Agricultores', '8');

-- Setores
INSERT INTO setors (nome) VALUES ('Agricultura');
INSERT INTO setors (nome) VALUES ('DSU');
INSERT INTO setors (nome) VALUES ('Obras');
INSERT INTO setors (nome) VALUES ('Iluminação Pública');
INSERT INTO setors (nome) VALUES ('Interno');

-- Setores Internos
INSERT INTO setor_internos (nome) VALUES ('Paço');
INSERT INTO setor_internos (nome) VALUES ('Educação');
INSERT INTO setor_internos (nome) VALUES ('Saúde');
INSERT INTO setor_internos (nome) VALUES ('Esporte');
INSERT INTO setor_internos (nome) VALUES ('Guarda Municipal');

-- Sequencia
INSERT INTO sequencias (sequencia, setor_id) VALUES ('0', '1');
INSERT INTO sequencias (sequencia, setor_id) VALUES ('0', '2');
INSERT INTO sequencias (sequencia, setor_id) VALUES ('0', '3');
INSERT INTO sequencias (sequencia, setor_id) VALUES ('0', '4');
INSERT INTO sequencias (sequencia, setor_id) VALUES ('0', '5');

-- Servicos
INSERT INTO cadastro_servicos(descricao, setor_id) VALUES ('Arrumar buraco na rua', 1);
INSERT INTO cadastro_servicos(descricao, setor_id) VALUES ('Caçamba de brita', 2);
INSERT INTO cadastro_servicos(descricao, setor_id) VALUES ('Limpeza de Bueiro', 3);
INSERT INTO cadastro_servicos(descricao, setor_id) VALUES ('Troca de luz no poste', 4);
INSERT INTO cadastro_servicos(descricao, setor_id) VALUES ('Interruptor queimado', 5);

-- Máquinas
INSERT INTO cadastro_maquinas(descricao, codigo_frota, valor) VALUES ('Retroescavadeira','123','42.35');
INSERT INTO cadastro_maquinas(descricao, codigo_frota, valor) VALUES ('Caminhão','321','21.37');

-- Operadores
INSERT INTO operadors(codigo_operador, cidadao_id) VALUES ('123',2);
INSERT INTO operadors(codigo_operador, cidadao_id) VALUES ('321',3);

-- Funcionários
INSERT INTO funcionarios(codigo_funcionario, cidadao_id) VALUES ('1',2);
INSERT INTO funcionarios(codigo_funcionario, cidadao_id) VALUES ('2',3);

-- Status
INSERT INTO statuses(descricao) VALUES ('Aberto');
INSERT INTO statuses(descricao) VALUES ('Aguardando assinatura');
INSERT INTO statuses(descricao) VALUES ('Assinado');
INSERT INTO statuses(descricao) VALUES ('Em execução');
INSERT INTO statuses(descricao) VALUES ('Cancelado');
INSERT INTO statuses(descricao) VALUES ('Executado');
INSERT INTO statuses(descricao) VALUES ('Aguardando agendamento');
INSERT INTO statuses(descricao) VALUES ('Agendado');
INSERT INTO statuses(descricao) VALUES ('Gerado Requerimento');
INSERT INTO statuses(descricao) VALUES ('Encerrado');

-- Unidades
INSERT INTO unidades(descricao, sigla) VALUES ('Unidades', 'un');
INSERT INTO unidades(descricao, sigla) VALUES ('Litro', 'l');
INSERT INTO unidades(descricao, sigla) VALUES ('Metro', 'm');
INSERT INTO unidades(descricao, sigla) VALUES ('Grama', 'g');
INSERT INTO unidades(descricao, sigla) VALUES ('Metro  Cúbico', 'm³');

-- Materiais
INSERT INTO materials (descricao, valor, cod_externo, unidade_id) VALUES ('Areia', '12.12', 1, 3);
INSERT INTO materials (descricao, valor, cod_externo, unidade_id) VALUES ('Pedra', '22.12', 2, 3);
INSERT INTO materials (descricao, valor, cod_externo, unidade_id) VALUES ('Cimento', '19.99', 3, 1);
INSERT INTO materials (descricao, valor, cod_externo, unidade_id) VALUES ('Areia c/ Brita', '5.22', 4, 3);


-- Tipos justificativas
INSERT INTO tipo_justificativas (descricao) VALUES ('Ordem de serviço'), ('Serviço'), ('Agendamento de serviço');

-- Justificativas
INSERT INTO justificativas (descricao, tipo_id) VALUES ('Serviço Ilegal', '1'), ('Requerente solicitou', '2'), ('Tempo chuvoso', '3');

-- Ações
INSERT INTO acoes(descricao) VALUES ('Cadastrar');
INSERT INTO acoes(descricao) VALUES ('Editar');
INSERT INTO acoes(descricao) VALUES ('Excluir');
INSERT INTO acoes(descricao) VALUES ('Resetar Senha');