<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.usuario' table.
 *
 * 
 *
 * @method     UsuarioQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method     UsuarioQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     UsuarioQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UsuarioQuery orderByClave($order = Criteria::ASC) Order by the clave column
 * @method     UsuarioQuery orderByPagook($order = Criteria::ASC) Order by the pagook column
 * @method     UsuarioQuery orderByClaveconfirma($order = Criteria::ASC) Order by the claveconfirma column
 *
 * @method     UsuarioQuery groupByIdusuario() Group by the idusuario column
 * @method     UsuarioQuery groupByNombre() Group by the nombre column
 * @method     UsuarioQuery groupByEmail() Group by the email column
 * @method     UsuarioQuery groupByClave() Group by the clave column
 * @method     UsuarioQuery groupByPagook() Group by the pagook column
 * @method     UsuarioQuery groupByClaveconfirma() Group by the claveconfirma column
 *
 * @method     UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioQuery leftJoinPronostico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pronostico relation
 * @method     UsuarioQuery rightJoinPronostico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pronostico relation
 * @method     UsuarioQuery innerJoinPronostico($relationAlias = null) Adds a INNER JOIN clause to the query using the Pronostico relation
 *
 * @method     UsuarioQuery leftJoinUsuarioGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioGrupo relation
 * @method     UsuarioQuery rightJoinUsuarioGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioGrupo relation
 * @method     UsuarioQuery innerJoinUsuarioGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioGrupo relation
 *
 * @method     Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method     Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method     Usuario findOneByIdusuario(string $idusuario) Return the first Usuario filtered by the idusuario column
 * @method     Usuario findOneByNombre(string $nombre) Return the first Usuario filtered by the nombre column
 * @method     Usuario findOneByEmail(string $email) Return the first Usuario filtered by the email column
 * @method     Usuario findOneByClave(string $clave) Return the first Usuario filtered by the clave column
 * @method     Usuario findOneByPagook(string $pagook) Return the first Usuario filtered by the pagook column
 * @method     Usuario findOneByClaveconfirma(string $claveconfirma) Return the first Usuario filtered by the claveconfirma column
 *
 * @method     array findByIdusuario(string $idusuario) Return Usuario objects filtered by the idusuario column
 * @method     array findByNombre(string $nombre) Return Usuario objects filtered by the nombre column
 * @method     array findByEmail(string $email) Return Usuario objects filtered by the email column
 * @method     array findByClave(string $clave) Return Usuario objects filtered by the clave column
 * @method     array findByPagook(string $pagook) Return Usuario objects filtered by the pagook column
 * @method     array findByClaveconfirma(string $claveconfirma) Return Usuario objects filtered by the claveconfirma column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUsuarioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Usuario', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UsuarioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UsuarioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UsuarioQuery) {
			return $criteria;
		}
		$query = new UsuarioQuery();
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
	 * @return    Usuario|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $keys, Criteria::IN);
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
	 * @param     mixed $idusuario The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByIdusuario($idusuario = null, $comparison = null)
	{
		if (is_array($idusuario) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $idusuario, $comparison);
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
	 * @return    UsuarioQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UsuarioPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UsuarioPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the clave column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByClave('fooValue');   // WHERE clave = 'fooValue'
	 * $query->filterByClave('%fooValue%'); // WHERE clave LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $clave The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByClave($clave = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($clave)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $clave)) {
				$clave = str_replace('*', '%', $clave);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UsuarioPeer::CLAVE, $clave, $comparison);
	}

	/**
	 * Filter the query on the pagook column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPagook('fooValue');   // WHERE pagook = 'fooValue'
	 * $query->filterByPagook('%fooValue%'); // WHERE pagook LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pagook The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByPagook($pagook = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pagook)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pagook)) {
				$pagook = str_replace('*', '%', $pagook);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UsuarioPeer::PAGOOK, $pagook, $comparison);
	}

	/**
	 * Filter the query on the claveconfirma column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByClaveconfirma('fooValue');   // WHERE claveconfirma = 'fooValue'
	 * $query->filterByClaveconfirma('%fooValue%'); // WHERE claveconfirma LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $claveconfirma The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByClaveconfirma($claveconfirma = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($claveconfirma)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $claveconfirma)) {
				$claveconfirma = str_replace('*', '%', $claveconfirma);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UsuarioPeer::CLAVECONFIRMA, $claveconfirma, $comparison);
	}

	/**
	 * Filter the query by a related Pronostico object
	 *
	 * @param     Pronostico $pronostico  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByPronostico($pronostico, $comparison = null)
	{
		if ($pronostico instanceof Pronostico) {
			return $this
				->addUsingAlias(UsuarioPeer::IDUSUARIO, $pronostico->getIdusuario(), $comparison);
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
	 * @return    UsuarioQuery The current query, for fluid interface
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
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function filterByUsuarioGrupo($usuarioGrupo, $comparison = null)
	{
		if ($usuarioGrupo instanceof UsuarioGrupo) {
			return $this
				->addUsingAlias(UsuarioPeer::IDUSUARIO, $usuarioGrupo->getIdusuario(), $comparison);
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
	 * @return    UsuarioQuery The current query, for fluid interface
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
	 * @param     Usuario $usuario Object to remove from the list of results
	 *
	 * @return    UsuarioQuery The current query, for fluid interface
	 */
	public function prune($usuario = null)
	{
		if ($usuario) {
			$this->addUsingAlias(UsuarioPeer::IDUSUARIO, $usuario->getIdusuario(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUsuarioQuery
