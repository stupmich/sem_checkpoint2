<?php


use App\Core\Model;

class Account extends Model
{
    protected $id;
    protected ?string $login;
    protected ?string $password;

    public function __construct(?string $login = null, ?string $password = null)
    {
        $this->login = $login;
        $this->password = $password;
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
    public function getLogin(): ?string
    {
        return $this->login;
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
     * @param string|null $login
     */
    public function setLogin(?string $login): void
    {
        $this->login = $login;
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
        return ['id', 'login', 'password'];
    }

    static public function setTableName()
    {
        return 'accounts';
    }
}