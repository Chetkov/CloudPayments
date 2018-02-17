<?php

namespace CloudPayments\Domain\Model;

/**
 * Class Model
 * @package CloudPayments\Domain\Model
 */
class Model
{
    /**
     * @var string
     */
    private const METHOD_PREFIX_GET = 'get';

    /**
     * @var string
     */
    private const METHOD_PREFIX_SET = 'set';

    /**
     * @var array
     */
    private $storage = [];

    /**
     * Model constructor.
     *
     * @param array $modelData
     */
    public function __construct(array $modelData)
    {
        foreach ($modelData as $property => $value) {
            if (is_array($value)) {
                $value = new self($value);
            }
            $this->$property = $value;
        }
    }

    /**
     * @param string $property
     *
     * @return mixed|null
     */
    public function __get(string $property)
    {
        return $this->storage[$property] ?? null;
    }

    /**
     * @param string $property
     * @param        $value
     */
    public function __set(string $property, $value)
    {
        $this->storage[$property] = $value;
    }

    /**
     * @param $property
     *
     * @return bool
     */
    public function __isset($property)
    {
        return isset($this->storage[$property]);
    }

    /**
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed|null
     * @throws \Exception
     */
    public function __call(string $method, array $arguments = [])
    {
        $result = null;

        $methodType = substr($method, 0, 3);
        $property = substr($method, 3);
        switch ($methodType) {
            case self::METHOD_PREFIX_GET:
                return $this->storage[$property] ?? null;

            case self::METHOD_PREFIX_SET:
                if (!$arguments) {
                    throw new \Exception('No argument passed');
                }
                return $this->storage[$property] = $arguments[0];

            default:
                throw new \Exception("Undefined method $method");
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $result = [];
        foreach ($this->storage as $key => $element) {
            if ($element instanceof self) {
                $result[$key] = $element->toArray();
                continue;
            }
            $result[$key] = $element;
        }
        return $result;
    }
}
