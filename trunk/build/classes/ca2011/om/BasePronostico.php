<?php


/**
 * Base class that represents a row from the 'pollaca2011_sch.pronostico' table.
 *
 * 
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BasePronostico extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PronosticoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PronosticoPeer
	 */
	protected static $peer;

	/**
	 * The value for the idpronostico field.
	 * @var        string
	 */
	protected $idpronostico;

	/**
	 * The value for the pronostico1 field.
	 * @var        int
	 */
	protected $pronostico1;

	/**
	 * The value for the pronostico2 field.
	 * @var        int
	 */
	protected $pronostico2;

	/**
	 * The value for the puntajeobt field.
	 * @var        int
	 */
	protected $puntajeobt;

	/**
	 * The value for the fechahoraregistro field.
	 * @var        string
	 */
	protected $fechahoraregistro;

	/**
	 * The value for the idgrupo field.
	 * @var        int
	 */
	protected $idgrupo;

	/**
	 * The value for the idpartido field.
	 * @var        int
	 */
	protected $idpartido;

	/**
	 * The value for the idusuario field.
	 * @var        string
	 */
	protected $idusuario;

	/**
	 * @var        Grupo
	 */
	protected $aGrupo;

	/**
	 * @var        Partido
	 */
	protected $aPartido;

	/**
	 * @var        Usuario
	 */
	protected $aUsuario;

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
	 * Get the [idpronostico] column value.
	 * 
	 * @return     string
	 */
	public function getIdpronostico()
	{
		return $this->idpronostico;
	}

	/**
	 * Get the [pronostico1] column value.
	 * 
	 * @return     int
	 */
	public function getPronostico1()
	{
		return $this->pronostico1;
	}

	/**
	 * Get the [pronostico2] column value.
	 * 
	 * @return     int
	 */
	public function getPronostico2()
	{
		return $this->pronostico2;
	}

	/**
	 * Get the [puntajeobt] column value.
	 * 
	 * @return     int
	 */
	public function getPuntajeobt()
	{
		return $this->puntajeobt;
	}

	/**
	 * Get the [optionally formatted] temporal [fechahoraregistro] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechahoraregistro($format = 'Y-m-d H:i:s')
	{
		if ($this->fechahoraregistro === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->fechahoraregistro);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechahoraregistro, true), $x);
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
	 * Get the [idgrupo] column value.
	 * 
	 * @return     int
	 */
	public function getIdgrupo()
	{
		return $this->idgrupo;
	}

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
	 * Get the [idusuario] column value.
	 * 
	 * @return     string
	 */
	public function getIdusuario()
	{
		return $this->idusuario;
	}

	/**
	 * Set the value of [idpronostico] column.
	 * 
	 * @param      string $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setIdpronostico($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->idpronostico !== $v) {
			$this->idpronostico = $v;
			$this->modifiedColumns[] = PronosticoPeer::IDPRONOSTICO;
		}

		return $this;
	} // setIdpronostico()

	/**
	 * Set the value of [pronostico1] column.
	 * 
	 * @param      int $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setPronostico1($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pronostico1 !== $v) {
			$this->pronostico1 = $v;
			$this->modifiedColumns[] = PronosticoPeer::PRONOSTICO1;
		}

		return $this;
	} // setPronostico1()

	/**
	 * Set the value of [pronostico2] column.
	 * 
	 * @param      int $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setPronostico2($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pronostico2 !== $v) {
			$this->pronostico2 = $v;
			$this->modifiedColumns[] = PronosticoPeer::PRONOSTICO2;
		}

		return $this;
	} // setPronostico2()

	/**
	 * Set the value of [puntajeobt] column.
	 * 
	 * @param      int $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setPuntajeobt($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->puntajeobt !== $v) {
			$this->puntajeobt = $v;
			$this->modifiedColumns[] = PronosticoPeer::PUNTAJEOBT;
		}

		return $this;
	} // setPuntajeobt()

	/**
	 * Sets the value of [fechahoraregistro] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setFechahoraregistro($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fechahoraregistro !== null || $dt !== null) {
			$currentDateAsString = ($this->fechahoraregistro !== null && $tmpDt = new DateTime($this->fechahoraregistro)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fechahoraregistro = $newDateAsString;
				$this->modifiedColumns[] = PronosticoPeer::FECHAHORAREGISTRO;
			}
		} // if either are not null

		return $this;
	} // setFechahoraregistro()

	/**
	 * Set the value of [idgrupo] column.
	 * 
	 * @param      int $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setIdgrupo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idgrupo !== $v) {
			$this->idgrupo = $v;
			$this->modifiedColumns[] = PronosticoPeer::IDGRUPO;
		}

		if ($this->aGrupo !== null && $this->aGrupo->getIdgrupo() !== $v) {
			$this->aGrupo = null;
		}

		return $this;
	} // setIdgrupo()

	/**
	 * Set the value of [idpartido] column.
	 * 
	 * @param      int $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setIdpartido($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idpartido !== $v) {
			$this->idpartido = $v;
			$this->modifiedColumns[] = PronosticoPeer::IDPARTIDO;
		}

		if ($this->aPartido !== null && $this->aPartido->getIdpartido() !== $v) {
			$this->aPartido = null;
		}

		return $this;
	} // setIdpartido()

	/**
	 * Set the value of [idusuario] column.
	 * 
	 * @param      string $v new value
	 * @return     Pronostico The current object (for fluent API support)
	 */
	public function setIdusuario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->idusuario !== $v) {
			$this->idusuario = $v;
			$this->modifiedColumns[] = PronosticoPeer::IDUSUARIO;
		}

		if ($this->aUsuario !== null && $this->aUsuario->getIdusuario() !== $v) {
			$this->aUsuario = null;
		}

		return $this;
	} // setIdusuario()

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

			$this->idpronostico = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pronostico1 = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->pronostico2 = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->puntajeobt = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->fechahoraregistro = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->idgrupo = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->idpartido = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->idusuario = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = PronosticoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Pronostico object", $e);
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

		if ($this->aGrupo !== null && $this->idgrupo !== $this->aGrupo->getIdgrupo()) {
			$this->aGrupo = null;
		}
		if ($this->aPartido !== null && $this->idpartido !== $this->aPartido->getIdpartido()) {
			$this->aPartido = null;
		}
		if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdusuario()) {
			$this->aUsuario = null;
		}
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
			$con = Propel::getConnection(PronosticoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PronosticoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aGrupo = null;
			$this->aPartido = null;
			$this->aUsuario = null;
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
			$con = Propel::getConnection(PronosticoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PronosticoQuery::create()
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
			$con = Propel::getConnection(PronosticoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PronosticoPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aGrupo !== null) {
				if ($this->aGrupo->isModified() || $this->aGrupo->isNew()) {
					$affectedRows += $this->aGrupo->save($con);
				}
				$this->setGrupo($this->aGrupo);
			}

			if ($this->aPartido !== null) {
				if ($this->aPartido->isModified() || $this->aPartido->isNew()) {
					$affectedRows += $this->aPartido->save($con);
				}
				$this->setPartido($this->aPartido);
			}

			if ($this->aUsuario !== null) {
				if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
					$affectedRows += $this->aUsuario->save($con);
				}
				$this->setUsuario($this->aUsuario);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PronosticoPeer::IDPRONOSTICO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PronosticoPeer::IDPRONOSTICO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PronosticoPeer::IDPRONOSTICO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdpronostico($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PronosticoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aGrupo !== null) {
				if (!$this->aGrupo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aGrupo->getValidationFailures());
				}
			}

			if ($this->aPartido !== null) {
				if (!$this->aPartido->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPartido->getValidationFailures());
				}
			}

			if ($this->aUsuario !== null) {
				if (!$this->aUsuario->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
				}
			}


			if (($retval = PronosticoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = PronosticoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdpronostico();
				break;
			case 1:
				return $this->getPronostico1();
				break;
			case 2:
				return $this->getPronostico2();
				break;
			case 3:
				return $this->getPuntajeobt();
				break;
			case 4:
				return $this->getFechahoraregistro();
				break;
			case 5:
				return $this->getIdgrupo();
				break;
			case 6:
				return $this->getIdpartido();
				break;
			case 7:
				return $this->getIdusuario();
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
		if (isset($alreadyDumpedObjects['Pronostico'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Pronostico'][$this->getPrimaryKey()] = true;
		$keys = PronosticoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdpronostico(),
			$keys[1] => $this->getPronostico1(),
			$keys[2] => $this->getPronostico2(),
			$keys[3] => $this->getPuntajeobt(),
			$keys[4] => $this->getFechahoraregistro(),
			$keys[5] => $this->getIdgrupo(),
			$keys[6] => $this->getIdpartido(),
			$keys[7] => $this->getIdusuario(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aGrupo) {
				$result['Grupo'] = $this->aGrupo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aPartido) {
				$result['Partido'] = $this->aPartido->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aUsuario) {
				$result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = PronosticoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdpronostico($value);
				break;
			case 1:
				$this->setPronostico1($value);
				break;
			case 2:
				$this->setPronostico2($value);
				break;
			case 3:
				$this->setPuntajeobt($value);
				break;
			case 4:
				$this->setFechahoraregistro($value);
				break;
			case 5:
				$this->setIdgrupo($value);
				break;
			case 6:
				$this->setIdpartido($value);
				break;
			case 7:
				$this->setIdusuario($value);
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
		$keys = PronosticoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdpronostico($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPronostico1($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPronostico2($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPuntajeobt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechahoraregistro($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdgrupo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIdpartido($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIdusuario($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PronosticoPeer::DATABASE_NAME);

		if ($this->isColumnModified(PronosticoPeer::IDPRONOSTICO)) $criteria->add(PronosticoPeer::IDPRONOSTICO, $this->idpronostico);
		if ($this->isColumnModified(PronosticoPeer::PRONOSTICO1)) $criteria->add(PronosticoPeer::PRONOSTICO1, $this->pronostico1);
		if ($this->isColumnModified(PronosticoPeer::PRONOSTICO2)) $criteria->add(PronosticoPeer::PRONOSTICO2, $this->pronostico2);
		if ($this->isColumnModified(PronosticoPeer::PUNTAJEOBT)) $criteria->add(PronosticoPeer::PUNTAJEOBT, $this->puntajeobt);
		if ($this->isColumnModified(PronosticoPeer::FECHAHORAREGISTRO)) $criteria->add(PronosticoPeer::FECHAHORAREGISTRO, $this->fechahoraregistro);
		if ($this->isColumnModified(PronosticoPeer::IDGRUPO)) $criteria->add(PronosticoPeer::IDGRUPO, $this->idgrupo);
		if ($this->isColumnModified(PronosticoPeer::IDPARTIDO)) $criteria->add(PronosticoPeer::IDPARTIDO, $this->idpartido);
		if ($this->isColumnModified(PronosticoPeer::IDUSUARIO)) $criteria->add(PronosticoPeer::IDUSUARIO, $this->idusuario);

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
		$criteria = new Criteria(PronosticoPeer::DATABASE_NAME);
		$criteria->add(PronosticoPeer::IDPRONOSTICO, $this->idpronostico);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getIdpronostico();
	}

	/**
	 * Generic method to set the primary key (idpronostico column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdpronostico($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdpronostico();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Pronostico (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setPronostico1($this->getPronostico1());
		$copyObj->setPronostico2($this->getPronostico2());
		$copyObj->setPuntajeobt($this->getPuntajeobt());
		$copyObj->setFechahoraregistro($this->getFechahoraregistro());
		$copyObj->setIdgrupo($this->getIdgrupo());
		$copyObj->setIdpartido($this->getIdpartido());
		$copyObj->setIdusuario($this->getIdusuario());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdpronostico(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Pronostico Clone of current object.
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
	 * @return     PronosticoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PronosticoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Grupo object.
	 *
	 * @param      Grupo $v
	 * @return     Pronostico The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setGrupo(Grupo $v = null)
	{
		if ($v === null) {
			$this->setIdgrupo(NULL);
		} else {
			$this->setIdgrupo($v->getIdgrupo());
		}

		$this->aGrupo = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Grupo object, it will not be re-added.
		if ($v !== null) {
			$v->addPronostico($this);
		}

		return $this;
	}


	/**
	 * Get the associated Grupo object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Grupo The associated Grupo object.
	 * @throws     PropelException
	 */
	public function getGrupo(PropelPDO $con = null)
	{
		if ($this->aGrupo === null && ($this->idgrupo !== null)) {
			$this->aGrupo = GrupoQuery::create()->findPk($this->idgrupo, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aGrupo->addPronosticos($this);
			 */
		}
		return $this->aGrupo;
	}

	/**
	 * Declares an association between this object and a Partido object.
	 *
	 * @param      Partido $v
	 * @return     Pronostico The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPartido(Partido $v = null)
	{
		if ($v === null) {
			$this->setIdpartido(NULL);
		} else {
			$this->setIdpartido($v->getIdpartido());
		}

		$this->aPartido = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Partido object, it will not be re-added.
		if ($v !== null) {
			$v->addPronostico($this);
		}

		return $this;
	}


	/**
	 * Get the associated Partido object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Partido The associated Partido object.
	 * @throws     PropelException
	 */
	public function getPartido(PropelPDO $con = null)
	{
		if ($this->aPartido === null && ($this->idpartido !== null)) {
			$this->aPartido = PartidoQuery::create()->findPk($this->idpartido, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPartido->addPronosticos($this);
			 */
		}
		return $this->aPartido;
	}

	/**
	 * Declares an association between this object and a Usuario object.
	 *
	 * @param      Usuario $v
	 * @return     Pronostico The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setUsuario(Usuario $v = null)
	{
		if ($v === null) {
			$this->setIdusuario(NULL);
		} else {
			$this->setIdusuario($v->getIdusuario());
		}

		$this->aUsuario = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Usuario object, it will not be re-added.
		if ($v !== null) {
			$v->addPronostico($this);
		}

		return $this;
	}


	/**
	 * Get the associated Usuario object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Usuario The associated Usuario object.
	 * @throws     PropelException
	 */
	public function getUsuario(PropelPDO $con = null)
	{
		if ($this->aUsuario === null && (($this->idusuario !== "" && $this->idusuario !== null))) {
			$this->aUsuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aUsuario->addPronosticos($this);
			 */
		}
		return $this->aUsuario;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->idpronostico = null;
		$this->pronostico1 = null;
		$this->pronostico2 = null;
		$this->puntajeobt = null;
		$this->fechahoraregistro = null;
		$this->idgrupo = null;
		$this->idpartido = null;
		$this->idusuario = null;
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
		} // if ($deep)

		$this->aGrupo = null;
		$this->aPartido = null;
		$this->aUsuario = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PronosticoPeer::DEFAULT_STRING_FORMAT);
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

} // BasePronostico
