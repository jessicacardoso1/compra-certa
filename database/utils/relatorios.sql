-- Os 8 Produtos mais vendidos
USE compra_certa;
SELECT produto.nome, item.produto_id_produto, sum(quantidade) as qtd FROM compra_certa.item
LEFT JOIN produto on produto.id_produto = item.produto_id_produto
GROUP BY produto_id_produto
ORDER BY SUM(quantidade) DESC
LIMIT 8;

-- Vendas totais (ano): Tomate Orgânico
SELECT compra.id_compra, compra.data, produto.nome, produto.preco, produto.nome_imagem, SUM(item.quantidade)
FROM compra_certa.compra 
INNER JOIN compra_certa.cliente_has_compra
ON cliente_has_compra.id_compra = compra.id_compra
INNER JOIN compra_certa.compra_has_item 
ON compra_has_item.id_compra = compra.id_compra
INNER JOIN compra_certa.item
ON item.id_item = compra_has_item.id_item
INNER JOIN compra_certa.produto
ON produto_id_produto = item.produto_id_produto
WHERE produto.id_produto = 30
AND YEAR(data) = 2021
GROUP BY ID_COMPRA;

-- Clientes que mais compram
SELECT cliente.cpf, endereco.nome, cidade.nome, estado.nome, count(compra.id_compra) as qtd_compras, sum(produto.preco) as valor_total
FROM compra_certa.cliente
INNER JOIN cliente_has_endereco
ON cliente_has_endereco.cpf = cliente.cpf
INNER JOIN endereco
ON cliente_has_endereco.id_endereco = endereco.id_endereco
INNER JOIN cidade
ON cidade.id_cidade = endereco.id_cidade
INNER JOIN estado
on estado.id_estado = cidade.estado_id_estado
INNER JOIN compra_certa.cliente_has_compra
ON cliente_has_compra.cpf = cliente.cpf
INNER JOIN compra_certa.compra 
ON compra.id_compra = cliente_has_compra.id_compra
INNER JOIN compra_certa.compra_has_item 
ON compra_has_item.id_compra = compra.id_compra
INNER JOIN compra_certa.item
ON item.id_item = compra_has_item.id_item
INNER JOIN compra_certa.produto
ON produto.id_produto = item.produto_id_produto
GROUP BY cliente_has_compra.cpf
ORDER BY SUM(quantidade) DESC;
--
