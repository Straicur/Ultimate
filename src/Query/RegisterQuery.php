<?php

namespace App\Query;

use Symfony\Component\Validator\Constraints as Assert;

class RegisterQuery
{
    #[Assert\NotNull(message: "Email is null")]
    #[Assert\NotBlank(message: "Email is empty")]
    #[Assert\Email(message: "It's not an email")]
    private string $email;

    #[Assert\NotNull(message: "Firstname is null")]
    #[Assert\NotBlank(message: "Firstname is empty")]
    #[Assert\Type(type: "string")]
    private string $firstname;

    #[Assert\NotNull(message: "Lastname is null")]
    #[Assert\NotBlank(message: "Lastname is empty")]
    #[Assert\Type(type: "string")]
    private string $lastname;

    #[Assert\NotNull(message: "Password is null")]
    #[Assert\NotBlank(message: "Password is empty")]
    #[Assert\Type(type: "string")]
    private string $password;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

}