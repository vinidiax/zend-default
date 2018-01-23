<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/01/2018
 * Time: 09:01
 */

namespace SiteTest\Controller;


class RegisterControllerTest extends \PHPUnit\Framework\TestCase
{
    private $user;

    public function setUp(User $user)
    {
        $this->user = $user;
    }

    /**
     * @dataProvider collectionData
     */
    public function testRegisterAction()
    {
        $this->assertEquals('a', 'a');
    }

    public function collectionData()
    {
        return [
                ['user_name' => 'Teste'],
                ['user_email' => 'vini@vini.com']
        ];
    }

}