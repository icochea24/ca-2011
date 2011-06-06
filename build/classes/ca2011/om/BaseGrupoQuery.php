<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.grupo' table.
 *
 * 
 *
 * @method     GrupoQuery orderByIdgrupo($order = Criteria::ASC) Order by the idgrupo column
 * @method     GrupoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     GrupoQuery orderByValorinscripcion($order = Criteria::ASC) Order by the valorinscripcion column
 * @method     GrupoQuery orderByTotalacumulado($order = Criteria::ASC) Order by the totalacumulado column
 * @method     GrupoQuery orderByKeygrupo($order = Criteria::ASC) Order by the keygrupo column
 * @method     GrupoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     GrupoQuery groupByIdgrupo() Group by the idgrupo column
 * @method     GrupoQuery groupByNombre() Group by the nombre column
 * @method     GrupoQuery groupByValorinscripcion() Group by the valorinscripcion column
 * @method     GrupoQuery groupByTotalacumulado() Group by the totalacumulado column
 * @method     GrupoQuery groupByKeygrupo() Group by the keygrupo column
 * @method     GrupoQuery groupByEstado() Group by the estado column
 *
 * @method     GrupoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GrupoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GrupoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GrupoQuery leftJoinPronostico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pronostico relation
 * @method     GrupoQuery rightJoinPronostico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pronostico relation
 * @method     GrupoQuery innerJoinPronostico($relationAlias = null) Adds a INNER JOIN clause to the query using the Pronostico relation
 *
 * @method     GrupoQuery leftJoinUsuarioGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioGrupo relation
 * @method     GrupoQuery rightJoinUsuarioGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioGrupo relation
 * @method     GrupoQuery innerJoinUsuarioGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioGrupo relation
 *
 * @method     Grupo findOne(PropelPDO $con = null) Return the first Grupo matching the query
 * @method     Grupo findOneOrCreate(PropelPDO $con = null) Return the first Grupo matching the query, or a new Grupo object populated from the query conditions when no match is found
 *
 * @method     Grupo findOneByIdgrupo(int $idgrupo) Return the first Grupo filtered by the idgrupo column
 * @method     Grupo findOneByNombre(string $nombre) Return the first Grupo filtered by the nombre column
 * @method     Grupo findOneByValorinscripcion(string $valorinscripcion) Return the first Grupo filtered by the valorinscripcion column
 * @method     Grupo findOneByTotalacumulado(string $totalacumulado) Return the first Grupo filtered by the totalacumulado column
 * @method     Grupo findOneByKeygrupo(string $keygrupo) Return the first Grupo filtered by the keygrupo column
 * @method     Grupo findOneByEstado(string $estado) Return the first Grupo filtered by the estado column
 *
 * @method     array findByIdgrupo(int $idgrupo) Return Grupo objects filtered by the idgrupo column
 * @method     array findByNombre(string $nombre) Return Grupo objects filtered by the nombre column
 * @method     array findByValorinscripcion(string $valorinscripcion) Return Grupo objects filtered by the valorinscripcion column
 * @method     array findByTotalacumulado(string $totalacumulado) Return Grupo objects filtered by the totalacumulado column
 * @method     array findByKeygrupo(string $keygrupo) Return Grupo objects filtered by the keygrupo column
 * @method     array findByEstado(string $estado) Return Grupo objects filtered by the estado column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseGrupoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGrupoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Grupo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GrupoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GrupoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GrupoQuery) {
			return $criteria;
		}
		$query = new GrupoQuery();
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
	 * @return    Grupo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GrupoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GrupoPeer::IDGRUPO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GrupoPeer::IDGRUPO, $keys, Criteria::IN);
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
	 * @param     mixed $idgrupo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByIdgrupo($idgrupo = null, $comparison = null)
	{
		if (is_array($idgrupo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GrupoPeer::IDGRUPO, $idgrupo, $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GrupoPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the valorinscripcion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValorinscripcion(1234); // WHERE valorinscripcion = 1234
	 * $query->filterByValorinscripcion(array(12, 34)); // WHERE valorinscripcion IN (12, 34)
	 * $query->filterByValorinscripcion(array('min' => 12)); // WHERE valorinscripcion > 12
	 * </code>
	 *
	 * @param     mixed $valorinscripcion The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByValorinscripcion($valorinscripcion = null, $comparison = null)
	{
		if (is_array($valorinscripcion)) {
			$useMinMax = false;
			if (isset($valorinscripcion['min'])) {
				$this->addUsingAlias(GrupoPeer::VALORINSCRIPCION, $valorinscripcion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valorinscripcion['max'])) {
				$this->addUsingAlias(GrupoPeer::VALORINSCRIPCION, $valorinscripcion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GrupoPeer::VALORINSCRIPCION, $valorinscripcion, $comparison);
	}

	/**
	 * Filter the query on the totalacumulado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTotalacumulado(1234); // WHERE totalacumulado = 1234
	 * $query->filterByTotalacumulado(array(12, 34)); // WHERE totalacumulado IN (12, 34)
	 * $query->filterByTotalacumulado(array('min' => 12)); // WHERE totalacumulado > 12
	 * </code>
	 *
	 * @param     mixed $totalacumulado The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByTotalacumulado($totalacumulado = null, $comparison = null)
	{
		if (is_array($totalacumulado)) {
			$useMinMax = false;
			if (isset($totalacumulado['min'])) {
				$this->addUsingAlias(GrupoPeer::TOTALACUMULADO, $totalacumulado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalacumulado['max'])) {
				$this->addUsingAlias(GrupoPeer::TOTALACUMULADO, $totalacumulado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GrupoPeer::TOTALACUMULADO, $totalacumulado, $comparison);
	}

	/**
	 * Filter the query on the keygrupo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByKeygrupo('fooValue');   // WHERE keygrupo = 'fooValue'
	 * $query->filterByKeygrupo('%fooValue%'); // WHERE keygrupo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $keygrupo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByKeygrupo($keygrupo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($keygrupo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $keygrupo)) {
				$keygrupo = str_replace('*', '%', $keygrupo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GrupoPeer::KEYGRUPO, $keygrupo, $comparison);
	}

	/**
	 * Filter the query on the estado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEstado('fooValue');   // WHERE estado = 'fooValue'
	 * $query->filterByEstado('%fooValue%'); // WHERE estado LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $estado The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByEstado($estado = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($estado)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $estado)) {
				$estado = str_replace('*', '%', $estado);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GrupoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Pronostico object
	 *
	 * @param     Pronostico $pronostico  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByPronostico($pronostico, $comparison = null)
	{
		if ($pronostico instanceof Pronostico) {
			return $this
				->addUsingAlias(GrupoPeer::IDGRUPO, $pronostico->getIdgrupo(), $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
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
	 * Filter the query by a related UsuarioGrupo object
	 *
	 * @param     UsuarioGrupo $usuarioGrupo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByUsuarioGrupo($usuarioGrupo, $comparison = null)
	{
		if ($usuarioGrupo instanceof UsuarioGrupo) {
			return $this
				->addUsingAlias(GrupoPeer::IDGRUPO, $usuarioGrupo->getIdgrupo(), $comparison);
		} elseif ($usuarioGrupo instanceof PropelCollection) {
			return $this
				->useUsuarioGrupoQuery()
					->filterByPrimaryKeys($usuarioGrupo->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByUsuarioGrupo() only accepts arguments of type UsuarioGrupo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the UsuarioGrupo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function joinUsuarioGrupo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UsuarioGrupo');
		
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
			$this->addJoinObject($join, 'UsuarioGrupo');
		}
		
		return $this;
	}

	/**
	 * Use the UsuarioGrupo relation UsuarioGrupo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UsuarioGrupoQuery A secondary query class using the current class as primary query
	 */
	public function useUsuarioGrupoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUsuarioGrupo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UsuarioGrupo', 'UsuarioGrupoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Grupo $grupo Object to remove from the list of results
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function prune($grupo = null)
	{
		if ($grupo) {
			$this->addUsingAlias(GrupoPeer::IDGRUPO, $grupo->getIdgrupo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGrupoQuery
