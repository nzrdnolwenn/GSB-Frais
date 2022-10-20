<?php

namespace ContainerK8xBQxF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder92a3f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84e93 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb056 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getConnection', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getMetadataFactory', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getExpressionBuilder', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'beginTransaction', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getCache', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'transactional', array('func' => $func), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'commit', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->commit();
    }

    public function rollback()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'rollback', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getClassMetadata', array('className' => $className), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'createQuery', array('dql' => $dql), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'createNamedQuery', array('name' => $name), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'createQueryBuilder', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'flush', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'clear', array('entityName' => $entityName), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->clear($entityName);
    }

    public function close()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'close', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->close();
    }

    public function persist($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'persist', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'remove', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'refresh', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'detach', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'merge', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'contains', array('entity' => $entity), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getEventManager', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getConfiguration', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'isOpen', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getUnitOfWork', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getProxyFactory', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'initializeObject', array('obj' => $obj), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'getFilters', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'isFiltersStateClean', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'hasFilters', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return $this->valueHolder92a3f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer84e93 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder92a3f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder92a3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder92a3f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__get', ['name' => $name], $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        if (isset(self::$publicPropertieseb056[$name])) {
            return $this->valueHolder92a3f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92a3f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder92a3f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92a3f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder92a3f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__isset', array('name' => $name), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92a3f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder92a3f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__unset', array('name' => $name), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92a3f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder92a3f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__clone', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        $this->valueHolder92a3f = clone $this->valueHolder92a3f;
    }

    public function __sleep()
    {
        $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, '__sleep', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;

        return array('valueHolder92a3f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84e93 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84e93;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84e93 && ($this->initializer84e93->__invoke($valueHolder92a3f, $this, 'initializeProxy', array(), $this->initializer84e93) || 1) && $this->valueHolder92a3f = $valueHolder92a3f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder92a3f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder92a3f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
