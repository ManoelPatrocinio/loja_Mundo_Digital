-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Fev-2020 às 17:49
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mundo_digital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mw_categorias`
--

CREATE TABLE `mw_categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(45) NOT NULL,
  `cat_slug` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mw_categorias`
--

INSERT INTO `mw_categorias` (`cat_id`, `cat_nome`, `cat_slug`) VALUES
(1, 'Capas', 'categoria-capas'),
(2, 'Fones', 'categoria-fones'),
(3, 'Películas', 'peliculas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mw_clientes`
--

CREATE TABLE `mw_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) NOT NULL,
  `cli_cargo` int(11) DEFAULT NULL,
  `cli_sobrenome` varchar(80) DEFAULT NULL,
  `cli_endereco` varchar(100) DEFAULT NULL,
  `cli_numero` varchar(20) DEFAULT NULL,
  `cli_bairro` varchar(80) DEFAULT NULL,
  `cli_cidade` varchar(150) DEFAULT NULL,
  `cli_uf` varchar(2) DEFAULT NULL,
  `cli_cep` varchar(10) DEFAULT NULL,
  `cli_cpf` varchar(12) DEFAULT NULL,
  `cli_rg` varchar(20) DEFAULT NULL,
  `cli_ddd` int(2) DEFAULT NULL,
  `cli_fone` varchar(10) DEFAULT NULL,
  `cli_celular` varchar(10) DEFAULT NULL,
  `cli_email` varchar(60) DEFAULT NULL,
  `cli_pass` varchar(40) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_data_cad` date DEFAULT NULL,
  `cli_hora_cad` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mw_clientes`
--

INSERT INTO `mw_clientes` (`cli_id`, `cli_nome`, `cli_cargo`, `cli_sobrenome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_cpf`, `cli_rg`, `cli_ddd`, `cli_fone`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(4, 'xuao', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xuao@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(5, 'weri oliveira santos', 9, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'weri@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(6, 'weri oliveira santos', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'weri@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(7, 'weri oliveira santos', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'weri@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL),
(8, 'xuao ficto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xuao@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL),
(10, 'bruno lemos', NULL, NULL, 'baile da penha', '122', NULL, 'sao paulo', '', NULL, NULL, NULL, NULL, NULL, NULL, 'blb@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL),
(11, 'manoel de jesus moura do patrocinio', NULL, NULL, 'Augusto', '298', NULL, 'Barra', 'BA', NULL, '98989898989', NULL, NULL, NULL, NULL, 'manoelpatrocinio99@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mw_produtos`
--

CREATE TABLE `mw_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_nome` varchar(45) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_descricao` text NOT NULL,
  `pro_peso` double NOT NULL,
  `pro_valor` double NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(1000) NOT NULL,
  `pro_slug` varchar(100) NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(45) NOT NULL,
  `pro_referencia` varchar(45) NOT NULL,
  `pro_fabricante` varchar(45) NOT NULL,
  `pro_ativo` char(1) NOT NULL,
  `pro_frete_free` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mw_produtos`
--

INSERT INTO `mw_produtos` (`pro_id`, `pro_nome`, `pro_categoria`, `pro_descricao`, `pro_peso`, `pro_valor`, `pro_altura`, `pro_largura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_referencia`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 'Umidigi A5 pro', 1, 'Capa de silicone tpu luxo telefone capa traseira para umidigi a5 funda coque', 10, 15, 13, 7, 5, 'https://img.bgxcdn.com/thumb/gallery/oaupload/banggood/images/03/71/a13d8878-01c5-437e-bb5e-99257425c278.jpg', 'umidigi-A5-Pro', 20, '', '', 'china', '', ''),
(2, ' Iphone 7', 1, 'iphone 7 6s 5 5S se x capa traseira xs max xr 11 pro removível 3 em 1 caso para iphone 8 7 6s.', 15, 17, 13, 7, 5, 'https://ik.imagekit.io/gocase/govinci/masculina-street/standard-iphone6/mockup?name=Seu%20nome&expires=true', 'Capa-Iphone-7', 20, '', '', 'china', '', ''),
(3, 'Sansung Galaxy A50', 1, 'Capa de silicone para samsung galaxy a50 a30 a40 a10 a20 a70 doces sólidos a20e m20 a7 2018 nota 10 s8 s9 s10 plus s10e 5g casos capa', 7, 15, 3, 7, 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTGHOelrlXpuTBM56_YKRTyBVesGRktTbIAvOvu0WXjqesKXZcx', 'Capa-Sansung-A50', 20, '', '', '', '', NULL),
(4, 'xaomi mi 9', 1, 'Capa de silicone funda MOFI original', 10, 34, 3, 6, 10, 'https://www.dhresource.com/600x600/f2/albu/g8/M00/E8/83/rBVaVFy0TuuAJikmAAKlmiE_Vbc577.jpg', 'mi 9', 30, 'pro', 'L3392', 'china', 's', 'n'),
(5, 'UMIDIGI Upods ', 2, 'UMIDIGI Upods TWS Bluetooth 5.0 fone de Ouvido Sem Fio Auto Emparelhamento de Redução de Ruído com caixa de Carga.', 0.12, 120, 4, 6, 30, 'https://images-americanas.b2w.io/produtos/01/00/img/472635/0/472635039_1GG.jpg', 'Umidigi-upods', 18, '472634642', 'ssa', 'china', '', NULL),
(6, 'fone Airpods', 2, 'Fones de ouvido sem fio Bluetooth, com Microfones duplos com filtragem espacial, Dois sensores ópticos, Acelerômetro com detecção de movimento, Acelerômetro com detecção de voz.', 2, 2000, 3, 6, 10, 'https://a-static.mlcdn.com.br/618x463/airpods-com-estojo-de-recarga/magazineluiza/223026300/44755d4df9457a0de825d815b89e728d.jpg', 'Air', 30, '', 'L339243', '', 's', 'n'),
(7, 'Película Iphone 11', 3, 'A película de proteção traseira serve exatamente para evitar arranhados na parte traseira do aparelho.', 3, 20, 3, 5, 8, 'https://images-americanas.b2w.io/produtos/01/00/img/1369620/7/1369620779_1GG.jpg', 'Película_Iphone_11', 25, '1369620761', 't0761', 'Apple', 's', 'n'),
(8, 'Película Samsung Galaxy Note 10', 3, ' película de proteção traseira flexível, com cor cinza semi-transparente para o Samsung Galaxy Note 10', 2, 13, 3, 5, 8, 'https://images-americanas.b2w.io/produtos/01/00/img/1369600/3/1369600372_1GG.jpg', 'Película_Galaxy_Note_10', 16, '45698761', 'y0764', 'Samsung', 's', 'n'),
(10, 'Película Temperado Xiaomi Redmi Note 8 Pro', 3, 'Película de Vidro Temperado Xiaomi Redmi Note 8 Pro', 3, 22, 3, 5, 8, 'https://images-americanas.b2w.io/produtos/01/00/img/1284398/4/1284398451_1GG.jpg', 'Película_Xiaomi_Redmi_Note_8_Pro', 30, '479461', 'k3457', 'Xiaomi', 's', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mw_servicos`
--

CREATE TABLE `mw_servicos` (
  `Cli_id` int(11) NOT NULL,
  `Cli_nome` varchar(100) DEFAULT NULL,
  `Cli_cpf` varchar(14) NOT NULL,
  `Cli_email` varchar(100) DEFAULT NULL,
  `Cli_telefone` varchar(15) DEFAULT NULL,
  `Cli_endereco` varchar(100) DEFAULT NULL,
  `Cli_servico` varchar(50) DEFAULT NULL,
  `Cli_horario` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mw_servicos`
--

INSERT INTO `mw_servicos` (`Cli_id`, `Cli_nome`, `Cli_cpf`, `Cli_email`, `Cli_telefone`, `Cli_endereco`, `Cli_servico`, `Cli_horario`) VALUES
(1, 'manoel', '009.999.999-77', 'manoelpatrocinio99@gmail.com', '(99)999999-9999', 'Adolfo Moitinho 576', 'Câmera de Segurança', 'Manhã'),
(2, 'wery', '222.222.222-22', 'weryOliveira@gmail.com', '(66)6666-6669', 'Boa pergunta', 'Cerca Elétrica', 'Tarde'),
(3, 'Bruno lemos', '098.838.995-92', 'Brunolemos@gmail.com', '(74)96568-8477', 'baixão', 'Câmera de Segurança', 'Manhã');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `cod_venda` int(11) NOT NULL,
  `Cli_id` int(11) NOT NULL,
  `Cli_nome` varchar(60) NOT NULL,
  `CompraValor` varchar(10) NOT NULL,
  `NomeCartao` varchar(30) NOT NULL,
  `NumeroCartao` varchar(20) NOT NULL,
  `expiracao` varchar(10) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `FormaPagamento` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`cod_venda`, `Cli_id`, `Cli_nome`, `CompraValor`, `NomeCartao`, `NumeroCartao`, `expiracao`, `cvv`, `FormaPagamento`) VALUES
(2, 0, 'manoel de jesus', 'R$ 268', 'Manoel j. Patrocinio', 'NomeCartao', '22/05/2010', '3222', 'Cartao Credito'),
(3, 0, 'manoel de jesus', 'R$ 568', 'Manoel j. Patrocinio', 'NomeCartao', '16/09/2019', '2345', 'Cartao Credito'),
(4, 0, 'manoel de jesus', 'R$ 268 ', 'Manoel j. Patrocinio', 'NomeCartao', '4444', '444', 'Cartao Credito'),
(5, 0, 'weri oliveira santos', 'R$ 175 ', 'sdf', 'NomeCartao', '34', '3ad7c2ebb96fcba7cda0cf54a2e802f5', 'Cartao Credito'),
(6, 0, 'weri oliveira santos', 'R$ 42 ', 'ewar', 'NomeCartao', '343', 'e369853df766fa44e1ed0ff613f563bd', 'Cartao Credito'),
(7, 0, 'weri oliveira santos', 'R$ 42 ', 'sf', 'NomeCartao', '343', '248e844336797ec98478f85e7626de4a', 'Cartao Credito'),
(8, 0, 'weri oliveira santos', 'R$ 86 ', '88', 'NomeCartao', '567', '045752bc5c7f705cea3cc14c036c261c', 'Cartao Credito'),
(9, 0, 'weri oliveira santos', 'R$ 460 ', 'dfsd', 'NomeCartao', '3434', 'b3967a0e938dc2a6340e258630febd5a', 'Cartao Credito'),
(10, 0, 'weri oliveira santos', 'R$ 460 ', '343', 'NomeCartao', '234', '289dff07669d7a23de0ef88d2f7129e7', 'Cartao Credito'),
(11, 11, 'manoel de jesus moura do patrocinio', 'R$  ', 'hxx', 'NomeCartao', '45', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Cartao Credito'),
(12, 11, 'manoel de jesus moura do patrocinio', 'R$ 39 ', 'ma', 'NomeCartao', '45', '6c8349cc7260ae62e3b1396831a8398f', 'Cartao Credito');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mw_categorias`
--
ALTER TABLE `mw_categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `mw_clientes`
--
ALTER TABLE `mw_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `mw_produtos`
--
ALTER TABLE `mw_produtos`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_categoria` (`pro_categoria`);

--
-- Índices para tabela `mw_servicos`
--
ALTER TABLE `mw_servicos`
  ADD PRIMARY KEY (`Cli_id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`cod_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mw_categorias`
--
ALTER TABLE `mw_categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `mw_clientes`
--
ALTER TABLE `mw_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `mw_produtos`
--
ALTER TABLE `mw_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `mw_servicos`
--
ALTER TABLE `mw_servicos`
  MODIFY `Cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `mw_produtos`
--
ALTER TABLE `mw_produtos`
  ADD CONSTRAINT `mw_produtos_ibfk_1` FOREIGN KEY (`pro_categoria`) REFERENCES `mw_categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
