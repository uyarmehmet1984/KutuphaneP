<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'ad' => [parent::class, 'ad', null],
        "\0".parent::class."\0".'address' => [parent::class, 'address', null],
        "\0".parent::class."\0".'borrowedbooks' => [parent::class, 'borrowedbooks', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'plainPassword' => [parent::class, 'plainPassword', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'soyad' => [parent::class, 'soyad', null],
        "\0".parent::class."\0".'telefon' => [parent::class, 'telefon', null],
        'ad' => [parent::class, 'ad', null],
        'address' => [parent::class, 'address', null],
        'borrowedbooks' => [parent::class, 'borrowedbooks', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'password' => [parent::class, 'password', null],
        'plainPassword' => [parent::class, 'plainPassword', null],
        'roles' => [parent::class, 'roles', null],
        'soyad' => [parent::class, 'soyad', null],
        'telefon' => [parent::class, 'telefon', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}