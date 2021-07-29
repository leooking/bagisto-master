<?php
return [
    'datagrid' => [
        'actions' => 'Comportamiento',
        'id'      => 'Las columnas de índice solo tienen un valor mayor que cero',

        'massaction' => [
            'mass-delete-confirm'     => '¿Realmente desea eliminar estos elementos seleccionados :resource?',
            'mass-update-status'      => '¿Realmente desea actualizar el estado de estos elementos seleccionados :resource?',
            'delete'                  => '¿De verdad quieres eliminar esto :resource?',
            'edit'                    => '¿De verdad quieres editar esto :resource?',
            'delete-category-product' => 'Las categorías seleccionadas contienen productos. Al realizar esta acción, se eliminarán los productos relacionados. ¿De verdad quieres realizar esta acción?',
        ],

        'error' => [
            'multiple-sort-keys-error'   => 'Fatal Error! Multiple sort keys found, please resolve the URL manually',
            'multiple-search-keys-error' => 'Multiple search keys found, please resolve the URL manually',
            'mapped-keys-error'          => 'Mapped key not found. Make sure you have given valid options.',
        ],

        'zero-index'            => 'Las columnas de índice solo pueden tener valores superiores a cero',
        'no-records'            => 'No se encontraron registros',
        'filter-fields-missing' => 'Algunos de los campos obligatorios son nulos, verifique la columna, la condición y el valor correctamente',
        'filter-exists'         => 'Filter value already exists.',
        'click_on_action'       => '¿De verdad quieres realizar esta acción?',
        'search'                => 'Busque Aquí...',
        'search-title'          => 'Buscar',
        'channel'               => 'Canal',
        'locale'                => 'Lugar',
        'customer-group'        => 'grupo de clientes',
        'filter'                => 'Filtrar',
        'column'                => 'Seleccione la columna',
        'condition'             => 'Seleccionar condición',
        'contains'              => 'Contiene',
        'ncontains'             => 'No contiene',
        'equals'                => 'Es igual a',
        'nequals'               => 'Es diferente a',
        'greater'               => 'Más grande que',
        'less'                  => 'Menor que',
        'greatere'              => 'Mayor qué o igual a',
        'lesse'                 => 'Menos que o igual a',
        'value'                 => 'Selecione el valor',
        'true'                  => 'Verdadero / Activo',
        'false'                 => 'Falso / Inactivo',
        'between'               => 'Está entre',
        'apply'                 => 'Aplicar',
        'items-per-page'        => 'Artículos por página',
        'value-here'            => 'Valor aquí',
        'numeric-value-here'    => 'Valor numérico aquí',
        'submit'                => 'Enviar',
        'edit'                  => 'Editar',
        'delete'                => 'Borrar',
        'view'                  => 'Ver',
        'active'                => 'Activo',
        'inactive'              => 'Inactivo',
        'all-channels'          => 'Todos los canales',
        'all-locales'           => 'Todas las localidades',
        'all-customer-groups'   => 'Todos los grupos de clientes',
        'records-found'         => 'Registro(s) encontrado(s)',
        'clear-all'             => 'Clear All'
    ],
];
