<?php



/**
 * This class defines the structure of the 'pollaca2011_sch.usuario_grupo' table.
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
class UsuarioGrupoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'ca2011.map.UsuarioGrupoTableMap';

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
		$this->setName('pollaca2011_sch.usuario_grupo');
		$this->setPhpName('UsuarioGrupo');
		$this->setClassname('UsuarioGrupo');
		$this->setPackage('ca2011');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('pollaca2011_sch.sq_usuario_grupo');
		// columns
		$this->addPrimaryKey('IDUSUARIOGRUPO', 'Idusuariogrupo', 'BIGINT', true, null, null);
		$this->addForeignKey('IDGRUPO', 'Idgrupo', 'INTEGER', 'pollaca2011_sch.grupo', 'IDGRUPO', true, null, null);
		$this->addForeignKey('IDUSUARIO', 'Idusuario', 'BIGINT', 'pollaca2011_sch.usuario', 'IDUSUARIO', true, null, null);
		$this->addColumn('ACUMULADO', 'Acumulado', 'INTEGER', true, null, null);
		$this->addColumn('ADMINISTRADOR', 'Administrador', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Grupo', 'Grupo', RelationMap::MANY_TO_ONE, array('idgrupo' => 'idgrupo', ), null, null);
    $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), null, null);
	} // buildRelations()

} // UsuarioGrupoTableMap
