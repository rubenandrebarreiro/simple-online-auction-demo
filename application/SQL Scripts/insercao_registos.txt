use leilao;

insert into categorias values(NULL, 'Desporto', 'Material para desporto e manutenção física, para além de artigos de caça, pesca e campismo', 2123);
insert into categorias values(NULL, 'Informatica', 'Hardware, software e consumíveis para PC, Mac e PDAs', 1230);
insert into categorias values(NULL, 'Cinema', 'Compra e venda de filmes e material de visionamento em formato Blu-Ray, DVD e VHS', 54360);
insert into categorias values(NULL, 'Música', 'Compra e venda de música em diferentes formatos, instrumentos musicais novos e usados', 9634);
insert into categorias values(NULL, 'Animais', 'Cães, gatos, pássaros, peixes e animais em geral', 175);



insert into artigos values(NULL, 'Chuteiras', 10.00, 10.00, '2011-04-23', '13:23:00', 1, 123, 'Vale postal', 1, 'Almada' );
insert into artigos values(NULL, 'Calção', 7.00, 7.00, '2011-11-02', '16:19:00', 1, 140, 'Transferência bancária', 2, 'Lisboa' );
insert into artigos values(NULL, 'T-Shirt', 15.00, 15.00, '2011-12-04', '12:45:00', 1, 145, 'Cheque', 3, 'Braga' );
insert into artigos values(NULL, 'Meias', 5.00, 5.00, '2011-01-20', '07:53:00', 1, 151, 'Cheque', 4, 'Guimarães' );
insert into artigos values(NULL, 'Caneleiras', 13.00, 13.00, '2011-04-23', '13:23:00', 1, 123, 'Vale postal', 5, 'Porto' );



insert into artigos values(NULL, 'Computador', 679.99, 679.99, '2011-04-03', '22:40:00', 2, 123, 'Transferência bancária', 2, 'Gondomar');
insert into artigos values(NULL, 'Monitor', 210.00, 210.00, '2011-01-15', '12:34:00', 2, 140, 'Transferência bancária', 4, 'Viseu');
insert into artigos values(NULL, 'Rooter', 135.79, 135.79, '2011-02-14', '18:45:00', 2, 145, 'Cheque', 1, 'Açores' );
insert into artigos values(NULL, 'Rato', 53.70, 53.70, '2011-02-10', '12:52:00', 2, 151, 'Cheque', 5, 'Madeira');
insert into artigos values(NULL, 'Teclado', 29.00, 29.00, '2011-08-30', '13:43:00', 2, 123, 'Cheque', 3, 'Seixal');



insert into artigos values(NULL, 'Os Estranhos', 28.00, 28.00, '2011-03-26', '12:11:00', 3, 167, 'Vale postal', 5, 'Alentejo' );
insert into artigos values(NULL, 'A Ressaca', 17.00, 17.00, '2011-03-21', '16:12:00', 3, 178, 'Transferência bancaria', 4, 'Lisboa');
insert into artigos values(NULL, 'A Lenda', 15.00, 15.00, '2011-09-02', '18:12:00', 3, 166, 'Cheque', 3, 'Bragança' );
insert into artigos values(NULL, 'Star Wars', 15.00, 15.00, '2011-09-20', '02:52:00', 3, 153, 'Cheque', 2, 'Monte de Caparica');
insert into artigos values(NULL, 'Matrix', 13.00, 13.00, '2011-12-03', '14:21:00', 3, 199, 'Vale postal', 1, 'Miratejo');



insert into artigos values(NULL, 'Bon Jovi', 44.00, 44.00, '2011-03-26', '12:11:00', 4, 3653, 'Vale postal', 1, 'Vilareal');
insert into artigos values(NULL, 'U2', 38.00, 38.00, '2011-03-21', '16:12:00', 4, 1454, 'Transferência bancaria', 3, 'Coimbra');
insert into artigos values(NULL, 'Adele', 15.00, 15.00, '2011-09-02', '18:12:00', 4, 1333, 'Cheque', 2, 'Chaves');
insert into artigos values(NULL, 'Alborosie', 21.00, 21.00, '2011-09-20', '02:52:00', 4, 9153, 'Cheque', 5, 'Maia');
insert into artigos values(NULL, 'SOJA', 13.00, 13.00, '2011-12-03', '14:21:00', 4, 6199, 'Vale postal', 4, 'Algarve');



insert into artigos values(NULL, 'Cão', 160.00, 160.00, '2011-03-16', '13:11:00', 5, 33, 'Vale postal', 1, 'Corroios');
insert into artigos values(NULL, 'Gato', 39.00, 39.00, '2011-11-30', '12:13:00', 5, 12, 'Transferência bancaria', 2, 'Mirandela');
insert into artigos values(NULL, 'Canário', 15.00, 15.00, '2011-12-03', '11:11:00', 5, 13, 'Cheque', 3, 'Olivais');
insert into artigos values(NULL, 'Papagaio', 50.00, 50.00, '2011-05-10', '01:22:00', 5, 78, 'Cheque', 5, 'Chiado');
insert into artigos values(NULL, 'Hamster', 10.00, 10.00, '2011-02-13', '12:11:00', 5, 14, 'Vale postal', 4, 'Faro');



insert into licitacoes values(NULL, 45.00, '2011-04-22', '12:33:00', 1, 5);
insert into licitacoes values(NULL, 12.00, '2011-03-13', '12:12:00', 2, 4);
insert into licitacoes values(NULL, 300.00, '2011-05-12', '11:13:00', 3, 2);
insert into licitacoes values(NULL, 459.00, '2011-04-21', '22:23:00', 4, 1);
insert into licitacoes values(NULL, 142.00, '2011-11-11', '19:52:00', 5, 3);



insert into utilizadores values(NULL, 'Paulo S. Pedro', 'paulospedro@hotmail.com');
insert into utilizadores values(NULL, 'Victor Hugo', 'victorhugo@hotmail.com');
insert into utilizadores values(NULL, 'Rúben Barreiro', 'rubenbarreiro@hotmail.com');
insert into utilizadores values(NULL, 'Tiburcio Ramos', 'tiburcioramos@hotmail.com');
insert into utilizadores values(NULL, 'Matumbina Sousa', 'matumbinaramos@hotmail.com');



insert into avaliacoes values(NULL, 1, 5, 3);
insert into avaliacoes values(NULL, 2, 4, 6);
insert into avaliacoes values(NULL, 3, 3, 9);
insert into avaliacoes values(NULL, 4, 2, 5);
insert into avaliacoes values(NULL, 5, 1, 10);