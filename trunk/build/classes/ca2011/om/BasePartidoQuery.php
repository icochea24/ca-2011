<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.partido' table.
 *
 * 
 *
 * @method     PartidoQuery orderByIdpartido($order = Criteria::ASC) Order by the idpartido column
 * @method     PartidoQuery orderByIdequipo1($order = Criteria::ASC) Order by the idequipo1 column
 * @method     PartidoQuery orderByIdequipo2($order = Criteria::ASC) Order by the idequipo2 column
 * @method     PartidoQuery orderByResultadoequipo1($order = Criteria::ASC) Order by the resultadoequipo1 column
 * @method     PartidoQuery orderByResultadoequipo2($order = Criteria::ASC) Order by the resultadoequipo2 column
 * @method     PartidoQuery orderByFechahora($order = Criteria::ASC) Order by the fechahora column
 * @method     PartidoQuery orderBySede($order = Criteria::ASC) Order by the sede column
 * @method     PartidoQuery orderByJugado($order = Criteria::ASC) Order by the jugado column
 *
 * @method     PartidoQuery groupByIdpartido() Group by the idpartido column
 * @method     PartidoQuery groupByIdequipo1() Group by the idequipo1 column
 * @method     PartidoQuery groupByIdequipo2() Group by the idequipo2 column
 * @method     PartidoQuery groupByResultadoequipo1() Group by the resultadoequipo1 column
 * @method     PartidoQuery groupByResultadoequipo2() Group by the resultadoequipo2 column
 * @method     PartidoQuery groupByFechahora() Group by the fechahora column
 * @method     PartidoQuery groupBySede() Group by the sede column
 * @method     PartidoQuery groupByJugado() Group by the jugado column
 *
 * @method     PartidoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PartidoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PartidoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PartidoQuery leftJoinEquipoRelatedByIdequipo1($relationAlias = null) Adds a LEFT JOIN clause to the query using the EquipoRelatedByIdequipo1 relation
 * @method     PartidoQuery rightJoinEquipoRelatedByIdequipo1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EquipoRelatedByIdequipo1 relation
 * @method     PartidoQuery innerJoinEquipoRelatedByIdequipo1($relationAlias = null) Adds a INNER JOIN clause to the query using the EquipoRelatedByIdequipo1 relation
 *
 * @method     PartidoQuery leftJoinEquipoRelatedByIdequipo2($relationAlias = null) Adds a LEFT JOIN clause to the query using the EquipoRelatedByIdequipo2 relation
 * @method     PartidoQuery rightJoinEquipoRelatedByIdequipo2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EquipoRelatedByIdequipo2 relation
 * @method     PartidoQuery innerJoinEquipoRelatedByIdequipo2($relationAlias = null) Adds a INNER JOIN clause to the query using the EquipoRelatedByIdequipo2 relation
 *
 * @method     PartidoQuery leftJoinPronostico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pronostico relation
 * @method     PartidoQuery rightJoinPronostico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pronostico relation
 * @method     PartidoQuery innerJoinPronostico($relationAlias = null) Adds a INNER JOIN clause to the query using the Pronostico relation
 *
 * @method     Partido findOne(PropelPDO $con = null) Return the first Partido matching the query
 * @method     Partido findOneOrCreate(PropelPDO $con = null) Return the first Partido matching the query, or a new Partido object populated from the query conditions when no match is found
 *
 * @method     Partido findOneByIdpartido(int $idpartido) Return the first Partido filtered by the idpartido column
 * @method     Partido findOneByIdequipo1(int $idequipo1) Return the first Partido filtered by the idequipo1 column
 * @method     Partido findOneByIdequipo2(int $idequipo2) Return the first Partido filtered by the idequipo2 column
 * @method     Partido findOneByResultadoequipo1(int $resultadoequipo1) Return the first Partido filtered by the resultadoequipo1 column
 * @method     Partido findOneByResultadoequipo2(int $resultadoequipo2) Return the first Partido filtered by the resultadoequipo2 column
 * @method     Partido findOneByFechahora(string $fechahora) Return the first Partido filtered by the fechahora column
 * @method     Partido findOneBySede(string $sede) Return the first Partido filtered by the sede column
 * @method     Partido findOneByJugado(string $jugado) Return the first Partido filtered by the jugado column
 *
 * @method     array findByIdpartido(int $idpartido) Return Partido objects filtered by the idpartido column
 * @method     array findByIdequipo1(int $idequipo1) Return Partido objects filtered by the idequipo1 column
 * @method     array findByIdequipo2(int $idequipo2) Return Partido objects filtered by the idequipo2 column
 * @method     array findByResultadoequipo1(int $resultadoequipo1) Return Partido objects filtered by the resultadoequipo1 column
 * @method     array findByResultadoequipo2(int $resultadoequipo2) Return Partido objects filtered by the resultadoequipo2 column
 * @method     array findByFechahora(string $fechahora) Return Partido objects filtered by the fechahora column
 * @method     array findBySede(string $sede) Return Partido objects filtered by the sede column
 * @method     array findByJugado(string $jugado) Return Partido objects filtered by the jugado column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BasePartidoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePartidoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Partido', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PartidoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PartidoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PartidoQuery) {
			return $criteria;
		}
		$query = new PartidoQuery();
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
	 * @return    Partido|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PartidoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PartidoPeer::IDPARTIDO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PartidoPeer::IDPARTIDO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idpartido column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdpartido(1234); // WHERE idpartido = 1234
	 * $query->filterByIdpartido(array(12, 34)); // WHERE idpartido IN (12, 34)
	 * $query->filterByIdpartido(array('min' => 12)); // WHERE idpartido > 12
	 * </code>
	 *
	 * @param     mixed $idpartido The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByIdpartido($idpartido = null, $comparison = null)
	{
		if (is_array($idpartido) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PartidoPeer::IDPARTIDO, $idpartido, $comparison);
	}

	/**
	 * Filter the query on the idequipo1 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdequipo1(1234); // WHERE idequipo1 = 1234
	 * $query->filterByIdequipo1(array(12, 34)); // WHERE idequipo1 IN (12, 34)
	 * $query->filterByIdequipo1(array('min' => 12)); // WHERE idequipo1 > 12
	 * </code>
	 *
	 * @see       filterByEquipoRelatedByIdequipo1()
	 *
	 * @param     mixed $idequipo1 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByIdequipo1($idequipo1 = null, $comparison = null)
	{
		if (is_array($idequipo1)) {
			$useMinMax = false;
			if (isset($idequipo1['min'])) {
				$this->addUsingAlias(PartidoPeer::IDEQUIPO1, $idequipo1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idequipo1['max'])) {
				$this->addUsingAlias(PartidoPeer::IDEQUIPO1, $idequipo1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PartidoPeer::IDEQUIPO1, $idequipo1, $comparison);
	}

	/**
	 * Filter the query on the idequipo2 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdequipo2(1234); // WHERE idequipo2 = 1234
	 * $query->filterByIdequipo2(array(12, 34)); // WHERE idequipo2 IN (12, 34)
	 * $query->filterByIdequipo2(array('min' => 12)); // WHERE idequipo2 > 12
	 * </code>
	 *
	 * @see       filterByEquipoRelatedByIdequipo2()
	 *
	 * @param     mixed $idequipo2 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByIdequipo2($idequipo2 = null, $comparison = null)
	{
		if (is_array($idequipo2)) {
			$useMinMax = false;
			if (isset($idequipo2['min'])) {
				$this->addUsingAlias(PartidoPeer::IDEQUIPO2, $idequipo2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idequipo2['max'])) {
				$this->addUsingAlias(PartidoPeer::IDEQUIPO2, $idequipo2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PartidoPeer::IDEQUIPO2, $idequipo2, $comparison);
	}

	/**
	 * Filter the query on the resultadoequipo1 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByResultadoequipo1(1234); // WHERE resultadoequipo1 = 1234
	 * $query->filterByResultadoequipo1(array(12, 34)); // WHERE resultadoequipo1 IN (12, 34)
	 * $query->filterByResultadoequipo1(array('min' => 12)); // WHERE resultadoequipo1 > 12
	 * </code>
	 *
	 * @param     mixed $resultadoequipo1 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByResultadoequipo1($resultadoequipo1 = null, $comparison = null)
	{
		if (is_array($resultadoequipo1)) {
			$useMinMax = false;
			if (isset($resultadoequipo1['min'])) {
				$this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO1, $resultadoequipo1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resultadoequipo1['max'])) {
				$this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO1, $resultadoequipo1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO1, $resultadoequipo1, $comparison);
	}

	/**
	 * Filter the query on the resultadoequipo2 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByResultadoequipo2(1234); // WHERE resultadoequipo2 = 1234
	 * $query->filterByResultadoequipo2(array(12, 34)); // WHERE resultadoequipo2 IN (12, 34)
	 * $query->filterByResultadoequipo2(array('min' => 12)); // WHERE resultadoequipo2 > 12
	 * </code>
	 *
	 * @param     mixed $resultadoequipo2 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByResultadoequipo2($resultadoequipo2 = null, $comparison = null)
	{
		if (is_array($resultadoequipo2)) {
			$useMinMax = false;
			if (isset($resultadoequipo2['min'])) {
				$this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO2, $resultadoequipo2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resultadoequipo2['max'])) {
				$this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO2, $resultadoequipo2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PartidoPeer::RESULTADOEQUIPO2, $resultadoequipo2, $comparison);
	}

	/**
	 * Filter the query on the fechahora column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechahora('2011-03-14'); // WHERE fechahora = '2011-03-14'
	 * $query->filterByFechahora('now'); // WHERE fechahora = '2011-03-14'
	 * $query->filterByFechahora(array('max' => 'yesterday')); // WHERE fechahora > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechahora The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByFechahora($fechahora = null, $comparison = null)
	{
		if (is_array($fechahora)) {
			$useMinMax = false;
			if (isset($fechahora['min'])) {
				$this->addUsingAlias(PartidoPeer::FECHAHORA, $fechahora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechahora['max'])) {
				$this->addUsingAlias(PartidoPeer::FECHAHORA, $fechahora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PartidoPeer::FECHAHORA, $fechahora, $comparison);
	}

	/**
	 * Filter the query on the sede column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySede('fooValue');   // WHERE sede = 'fooValue'
	 * $query->filterBySede('%fooValue%'); // WHERE sede LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $sede The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterBySede($sede = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sede)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sede)) {
				$sede = str_replace('*', '%', $sede);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PartidoPeer::SEDE, $sede, $comparison);
	}

	/**
	 * Filter the query on the jugado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByJugado('fooValue');   // WHERE jugado = 'fooValue'
	 * $query->filterByJugado('%fooValue%'); // WHERE jugado LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $jugado The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByJugado($jugado = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($jugado)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $jugado)) {
				$jugado = str_replace('*', '%', $jugado);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PartidoPeer::JUGADO, $jugado, $comparison);
	}

	/**
	 * Filter the query by a related Equipo object
	 *
	 * @param     Equipo|PropelCollection $equipo The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByEquipoRelatedByIdequipo1($equipo, $comparison = null)
	{
		if ($equipo instanceof Equipo) {
			return $this
				->addUsingAlias(PartidoPeer::IDEQUIPO1, $equipo->getIdequipo(), $comparison);
		} elseif ($equipo instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PartidoPeer::IDEQUIPO1, $equipo->toKeyValue('PrimaryKey', 'Idequipo'), $comparison);
		} else {
			throw new PropelException('filterByEquipoRelatedByIdequipo1() only accepts arguments of type Equipo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the EquipoRelatedByIdequipo1 relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function joinEquipoRelatedByIdequipo1($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EquipoRelatedByIdequipo1');
		
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
			$this->addJoinObject($join, 'EquipoRelatedByIdequipo1');
		}
		
		return $this;
	}

	/**
	 * Use the EquipoRelatedByIdequipo1 relation Equipo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EquipoQuery A secondary query class using the current class as primary query
	 */
	public function useEquipoRelatedByIdequipo1Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEquipoRelatedByIdequipo1($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EquipoRelatedByIdequipo1', 'EquipoQuery');
	}

	/**
	 * Filter the query by a related Equipo object
	 *
	 * @param     Equipo|PropelCollection $equipo The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByEquipoRelatedByIdequipo2($equipo, $comparison = null)
	{
		if ($equipo instanceof Equipo) {
			return $this
				->addUsingAlias(PartidoPeer::IDEQUIPO2, $equipo->getIdequipo(), $comparison);
		} elseif ($equipo instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PartidoPeer::IDEQUIPO2, $equipo->toKeyValue('PrimaryKey', 'Idequipo'), $comparison);
		} else {
			throw new PropelException('filterByEquipoRelatedByIdequipo2() only accepts arguments of type Equipo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the EquipoRelatedByIdequipo2 relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function joinEquipoRelatedByIdequipo2($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EquipoRelatedByIdequipo2');
		
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
			$this->addJoinObject($join, 'EquipoRelatedByIdequipo2');
		}
		
		return $this;
	}

	/**
	 * Use the EquipoRelatedByIdequipo2 relation Equipo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EquipoQuery A secondary query class using the current class as primary query
	 */
	public function useEquipoRelatedByIdequipo2Query($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEquipoRelatedByIdequipo2($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EquipoRelatedByIdequipo2', 'EquipoQuery');
	}

	/**
	 * Filter the query by a related Pronostico object
	 *
	 * @param     Pronostico $pronostico  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function filterByPronostico($pronostico, $comparison = null)
	{
		if ($pronostico instanceof Pronostico) {
			return $this
				->addUsingAlias(PartidoPeer::IDPARTIDO, $pronostico->getIdpartido(), $comparison);
		} elseif ($pronostico instanceof PropelCollection) {
			return $this
				->usePronosticoQuery()
					->filterByPrimaryKeys($pronostico->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPronostico() only accepts arguments of type Pronostico or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Pronostico relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function joinPronostico($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Pronostico');
		
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
			$this->addJoinObject($join, 'Pronostico');
		}
		
		return $this;
	}

	/**
	 * Use the Pronostico relation Pronostico object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PronosticoQuery A secondary query class using the current class as primary query
	 */
	public function usePronosticoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPronostico($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Pronostico', 'PronosticoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Partido $partido Object to remove from the list of results
	 *
	 * @return    PartidoQuery The current query, for fluid interface
	 */
	public function prune($partido = null)
	{
		if ($partido) {
			$this->addUsingAlias(PartidoPeer::IDPARTIDO, $partido->getIdpartido(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePartidoQuery
