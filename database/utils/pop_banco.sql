use compra_certa;

-- ########################### funcionario
insert into compra_certa.funcionario values ("999.999.999-11", "123", "1", "gerente");
insert into compra_certa.funcionario values ("888.888.888-11", "123", "2", "preparador");
insert into compra_certa.funcionario values ("777.777.777-11", "123", "3", "empacotador");
insert into compra_certa.funcionario values ("666.666.666-11", "123", "4", "entregador");

-- ########################### estado
insert into compra_certa.estado values (1, "Acre", "AC");
insert into compra_certa.estado values (2, "Alagoas", "AL");
insert into compra_certa.estado values (3, "Amapá", "AP");
insert into compra_certa.estado values (4, "Amazonas", "AM");
insert into compra_certa.estado values (5, "Bahia", "BA");
insert into compra_certa.estado values (6, "Ceará", "CE");
insert into compra_certa.estado values (7, "Espírito Santo", "ES");
insert into compra_certa.estado values (8, "Goiás", "GO");
insert into compra_certa.estado values (9, "Maranhão", "MA");
insert into compra_certa.estado values (10, "Mato Grosso", "MT");
insert into compra_certa.estado values (11, "Mato Grosso do Sul", "MS");
insert into compra_certa.estado values (12, "Minas Gerais", "MG");
insert into compra_certa.estado values (13, "Pará", "PA");
insert into compra_certa.estado values (14, "Paraíba", "PB");
insert into compra_certa.estado values (15, "Paraná", "PR");
insert into compra_certa.estado values (16, "Pernambuco", "PE");
insert into compra_certa.estado values (17, "Piauí", "PI");
insert into compra_certa.estado values (18, "Rio de Janeiro", "RJ");
insert into compra_certa.estado values (19, "Rio Grande do Norte", "RN");
insert into compra_certa.estado values (20, "Rio Grande do Sul", "RS");
insert into compra_certa.estado values (21, "Rondônia", "RO");
insert into compra_certa.estado values (22, "Roraima", "RR");
insert into compra_certa.estado values (23, "Santa Catarina", "SC");
insert into compra_certa.estado values (24, "São Paulo", "SP");
insert into compra_certa.estado values (25, "Sergipe", "SE");
insert into compra_certa.estado values (26, "Tocantins", "TO");

-- ########################### cidade
insert into compra_certa.cidade values (1, "Rio Branco", 1);
insert into compra_certa.cidade values (2, "Maceió", 2);
insert into compra_certa.cidade values (3, "Macapá", 3);
insert into compra_certa.cidade values (4, "Manaus", 4);
insert into compra_certa.cidade values (5, "Salvador", 5);
insert into compra_certa.cidade values (6, "Fortaleza", 6);
insert into compra_certa.cidade values (7, "Vitória", 7);
insert into compra_certa.cidade values (8, "Goiânia", 8);
insert into compra_certa.cidade values (9, "São Luís", 9);
insert into compra_certa.cidade values (10, "Cuiabá", 10);
insert into compra_certa.cidade values (11, "Campo Grande", 11);
insert into compra_certa.cidade values (12, "Belo Horizonte", 12);
insert into compra_certa.cidade values (13, "Belém", 13);
insert into compra_certa.cidade values (14, "João Pessoa", 14);
insert into compra_certa.cidade values (15, "Curitiba", 15);
insert into compra_certa.cidade values (16, "Recife", 16);
insert into compra_certa.cidade values (17, "Teresina", 17);
insert into compra_certa.cidade values (18, "Rio de Janeiro", 18);
insert into compra_certa.cidade values (19, "Natal", 19);
insert into compra_certa.cidade values (20, "Porto Alegre", 20);
insert into compra_certa.cidade values (21, "Porto Velho", 21);
insert into compra_certa.cidade values (22, "Boa Vista", 22);
insert into compra_certa.cidade values (23, "Florianópolis", 23);
insert into compra_certa.cidade values (24, "São Paulo", 24);
insert into compra_certa.cidade values (25, "Aracaju", 25);
insert into compra_certa.cidade values (26, "Palmas", 26);

-- ########################### endereco
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (1, 'Brasil', 'Algoma', '40800-000', 'Darwin', '814 Mcguire Pass', 'Crossing', 11, '76');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (2, 'Brasil', 'Tennessee', '40800-000', 'Eagan', '8 Eggendart Court', 'Pass', 11, '47153');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (3, 'Brasil', 'Sycamore', '41000-000', 'Chinook', '99645 Glacier Hill Point', 'Court', 6, '24');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (4, 'Brasil', 'Ridgeway', '40800-000', 'Express', '89 Eliot Place', 'Way', 3, '75');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (5, 'Brasil', 'Park Meadow', '40000-000', 'Doe Crossing', '77 Straubel Pass', 'Trail', 23, '4');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (6, 'Brasil', 'Dahle', '41000-000', 'Mockingbird', '57564 Brentwood Hill', 'Place', 16, '9');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (7, 'Brasil', 'Continental', '41000-000', 'Emmet', '8149 Pine View Terrace', 'Lane', 18, '34641');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (8, 'Brasil', 'Old Shore', '32222-876', 'Hanson', '0241 Linden Court', 'Park', 22, '9311');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (9, 'Brasil', 'Randy', '40000-000', 'Badeau', '0 Shopko Crossing', 'Center', 8, '277');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (10, 'Brasil', 'Brown', '40800-000', 'Lawn', '38 Duke Crossing', 'Place', 26, '7');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (11, 'Brasil', 'Bultman', '41000-000', 'Heath', '4173 Thackeray Alley', 'Alley', 20, '91');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (12, 'Brasil', 'Pawling', '41000-000', 'Mandrake', '68968 Miller Pass', 'Pass', 21, '1');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (13, 'Brasil', 'Golf View', '32222-876', 'Fallview', '9 Washington Street', 'Court', 18, '388');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (14, 'Brasil', 'Buena Vista', '40800-000', 'Wayridge', '9 Dovetail Avenue', 'Trail', 10, '98570');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (15, 'Brasil', 'Sachtjen', '40000-000', 'Birchwood', '0343 Atwood Street', 'Avenue', 16, '23');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (16, 'Brasil', 'Tennessee', '40000-000', 'Monterey', '629 Pepper Wood Circle', 'Alley', 20, '4814');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (17, 'Brasil', 'Center', '41000-000', 'North', '07 Lerdahl Pass', 'Lane', 23, '4583');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (18, 'Brasil', 'Banding', '40000-000', 'Dennis', '3824 Westridge Plaza', 'Alley', 1, '4');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (19, 'Brasil', 'Linden', '40800-000', 'Leroy', '2 Bunker Hill Junction', 'Center', 9, '448');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (20, 'Brasil', 'Declaration', '40800-000', 'Village Green', '785 Meadow Valley Way', 'Point', 16, '00281');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (21, 'Brasil', 'Vahlen', '41000-000', 'Drewry', '4491 Golf Course Place', 'Plaza', 2, '71750');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (22, 'Brasil', 'Lawn', '40800-000', 'Valley Edge', '5593 Barby Crossing', 'Hill', 23, '4');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (23, 'Brasil', 'Artisan', '40800-000', 'Anderson', '40 Hoepker Terrace', 'Junction', 2, '82');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (24, 'Brasil', 'Service', '41000-000', 'Susan', '632 Crest Line Park', 'Drive', 3, '9856');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (25, 'Brasil', 'Maple', '40000-000', 'Stoughton', '96815 Upham Drive', 'Lane', 17, '62');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (26, 'Brasil', 'Express', '40000-000', 'Basil', '1391 Village Green Plaza', 'Point', 7, '05441');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (27, 'Brasil', 'Lukken', '32222-876', 'Weeping Birch', '056 Hooker Street', 'Center', 21, '03');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (28, 'Brasil', 'Kinsman', '32222-876', 'Dorton', '6967 American Street', 'Street', 9, '2');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (29, 'Brasil', 'Coolidge', '32222-876', 'Di Loreto', '72049 Rusk Pass', 'Drive', 16, '3');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (30, 'Brasil', 'Farragut', '32222-876', 'Bayside', '788 Bobwhite Trail', 'Crossing', 24, '50819');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (31, 'Brasil', 'Toban', '41000-000', 'Elmside', '2 Graceland Alley', 'Trail', 17, '90046');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (32, 'Brasil', 'Hanson', '40000-000', 'Colorado', '2469 Loomis Park', 'Plaza', 10, '525');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (33, 'Brasil', 'Briar Crest', '41000-000', 'Golf', '60 1st Point', 'Junction', 14, '39');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (34, 'Brasil', 'Gerald', '41000-000', 'Buhler', '261 Crest Line Hill', 'Way', 19, '008');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (35, 'Brasil', 'Chinook', '41000-000', 'Village', '64564 Roxbury Point', 'Road', 19, '4');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (36, 'Brasil', 'Westend', '40800-000', 'Declaration', '32 Northwestern Point', 'Crossing', 10, '0');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (37, 'Brasil', 'Sunfield', '40000-000', 'Riverside', '1 Walton Plaza', 'Park', 25, '4520');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (38, 'Brasil', 'Hudson', '40000-000', 'Blackbird', '77 Nevada Street', 'Hill', 12, '7');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (39, 'Brasil', 'Summit', '40000-000', 'Bunting', '22213 Kennedy Place', 'Drive', 5, '29');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (40, 'Brasil', 'Farwell', '32222-876', 'Onsgard', '9109 Sullivan Place', 'Court', 24, '4');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (41, 'Brasil', 'Brentwood', '32222-876', 'Raven', '7866 Armistice Junction', 'Terrace', 1, '5086');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (42, 'Brasil', 'Northport', '40000-000', 'Chinook', '42 Anderson Plaza', 'Junction', 26, '15898');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (43, 'Brasil', 'Corben', '40800-000', 'Buena Vista', '8726 Porter Pass', 'Center', 14, '97');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (44, 'Brasil', 'Lakewood', '40000-000', 'Morning', '7222 Hollow Ridge Lane', 'Parkway', 20, '60');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (45, 'Brasil', 'Randy', '32222-876', 'Moulton', '26 Schmedeman Alley', 'Pass', 2, '10280');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (46, 'Brasil', 'Northridge', '41000-000', 'Melrose', '3979 Northview Parkway', 'Parkway', 16, '83');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (47, 'Brasil', 'Prairieview', '32222-876', 'Scofield', '94123 Comanche Alley', 'Way', 25, '45');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (48, 'Brasil', 'Schmedeman', '40800-000', 'Swallow', '2 Macpherson Point', 'Avenue', 10, '35622');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (49, 'Brasil', 'Crest Line', '40000-000', 'Bluejay', '08 Spohn Hill', 'Hill', 17, '890');
insert into compra_certa.endereco (id_endereco, pais, nome, cep, bairro, endereco, complemento, id_cidade, numero) values (50, 'Brasil', 'Mallard', '41000-000', 'Caliangt', '42500 Mcguire Drive', 'Place', 15, '675');

-- ########################### cliente
insert into compra_certa.cliente (cpf, senha, email, ativo) values ('111.111.111-11', '123', '111@gmail.com', 1);
insert into compra_certa.cliente (cpf, senha, email, ativo) values ('222.222.222-22', '123', '222@gmail.com', 1);
insert into compra_certa.cliente (cpf, senha, email, ativo) values ('333.333.333-33', '123', '333@gmail.com', 1);
insert into compra_certa.cliente (cpf, senha, email, ativo) values ('444.444.444-44', '123', '444@gmail.com', 1);
insert into compra_certa.cliente (cpf, senha, email, ativo) values ('555.555.555-55', '123', '555@gmail.com', 0);



-- ########################### categoria
insert into compra_certa.categoria values (1, "Hortifruti Orgânico");
insert into compra_certa.categoria values (2, "Mercearia Orgânica");
insert into compra_certa.categoria values (3, "Bebidas Orgânicas");
insert into compra_certa.categoria values (4, "Congelados Orgânicos");
