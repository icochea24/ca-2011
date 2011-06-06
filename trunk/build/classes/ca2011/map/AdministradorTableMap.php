<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.administrador' table.
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
class AdministradorTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.AdministradorTableMap';

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
		$this->setName('pollaca2011_sch.administrador');
		$this->setPhpName('Administrador');
		$this->setClassname('Administrador');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_administrador');
		// columns
		$this->addPrimaryKey('IDADMINISTRADOR', 'Idadministrador', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 30, null);
		$this->addColumn('LOGIN', 'Login', 'VARCHAR', true, 8, null);
		$this->addColumn('CLAVE', 'Clave', 'VARCHAR', true, 12, null);
		$this->addColumn('ACCESO', 'Acceso', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AdministradorTableMap
