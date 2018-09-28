<?php

namespace Chetkov\CloudPayments\Model;

/**
 * Class Model
 * @package Chetkov\CloudPayments\Model
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
    public function __set(string $property, $value): void
    {
        $this->storage[$property] = $value;
    }

    /**
     * @param $property
     *
     * @return bool
     */
    public function __isset($property): bool
    {
        return isset($this->storage[$property]);
    }

    /**
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed|null
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
                    throw new \RuntimeException('No argument passed');
                }
                return $this->storage[$property] = $arguments[0];

            default:
                throw new \RuntimeException("Undefined method $method");
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

    /**
     * @return mixed
     */
    public function getFirst()
    {
        $values = array_values($this->storage);
        return $values[0] ?? null;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        $values = array_values($this->storage);
        return $values[count($values) - 1] ?? null;
    }

    /**
     * @param int $number
     *
     * @return mixed
     */
    public function getElement(int $number)
    {
        $values = array_values($this->storage);
        return $values[$number] ?? null;
    }
}
