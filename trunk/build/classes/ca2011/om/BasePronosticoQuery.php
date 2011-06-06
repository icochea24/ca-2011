<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.pronostico' table.
 *
 * 
 *
 * @method     PronosticoQuery orderByIdpronostico($order = Criteria::ASC) Order by the idpronostico column
 * @method     PronosticoQuery orderByPronostico1($order = Criteria::ASC) Order by the pronostico1 column
 * @method     PronosticoQuery orderByPronostico2($order = Criteria::ASC) Order by the pronostico2 column
 * @method     PronosticoQuery orderByPuntajeobt($order = Criteria::ASC) Order by the puntajeobt column
 * @method     PronosticoQuery orderByFechahoraregistro($order = Criteria::ASC) Order by the fechahoraregistro column
 * @method     PronosticoQuery orderByIdgrupo($order = Criteria::ASC) Order by the idgrupo column
 * @method     PronosticoQuery orderByIdpartido($order = Criteria::ASC) Order by the idpartido column
 * @method     PronosticoQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 *
 * @method     PronosticoQuery groupByIdpronostico() Group by the idpronostico column
 * @method     PronosticoQuery groupByPronostico1() Group by the pronostico1 column
 * @method     PronosticoQuery groupByPronostico2() Group by the pronostico2 column
 * @method     PronosticoQuery groupByPuntajeobt() Group by the puntajeobt column
 * @method     PronosticoQuery groupByFechahoraregistro() Group by the fechahoraregistro column
 * @method     PronosticoQuery groupByIdgrupo() Group by the idgrupo column
 * @method     PronosticoQuery groupByIdpartido() Group by the idpartido column
 * @method     PronosticoQuery groupByIdusuario() Group by the idusuario column
 *
 * @method     PronosticoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PronosticoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PronosticoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PronosticoQuery leftJoinGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupo relation
 * @method     PronosticoQuery rightJoinGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupo relation
 * @method     PronosticoQuery innerJoinGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupo relation
 *
 * @method     PronosticoQuery leftJoinPartido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Partido relation
 * @method     PronosticoQuery rightJoinPartido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Partido relation
 * @method     PronosticoQuery innerJoinPartido($relationAlias = null) Adds a INNER JOIN clause to the query using the Partido relation
 *
 * @method     PronosticoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     PronosticoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     PronosticoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Pronostico findOne(PropelPDO $con = null) Return the first Pronostico matching the query
 * @method     Pronostico findOneOrCreate(PropelPDO $con = null) Return the first Pronostico matching the query, or a new Pronostico object populated from the query conditions when no match is found
 *
 * @method     Pronostico findOneByIdpronostico(string $idpronostico) Return the first Pronostico filtered by the idpronostico column
 * @method     Pronostico findOneByPronostico1(int $pronostico1) Return the first Pronostico filtered by the pronostico1 column
 * @method     Pronostico findOneByPronostico2(int $pronostico2) Return the first Pronostico filtered by the pronostico2 column
 * @method     Pronostico findOneByPuntajeobt(int $puntajeobt) Return the first Pronostico filtered by the puntajeobt column
 * @method     Pronostico findOneByFechahoraregistro(string $fechahoraregistro) Return the first Pronostico filtered by the fechahoraregistro column
 * @method     Pronostico findOneByIdgrupo(int $idgrupo) Return the first Pronostico filtered by the idgrupo column
 * @method     Pronostico findOneByIdpartido(int $idpartido) Return the first Pronostico filtered by the idpartido column
 * @method     Pronostico findOneByIdusuario(string $idusuario) Return the first Pronostico filtered by the idusuario column
 *
 * @method     array findByIdpronostico(string $idpronostico) Return Pronostico objects filtered by the idpronostico column
 * @method     array findByPronostico1(int $pronostico1) Return Pronostico objects filtered by the pronostico1 column
 * @method     array findByPronostico2(int $pronostico2) Return Pronostico objects filtered by the pronostico2 column
 * @method     array findByPuntajeobt(int $puntajeobt) Return Pronostico objects filtered by the puntajeobt column
 * @method     array findByFechahoraregistro(string $fechahoraregistro) Return Pronostico objects filtered by the fechahoraregistro column
 * @method     array findByIdgrupo(int $idgrupo) Return Pronostico objects filtered by the idgrupo column
 * @method     array findByIdpartido(int $idpartido) Return Pronostico objects filtered by the idpartido column
 * @method     array findByIdusuario(string $idusuario) Return Pronostico objects filtered by the idusuario column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BasePronosticoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePronosticoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Pronostico', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PronosticoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PronosticoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PronosticoQuery) {
			return $criteria;
		}
		$query = new PronosticoQuery();
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
	 * @return    Pronostico|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PronosticoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PronosticoPeer::IDPRONOSTICO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PronosticoPeer::IDPRONOSTICO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idpronostico column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdpronostico(1234); // WHERE idpronostico = 1234
	 * $query->filterByIdpronostico(array(12, 34)); // WHERE idpronostico IN (12, 34)
	 * $query->filterByIdpronostico(array('min' => 12)); // WHERE idpronostico > 12
	 * </code>
	 *
	 * @param     mixed $idpronostico The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByIdpronostico($idpronostico = null, $comparison = null)
	{
		if (is_array($idpronostico) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PronosticoPeer::IDPRONOSTICO, $idpronostico, $comparison);
	}

	/**
	 * Filter the query on the pronostico1 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPronostico1(1234); // WHERE pronostico1 = 1234
	 * $query->filterByPronostico1(array(12, 34)); // WHERE pronostico1 IN (12, 34)
	 * $query->filterByPronostico1(array('min' => 12)); // WHERE pronostico1 > 12
	 * </code>
	 *
	 * @param     mixed $pronostico1 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPronostico1($pronostico1 = null, $comparison = null)
	{
		if (is_array($pronostico1)) {
			$useMinMax = false;
			if (isset($pronostico1['min'])) {
				$this->addUsingAlias(PronosticoPeer::PRONOSTICO1, $pronostico1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pronostico1['max'])) {
				$this->addUsingAlias(PronosticoPeer::PRONOSTICO1, $pronostico1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::PRONOSTICO1, $pronostico1, $comparison);
	}

	/**
	 * Filter the query on the pronostico2 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPronostico2(1234); // WHERE pronostico2 = 1234
	 * $query->filterByPronostico2(array(12, 34)); // WHERE pronostico2 IN (12, 34)
	 * $query->filterByPronostico2(array('min' => 12)); // WHERE pronostico2 > 12
	 * </code>
	 *
	 * @param     mixed $pronostico2 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPronostico2($pronostico2 = null, $comparison = null)
	{
		if (is_array($pronostico2)) {
			$useMinMax = false;
			if (isset($pronostico2['min'])) {
				$this->addUsingAlias(PronosticoPeer::PRONOSTICO2, $pronostico2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pronostico2['max'])) {
				$this->addUsingAlias(PronosticoPeer::PRONOSTICO2, $pronostico2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::PRONOSTICO2, $pronostico2, $comparison);
	}

	/**
	 * Filter the query on the puntajeobt column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPuntajeobt(1234); // WHERE puntajeobt = 1234
	 * $query->filterByPuntajeobt(array(12, 34)); // WHERE puntajeobt IN (12, 34)
	 * $query->filterByPuntajeobt(array('min' => 12)); // WHERE puntajeobt > 12
	 * </code>
	 *
	 * @param     mixed $puntajeobt The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPuntajeobt($puntajeobt = null, $comparison = null)
	{
		if (is_array($puntajeobt)) {
			$useMinMax = false;
			if (isset($puntajeobt['min'])) {
				$this->addUsingAlias(PronosticoPeer::PUNTAJEOBT, $puntajeobt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($puntajeobt['max'])) {
				$this->addUsingAlias(PronosticoPeer::PUNTAJEOBT, $puntajeobt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::PUNTAJEOBT, $puntajeobt, $comparison);
	}

	/**
	 * Filter the query on the fechahoraregistro column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechahoraregistro('2011-03-14'); // WHERE fechahoraregistro = '2011-03-14'
	 * $query->filterByFechahoraregistro('now'); // WHERE fechahoraregistro = '2011-03-14'
	 * $query->filterByFechahoraregistro(array('max' => 'yesterday')); // WHERE fechahoraregistro > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechahoraregistro The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByFechahoraregistro($fechahoraregistro = null, $comparison = null)
	{
		if (is_array($fechahoraregistro)) {
			$useMinMax = false;
			if (isset($fechahoraregistro['min'])) {
				$this->addUsingAlias(PronosticoPeer::FECHAHORAREGISTRO, $fechahoraregistro['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechahoraregistro['max'])) {
				$this->addUsingAlias(PronosticoPeer::FECHAHORAREGISTRO, $fechahoraregistro['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::FECHAHORAREGISTRO, $fechahoraregistro, $comparison);
	}

	/**
	 * Filter the query on the idgrupo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdgrupo(1234); // WHERE idgrupo = 1234
	 * $query->filterByIdgrupo(array(12, 34)); // WHERE idgrupo IN (12, 34)
	 * $query->filterByIdgrupo(array('min' => 12)); // WHERE idgrupo > 12
	 * </code>
	 *
	 * @see       filterByGrupo()
	 *
	 * @param     mixed $idgrupo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByIdgrupo($idgrupo = null, $comparison = null)
	{
		if (is_array($idgrupo)) {
			$useMinMax = false;
			if (isset($idgrupo['min'])) {
				$this->addUsingAlias(PronosticoPeer::IDGRUPO, $idgrupo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idgrupo['max'])) {
				$this->addUsingAlias(PronosticoPeer::IDGRUPO, $idgrupo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::IDGRUPO, $idgrupo, $comparison);
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
	 * @see       filterByPartido()
	 *
	 * @param     mixed $idpartido The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByIdpartido($idpartido = null, $comparison = null)
	{
		if (is_array($idpartido)) {
			$useMinMax = false;
			if (isset($idpartido['min'])) {
				$this->addUsingAlias(PronosticoPeer::IDPARTIDO, $idpartido['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idpartido['max'])) {
				$this->addUsingAlias(PronosticoPeer::IDPARTIDO, $idpartido['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::IDPARTIDO, $idpartido, $comparison);
	}

	/**
	 * Filter the query on the idusuario column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdusuario(1234); // WHERE idusuario = 1234
	 * $query->filterByIdusuario(array(12, 34)); // WHERE idusuario IN (12, 34)
	 * $query->filterByIdusuario(array('min' => 12)); // WHERE idusuario > 12
	 * </code>
	 *
	 * @see       filterByUsuario()
	 *
	 * @param     mixed $idusuario The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByIdusuario($idusuario = null, $comparison = null)
	{
		if (is_array($idusuario)) {
			$useMinMax = false;
			if (isset($idusuario['min'])) {
				$this->addUsingAlias(PronosticoPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idusuario['max'])) {
				$this->addUsingAlias(PronosticoPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PronosticoPeer::IDUSUARIO, $idusuario, $comparison);
	}

	/**
	 * Filter the query by a related Grupo object
	 *
	 * @param     Grupo|PropelCollection $grupo The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByGrupo($grupo, $comparison = null)
	{
		if ($grupo instanceof Grupo) {
			return $this
				->addUsingAlias(PronosticoPeer::IDGRUPO, $grupo->getIdgrupo(), $comparison);
		} elseif ($grupo instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PronosticoPeer::IDGRUPO, $grupo->toKeyValue('PrimaryKey', 'Idgrupo'), $comparison);
		} else {
			throw new PropelException('filterByGrupo() only accepts arguments of type Grupo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Grupo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function joinGrupo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Grupo');
		
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
			$this->addJoinObject($join, 'Grupo');
		}
		
		return $this;
	}

	/**
	 * Use the Grupo relation Grupo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GrupoQuery A secondary query class using the current class as primary query
	 */
	public function useGrupoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGrupo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Grupo', 'GrupoQuery');
	}

	/**
	 * Filter the query by a related Partido object
	 *
	 * @param     Partido|PropelCollection $partido The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByPartido($partido, $comparison = null)
	{
		if ($partido instanceof Partido) {
			return $this
				->addUsingAlias(PronosticoPeer::IDPARTIDO, $partido->getIdpartido(), $comparison);
		} elseif ($partido instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PronosticoPeer::IDPARTIDO, $partido->toKeyValue('PrimaryKey', 'Idpartido'), $comparison);
		} else {
			throw new PropelException('filterByPartido() only accepts arguments of type Partido or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Partido relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function joinPartido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Partido');
		
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
			$this->addJoinObject($join, 'Partido');
		}
		
		return $this;
	}

	/**
	 * Use the Partido relation Partido object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PartidoQuery A secondary query class using the current class as primary query
	 */
	public function usePartidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPartido($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Partido', 'PartidoQuery');
	}

	/**
	 * Filter the query by a related Usuario object
	 *
	 * @param     Usuario|PropelCollection $usuario The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function filterByUsuario($usuario, $comparison = null)
	{
		if ($usuario instanceof Usuario) {
			return $this
				->addUsingAlias(PronosticoPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
		} elseif ($usuario instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PronosticoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
		} else {
			throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Usuario relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Usuario');
		
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
			$this->addJoinObject($join, 'Usuario');
		}
		
		return $this;
	}

	/**
	 * Use the Usuario relation Usuario object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UsuarioQuery A secondary query class using the current class as primary query
	 */
	public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUsuario($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Pronostico $pronostico Object to remove from the list of results
	 *
	 * @return    PronosticoQuery The current query, for fluid interface
	 */
	public function prune($pronostico = null)
	{
		if ($pronostico) {
			$this->addUsingAlias(PronosticoPeer::IDPRONOSTICO, $pronostico->getIdpronostico(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePronosticoQuery
