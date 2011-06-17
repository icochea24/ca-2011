<?php


/**
 * Base class that represents a row from the 'pollaca2011_sch.equipo' table.
 *
 * 
 *
 * @package    propel.generator.ca2011.om
 */
abstract class BaseEquipo extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'EquipoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        EquipoPeer
	 */
	protected static $peer;

	/**
	 * The value for the idequipo field.
	 * @var        int
	 */
	protected $idequipo;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the grupo field.
	 * @var        string
	 */
	protected $grupo;

	/**
	 * The value for the clasificado field.
	 * @var        string
	 */
	protected $clasificado;

	/**
	 * The value for the semifinalista field.
	 * @var        string
	 */
	protected $semifinalista;

	/**
	 * The value for the vicecampeon field.
	 * @var        string
	 */
	protected $vicecampeon;

	/**
	 * The value for the campeon field.
	 * @var        string
	 */
	protected $campeon;

	/**
	 * The value for the linkbandera field.
	 * @var        string
	 */
	protected $linkbandera;

	/**
	 * @var        array Partido[] Collection to store aggregation of Partido objects.
	 */
	protected $collPartidosRelatedByIdequipo1;

	/**
	 * @var        array Partido[] Collection to store aggregation of Partido objects.
	 */
	protected $collPartidosRelatedByIdequipo2;

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
	 * Get the [idequipo] column value.
	 * 
	 * @return     int
	 */
	public function getIdequipo()
	{
		return $this->idequipo;
	}

	/**
	 * Get the [nombre] column value.
	 * 
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [grupo] column value.
	 * 
	 * @return     string
	 */
	public function getGrupo()
	{
		return $this->grupo;
	}

	/**
	 * Get the [clasificado] column value.
	 * 
	 * @return     string
	 */
	public function getClasificado()
	{
		return $this->clasificado;
	}

	/**
	 * Get the [semifinalista] column value.
	 * 
	 * @return     string
	 */
	public function getSemifinalista()
	{
		return $this->semifinalista;
	}

	/**
	 * Get the [vicecampeon] column value.
	 * 
	 * @return     string
	 */
	public function getVicecampeon()
	{
		return $this->vicecampeon;
	}

	/**
	 * Get the [campeon] column value.
	 * 
	 * @return     string
	 */
	public function getCampeon()
	{
		return $this->campeon;
	}

	/**
	 * Get the [linkbandera] column value.
	 * 
	 * @return     string
	 */
	public function getLinkbandera()
	{
		return $this->linkbandera;
	}

	/**
	 * Set the value of [idequipo] column.
	 * 
	 * @param      int $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setIdequipo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->idequipo !== $v) {
			$this->idequipo = $v;
			$this->modifiedColumns[] = EquipoPeer::IDEQUIPO;
		}

		return $this;
	} // setIdequipo()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = EquipoPeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [grupo] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setGrupo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->grupo !== $v) {
			$this->grupo = $v;
			$this->modifiedColumns[] = EquipoPeer::GRUPO;
		}

		return $this;
	} // setGrupo()

	/**
	 * Set the value of [clasificado] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setClasificado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->clasificado !== $v) {
			$this->clasificado = $v;
			$this->modifiedColumns[] = EquipoPeer::CLASIFICADO;
		}

		return $this;
	} // setClasificado()

	/**
	 * Set the value of [semifinalista] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setSemifinalista($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->semifinalista !== $v) {
			$this->semifinalista = $v;
			$this->modifiedColumns[] = EquipoPeer::SEMIFINALISTA;
		}

		return $this;
	} // setSemifinalista()

	/**
	 * Set the value of [vicecampeon] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setVicecampeon($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->vicecampeon !== $v) {
			$this->vicecampeon = $v;
			$this->modifiedColumns[] = EquipoPeer::VICECAMPEON;
		}

		return $this;
	} // setVicecampeon()

	/**
	 * Set the value of [campeon] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setCampeon($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->campeon !== $v) {
			$this->campeon = $v;
			$this->modifiedColumns[] = EquipoPeer::CAMPEON;
		}

		return $this;
	} // setCampeon()

	/**
	 * Set the value of [linkbandera] column.
	 * 
	 * @param      string $v new value
	 * @return     Equipo The current object (for fluent API support)
	 */
	public function setLinkbandera($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->linkbandera !== $v) {
			$this->linkbandera = $v;
			$this->modifiedColumns[] = EquipoPeer::LINKBANDERA;
		}

		return $this;
	} // setLinkbandera()

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

			$this->idequipo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->grupo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->clasificado = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->semifinalista = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->vicecampeon = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->campeon = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->linkbandera = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = EquipoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Equipo object", $e);
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
			$con = Propel::getConnection(EquipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = EquipoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collPartidosRelatedByIdequipo1 = null;

			$this->collPartidosRelatedByIdequipo2 = null;

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
			$con = Propel::getConnection(EquipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				EquipoQuery::create()
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
			$con = Propel::getConnection(EquipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				EquipoPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = EquipoPeer::IDEQUIPO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(EquipoPeer::IDEQUIPO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.EquipoPeer::IDEQUIPO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setIdequipo($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = EquipoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPartidosRelatedByIdequipo1 !== null) {
				foreach ($this->collPartidosRelatedByIdequipo1 as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPartidosRelatedByIdequipo2 !== null) {
				foreach ($this->collPartidosRelatedByIdequipo2 as $referrerFK) {
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


			if (($retval = EquipoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPartidosRelatedByIdequipo1 !== null) {
					foreach ($this->collPartidosRelatedByIdequipo1 as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPartidosRelatedByIdequipo2 !== null) {
					foreach ($this->collPartidosRelatedByIdequipo2 as $referrerFK) {
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
		$pos = EquipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdequipo();
				break;
			case 1:
				return $this->getNombre();
				break;
			case 2:
				return $this->getGrupo();
				break;
			case 3:
				return $this->getClasificado();
				break;
			case 4:
				return $this->getSemifinalista();
				break;
			case 5:
				return $this->getVicecampeon();
				break;
			case 6:
				return $this->getCampeon();
				break;
			case 7:
				return $this->getLinkbandera();
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
		if (isset($alreadyDumpedObjects['Equipo'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Equipo'][$this->getPrimaryKey()] = true;
		$keys = EquipoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdequipo(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getGrupo(),
			$keys[3] => $this->getClasificado(),
			$keys[4] => $this->getSemifinalista(),
			$keys[5] => $this->getVicecampeon(),
			$keys[6] => $this->getCampeon(),
			$keys[7] => $this->getLinkbandera(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collPartidosRelatedByIdequipo1) {
				$result['PartidosRelatedByIdequipo1'] = $this->collPartidosRelatedByIdequipo1->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPartidosRelatedByIdequipo2) {
				$result['PartidosRelatedByIdequipo2'] = $this->collPartidosRelatedByIdequipo2->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = EquipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdequipo($value);
				break;
			case 1:
				$this->setNombre($value);
				break;
			case 2:
				$this->setGrupo($value);
				break;
			case 3:
				$this->setClasificado($value);
				break;
			case 4:
				$this->setSemifinalista($value);
				break;
			case 5:
				$this->setVicecampeon($value);
				break;
			case 6:
				$this->setCampeon($value);
				break;
			case 7:
				$this->setLinkbandera($value);
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
		$keys = EquipoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdequipo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGrupo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setClasificado($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSemifinalista($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setVicecampeon($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCampeon($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLinkbandera($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(EquipoPeer::DATABASE_NAME);

		if ($this->isColumnModified(EquipoPeer::IDEQUIPO)) $criteria->add(EquipoPeer::IDEQUIPO, $this->idequipo);
		if ($this->isColumnModified(EquipoPeer::NOMBRE)) $criteria->add(EquipoPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(EquipoPeer::GRUPO)) $criteria->add(EquipoPeer::GRUPO, $this->grupo);
		if ($this->isColumnModified(EquipoPeer::CLASIFICADO)) $criteria->add(EquipoPeer::CLASIFICADO, $this->clasificado);
		if ($this->isColumnModified(EquipoPeer::SEMIFINALISTA)) $criteria->add(EquipoPeer::SEMIFINALISTA, $this->semifinalista);
		if ($this->isColumnModified(EquipoPeer::VICECAMPEON)) $criteria->add(EquipoPeer::VICECAMPEON, $this->vicecampeon);
		if ($this->isColumnModified(EquipoPeer::CAMPEON)) $criteria->add(EquipoPeer::CAMPEON, $this->campeon);
		if ($this->isColumnModified(EquipoPeer::LINKBANDERA)) $criteria->add(EquipoPeer::LINKBANDERA, $this->linkbandera);

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
		$criteria = new Criteria(EquipoPeer::DATABASE_NAME);
		$criteria->add(EquipoPeer::IDEQUIPO, $this->idequipo);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdequipo();
	}

	/**
	 * Generic method to set the primary key (idequipo column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdequipo($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdequipo();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Equipo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNombre($this->getNombre());
		$copyObj->setGrupo($this->getGrupo());
		$copyObj->setClasificado($this->getClasificado());
		$copyObj->setSemifinalista($this->getSemifinalista());
		$copyObj->setVicecampeon($this->getVicecampeon());
		$copyObj->setCampeon($this->getCampeon());
		$copyObj->setLinkbandera($this->getLinkbandera());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPartidosRelatedByIdequipo1() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPartidoRelatedByIdequipo1($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPartidosRelatedByIdequipo2() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPartidoRelatedByIdequipo2($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdequipo(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Equipo Clone of current object.
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
	 * @return     EquipoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new EquipoPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collPartidosRelatedByIdequipo1 collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPartidosRelatedByIdequipo1()
	 */
	public function clearPartidosRelatedByIdequipo1()
	{
		$this->collPartidosRelatedByIdequipo1 = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPartidosRelatedByIdequipo1 collection.
	 *
	 * By default this just sets the collPartidosRelatedByIdequipo1 collection to an empty array (like clearcollPartidosRelatedByIdequipo1());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPartidosRelatedByIdequipo1($overrideExisting = true)
	{
		if (null !== $this->collPartidosRelatedByIdequipo1 && !$overrideExisting) {
			return;
		}
		$this->collPartidosRelatedByIdequipo1 = new PropelObjectCollection();
		$this->collPartidosRelatedByIdequipo1->setModel('Partido');
	}

	/**
	 * Gets an array of Partido objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Equipo is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Partido[] List of Partido objects
	 * @throws     PropelException
	 */
	public function getPartidosRelatedByIdequipo1($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPartidosRelatedByIdequipo1 || null !== $criteria) {
			if ($this->isNew() && null === $this->collPartidosRelatedByIdequipo1) {
				// return empty collection
				$this->initPartidosRelatedByIdequipo1();
			} else {
				$collPartidosRelatedByIdequipo1 = PartidoQuery::create(null, $criteria)
					->filterByEquipoRelatedByIdequipo1($this)
					->find($con);
				if (null !== $criteria) {
					return $collPartidosRelatedByIdequipo1;
				}
				$this->collPartidosRelatedByIdequipo1 = $collPartidosRelatedByIdequipo1;
			}
		}
		return $this->collPartidosRelatedByIdequipo1;
	}

	/**
	 * Returns the number of related Partido objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Partido objects.
	 * @throws     PropelException
	 */
	public function countPartidosRelatedByIdequipo1(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPartidosRelatedByIdequipo1 || null !== $criteria) {
			if ($this->isNew() && null === $this->collPartidosRelatedByIdequipo1) {
				return 0;
			} else {
				$query = PartidoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByEquipoRelatedByIdequipo1($this)
					->count($con);
			}
		} else {
			return count($this->collPartidosRelatedByIdequipo1);
		}
	}

	/**
	 * Method called to associate a Partido object to this object
	 * through the Partido foreign key attribute.
	 *
	 * @param      Partido $l Partido
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPartidoRelatedByIdequipo1(Partido $l)
	{
		if ($this->collPartidosRelatedByIdequipo1 === null) {
			$this->initPartidosRelatedByIdequipo1();
		}
		if (!$this->collPartidosRelatedByIdequipo1->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPartidosRelatedByIdequipo1[]= $l;
			$l->setEquipoRelatedByIdequipo1($this);
		}
	}

	/**
	 * Clears out the collPartidosRelatedByIdequipo2 collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPartidosRelatedByIdequipo2()
	 */
	public function clearPartidosRelatedByIdequipo2()
	{
		$this->collPartidosRelatedByIdequipo2 = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPartidosRelatedByIdequipo2 collection.
	 *
	 * By default this just sets the collPartidosRelatedByIdequipo2 collection to an empty array (like clearcollPartidosRelatedByIdequipo2());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPartidosRelatedByIdequipo2($overrideExisting = true)
	{
		if (null !== $this->collPartidosRelatedByIdequipo2 && !$overrideExisting) {
			return;
		}
		$this->collPartidosRelatedByIdequipo2 = new PropelObjectCollection();
		$this->collPartidosRelatedByIdequipo2->setModel('Partido');
	}

	/**
	 * Gets an array of Partido objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Equipo is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Partido[] List of Partido objects
	 * @throws     PropelException
	 */
	public function getPartidosRelatedByIdequipo2($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPartidosRelatedByIdequipo2 || null !== $criteria) {
			if ($this->isNew() && null === $this->collPartidosRelatedByIdequipo2) {
				// return empty collection
				$this->initPartidosRelatedByIdequipo2();
			} else {
				$collPartidosRelatedByIdequipo2 = PartidoQuery::create(null, $criteria)
					->filterByEquipoRelatedByIdequipo2($this)
					->find($con);
				if (null !== $criteria) {
					return $collPartidosRelatedByIdequipo2;
				}
				$this->collPartidosRelatedByIdequipo2 = $collPartidosRelatedByIdequipo2;
			}
		}
		return $this->collPartidosRelatedByIdequipo2;
	}

	/**
	 * Returns the number of related Partido objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Partido objects.
	 * @throws     PropelException
	 */
	public function countPartidosRelatedByIdequipo2(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPartidosRelatedByIdequipo2 || null !== $criteria) {
			if ($this->isNew() && null === $this->collPartidosRelatedByIdequipo2) {
				return 0;
			} else {
				$query = PartidoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByEquipoRelatedByIdequipo2($this)
					->count($con);
			}
		} else {
			return count($this->collPartidosRelatedByIdequipo2);
		}
	}

	/**
	 * Method called to associate a Partido object to this object
	 * through the Partido foreign key attribute.
	 *
	 * @param      Partido $l Partido
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPartidoRelatedByIdequipo2(Partido $l)
	{
		if ($this->collPartidosRelatedByIdequipo2 === null) {
			$this->initPartidosRelatedByIdequipo2();
		}
		if (!$this->collPartidosRelatedByIdequipo2->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPartidosRelatedByIdequipo2[]= $l;
			$l->setEquipoRelatedByIdequipo2($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->idequipo = null;
		$this->nombre = null;
		$this->grupo = null;
		$this->clasificado = null;
		$this->semifinalista = null;
		$this->vicecampeon = null;
		$this->campeon = null;
		$this->linkbandera = null;
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
			if ($this->collPartidosRelatedByIdequipo1) {
				foreach ($this->collPartidosRelatedByIdequipo1 as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPartidosRelatedByIdequipo2) {
				foreach ($this->collPartidosRelatedByIdequipo2 as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collPartidosRelatedByIdequipo1 instanceof PropelCollection) {
			$this->collPartidosRelatedByIdequipo1->clearIterator();
		}
		$this->collPartidosRelatedByIdequipo1 = null;
		if ($this->collPartidosRelatedByIdequipo2 instanceof PropelCollection) {
			$this->collPartidosRelatedByIdequipo2->clearIterator();
		}
		$this->collPartidosRelatedByIdequipo2 = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(EquipoPeer::DEFAULT_STRING_FORMAT);
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

} // BaseEquipo
