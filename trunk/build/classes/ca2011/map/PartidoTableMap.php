<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.partido' table.
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
class PartidoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.PartidoTableMap';

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
		$this->setName('pollaca2011_sch.partido');
		$this->setPhpName('Partido');
		$this->setClassname('Partido');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_partido');
		// columns
		$this->addPrimaryKey('IDPARTIDO', 'Idpartido', 'INTEGER', true, null, null);
		$this->addColumn('EQUIPO1', 'Equipo1', 'INTEGER', true, null, null);
		$this->addColumn('EQUIPO2', 'Equipo2', 'INTEGER', true, null, null);
		$this->addColumn('RESULTADOEQUIPO1', 'Resultadoequipo1', 'INTEGER', false, null, null);
		$this->addColumn('RESULTADOEQUIPO2', 'Resultadoequipo2', 'INTEGER', false, null, null);
		$this->addColumn('FECHAHORA', 'Fechahora', 'TIMESTAMP', true, null, null);
		$this->addColumn('SEDE', 'Sede', 'VARCHAR', true, 60, null);
		$this->addColumn('JUGADO', 'Jugado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Pronostico', 'Pronostico', RelationMap::ONE_TO_MANY, array('idpartido' => 'idpartido', ), null, null);
	} // buildRelations()

} // PartidoTableMap
