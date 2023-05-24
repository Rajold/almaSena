SELECT * FROM elementos as e, categorias as c, tallas as t where e.fkCategoria=c.idCategoria and c.idCategoria=1 AND e.fkTalla= t.idTalla; 


$background: var(--globalGreen);