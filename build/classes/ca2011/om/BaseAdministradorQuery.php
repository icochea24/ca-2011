<?php


/**
 * Base class that represents a query for the 'pollaca2011_sch.administrador' table.
 *
 * 
 *
 * @method     AdministradorQuery orderByIdadministrador($order = Criteria::ASC) Order by the idadministrador column
 * @method     AdministradorQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     AdministradorQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method     AdministradorQuery orderByClave($order = Criteria::ASC) Order by the clave column
 * @method     AdministradorQuery orderByAcceso($order = Criteria::ASC) Order by the acceso column
 *
 * @method     AdministradorQuery groupByIdadministrador() Group by the idadministrador column
 * @method     AdministradorQuery groupByNombre() Group by the nombre column
 * @method     AdministradorQuery groupByLogin() Group by the login column
 * @method     AdministradorQuery groupByClave() Group by the clave column
 * @method     AdministradorQuery groupByAcceso() Group by the acceso column
 *
 * @method     AdministradorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AdministradorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AdministradorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Administrador findOne(PropelPDO $con = null) Return the first Administrador matching the query
 * @method     Administrador findOneOrCreate(PropelPDO $con = null) Return the first Administrador matching the query, or a new Administrador object populated from the query conditions when no match is found
 *
 * @method     Administrador findOneByIdadministrador(int $idadministrador) Return the first Administrador filtered by the idadministrador column
 * @method     Administrador findOneByNombre(string $nombre) Return the first Administrador filtered by the nombre column
 * @method     Administrador findOneByLogin(string $login) Return the first Administrador filtered by the login column
 * @method     Administrador findOneByClave(string $clave) Return the first Administrador filtered by the clave column
 * @method     Administrador findOneByAcceso(string $acceso) Return the first Administrador filtered by the acceso column
 *
 * @method     array findByIdadministrador(int $idadministrador) Return Administrador objects filtered by the idadministrador column
 * @method     array findByNombre(string $nombre) Return Administrador objects filtered by the nombre column
 * @method     array findByLogin(string $login) Return Administrador objects filtered by the login column
 * @method     array findByClave(string $clave) Return Administrador objects filtered by the clave column
 * @method     array findByAcceso(string $acceso) Return Administrador objects filtered by the acceso column
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseAdministradorQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAdministradorQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ca2011', $modelName = 'Administrador', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AdministradorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AdministradorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AdministradorQuery) {
			return $criteria;
		}
		$query = new AdministradorQuery();
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
	 * @return    Administrador|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AdministradorPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AdministradorPeer::IDADMINISTRADOR, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AdministradorPeer::IDADMINISTRADOR, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idadministrador column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdadministrador(1234); // WHERE idadministrador = 1234
	 * $query->filterByIdadministrador(array(12, 34)); // WHERE idadministrador IN (12, 34)
	 * $query->filterByIdadministrador(array('min' => 12)); // WHERE idadministrador > 12
	 * </code>
	 *
	 * @param     mixed $idadministrador The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function filterByIdadministrador($idadministrador = null, $comparison = null)
	{
		if (is_array($idadministrador) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AdministradorPeer::IDADMINISTRADOR, $idadministrador, $comparison);
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
	 * @return    AdministradorQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AdministradorPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the login column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
	 * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $login The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function filterByLogin($login = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($login)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $login)) {
				$login = str_replace('*', '%', $login);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AdministradorPeer::LOGIN, $login, $comparison);
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
	 * @return    AdministradorQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AdministradorPeer::CLAVE, $clave, $comparison);
	}

	/**
	 * Filter the query on the acceso column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAcceso('fooValue');   // WHERE acceso = 'fooValue'
	 * $query->filterByAcceso('%fooValue%'); // WHERE acceso LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $acceso The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function filterByAcceso($acceso = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($acceso)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $acceso)) {
				$acceso = str_replace('*', '%', $acceso);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AdministradorPeer::ACCESO, $acceso, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Administrador $administrador Object to remove from the list of results
	 *
	 * @return    AdministradorQuery The current query, for fluid interface
	 */
	public function prune($administrador = null)
	{
		if ($administrador) {
			$this->addUsingAlias(AdministradorPeer::IDADMINISTRADOR, $administrador->getIdadministrador(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAdministradorQuery
