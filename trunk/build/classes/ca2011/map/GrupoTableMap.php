<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.grupo' table.
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
class GrupoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.GrupoTableMap';

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
		$this->setName('pollaca2011_sch.grupo');
		$this->setPhpName('Grupo');
		$this->setClassname('Grupo');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_grupo');
		// columns
		$this->addPrimaryKey('IDGRUPO', 'Idgrupo', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 20, null);
		$this->addColumn('VALORINSCRIPCION', 'Valorinscripcion', 'DECIMAL', true, 327682, null);
		$this->addColumn('TOTALACUMULADO', 'Totalacumulado', 'DECIMAL', true, 458754, null);
		$this->addColumn('KEYGRUPO', 'Keygrupo', 'VARCHAR', true, 5, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Pronostico', 'Pronostico', RelationMap::ONE_TO_MANY, array('idgrupo' => 'idgrupo', ), null, null);
    $this->addRelation('UsuarioGrupo', 'UsuarioGrupo', RelationMap::ONE_TO_MANY, array('idgrupo' => 'idgrupo', ), null, null);
	} // buildRelations()

} // GrupoTableMap
