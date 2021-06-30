INSERT INTO `compra_certa`.`data_setores`
(`id_data_setores`,
`data`,
`setor`)
VALUES
(1,
'2021-06-14 09:59:59',
1);

INSERT INTO `compra_certa`.`data_setores`
(`id_data_setores`,
`data`,
`setor`)
VALUES
(2,
'2021-06-14 09:59:59',
2);

INSERT INTO `compra_certa`.`compra_has_data_setores`
(`id_compra`,
`id_data_setores`)
VALUES
(2,1);
INSERT INTO `compra_certa`.`compra_has_data_setores`
(`id_compra`,
`id_data_setores`)
VALUES
(3,2)