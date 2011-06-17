<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.usuario' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.ca2011.map
 */
class UsuarioTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.UsuarioTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('pollaca2011_sch.usuario');
		$this->setPhpName('Usuario');
		$this->setClassname('Usuario');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_usuario');
		// columns
		$this->addPrimaryKey('IDUSUARIO', 'Idusuario', 'BIGINT', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 50, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 97, null);
		$this->addColumn('CLAVE', 'Clave', 'VARCHAR', true, 50, null);
		$this->addColumn('PAGOOK', 'Pagook', 'VARCHAR', true, 1, null);
		$this->addColumn('CLAVECONFIRMA', 'Claveconfirma', 'VARCHAR', true, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Pronostico', 'Pronostico', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), null, null);
    $this->addRelation('UsuarioGrupo', 'UsuarioGrupo', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), null, null);
	} // buildRelations()

} // UsuarioTableMap
