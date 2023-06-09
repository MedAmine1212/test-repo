<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
  'session' => NULL,
  'question' => NULL,
  'answer' => NULL,
  'vote' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'session' => NULL,
  'question' => NULL,
  'answer' => NULL,
  'vote' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->session, $this->question, $this->answer, $this->vote);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'bio', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'avatarPath', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'age', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'score', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'warnings', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'result', 'session', 'question', 'answer', 'vote'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'bio', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'avatarPath', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'age', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'score', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'warnings', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'result'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->session, $this->question, $this->answer, $this->vote);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBio(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBio', []);

        return parent::getBio();
    }

    /**
     * {@inheritDoc}
     */
    public function setBio(?string $bio): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBio', [$bio]);

        return parent::setBio($bio);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatarPath(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatarPath', []);

        return parent::getAvatarPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatarPath(?string $avatarPath): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatarPath', [$avatarPath]);

        return parent::setAvatarPath($avatarPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getAge(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', []);

        return parent::getAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setAge(int $age): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAge', [$age]);

        return parent::setAge($age);
    }

    /**
     * {@inheritDoc}
     */
    public function getScore(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', []);

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore(int $score): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', [$score]);

        return parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarnings(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarnings', []);

        return parent::getWarnings();
    }

    /**
     * {@inheritDoc}
     */
    public function setWarnings(?int $warnings): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarnings', [$warnings]);

        return parent::setWarnings($warnings);
    }

    /**
     * {@inheritDoc}
     */
    public function getSessions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessions', []);

        return parent::getSessions();
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', []);

        return parent::getAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function getVote(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVote', []);

        return parent::getVote();
    }

    /**
     * {@inheritDoc}
     */
    public function getSession(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSession', []);

        return parent::getSession();
    }

    /**
     * {@inheritDoc}
     */
    public function addSession(\App\Entity\Sessions $session): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSession', [$session]);

        return parent::addSession($session);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSession(\App\Entity\Sessions $session): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSession', [$session]);

        return parent::removeSession($session);
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestion(\App\Entity\Questions $question): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuestion', [$question]);

        return parent::addQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestion(\App\Entity\Questions $question): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuestion', [$question]);

        return parent::removeQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function addAnswer(\App\Entity\Answers $answer): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnswer', [$answer]);

        return parent::addAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnswer(\App\Entity\Answers $answer): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnswer', [$answer]);

        return parent::removeAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function addVote(\App\Entity\Votes $vote): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVote', [$vote]);

        return parent::addVote($vote);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVote(\App\Entity\Votes $vote): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVote', [$vote]);

        return parent::removeVote($vote);
    }

}
