<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 21/08/17
 * Time: 16:41
 */

namespace App\Repository;

use App\Entities\Login;
use Doctrine\ORM\EntityRepository;
/**
 * Class LoginRepository
 * @package App\Repository
 */
class LoginRepository extends EntityRepository
{
    /**
     * @param Login $login
     */
    public function save(Login $login)
    {
        $this->_em->persist($login);
        $this->_em->flush($login);
    }
}