/*Tabela de Log*/

CREATE TABLE log_exclusao (
  id int(11) NOT NULL AUTO_INCREMENT,
  tabela varchar(50) DEFAULT NULL,
  registro longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(registro)),
  excluido_em datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id)
);

/*Tabela de Agendamentos*/

CREATE TABLE tbl_agendamentos (
  id_agendamentos int(11) NOT NULL AUTO_INCREMENT,
  Datas date DEFAULT NULL,
  Hora time DEFAULT NULL,
  id_clientes int(11) DEFAULT NULL,
  id_animais int(11) DEFAULT NULL,
  PRIMARY KEY (id_agendamentos),
  KEY id_clientes (id_clientes),
  KEY id_animais (id_animais),
  CONSTRAINT tbl_agendamentos_ibfk_1 FOREIGN KEY (id_clientes) REFERENCES tbl_clientes (id_clientes),
  CONSTRAINT tbl_agendamentos_ibfk_2 FOREIGN KEY (id_animais) REFERENCES tbl_animais (id_animais)
);

/*Tabela de Animais*/

CREATE TABLE tbl_animais (
  id_animais int(11) NOT NULL AUTO_INCREMENT,
  Nome varchar(80) DEFAULT NULL,
  Tipo varchar(25) DEFAULT NULL,
  Peso int(11) DEFAULT NULL,
  id_clientes int(11) DEFAULT NULL,
  PRIMARY KEY (id_animais),
  KEY id_clientes (id_clientes),
  CONSTRAINT tbl_animais_ibfk_1 FOREIGN KEY (id_clientes) REFERENCES tbl_clientes (id_clientes)
);

/*Tabela de Clientes*/

CREATE TABLE tbl_clientes (
  id_clientes int(11) NOT NULL AUTO_INCREMENT,
  Nome varchar(85) DEFAULT NULL,
  Endereço varchar(80) DEFAULT NULL,
  Telefone int(11) DEFAULT NULL,
  Email varchar(80) NOT NULL,
  Senha varchar(45) NOT NULL,
  PRIMARY KEY (id_clientes)
);

/*Tabela de Produtos*/

CREATE TABLE tbl_produtos (
  id_produtos int(11) NOT NULL AUTO_INCREMENT,
  Nome varchar(80) DEFAULT NULL,
  Categoria varchar(35) DEFAULT NULL,
  Preço decimal(10,2) DEFAULT NULL,
  Quantidade_estoque int(11) DEFAULT NULL,
  PRIMARY KEY (id_produtos)
);

/*Tabela de Vendas*/

CREATE TABLE tbl_vendas (
  id_vendas int(11) NOT NULL AUTO_INCREMENT,
  Datas date DEFAULT NULL,
  Id_clientes int(11) DEFAULT NULL,
  Total int(11) DEFAULT NULL,
  id_produto int(11) DEFAULT NULL,
  PRIMARY KEY (id_vendas),
  KEY Id_clientes (Id_clientes),
  CONSTRAINT tbl_vendas_ibfk_1 FOREIGN KEY (Id_clientes) REFERENCES tbl_clientes (id_clientes)
);

/*Inserts*/

INSERT INTO tbl_clientes (Nome, Endereço, Telefone, Email, Senha) VALUES
('Lucas Silva', 'Rua das Flores, 123, São Paulo, SP', 987654321, 'lucas.silva@email.com', 'senha123'),
('Ana Santos', 'Av. Brasil, 45, Rio de Janeiro, RJ',  998765432, 'ana.santos@email.com', 'senha456'),
('Marcos Oliveira', 'Rua Bela Vista, 200, Belo Horizonte, MG', 912345678, 'marcos.oliveira@email.com', 'senha789'),
('Fernanda Costa', 'Alameda das Árvores, 56, Curitiba, PR', 954321765, 'fernanda.costa@email.com', 'senha321'),
('Juliana Almeida', 'Praça da Liberdade, 89, Salvador, BA', 998743216, 'juliana.almeida@email.com', 'senha654'),
('Rafael Lima', 'Av. Paulista, 1000, São Paulo, SP', 98741-2365, 'rafael.lima@email.com', 'senha987'),
('Bianca Rocha', 'Rua do Sol, 78, Recife, PE', 987651289, 'bianca.rocha@email.com', 'senha147'),
('Carlos Eduardo', 'Rua do Comércio, 15, Porto Alegre, RS', 998764532, 'carlos.eduardo@email.com', 'senha258'),
('Patrícia Gomes', 'Av. Independência, 345, Fortaleza, CE', 912348765, 'patricia.gomes@email.com', 'senha369'),
('Thiago Pereira', 'Rua das Acácias, 90, Manaus, AM', 987614532, 'thiago.pereira@email.com', 'senha852');
