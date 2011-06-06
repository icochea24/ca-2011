<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.pronostico' table.
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
class PronosticoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.PronosticoTableMap';

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
		$this->setName('pollaca2011_sch.pronostico');
		$this->setPhpName('Pronostico');
		$this->setClassname('Pronostico');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_pronostico');
		// columns
		$this->addPrimaryKey('IDPRONOSTICO', 'Idpronostico', 'BIGINT', true, null, null);
		$this->addColumn('PRONOSTICO1', 'Pronostico1', 'INTEGER', true, null, null);
		$this->addColumn('PRONOSTICO2', 'Pronostico2', 'INTEGER', true, null, null);
		$this->addColumn('PUNTAJEOBT', 'Puntajeobt', 'INTEGER', false, null, null);
		$this->addColumn('FECHAHORAREGISTRO', 'Fechahoraregistro', 'TIMESTAMP', true, null, null);
		$this->addForeignKey('IDGRUPO', 'Idgrupo', 'INTEGER', 'pollaca2011_sch.grupo', 'IDGRUPO', true, null, null);
		$this->addForeignKey('IDPARTIDO', 'Idpartido', 'INTEGER', 'pollaca2011_sch.partido', 'IDPARTIDO', true, null, null);
		$this->addForeignKey('IDUSUARIO', 'Idusuario', 'BIGINT', 'pollaca2011_sch.usuario', 'IDUSUARIO', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Grupo', 'Grupo', RelationMap::MANY_TO_ONE, array('idgrupo' => 'idgrupo', ), null, null);
    $this->addRelation('Partido', 'Partido', RelationMap::MANY_TO_ONE, array('idpartido' => 'idpartido', ), null, null);
    $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), null, null);
	} // buildRelations()

} // PronosticoTableMap
