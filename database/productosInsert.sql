INSERT INTO public.producto(
	id_producto, fecha_creacion, fecha_modificacion, usuario_creacion, usuario_modificacion, version, codigo, codigo_barras, 
	descripcion, id_organizacion, id_sucursal, imagen, indicador_vista_tienda, informacion_adicional, nombre, nombre_comercial, peso, precio_referencial_venta, id_sub_categoria_producto)
	VALUES (2,'2024-05-13', '2024-05-13', 1, 1, 1, 'PRO-001', '021323
			65456', 'Necesitará reescribir la expresión o aplicarle una conversión de tipo', 
			1, 1, null, true, 'Camion Ultra', 'Camion Ultra Match', 40, 5000, 4564, 1);

select * from public.producto