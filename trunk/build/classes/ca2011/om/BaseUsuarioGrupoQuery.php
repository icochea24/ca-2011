<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.usuario_grupo' table.
 *
 * 
 *
 * @method     UsuarioGrupoQuery orderByIdusuariogrupo($order = Criteria::ASC) Order by the idusuariogrupo column
 * @method     UsuarioGrupoQuery orderByIdgrupo($order = Criteria::ASC) Order by the idgrupo column
 * @method     UsuarioGrupoQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method     UsuarioGrupoQuery orderByAcumulado($order = Criteria::ASC) Order by the acumulado column
 * @method     UsuarioGrupoQuery orderByAdministrador($order = Criteria::ASC) Order by the administrador column
 *
 * @method     UsuarioGrupoQuery groupByIdusuariogrupo() Group by the idusuariogrupo column
 * @method     UsuarioGrupoQuery groupByIdgrupo() Group by the idgrupo column
 * @method     UsuarioGrupoQuery groupByIdusuario() Group by the idusuario column
 * @method     UsuarioGrupoQuery groupByAcumulado() Group by the acumulado column
 * @method     UsuarioGrupoQuery groupByAdministrador() Group by the administrador column
 *
 * @method     UsuarioGrupoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioGrupoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioGrupoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioGrupoQuery leftJoinGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupo relation
 * @method     UsuarioGrupoQuery rightJoinGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupo relation
 * @method     UsuarioGrupoQuery innerJoinGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupo relation
 *
 * @method     UsuarioGrupoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     UsuarioGrupoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     UsuarioGrupoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     UsuarioGrupo findOne(PropelPDO $con = null) Return the first UsuarioGrupo matching the query
 * @method     UsuarioGrupo findOneOrCreate(PropelPDO $con = null) Return the first UsuarioGrupo matching the query, or a new UsuarioGrupo object populated from the query conditions when no match is found
 *
 * @method     UsuarioGrupo findOneByIdusuariogrupo(string $idusuariogrupo) Return the first UsuarioGrupo filtered by the idusuariogrupo column
 * @method     UsuarioGrupo findOneByIdgrupo(int $idgrupo) Return the first UsuarioGrupo filtered by the idgrupo column
 * @method     UsuarioGrupo findOneByIdusuario(string $idusuario) Return the first UsuarioGrupo filtered by the idusuario column
 * @method     UsuarioGrupo findOneByAcumulado(int $acumulado) Return the first UsuarioGrupo filtered by the acumulado column
 * @method     UsuarioGrupo findOneByAdministrador(string $administrador) Return the first UsuarioGrupo filtered by the administrador column
 *
 * @method     array findByIdusuariogrupo(string $idusuariogrupo) Return UsuarioGrupo objects filtered by the idusuariogrupo column
 * @method     array findByIdgrupo(int $idgrupo) Return UsuarioGrupo objects filtered by the idgrupo column
 * @method     array findByIdusuario(string $idusuario) Return UsuarioGrupo objects filtered by the idusuario column
 * @method     array findByAcumulado(int $acumulado) Return UsuarioGrupo objects filtered by the acumulado column
 * @method     array findByAdministrador(string $administrador) Return UsuarioGrupo objects filtered by the administrador column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseUsuarioGrupoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUsuarioGrupoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'UsuarioGrupo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UsuarioGrupoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UsuarioGrupoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UsuarioGrupoQuery) {
			return $criteria;
		}
		$query = new UsuarioGrupoQuery();
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
	 * @return    UsuarioGrupo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UsuarioGrupoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIOGRUPO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIOGRUPO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idusuariogrupo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdusuariogrupo(1234); // WHERE idusuariogrupo = 1234
	 * $query->filterByIdusuariogrupo(array(12, 34)); // WHERE idusuariogrupo IN (12, 34)
	 * $query->filterByIdusuariogrupo(array('min' => 12)); // WHERE idusuariogrupo > 12
	 * </code>
	 *
	 * @param     mixed $idusuariogrupo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByIdusuariogrupo($idusuariogrupo = null, $comparison = null)
	{
		if (is_array($idusuariogrupo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIOGRUPO, $idusuariogrupo, $comparison);
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
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByIdgrupo($idgrupo = null, $comparison = null)
	{
		if (is_array($idgrupo)) {
			$useMinMax = false;
			if (isset($idgrupo['min'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::IDGRUPO, $idgrupo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idgrupo['max'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::IDGRUPO, $idgrupo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UsuarioGrupoPeer::IDGRUPO, $idgrupo, $comparison);
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
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByIdusuario($idusuario = null, $comparison = null)
	{
		if (is_array($idusuario)) {
			$useMinMax = false;
			if (isset($idusuario['min'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idusuario['max'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIO, $idusuario, $comparison);
	}

	/**
	 * Filter the query on the acumulado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAcumulado(1234); // WHERE acumulado = 1234
	 * $query->filterByAcumulado(array(12, 34)); // WHERE acumulado IN (12, 34)
	 * $query->filterByAcumulado(array('min' => 12)); // WHERE acumulado > 12
	 * </code>
	 *
	 * @param     mixed $acumulado The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByAcumulado($acumulado = null, $comparison = null)
	{
		if (is_array($acumulado)) {
			$useMinMax = false;
			if (isset($acumulado['min'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::ACUMULADO, $acumulado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($acumulado['max'])) {
				$this->addUsingAlias(UsuarioGrupoPeer::ACUMULADO, $acumulado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UsuarioGrupoPeer::ACUMULADO, $acumulado, $comparison);
	}

	/**
	 * Filter the query on the administrador column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAdministrador('fooValue');   // WHERE administrador = 'fooValue'
	 * $query->filterByAdministrador('%fooValue%'); // WHERE administrador LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $administrador The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByAdministrador($administrador = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($administrador)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $administrador)) {
				$administrador = str_replace('*', '%', $administrador);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UsuarioGrupoPeer::ADMINISTRADOR, $administrador, $comparison);
	}

	/**
	 * Filter the query by a related Grupo object
	 *
	 * @param     Grupo|PropelCollection $grupo The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByGrupo($grupo, $comparison = null)
	{
		if ($grupo instanceof Grupo) {
			return $this
				->addUsingAlias(UsuarioGrupoPeer::IDGRUPO, $grupo->getIdgrupo(), $comparison);
		} elseif ($grupo instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(UsuarioGrupoPeer::IDGRUPO, $grupo->toKeyValue('PrimaryKey', 'Idgrupo'), $comparison);
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
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
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
	 * Filter the query by a related Usuario object
	 *
	 * @param     Usuario|PropelCollection $usuario The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function filterByUsuario($usuario, $comparison = null)
	{
		if ($usuario instanceof Usuario) {
			return $this
				->addUsingAlias(UsuarioGrupoPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
		} elseif ($usuario instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(UsuarioGrupoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
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
	 * @param     UsuarioGrupo $usuarioGrupo Object to remove from the list of results
	 *
	 * @return    UsuarioGrupoQuery The current query, for fluid interface
	 */
	public function prune($usuarioGrupo = null)
	{
		if ($usuarioGrupo) {
			$this->addUsingAlias(UsuarioGrupoPeer::IDUSUARIOGRUPO, $usuarioGrupo->getIdusuariogrupo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUsuarioGrupoQuery
