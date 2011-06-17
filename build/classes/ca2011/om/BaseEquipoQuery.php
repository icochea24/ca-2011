<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.equipo' table.
 *
 * 
 *
 * @method     EquipoQuery orderByIdequipo($order = Criteria::ASC) Order by the idequipo column
 * @method     EquipoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     EquipoQuery orderByGrupo($order = Criteria::ASC) Order by the grupo column
 * @method     EquipoQuery orderByClasificado($order = Criteria::ASC) Order by the clasificado column
 * @method     EquipoQuery orderBySemifinalista($order = Criteria::ASC) Order by the semifinalista column
 * @method     EquipoQuery orderByVicecampeon($order = Criteria::ASC) Order by the vicecampeon column
 * @method     EquipoQuery orderByCampeon($order = Criteria::ASC) Order by the campeon column
 * @method     EquipoQuery orderByLinkbandera($order = Criteria::ASC) Order by the linkbandera column
 *
 * @method     EquipoQuery groupByIdequipo() Group by the idequipo column
 * @method     EquipoQuery groupByNombre() Group by the nombre column
 * @method     EquipoQuery groupByGrupo() Group by the grupo column
 * @method     EquipoQuery groupByClasificado() Group by the clasificado column
 * @method     EquipoQuery groupBySemifinalista() Group by the semifinalista column
 * @method     EquipoQuery groupByVicecampeon() Group by the vicecampeon column
 * @method     EquipoQuery groupByCampeon() Group by the campeon column
 * @method     EquipoQuery groupByLinkbandera() Group by the linkbandera column
 *
 * @method     EquipoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EquipoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EquipoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EquipoQuery leftJoinPartidoRelatedByIdequipo1($relationAlias = null) Adds a LEFT JOIN clause to the query using the PartidoRelatedByIdequipo1 relation
 * @method     EquipoQuery rightJoinPartidoRelatedByIdequipo1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PartidoRelatedByIdequipo1 relation
 * @method     EquipoQuery innerJoinPartidoRelatedByIdequipo1($relationAlias = null) Adds a INNER JOIN clause to the query using the PartidoRelatedByIdequipo1 relation
 *
 * @method     EquipoQuery leftJoinPartidoRelatedByIdequipo2($relationAlias = null) Adds a LEFT JOIN clause to the query using the PartidoRelatedByIdequipo2 relation
 * @method     EquipoQuery rightJoinPartidoRelatedByIdequipo2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PartidoRelatedByIdequipo2 relation
 * @method     EquipoQuery innerJoinPartidoRelatedByIdequipo2($relationAlias = null) Adds a INNER JOIN clause to the query using the PartidoRelatedByIdequipo2 relation
 *
 * @method     Equipo findOne(PropelPDO $con = null) Return the first Equipo matching the query
 * @method     Equipo findOneOrCreate(PropelPDO $con = null) Return the first Equipo matching the query, or a new Equipo object populated from the query conditions when no match is found
 *
 * @method     Equipo findOneByIdequipo(int $idequipo) Return the first Equipo filtered by the idequipo column
 * @method     Equipo findOneByNombre(string $nombre) Return the first Equipo filtered by the nombre column
 * @method     Equipo findOneByGrupo(string $grupo) Return the first Equipo filtered by the grupo column
 * @method     Equipo findOneByClasificado(string $clasificado) Return the first Equipo filtered by the clasificado column
 * @method     Equipo findOneBySemifinalista(string $semifinalista) Return the first Equipo filtered by the semifinalista column
 * @method     Equipo findOneByVicecampeon(string $vicecampeon) Return the first Equipo filtered by the vicecampeon column
 * @method     Equipo findOneByCampeon(string $campeon) Return the first Equipo filtered by the campeon column
 * @method     Equipo findOneByLinkbandera(string $linkbandera) Return the first Equipo filtered by the linkbandera column
 *
 * @method     array findByIdequipo(int $idequipo) Return Equipo objects filtered by the idequipo column
 * @method     array findByNombre(string $nombre) Return Equipo objects filtered by the nombre column
 * @method     array findByGrupo(string $grupo) Return Equipo objects filtered by the grupo column
 * @method     array findByClasificado(string $clasificado) Return Equipo objects filtered by the clasificado column
 * @method     array findBySemifinalista(string $semifinalista) Return Equipo objects filtered by the semifinalista column
 * @method     array findByVicecampeon(string $vicecampeon) Return Equipo objects filtered by the vicecampeon column
 * @method     array findByCampeon(string $campeon) Return Equipo objects filtered by the campeon column
 * @method     array findByLinkbandera(string $linkbandera) Return Equipo objects filtered by the linkbandera column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseEquipoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseEquipoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Equipo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EquipoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EquipoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EquipoQuery) {
			return $criteria;
		}
		$query = new EquipoQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Equipo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = EquipoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EquipoPeer::IDEQUIPO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EquipoPeer::IDEQUIPO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idequipo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdequipo(1234); // WHERE idequipo = 1234
	 * $query->filterByIdequipo(array(12, 34)); // WHERE idequipo IN (12, 34)
	 * $query->filterByIdequipo(array('min' => 12)); // WHERE idequipo > 12
	 * </code>
	 *
	 * @param     mixed $idequipo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByIdequipo($idequipo = null, $comparison = null)
	{
		if (is_array($idequipo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EquipoPeer::IDEQUIPO, $idequipo, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
	 * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nombre The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the grupo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByGrupo('fooValue');   // WHERE grupo = 'fooValue'
	 * $query->filterByGrupo('%fooValue%'); // WHERE grupo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $grupo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByGrupo($grupo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($grupo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $grupo)) {
				$grupo = str_replace('*', '%', $grupo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::GRUPO, $grupo, $comparison);
	}

	/**
	 * Filter the query on the clasificado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByClasificado('fooValue');   // WHERE clasificado = 'fooValue'
	 * $query->filterByClasificado('%fooValue%'); // WHERE clasificado LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $clasificado The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByClasificado($clasificado = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($clasificado)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $clasificado)) {
				$clasificado = str_replace('*', '%', $clasificado);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::CLASIFICADO, $clasificado, $comparison);
	}

	/**
	 * Filter the query on the semifinalista column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySemifinalista('fooValue');   // WHERE semifinalista = 'fooValue'
	 * $query->filterBySemifinalista('%fooValue%'); // WHERE semifinalista LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $semifinalista The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterBySemifinalista($semifinalista = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($semifinalista)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $semifinalista)) {
				$semifinalista = str_replace('*', '%', $semifinalista);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::SEMIFINALISTA, $semifinalista, $comparison);
	}

	/**
	 * Filter the query on the vicecampeon column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVicecampeon('fooValue');   // WHERE vicecampeon = 'fooValue'
	 * $query->filterByVicecampeon('%fooValue%'); // WHERE vicecampeon LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $vicecampeon The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByVicecampeon($vicecampeon = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($vicecampeon)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $vicecampeon)) {
				$vicecampeon = str_replace('*', '%', $vicecampeon);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::VICECAMPEON, $vicecampeon, $comparison);
	}

	/**
	 * Filter the query on the campeon column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCampeon('fooValue');   // WHERE campeon = 'fooValue'
	 * $query->filterByCampeon('%fooValue%'); // WHERE campeon LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $campeon The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByCampeon($campeon = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($campeon)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $campeon)) {
				$campeon = str_replace('*', '%', $campeon);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::CAMPEON, $campeon, $comparison);
	}

	/**
	 * Filter the query on the linkbandera column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLinkbandera('fooValue');   // WHERE linkbandera = 'fooValue'
	 * $query->filterByLinkbandera('%fooValue%'); // WHERE linkbandera LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $linkbandera The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByLinkbandera($linkbandera = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($linkbandera)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $linkbandera)) {
				$linkbandera = str_replace('*', '%', $linkbandera);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EquipoPeer::LINKBANDERA, $linkbandera, $comparison);
	}

	/**
	 * Filter the query by a related Partido object
	 *
	 * @param     Partido $partido  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByPartidoRelatedByIdequipo1($partido, $comparison = null)
	{
		if ($partido instanceof Partido) {
			return $this
				->addUsingAlias(EquipoPeer::IDEQUIPO, $partido->getIdequipo1(), $comparison);
		} elseif ($partido instanceof PropelCollection) {
			return $this
				->usePartidoRelatedByIdequipo1Query()
					->filterByPrimaryKeys($partido->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPartidoRelatedByIdequipo1() only accepts arguments of type Partido or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PartidoRelatedByIdequipo1 relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function joinPartidoRelatedByIdequipo1($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PartidoRelatedByIdequipo1');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PartidoRelatedByIdequipo1');
		}
		
		return $this;
	}

	/**
	 * Use the PartidoRelatedByIdequipo1 relation Partido object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery A secondary query class using the current class as primary query
	 */
	public function usePartidoRelatedByIdequipo1Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPartidoRelatedByIdequipo1($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PartidoRelatedByIdequipo1', 'PartidoQuery');
	}

	/**
	 * Filter the query by a related Partido object
	 *
	 * @param     Partido $partido  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function filterByPartidoRelatedByIdequipo2($partido, $comparison = null)
	{
		if ($partido instanceof Partido) {
			return $this
				->addUsingAlias(EquipoPeer::IDEQUIPO, $partido->getIdequipo2(), $comparison);
		} elseif ($partido instanceof PropelCollection) {
			return $this
				->usePartidoRelatedByIdequipo2Query()
					->filterByPrimaryKeys($partido->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPartidoRelatedByIdequipo2() only accepts arguments of type Partido or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PartidoRelatedByIdequipo2 relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function joinPartidoRelatedByIdequipo2($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PartidoRelatedByIdequipo2');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PartidoRelatedByIdequipo2');
		}
		
		return $this;
	}

	/**
	 * Use the PartidoRelatedByIdequipo2 relation Partido object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery A secondary query class using the current class as primary query
	 */
	public function usePartidoRelatedByIdequipo2Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPartidoRelatedByIdequipo2($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PartidoRelatedByIdequipo2', 'PartidoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Equipo $equipo Object to remove from the list of results
	 *
	 * @return    EquipoQuery The current query, for fluid interface
	 */
	public function prune($equipo = null)
	{
		if ($equipo) {
			$this->addUsingAlias(EquipoPeer::IDEQUIPO, $equipo->getIdequipo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseEquipoQuery
