<?php


/**
 * Base class that represents a row from the 'pollaca2011_sch.partido' table.
 *
 * 
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BasePartido extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PartidoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PartidoPeer
	 */
	protected static $peer;

	/**
	 * The value for the idpartido field.
	 * @var        int
	 */
	protected $idpartido;

	/**
	 * The value for the equipo1 field.
	 * @var        int
	 */
	protected $equipo1;

	/**
	 * The value for the equipo2 field.
	 * @var        int
	 */
	protected $equipo2;

	/**
	 * The value for the resultadoequipo1 field.
	 * @var        int
	 */
	protected $resultadoequipo1;

	/**
	 * The value for the resultadoequipo2 field.
	 * @var        int
	 */
	protected $resultadoequipo2;

	/**
	 * The value for the fechahora field.
	 * @var        string
	 */
	protected $fechahora;

	/**
	 * The value for the sede field.
	 * @var        string
	 */
	protected $sede;

	/**
	 * The value for the jugado field.
	 * @var        string
	 */
	protected $jugado;

	/**
	 * @var        array Pronostico[] Collection to store aggregation of Pronostico objects.
	 */
	protected $collPronosticos;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [idpartido] column value.
	 * 
	 * @return     int
	 */
	public function getIdpartido()
	{
		return $this->idpartido;
	}

	/**
	 * Get the [equipo1] column value.
	 * 
	 * @return     int
	 */
	public function getEquipo1()
	{
		return $this->equipo1;
	}

	/**
	 * Get the [equipo2] column value.
	 * 
	 * @return     int
	 */
	public function getEquipo2()
	{
		return $this->equipo2;
	}

	/**
	 * Get the [resultadoequipo1] column value.
	 * 
	 * @return     int
	 */
	public function getResultadoequipo1()
	{
		return $this->resultadoequipo1;
	}

	/**
	 * Get the [resultadoequipo2] column value.
	 * 
	 * @return     int
	 */
	public function getResultadoequipo2()
	{
		return $this->resultadoequipo2;
	}

	/**
	 * Get the [optionally formatted] temporal [fechahora] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechahora($format = 'Y-m-d H:i:s')
	{
		if ($this->fechahora === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->fechahora);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechahora, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [sede] column value.
	 * 
	 * @return     string
	 */
	public function getSede()
	{
		return $this->sede;
	}

	/**
	 * Get the [jugado] column value.
	 * 
	 * @return     string
	 */
	public function getJugado()
	{
		return $this->jugado;
	}

	/**
	 * Set the value of [idpartido] column.
	 * 
	 * @param      int $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setIdpartido($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idpartido !== $v) {
			$this->idpartido = $v;
			$this->modifiedColumns[] = PartidoPeer::IDPARTIDO;
		}

		return $this;
	} // setIdpartido()

	/**
	 * Set the value of [equipo1] column.
	 * 
	 * @param      int $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setEquipo1($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->equipo1 !== $v) {
			$this->equipo1 = $v;
			$this->modifiedColumns[] = PartidoPeer::EQUIPO1;
		}

		return $this;
	} // setEquipo1()

	/**
	 * Set the value of [equipo2] column.
	 * 
	 * @param      int $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setEquipo2($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->equipo2 !== $v) {
			$this->equipo2 = $v;
			$this->modifiedColumns[] = PartidoPeer::EQUIPO2;
		}

		return $this;
	} // setEquipo2()

	/**
	 * Set the value of [resultadoequipo1] column.
	 * 
	 * @param      int $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setResultadoequipo1($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->resultadoequipo1 !== $v) {
			$this->resultadoequipo1 = $v;
			$this->modifiedColumns[] = PartidoPeer::RESULTADOEQUIPO1;
		}

		return $this;
	} // setResultadoequipo1()

	/**
	 * Set the value of [resultadoequipo2] column.
	 * 
	 * @param      int $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setResultadoequipo2($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->resultadoequipo2 !== $v) {
			$this->resultadoequipo2 = $v;
			$this->modifiedColumns[] = PartidoPeer::RESULTADOEQUIPO2;
		}

		return $this;
	} // setResultadoequipo2()

	/**
	 * Sets the value of [fechahora] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setFechahora($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fechahora !== null || $dt !== null) {
			$currentDateAsString = ($this->fechahora !== null && $tmpDt = new DateTime($this->fechahora)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fechahora = $newDateAsString;
				$this->modifiedColumns[] = PartidoPeer::FECHAHORA;
			}
		} // if either are not null

		return $this;
	} // setFechahora()

	/**
	 * Set the value of [sede] column.
	 * 
	 * @param      string $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setSede($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sede !== $v) {
			$this->sede = $v;
			$this->modifiedColumns[] = PartidoPeer::SEDE;
		}

		return $this;
	} // setSede()

	/**
	 * Set the value of [jugado] column.
	 * 
	 * @param      string $v new value
	 * @return     Partido The current object (for fluent API support)
	 */
	public function setJugado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->jugado !== $v) {
			$this->jugado = $v;
			$this->modifiedColumns[] = PartidoPeer::JUGADO;
		}

		return $this;
	} // setJugado()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->idpartido = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->equipo1 = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->equipo2 = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->resultadoequipo1 = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->resultadoequipo2 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->fechahora = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->sede = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->jugado = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = PartidoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Partido object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PartidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PartidoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collPronosticos = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PartidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PartidoQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PartidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				PartidoPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PartidoPeer::IDPARTIDO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PartidoPeer::IDPARTIDO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PartidoPeer::IDPARTIDO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setIdpartido($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = PartidoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPronosticos !== null) {
				foreach ($this->collPronosticos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = PartidoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPronosticos !== null) {
					foreach ($this->collPronosticos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PartidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdpartido();
				break;
			case 1:
				return $this->getEquipo1();
				break;
			case 2:
				return $this->getEquipo2();
				break;
			case 3:
				return $this->getResultadoequipo1();
				break;
			case 4:
				return $this->getResultadoequipo2();
				break;
			case 5:
				return $this->getFechahora();
				break;
			case 6:
				return $this->getSede();
				break;
			case 7:
				return $this->getJugado();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Partido'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Partido'][$this->getPrimaryKey()] = true;
		$keys = PartidoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdpartido(),
			$keys[1] => $this->getEquipo1(),
			$keys[2] => $this->getEquipo2(),
			$keys[3] => $this->getResultadoequipo1(),
			$keys[4] => $this->getResultadoequipo2(),
			$keys[5] => $this->getFechahora(),
			$keys[6] => $this->getSede(),
			$keys[7] => $this->getJugado(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collPronosticos) {
				$result['Pronosticos'] = $this->collPronosticos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PartidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdpartido($value);
				break;
			case 1:
				$this->setEquipo1($value);
				break;
			case 2:
				$this->setEquipo2($value);
				break;
			case 3:
				$this->setResultadoequipo1($value);
				break;
			case 4:
				$this->setResultadoequipo2($value);
				break;
			case 5:
				$this->setFechahora($value);
				break;
			case 6:
				$this->setSede($value);
				break;
			case 7:
				$this->setJugado($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PartidoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdpartido($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEquipo1($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEquipo2($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setResultadoequipo1($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setResultadoequipo2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFechahora($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSede($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setJugado($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PartidoPeer::DATABASE_NAME);

		if ($this->isColumnModified(PartidoPeer::IDPARTIDO)) $criteria->add(PartidoPeer::IDPARTIDO, $this->idpartido);
		if ($this->isColumnModified(PartidoPeer::EQUIPO1)) $criteria->add(PartidoPeer::EQUIPO1, $this->equipo1);
		if ($this->isColumnModified(PartidoPeer::EQUIPO2)) $criteria->add(PartidoPeer::EQUIPO2, $this->equipo2);
		if ($this->isColumnModified(PartidoPeer::RESULTADOEQUIPO1)) $criteria->add(PartidoPeer::RESULTADOEQUIPO1, $this->resultadoequipo1);
		if ($this->isColumnModified(PartidoPeer::RESULTADOEQUIPO2)) $criteria->add(PartidoPeer::RESULTADOEQUIPO2, $this->resultadoequipo2);
		if ($this->isColumnModified(PartidoPeer::FECHAHORA)) $criteria->add(PartidoPeer::FECHAHORA, $this->fechahora);
		if ($this->isColumnModified(PartidoPeer::SEDE)) $criteria->add(PartidoPeer::SEDE, $this->sede);
		if ($this->isColumnModified(PartidoPeer::JUGADO)) $criteria->add(PartidoPeer::JUGADO, $this->jugado);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PartidoPeer::DATABASE_NAME);
		$criteria->add(PartidoPeer::IDPARTIDO, $this->idpartido);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdpartido();
	}

	/**
	 * Generic method to set the primary key (idpartido column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdpartido($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdpartido();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Partido (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setEquipo1($this->getEquipo1());
		$copyObj->setEquipo2($this->getEquipo2());
		$copyObj->setResultadoequipo1($this->getResultadoequipo1());
		$copyObj->setResultadoequipo2($this->getResultadoequipo2());
		$copyObj->setFechahora($this->getFechahora());
		$copyObj->setSede($this->getSede());
		$copyObj->setJugado($this->getJugado());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPronosticos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPronostico($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdpartido(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Partido Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     PartidoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PartidoPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collPronosticos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPronosticos()
	 */
	public function clearPronosticos()
	{
		$this->collPronosticos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPronosticos collection.
	 *
	 * By default this just sets the collPronosticos collection to an empty array (like clearcollPronosticos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPronosticos($overrideExisting = true)
	{
		if (null !== $this->collPronosticos && !$overrideExisting) {
			return;
		}
		$this->collPronosticos = new PropelObjectCollection();
		$this->collPronosticos->setModel('Pronostico');
	}

	/**
	 * Gets an array of Pronostico objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Partido is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Pronostico[] List of Pronostico objects
	 * @throws     PropelException
	 */
	public function getPronosticos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPronosticos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPronosticos) {
				// return empty collection
				$this->initPronosticos();
			} else {
				$collPronosticos = PronosticoQuery::create(null, $criteria)
					->filterByPartido($this)
					->find($con);
				if (null !== $criteria) {
					return $collPronosticos;
				}
				$this->collPronosticos = $collPronosticos;
			}
		}
		return $this->collPronosticos;
	}

	/**
	 * Returns the number of related Pronostico objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Pronostico objects.
	 * @throws     PropelException
	 */
	public function countPronosticos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPronosticos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPronosticos) {
				return 0;
			} else {
				$query = PronosticoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPartido($this)
					->count($con);
			}
		} else {
			return count($this->collPronosticos);
		}
	}

	/**
	 * Method called to associate a Pronostico object to this object
	 * through the Pronostico foreign key attribute.
	 *
	 * @param      Pronostico $l Pronostico
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPronostico(Pronostico $l)
	{
		if ($this->collPronosticos === null) {
			$this->initPronosticos();
		}
		if (!$this->collPronosticos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPronosticos[]= $l;
			$l->setPartido($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Partido is new, it will return
	 * an empty collection; or if this Partido has previously
	 * been saved, it will retrieve related Pronosticos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Partido.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Pronostico[] List of Pronostico objects
	 */
	public function getPronosticosJoinGrupo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PronosticoQuery::create(null, $criteria);
		$query->joinWith('Grupo', $join_behavior);

		return $this->getPronosticos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Partido is new, it will return
	 * an empty collection; or if this Partido has previously
	 * been saved, it will retrieve related Pronosticos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Partido.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Pronostico[] List of Pronostico objects
	 */
	public function getPronosticosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PronosticoQuery::create(null, $criteria);
		$query->joinWith('Usuario', $join_behavior);

		return $this->getPronosticos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->idpartido = null;
		$this->equipo1 = null;
		$this->equipo2 = null;
		$this->resultadoequipo1 = null;
		$this->resultadoequipo2 = null;
		$this->fechahora = null;
		$this->sede = null;
		$this->jugado = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collPronosticos) {
				foreach ($this->collPronosticos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collPronosticos instanceof PropelCollection) {
			$this->collPronosticos->clearIterator();
		}
		$this->collPronosticos = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PartidoPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BasePartido
