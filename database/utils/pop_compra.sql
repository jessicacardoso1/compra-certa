SELECT * FROM compra_certa.compra;

INSERT INTO `compra_certa`.`item`
(`produto_id_produto`)
VALUES
(1);
INSERT INTO `compra_certa`.`item`
(`produto_id_produto`)
VALUES
(2);
INSERT INTO `compra_certa`.`item`
(`produto_id_produto`)
VALUES
(3);
INSERT INTO `compra_certa`.`compra`
(`valor_total`,
`data`,
`id_endereco`)
VALUES
(100,
'2021-08-06',
1
);
INSERT INTO `compra_certa`.`compra`
(`valor_total`,
`data`,
`id_endereco`)
VALUES
(100,
'2021-08-06',
2
);
INSERT INTO `compra_certa`.`compra`
(`valor_total`,
`data`,
`id_endereco`)
VALUES
(100,
'2021-08-06',
3
);
INSERT INTO `compra_certa`.`compra_has_item`
(`id_compra`,
`id_item`)
VALUES
(2,
1);

INSERT INTO `compra_certa`.`compra_has_item`
(`id_compra`,
`id_item`)
VALUES
(2,
3);

INSERT INTO `compra_certa`.`cliente_has_compra`
(`cpf`,
`id_compra`)
VALUES
('111.111.111-11',
2);

SELECT compra.id_compra, compra.data, produto.nome, produto.preco, produto.nome_imagem, item.quantidade
FROM compra_certa.compra 
INNER JOIN compra_certa.cliente_has_compra
ON cliente_has_compra.id_compra = compra.id_compra
INNER JOIN compra_certa.compra_has_item 
ON compra_has_item.id_compra = compra.id_compra
INNER JOIN compra_certa.item
ON item.id_item = compra_has_item.id_item
INNER JOIN compra_certa.produto
ON produto_id_produto = item.produto_id_produto
WHERE cliente_has_compra.cpf = '111.111.111-11'