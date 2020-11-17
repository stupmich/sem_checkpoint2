<?php

declare(strict_types=1);
namespace App\Models;
use App\Core\Model;


class Account extends Model
{
    protected $id;
    protected ?string $username;
    protected ?string $password;
    protected ?string $email;
    protected ?string $faction;
    protected ?string $realm;
    protected ?string $about;


    public function __construct(?string $username = null, ?string $password = null, ?string $email = null, ?string $faction = null, ?string $realm = null, ?string $about = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->faction = $faction;
        $this->realm = $realm;
        $this->about = $about;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @param string|null $about
     */
    public function setAbout(?string $about): void
    {
        $this->about = $about;
    }



    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
    public function getFaction(): ?string
    {
        return $this->faction;
    }
    /**
     * @param string|null $faction
     */
    public function setFaction(?string $faction): void
    {
        $this->faction = $faction;
    }
    /**
     * @return string|null
     */
    public function getRealm(): ?string
    {
        return $this->realm;
    }
    /**
     * @param string|null $realm
     */
    public function setRealm(?string $realm): void
    {
        $this->realm = $realm;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }




    static public function setDbColumns()
    {
        return ['id', 'username', 'password','email', 'faction', 'realm', 'about'];
    }

    static public function setTableName()
    {
        return 'accounts';
    }
}